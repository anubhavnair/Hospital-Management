<?php 

include 'common/connect.php';

if (isset($_POST['submit'])) {
  # code...
  $name = $_POST['name'];
  $is_date = date('Y-m-d');
  $is_time = strtotime('now');
  $contact = $_POST['num'];
  $sub = $_POST['sub'];
  $email = $_POST['email'];
  $msg = $_POST['msg']; 

  $exe = $obj->query("insert into contact(name,email,subject,msg,contact,is_time,is_date)values(
          '$name','$email','$sub','$msg','$contact','$is_time','$is_date')");

  if ($exe) {
        # code...
        echo "<script>alert('Details Sended successfully');window.location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('error');</script>";
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
  <title>Contact</title>
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
                Contact Us   </h2>
                              <p class="inner-page-para mt-2">
                                Prevent the Spread
                                Stay at Home, Stay Safe             </p>
          </div>
          <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
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
      <h3 class="title-w3l mb-lg-4">Contact with our support <br>
        during emergency!</h3>

    </div>
    <div class="contact-grids d-grid mt-5 mx-lg-5">
      <div class="contact-left">
        <div class="cont-details">
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-map-marked-alt"></span>
            </div>
            <div class="cont-right">
              <h6>Our head office address:</h6>
              <p>Lorem ipsum Agency, 343 marketing, #4148 Honey street, NY - 62617.</p>
            </div>
          </div>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-blender-phone"></span>
            </div>
            <div class="cont-right">
              <h6>Call for help :</h6>
              <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
              <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
            </div>
          </div>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fas fa-envelope-open-text"></span>
            </div>
            <div class="cont-right">
              <h6>
                Mail us:</h6>
              <p><a href="mailto:support@mail.com" class="mail">support@mail.com</a></p>
              <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-right">
        <form  method="post" class="signin-form">
          <div class="input-grids">
            <input type="text" name="name" id="name" placeholder="Your Name*" class="contact-input"
              required="" />
            <input type="email" name="email" id="email" placeholder="Your Email*" class="contact-input"
              required="" />
            <input type="text" name="sub" id="sub" placeholder="Your Subject*" class="contact-input"
              required="" />
              <input type="text" name="num" id="num" placeholder="Your Contact*" class="contact-input"
              required="" />
          </div>
          <div class="form-input">
            <textarea name="msg" placeholder="Type your message here*" required=""></textarea>
          </div>
          <div class="submit-w3l-button text-lg-right">
              <button class="btn btn-style btn-primary" name="submit">Send Message</button>
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