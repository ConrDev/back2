<?php

require_once 'backend/config/config.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) > 0 && strlen($password) > 0) {
  $password = md5($password);
  $query = "SELECT * FROM `back2_users` WHERE `username`='$username' AND `password`='$password'";

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) == 1) {
    session_start();

    $_SESSION['username'] = $username;

    header('location: ./pages/home.php');
  } else {
    header('location: index.php');
    exit;
  }
} else {
  echo("Niet alle velden zijn ingevuld!");
  exit;
}

?>