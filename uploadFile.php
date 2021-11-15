 <?php
    include 'db.php';

    $driver = new mysqli_driver();
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
    if (isset($_POST['send'])) {

        $subCode = $_POST['subCode'];
        $subject = $_POST['sub'];
        $chapter = $_POST['chapter'];
        $date = date('Y/m/d');
        $status = "";

        if (!empty($_FILES['fileToUpload']['name'])) { //stores the original filename from client side
            //file upload path
            $targetDir = 'uploadedNotes/';
            $fileName = basename($_FILES['fileToUpload']['name']);
            echo $fileName;
            // $getExtension= explode('.',$fileName);
            // $extension= end($getExtension);

            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            //allow certain file formats

            $allowTypes = array('pdf', 'csv', 'doc', 'docx');



            if (in_array($fileType, $allowTypes)) {
                //upload files
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
                    $status = "The file " . $fileName . " has been uploaded.";
                } else {
                    $status = "Sorry, there was an error uploading your file.";
                }
            } else {
                $status = 'Sorry PDF files are allowed to upload.';
            }
        }
        echo $status;
        $sql = "INSERT INTO  subject_uploads (subCode,subject,chapter,date,filePath) VALUES ('$subCode', '$subject' ,'$chapter', '$date', '$targetFilePath')";
        $query = mysqli_query($db, $sql);
    }

    header('location:home.php')



    ?>