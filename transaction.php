<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/midterm/resource/php/function/user_transaction.php';
session_start();
if(!empty($_GET['id'])){
  $_SESSION['id'] = $_GET['id'];
}
if(isset($_GET['borrow'])){
$user_transaction = new user_transaction($_SESSION['id'],$_SESSION['bookName'],$_SESSION['author'],$_SESSION['datePublished']);
$user_transaction->user_transaction();
header("Location: user_homepage.php");
}
$user_transaction = new user_transaction;
$user_transaction->user_transactionShow();
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
    <header>
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container justify-content-center">
          <a class="navbar-brand" href="register.php"><IMG SRC="resource/img/logo1.png" ALT="Logo" WIDTH=210 HEIGHT=80></a>
            </div>
          </nav>
    </header>
    <section class="container-fluid">
      <section class="row justify-content-center mt-5">
        <section class="col-12 col-sm-6 col-md-3">
          <div class="card">
            <div class="card-header">Transaction</div>
            <div class="card-body">
              <form class="form-container" action="" method="GET">
        				<div class="form-row">
                  <div class="form-group col-md-12 text-center">
                    <h4><?php
                    if (isset($user_transaction->bookName)) {
                      echo $user_transaction->bookName;
                   }
                    ?>
                  </h4>
                  </div>
                  <div class="form-group col-md-12 text-center">
                    <h4><?php
                    if (isset($user_transaction->author)) {
                      echo $user_transaction->author;
                   }
                    ?>
                  </h4>
                  </div>
                    <div class="form-group col-md-12 text-center">
                    <h4 for=""><?php
                    if (isset($user_transaction->datePublished)) {
                      echo $user_transaction->datePublished;
                   }
                    ?>
                  </h4>
                  </div>
                  <div class="form-group col-md-12 text-center">
                    <button type="submit" name="borrow" class="btn btn-success">Borrow</button>
                  </div>
        			</form>
            </div>
          </div>
        </section>
      </section>
    </section>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  </html>
