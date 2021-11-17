<?php
session_start();
unset($_SESSION['session_id']);
session_destroy();
header("location:loginForm.php");
