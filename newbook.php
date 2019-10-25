<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/midterm/resource/php/function/addbook.php';
if (isset($_POST['bookname'])) {
  $addbook = new addbook($_POST['bookname'],$_POST['author'],$_POST['date'],$_POST['stock']);
  $addbook->addbook();
  header("Location: admin_homepage.php");
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
    <header>
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          <a class="navbar-brand" href="register.php"><IMG SRC="resource/img/logo1.png" ALT="Logo" WIDTH=210 HEIGHT=80></a>
            <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto navbar-light">
                  <form action="" method="POST" class="form-inline my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-danger mr-3 mt-sm-3" href="admin_homepage.php">Go back</a></li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <section class="container-fluid">
      <section class="row justify-content-center mt-5">
        <section class="col-12 col-sm-6 col-md-3">
          <div class="card">
            <div class="card-header">Add new book</div>
            <div class="card-body">
              <form class="form-container" action="" method="POST">
        				<div class="form-row">
        					<div class="form-group col-md-12">
                    <label for="bookname">Name of Book</label>
                    <input type="text" name="bookname" id="bookname" class="form-control" autocomplete="off" required/>
                  </div>
        					<div class="form-group col-md-12">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control bg-light text-dark" autocomplete="off" required/>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="date">Date of Published</label>
                    <input type="date" name="date" id="date" class="form-control bg-light text-dark" autocomplete="off" required/>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="stock">Stock</label>
                    <input type="stock" name="stock" id="stock" class="form-control bg-light text-dark" autocomplete="off" required/>
                  </div>
        				</div>
        				<div class="form-group">
        					<input type="submit" value="Add book" class="btn btn-primary btn-block" style="background-color: #2c296e;" name="addbook"/>
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
