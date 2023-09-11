<?php

session_start();
include 'common/connect.php';

if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $is_delete = '0';
    $date = date('Y-m-d');
    $is_update = '0';
    $is_delete_time = '';
    $is_update_time = strtotime('now');

    $filename = $_FILES['f']['name'];
    $filename_array = explode(".", $filename);
    $ext = strtolower(end($filename_array));

    $tmp = $_FILES['f']['tmp_name'];
    $path = "medicine_upload/$filename";
    

    $exe = $obj->query("insert into medicine(name,stoke,r_date,is_delete,is_update,is_delete_time,is_update_time,image)values('$name','$stock','$date','$is_delete','$is_update','$is_delete_time','$is_update_time','$filename')");

   // print_r($exe);die();
    if ($exe) {
        # code...
        move_uploaded_file($tmp, $path);
        echo "<script>alert('Medicine added successfully');window.location='m_medical.php';</script>";
    }
    else
    {
        echo "<script>alert('error');</script>";
    }


}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Manage Doctors</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include 'common/header.php';  ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'common/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h1 class="mt-4 mb-4">Add Medicine </h1>
              <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="name" class="form-label">Medicine Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your medicine name ">
                </div>
                <div class="mb-3">
                  <label for="stock" class="form-label">Stock</label>
                  <select name="stock" class="form-control">
                      <option value="select">---Select---</option>
                      <option value="availabel">Availabel</option>
                      <option value="Not-availabel">Not-Availabel</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="f" class="form-label">Upload Medicine Image</label>
                  <input type="file" class="form-control" id="f" name="f" placeholder="Enter your medicine name ">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>