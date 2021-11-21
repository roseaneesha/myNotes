<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
$driver = new mysqli_driver();
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
if (isset($_POST['login'])) {
    if (!empty($_POST['rollNo']) && !empty($_POST['password'])) {
        $regNum = mysqli_real_escape_string($db, $_POST['rollNo']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $findUser = "SELECT * FROM users WHERE regNumber='$regNum'";

        $sqlQuery = mysqli_query($db, $findUser);
        $result = mysqli_fetch_assoc($sqlQuery);
        $dbPassword = $result['password'];

        $verify = password_verify($password, $dbPassword);


        if ($verify) {
            session_start();
            $_SESSION['session_id'] = $regNum;
            $_SESSION['loggedIn'] = true;

            // echo 'found u';
            header("location: dashboard.php");
        } else {
          
            echo '<script type="text/javascript">';
            echo ' alert("Invalid credentials")';  //not showing an alert box.
            echo '</script>';
        
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>


<body>

    <section class="row mx-0 min-vh-100">

        <div class="decor col-md-6 col-lg-7 d-none d-md-block position-relative">

        </div>
        <div class="col-md-6 col-lg-5 d-flex align-items-center px-md-4 px-lg-5">
            <div class="w-100">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="circle rounded-circle p-1 shadow-sm" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:2rem; height:2rem">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Welcome Back
                </h4>
                <div class="border-bottom border-2 border-dark mb-4" style="width:13rem;"></div>
                <form action="loginForm.php" method="post">
                    <div class="mb-3">
                        <input type="text" name='rollNo' class="form-control" id="rollNo" aria-describedby="rollNo" required placeholder="Registration Number">

                    </div>
                    <div class="mb-3">
                        <input type="password" name='password' class="form-control" id="password" aria-describedby="password" required placeholder="Password">

                    </div>

                    <button type="submit" name="login" class="btn btn-outline-secondary circle w-100 btn-large shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.2rem; height:1.2rem">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Login
                    </button>
                </form>
                <div class="d-flex justify-content-between mb-3 small">
                    <p>Don't have an account?
                        <a class="text-decoration-none" href="./registrationForm.php"><small> Sign Up</small></a>

                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>