<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/midterm/resource/php/function/borrow.php';
$borrow = new borrow;
$borrow->borrowBook();
$borrow->returnBook();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resource/css/style.css">
  </head>
  <body>
<<<<<<< HEAD:sample.php
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/midterm/resource/php/function/view.php';
    $view = new view;
    if(isset($_GET['submit'])){
    $view->viewAllCriteria();
  }else{
    $view->viewAllData();
  }
    ?>
  </body>
  </html>
=======
    <header>
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          <a class="navbar-brand" href="register.php"><IMG SRC="resource/img/logo1.png" ALT="Logo" WIDTH=210 HEIGHT=80></a>
        </div>
      </nav>
    </header><section class="container-fluid">
      <section class="row justify-content-center mt-5">
        <section class="col-12 col-sm-6 col-md-3">
          <div class="card mt-5">
            <div class="card-header">Home</div>
            <div class="card-body">
              <li type="button"><a class="btn btn-primary btn-lg btn-block my-3" style="background-color: #2c296e;" href="login.php">Sign In</a></li>
              <li type="button"><a class="btn btn-lg btn-block my-3 text-white" style="background-color: #ff0000;" href="register.php">Sign Up</a></li>
            </div>
          </div>
        </section>
      </section>
    </section>

</body>
</html>
>>>>>>> 3e4d649860b4cec89f41591659d67e95e9822008:index.php
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
