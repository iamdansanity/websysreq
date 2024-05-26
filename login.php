<?php 
require_once 'includes/config.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style>
  .body {
    background-color:#f6f9ff ;
  }

  .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .container a {
            text-decoration: none;
            padding: 10px;
            color: blue;
            margin-top: 15px;
        }

</style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png">
  <link href="assets/img/apple-touch-icon.png">

  <link rel="Website icon" type="png" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/377154255_3144388995870512_8254001304105418770_n.png?stp=dst-png_s206x206&_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHas1debjFAf5bd6Agj9Z04CMWylh1zixQIxbKWHXOLFOoduYVM-f34WNq9Tov-PccL1uANV-UQ7RxIyfkE-TxR&_nc_ohc=3jjLCeC8lOYAX9erMCQ&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRpgPUUqT9Yrl8pztVTxOS87vRa89dzSYRhmAO2crx1Jg&oe=652C8A4B">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <link href="assets/css/style.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <main class="body">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container d-flex flex-column align-items-center justify-content-center">
    <div class="col-lg-4">
          <?php 
            check_login_errors();
          ?>
      <div class="card">
        <div class="card-body text-center mb-5">
          <img src="assets/img/mjay.png" width="150" height="150" class="mb-3">
          <h4 class="card-title">Login</h4> 
          <p>Enter your Username and Password<p>       
          <form action="includes/login.inc.php" method="post">
            <div class="form-group mb-2">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
            <div class="container">
              <a href="index.html">Forgot Password?</a>
              <a href="signup.php">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </main><!-- End #main -->
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>