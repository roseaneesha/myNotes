<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/about.css" />
</head>

<body>
  <header>
    <nav>
      <ul>
        <li>

          <?php
          error_reporting(E_ERROR | E_PARSE);
          if ($_SESSION['loggedIn']) {


            echo '<a href="./dashboard.php"><i style="width: 50px" class="fas fa-arrow-alt-circle-left"></i></a>';
          } else {
            echo '<a href="./home.php"><i style="width: 50px" class="fas fa-arrow-alt-circle-left"></i></a>';
          }
          ?>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container text-center">
    <h1>About Us</h1>
    <p>
      Are you tired of all your notes being all over the place? <br />
      Do you wish that you could access all your notes with just one click?
      <br />
      <b> Well you're at the right place!</b> <br />
      We've created MyNotes, an online resource sharing platform where you can
      not only access notes, but also help your community out by uploading
      them too!
      <br />
      Here at MyNotes, as the name suggests, the notes are all yours and
      they're just a click away! (We know! Sounds pretty convenient right?)
    </p>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>