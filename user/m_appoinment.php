<?php
session_start();
include 'common/connect.php';

$id = $_SESSION['user_id'];
$result = $obj->query("select * from appoinment where u_id = '$id'");
//$row = $result->fetch_object();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My appoinment</title>
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
              My appoinment </h2>
            <p class="inner-page-para mt-2">
              Prevent the Spread
              Stay at Home, Stay Safe </p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> My appoinment</li>
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
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">

          <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Your Appoinments</h3>
          </div>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Appoinment ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Booked Date</th>
                <th scope="col">Complete Payment Process</th>
              </tr>
            </thead>
            <?php
            while ($row = $result->fetch_object()) {

              ?>
              <tbody>
                <td>
                  <?php echo $row->b_id; ?>
                </td>
                <td>
                  <?php echo $row->name; ?>
                </td>
                <td>
                  <?php echo $row->msg; ?>
                </td>
                <td>
                  <?php echo $row->status; ?>
                </td>
                <td>
                  <?php echo $row->book_date; ?>
                </td>

                <?php if ($row->status == 'accepted' && $row->payment_status == 'pending') { ?>
                  <td><a href="payment.php?a_id=<?php echo $row->b_id; ?>"><button class="btn btn-danger">Complete
                        payment</button></a></td>
                <?php } elseif ($row->status = 'accepted' && $row->payment_status == 'completed') { ?>
                  <td>Payment completed</td>
                <?php } elseif ($row->status == 'rejected') { ?>
                  <td>Your appoinment rejected by doctor</td>
                <?php } ?>

              </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
    </div>
    <!-- <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5832020013786!2d72.62799931496815!3d23.039070984944615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8691219fcc49%3A0x3b9e0bbd566d855d!2sBrainKlick%20Technologies!5e0!3m2!1sen!2sin!4v1672226949385!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->

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