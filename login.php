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
    <header>
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          <a class="navbar-brand" href="register.php"><IMG SRC="resource/img/logo1.png" ALT="Logo" WIDTH=210 HEIGHT=80></a>
            <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto navbar-light">
                  <form action="" method="GET" class="form-inline my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-dark mr-3 mt-sm-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark mr-3 mt-sm-3" href="register.php">Sign Up</a></li>
                  </form>
                </ul>
              </div>
            </div>
          </nav>
    </header>


    <section class="container-fluid">
      <section class="row justify-content-center mt-5">
        <section class="col-12 col-sm-6 col-md-3">
          <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form class="form-container" action="" method="post">
        				<div class="form-row">
        					<div class="form-group col-md-12">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" required/>
                  </div>
        					<div class="form-group col-md-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control bg-light text-dark" autocomplete="off" required/>
                  </div>
        					<div class="field">
        						<label for="remember">
        							<input type="checkbox" name="remember" id="remember" />
        							Remember me
        						</label>
        					</div>
        				</div>
        				<div class="form-group">
        					<input type="submit" value="Sign In" class="btn btn-primary btn-block" style="background-color: #2c296e;"/>
        				</div>
        			</form>
            </div>
          </div>
        </section>
      </section>
    </section>


</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
