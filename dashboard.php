<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
session_start();
if (!isset($_SESSION['session_id']) && !isset($_SESSION['loggedIn'])) {
    header('location:loginForm.php');
}
$user = $_SESSION['session_id'];
$query = "SELECT * from subject_uploads WHERE userRollNumber='$user' ";
$results = mysqli_query($db, $query);
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNotes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="nav">
        <?php
        if ($_SESSION['loggedIn'] != true) { ?>
            <a href="./loginForm.php">Log In</a>
            <a href="./registrationForm.php">Register</a>
        <?php } else { ?>
            <a href="./upload.php">Upload File</a>
            <a href="logout.php">Logout</a>
        <?php } ?>
        <a href="#">About Us</a>
    </div>

    <div>
        <h2>Welcome, <?= $_SESSION['session_id']; ?>!

        </h2>
    </div>
    <h2>
        <?=
        // date_default_timezone_set("Asia/Kolkata");
        date('h:i a');

        ?>
    </h2>
    <h4>
        <?=
        date('d/m/Y');

        ?>
    </h4>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Subject</th>
                <th scope="col">Chapter</th>
                <th scope="col">View File</th>
                <th scope="col"></th>






            </tr>
        </thead>
        <tbody>
            <tr>
                <?php


                while ($row = mysqli_fetch_assoc($results)) :
                    // var_dump($row); //displays details about the variable
                ?>


                    <th scope="row"><?= $row["date"] ?></th>
                    <th scope="row"><?= $row["subCode"] ?></th>
                    <th scope="row"><?= $row["subject"] ?></th>
                    <th scope="row"><?= $row["chapter"] ?></th>
                    <th scope="row">
                        <a target="_blank" href="./<?= $row["filePath"] ?>">
                            <i class="fas fa-book-open"></i>

                        </a>
                    </th>
                    <!-- Delete the file -->
                    <th scope="row">
                        <i class="fas fa-trash" style="user-select: auto;"></i>
                    </th>






            </tr>


        <?php endwhile; ?>


        </tbody>
    </table>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>