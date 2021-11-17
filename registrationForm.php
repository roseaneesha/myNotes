<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
$driver = new mysqli_driver();
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
if (isset($_POST['register'])) {
    if (!empty($_POST['rollNo']) && !empty($_POST['password'])) {
        $regNum = mysqli_real_escape_string($db, strtolower($_POST['rollNo']));
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['passwordConfirm']);
        $query = "SELECT regNumber FROM users WHERE regNumber='$regNum' ";
        $sqlQuery = mysqli_query($db, $query);
        if (mysqli_num_rows($sqlQuery) != 0) {
            echo 'user exists';
            // exit('user exits');
        } else {
            try {
                if ($password != $password2) {
                    echo 'incorrect password';
                }
                $hash = password_hash($password, PASSWORD_BCRYPT);

                $insertionQuery = "INSERT INTO users (regNumber,password) VALUES ('$regNum','$hash')";
                $insertQuery = mysqli_query($db, $insertionQuery);
                if ($insertQuery) {
                    echo "Successful Action";
                } else {
                    echo 'failure';
                }
            } catch (mysqli_sql_exception $e) {
                echo $e;
            }
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class='container'>
        <form method="post" action="">
            <div class="form-group">
                <label for="rollNo">Registration Number</label>
                <input type="text" name='rollNo' class="form-control" id="rollNo" aria-describedby="rollNo" placeholder="Register Number">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control" id="password" aria-describedby="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="passwordConfirm">Confirm Password</label>
                <input type="password" name='passwordConfirm' class="form-control" id="passwordConfirm" aria-describedby="Confirm password" placeholder="Retype the Password">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>