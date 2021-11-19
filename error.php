<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Not Found</title>
  <link rel="stylesheet" href="./css/error.css">
</head>

<body>
  <!-- purple x moss 2020 -->

  <head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="mainbox">
      <div class="err">4</div>
      <i class="far fa-question-circle fa-spin"></i>
      <div class="err2">4</div>
      <div class="msg">Maybe this page moved? Got deleted? Is hiding out in quarantine? Never existed in the first place?<p>Let's go
          <?php
          if (!isset($_SESSION["loggedIn"])) {
          ?>
            <a href="./dashboard.php">Home</a>

          <?php
          } else { ?>
            <a href="./home.php">Home</a>

          <?php
          } ?>
          and try from there.
        </p>

      </div>
    </div>
  </body>

</html>