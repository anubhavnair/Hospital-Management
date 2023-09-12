<?php

session_start();
include 'common/connect.php';

if (!isset($_SESSION['user_id'])) {
  header('location:home.php');
}

$id = $_GET['a_id'];
$user_id = $_SESSION['user_id'];

$api = "rzp_test_pXtLNzDfIlN645";
$profile_data = $obj->query("select * from user where u_id='$user_id'");
$profile = $profile_data->fetch_object();



?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>payment</title>
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
              Pay </h2>
            <p class="inner-page-para mt-2">
              Prevent the Spread
              Stay at Home, Stay Safe </p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Pay now</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hero-overlay"></div>
    </div>
  </section>
  <!--//breadcrumb--><br><br>
  <!-- contact-form 2 -->
  <html>
  <center>
    <form action="http://localhost/demo/user/success.php" method="post">
      <button id="rzp-button1" class="btn btn-outline-dark btn-lg"><i class="fas fa-money-bill"></i>Pay now</button>
  </center><br> <br>

  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    var options = {
      "key": "<?php echo $api; ?>", // Enter the Key ID generated from the Dashboard
      "amount": "50000",
      "currency": "INR",
      "description": "SH -hospital",
      "image": "https://thumbs.dreamstime.com/b/hospital-logo-template-hospital-logo-template-117487677.jpg",
      "profill":
      {
        "email": "<?php $profile->email; ?>",
        "contact": "<?php $profile->contact; ?>",
      },
      config: {
        display: {
          blocks: {
            utib: { //name for Axis block
              name: "Pay using Axis Bank",
              instruments: [
                {
                  method: "card",
                  issuers: ["UTIB"]
                },
                {
                  method: "netbanking",
                  banks: ["UTIB"]
                },
              ]
            },
            other: { //  name for other block
              name: "Other Payment modes",
              instruments: [
                {
                  method: "card",
                  issuers: ["ICIC"]
                },
                {
                  method: 'netbanking',
                }, {
                  method: 'upi',
                }
              ]
            }
          },
          hide: [
            {
              method: "upi"
            }
          ],
          sequence: ["block.utib", "block.other"],
          preferences: {
            show_default_blocks: false // Should Checkout show its default blocks?
          }
        }
      },
      "handler": function (response) {
        //alert(response.razorpay_payment_id);
        alert('payment successfully'); window.location = 'success.php?a_id=<?php echo $id; ?>';
      },
      "modal": {
        "ondismiss": function () {
          if (confirm("Are you sure, you want to close the form?")) {
            txt = "You pressed OK!";
            console.log("Checkout form closed by the user");
          } else {
            txt = "You pressed Cancel!";
            console.log("Complete the Payment")
          }
        }
      }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function (e) {
      rzp1.open();
      e.preventDefault();
    }
  </script>
  </form>

  </html>
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