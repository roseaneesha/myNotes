<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
session_start();
if (!isset($_SESSION['session_id']) && !isset($_SESSION['loggedIn'])) {
    header('location:loginForm.php');
}
$user = $_SESSION['session_id'];
// echo $user;
$query = "SELECT * from subject_uploads WHERE regNumber='$user' ";

$results = mysqli_query($db, $query);
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNotes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <?php


                if ($_SESSION['loggedIn'] != true) { ?>
                    <li>
                        <a href="./loginForm.php">Log In</a>
                    </li>
                    <li>
                        <a href="./registrationForm.php">Register</a>
                    </li>
                <?php } else { ?>
                    <li>

                        <a href="./upload.php">Upload File</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="#">About Us</a>
                </li>
            </ul>
        </nav>
    </header>



    <main>

        <div>
            <h2>Welcome, <?= $_SESSION['session_id']; ?>!

            </h2>
        </div>
        <h2>

            <?php
            $dt = date_default_timezone_set("Asia/Kolkata");
            echo date('h:i A');
            ?>

        </h2>
        <h4>
            <?=
            date('M j, Y');

            ?>
        </h4>


        <div class="table-responsive">
            <table class="table table-hover">

                <thead>

                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Chapter</th>
                        <th scope="col">View File</th>
                        <th scope="col">Delete</th>
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
                                    <i class="fas icon fa-book-open" style="color:#7047EB;"></i>

                                </a>
                            </th>
                            <th scope="row">

                                <i class="fas fa-trash" style="color:#7047EB;"></i> </a>

                            </th>




                    </tr>


                <?php endwhile; ?>


                </tbody>
            </table>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>