<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
$query = 'SELECT * from subject_uploads';
$results = mysqli_query($db, $query);


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNotes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="nav">
        <a href="#">About Us</a>
        <a href="#">Log In</a>
        <a href="#">Register</a>
    </div>
     -->
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
    <a href="./upload.php">Upload form</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Subject</th>
                <th scope="col">Chapter</th>
                <th scope="col">Link</th>
                <th scope="col">BookMark</th>

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
                            <?= $row["filePath"] ?>
                        </a>
                    </th>
                    <th scope="row">⭐</th>




            </tr>


        <?php endwhile; ?>


        </tbody>
    </table>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>