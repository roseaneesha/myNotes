 <!DOCTYPE html>
 <html lang="en">
 <?php
    include 'db.php';
    session_start();
    if (!isset($_SESSION['session_id']) && !isset($_SESSION['loggedIn'])) {
        header('location:loginForm.php');
    }

    // $driver = new mysqli_driver();
    // mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

    if (isset($_POST['update'])) {

        $subCode = $_POST['subCode'];
        $subject = $_POST['sub'];
        $chapter = $_POST['chapter'];
        $dt = date_default_timezone_set("Asia/Kolkata");
        $date =  date('M j, Y | h:i a');
        $user = $_SESSION['session_id'];
        $id = $_POST['idOfFile'];


        if (!empty($subCode) && !empty($subject) && !empty($chapter)) {
            $sql = "UPDATE  subject_uploads SET subCode= '$subCode',subject='$subject',chapter='$chapter',uploadedDate='$date' WHERE id='$id'";
            echo 'crossed';
            if (mysqli_query($db, $sql)) {


                header("location:updateForm.php");
            }
            if ($_SESSION['loggedIn']) {
                header('location:dashboard.php');
            } else {
                header('location:home.php');
            }
        } else {

            echo '<script type="text/javascript">';
            echo ' alert("Enter all fields")';  //not showing an alert box.
            echo '</script>';
        }
    }




    ?>

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Docs</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/uploadForm.css">


 </head>

 <body>
     <div class="container">

         <header>
             <nav>
                 <ul>
                     <li>
                         <a href="./dashboard.php">Dashboard</a>
                     </li>
                     <li>
                         <a href="./logout.php">Log out</a>
                     </li>

                 </ul>
             </nav>
         </header>

         <div class="cover">
             <!-- <h1>Let's help each other.</h1> -->
             <form class="flex-form" method="post" action="updateForm.php" enctype="multipart/form-data">
                 <div class="form-group">
                     <label for="subCode">Subject Code</label>
                     <input autocomplete="off" required type="text" name='subCode' class="form-control" id="subCode" aria-describedby="subjectCode" placeholder="Enter Subject Code">
                 </div>
                 <div class="form-group">
                     <label for="sub">Subject</label>
                     <input autocomplete="off" required type="text" name='sub' class="form-control" id="sub" aria-describedby="subject" placeholder="Enter Subject Name">
                 </div>
                 <div class="form-group">
                     <label for="chapName">Chapter</label>
                     <input autocomplete="off" required type="text" name='chapter' class="form-control" id="chapName" aria-describedby="chapterName" placeholder="Enter Chapter Name">
                 </div>
                 <input type="hidden" name="idOfFile" value="<?= $_GET['id']; ?>">



                 <button type="submit" name="update" class="btn btn-outline-light">Update</button>
             </form>

         </div>

     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>

 </html>