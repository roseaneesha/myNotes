 <?php
    include 'db.php';
    session_start();
    if (!isset($_SESSION['session_id']) && !isset($_SESSION['loggedIn'])) {
        header('location:loginForm.php');
    }

    $driver = new mysqli_driver();
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

    if (isset($_POST['send'])) {

        $subCode = $_POST['subCode'];
        $subject = $_POST['sub'];
        $chapter = $_POST['chapter'];
        $branch = $_POST['branch'];
        $date =  date('M j, Y');
        $user = $_SESSION['session_id'];

        $status = "";
        if (!empty($subCode) && !empty($subject) && !empty($chapter)) {
            if (!empty($_FILES['fileToUpload']['name'])) { //stores the original filename from client side
                //file upload path
                $targetDir = 'uploadedNotes/';
                $fileName = basename($_FILES['fileToUpload']['name']);

                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                //allow certain file formats

                $allowTypes = array('pdf', 'jpg', 'jpeg', 'csv', 'doc', 'docx');



                if (in_array($fileType, $allowTypes)) {
                    //upload files
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
                        $status = "The file " . $fileName . " has been uploaded.";
                    } else {

                        echo '<script type="text/javascript">';
                        echo ' alert("Error while uploading file")';  //not showing an alert box.
                        echo '</script>';
                    }
                } else {
                    echo '<script type="text/javascript">';
                    echo ' alert("Check the file type")';  //not showing an alert box.
                    echo '</script>';
                }
            } else {

                echo '<script type="text/javascript">';
                echo ' alert("Enter all fields")';  //not showing an alert box.
                echo '</script>';
            }
        }


        echo $status;
        $sql = "INSERT INTO  subject_uploads (subCode,subject,chapter,uploadedDate,filePath,regNumber,branchName) VALUES ('$subCode', '$subject' ,'$chapter', '$date', '$targetFilePath','$user','$branch')";
        $query = mysqli_query($db, $sql);
    }
    if ($_SESSION['loggedIn']) {
        header('location:dashboard.php');
    } else {
        header('location:home.php');
    }



    ?>