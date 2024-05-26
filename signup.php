<?php 
require_once 'includes/config.php';
require_once 'includes/signup_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style>
  .body {
    background-color:#f6f9ff ;
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
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h4 class="card-title text-center pb-0 fs-3"> Sign up </h4> 
                  </div>
                      <form action="includes/signup.inc.php" method="post">
                        <div class="row">
                        <?php
                            check_signup_errors();
                          ?>
                          <div class="col">
                          
                            <input type="text" name="fname" class="form-control" placeholder="First Name">
                          </div>
                          <div class="col">
                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                          </div>
                        </div>
                        <br>
                        <div class ="row">
                          <div class="col">
                            <label for="DOB">Date of Birth</label>
                            <input type="Date" name="DOB" class="form-control" id="DOB">
                          </div>
                          <div class="col">
                            <br>
                            <input type="number" name="contact" class="form-control" id="inputZip" placeholder="Contact Number">
                          </div> 
                        </div>         
                        <br>  
                        <div class="row">
                          <div class ="col">
                            <input type="text" name="email" class="form-control" placeholder="E-Mail">
                          </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="col">
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-3">
                        <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Clear</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="login.php">Already registered?</a>
                            </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     </section> 
     
  </main><!-- End #main -->
  <script>
      // Function to close the alert after a specified duration
      function closeAlert() {
      var alertElement = document.getElementById('autoCloseAlert');
      alertElement.style.display = 'none';
      }

      // Set a timeout to close the alert after 3 seconds (3000 milliseconds)
      setTimeout(closeAlert, 30000);
  </script>

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