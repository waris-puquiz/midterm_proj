<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/midterm/resource/php/function/login.php';
session_start();
if(isset($_POST['login'])){
  $login = new login($_POST['username'],$_POST['password']);
  $login->login();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resource/css/style2.css">
  </head>
  <body>
    <h2>para ma view</h2>
    <li class="nav-item"><a class="nav-link text-dark mr-3 mt-sm-3" href="login.php">Sign In</a></li>
    <li class="nav-item"><a class="nav-link text-dark mr-3 mt-sm-3" href="register.php">Sign Up</a></li>
  </body>
</html>
