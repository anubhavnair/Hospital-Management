<?php 

include 'common/connect.php';

$result = $obj->query("select * from category where is_delete='0'");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['num'];
    $gender = $_POST['gender'];
    $d_type = $_POST['d_type'];
    $msg = $_POST['msg'];
    $status = 'pending';
    $r_date = date('Y-m-d');
    $pass = $_POST['password'];
    $filename = $_FILES['f']['name'];
    $filename_array = explode(".", $filename);
    $ext = strtolower(end($filename_array));

    $tmp = $_FILES['f']['tmp_name'];
    $path = "../admin/upload/$filename";
    


    $exe = $obj->query("insert into doctor(name,email,contact,status,password,about,file,image,is_delete,is_update,is_delete_time,is_update_time,gender,cat_id,r_date)values('$name','$email','$contact','$status','$pass','$msg','$filename','','','','','','$gender','$d_type','$r_date')");
   // print_r($exe);exit();


  if ($exe) {
        # code...
        move_uploaded_file($tmp, $path);
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
  <title>Join us as Doctor</title>
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
                Join Us   </h2>
                              <p class="inner-page-para mt-2">
                               Join us and be part of our incredible team!           </p>
          </div>
          <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> join Us</li>
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
      <h3 class="title-w3l mb-lg-4">Join us as <br>
        Doctor</h3>

    </div>
    <div class="contact-grids ">
     
      <div class="contact">
        <form  method="post" class="signin-form" enctype="multipart/form-data">
          <div class="input-grids">
            <input type="text" name="name" id="name" placeholder="Your Name*" class="contact-input"
              required="" />
            <input type="email" name="email" id="email" placeholder="Your Email*" class="contact-input"
              required="" />
              <input type="text" name="num" id="num" placeholder="Your Contact*" class="contact-input"
              required="" />
              <input type="text" name="password" id="password" placeholder="Your Password*" class="contact-input"
              required="" />
               <div class="col-lg-10 form-checked"> 
                <!--Gender -->
                <!-- Group of default radios - option 1 -->
                <label for="gender">Choose your gender</label>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="gender" value="Male">
                  <label class="custom-control-label" for="defaultGroupExample1">Male </label>
                </div>

                
                <!-- Group of default radios - option 3 -->
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="gender" value="Female">
                  <label class="custom-control-label" for="defaultGroupExample3">Female </label>
                </div>
            </div>
              <br>
              <!-- dropdown-->
              <label for="d_type">Choose Doctor type</label>
              <select class="form-control" name="d_type" id="d_type">
                <option value="select">---select---</option>
                <?php 
                  while($row = $result->fetch_object()){
                ?>
                <option value="<?php echo $row->cat_id; ?>"><?php echo $row->name; ?></option>
              <?php } ?>
              </select>
              <br>
              <label for="f">Upload your CV</label>
              <input type="file" name="f" id="f" class="contact-input" required="" />
          </div><br>
          <div class="form-input">
            <textarea name="msg" placeholder="Tell me about your self*" required=""></textarea>
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