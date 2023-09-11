<?php 
session_start();
include 'common/connect.php';


if (isset($_POST['submit'])) {
  # code...
 
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  //$spass = password_hash($pass, PASSWORD_DEFAULT);
  
  $result = $obj->query("select * from user where email='$email' and password='$pass' ");
  //print_r($result);die();
  $rowcount = $result->num_rows;

  if($rowcount == 1)
  {
    if(isset($_POST['rem']))
    {
      setcookie("email",$email,time()+3600*24*1);
      setcookie("password",$pass,time()+3600*24*1);
    }
    $row = $result->fetch_object();

    
    $_SESSION['user_id'] = $row->u_id;

    echo "<script>alert('Login successfully');window.location='index.php';</script>";
  }
  else
  {
    echo "<script>alert('invalid email or password');</script>";
  }
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
 <?php include 'common/header.php'; ?>
  <!--/header-->
<!-- breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
                    <h2 class="title AboutPageBanner">
                Login   </h2>
                              <p class="inner-page-para mt-2">
                                Prevent the Spread
                                Stay at Home, Stay Safe             </p>
          </div>
          <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> login</li>
                </ul>
          </div>
    </div>
      </div>
      <div class="hero-overlay"></div>
  </div>
</section>
<!--//breadcrumb-->
 <!-- contact-form 2 -->
  <section class="w3l-contact-2 py-5" id="contact">
  <div class="container py-lg-4 py-md-3 py-2">
    <div class="title-content text-center">
      <span class="title-subw3hny">Get in touch</span>
      <h3 class="title-w3l mb-lg-4">login our portal to book appoinment <br>
        during emergency!</h3>

    </div>
    <div class="contact-grids ">
     
      <div class="contact">
        <form  method="post" class="signin-form" enctype="multipart/form-data">
          <div class="input-grids">
             <input type="email" name="email" id="email" placeholder="Your Email*" class="contact-input"
              required="" value="<?php if(isset($_COOKIE['email']))echo $_COOKIE['email']?>"/>
               <input type="text" name="pass" id="pass" placeholder="Your password*" class="contact-input"
              required="" value="<?php if(isset($_COOKIE['pass']))echo $_COOKIE['pass']?>"/>

               <div class="form-group">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="rem" id="rem" class="custom-control-input"  >
                    <label for="rem" class="custom-control-label">Remember Me</label>
                  </div>
                </div>
          </div>
          <div class="submit-w3l-button text-lg-right">
              <button class="btn btn-style btn-primary" name="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
</section>
<!-- /contact-form-2 -->

  <!-- /contact1 -->
 <!--/footer-->
<?php include 'common/footer.php'; ?>
<!-- //footer -->
<!-- copyright -->

<!-- //copyright -->
<!--//footer-->
<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>