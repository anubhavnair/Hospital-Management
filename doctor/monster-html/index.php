<?php

session_start();
include 'common/connect.php';

if (isset($_POST['submit'])) {
  # code...
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $result = $obj->query("select * from doctor where email='$email' and password='$pass' ");

  $rowcount = $result->num_rows;

  if ($rowcount == 1) {
    if (isset($_POST['rem'])) {
      setcookie("email", $email, time() + 3600 * 24 * 1);
      setcookie("password", $pass, time() + 3600 * 24 * 1);
    }
    $row = $result->fetch_object();
    //print_r($row);die();

    $_SESSION['doctor_id'] = $row->d_id;

    echo "<script>alert('Login successfully');window.location='dashboard.php';</script>";
  } else {
    echo "<script>alert('invalid email or password');</script>";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Kodinger">

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Doctor Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>


<body class="my-login-page">
  <section class="h-150">
    <div class="container h-150">
      <div class="row justify-content-md-center h-150">
        <div class="card-wrapper">
          <div class="brand">
            <img src="img/logo.jpg" alt="logo">
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Login</h4>
              <form method="POST" class="my-login-validation" novalidate="">
                <div class="form-group">
                  <label for="email">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" value="<?php if (isset($_COOKIE['email']))
                    echo $_COOKIE['email'] ?>" required autofocus>

                    <div class="invalid-feedback">
                      Email is invalid
                    </div>
                  </div>

                  <div class="form-group">
                    <!-- <label for="password">Password
                    <a href="forgote_password.php" class="float-right">
                      Forgot Password?
                    </a>
                  </label>-->
                    <input id="password" type="password" class="form-control" name="passwor
 d                  " value="<?php if (isset($_COOKIE['password']))
                    echo $_COOKIE['password'] ?>" required data-eye>
                    <div class="invalid-feedback">
                      Password is required
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" name="rem" id="rem" class="custom-control-input">
                      <label for="rem" class="custom-control-label">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group m-0">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="footer">
              Copyright &copy; 2023 &mdash; SH Hospital
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <scri
pt src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/my-login.js"></script> -->
  </body>

  </html>