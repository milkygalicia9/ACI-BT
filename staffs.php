<?php
// session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACI-BT | Staffs</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/cap-log.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================= -->
</head>

<style>
    .hover-img {
        border-bottom: 10px solid #F1F04B;
    }
</style>


<body style="background-color: #F4F3EF;">

    <header id="header" class="header fixed-top d-flex align-items-center w-100"
        style="background-color: #F4F3EF; padding: 0">
        <?php include 'includes/header.php' ?>
    </header>

    <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">
        <?php include 'includes/sidebar.php' ?>
    </aside>

    <main id="main" class="main">
        <div class="content">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <img src="assets/img/brgy_staffs.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="tab-pane fade show active" id="pills-friends" role="tabpanel"
                    aria-labelledby="pills-friends-tab" tabindex="0">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">EVELYN G. COMAHIG</h6>
                                    <span class="text-dark fs-5">Accounting Clerk</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">ZANGELICA B. NEPOMUCENO</h6>
                                    <span class="text-dark fs-5">Clerk</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">MINERVA IGNACIO</h6>
                                    <span class="text-dark fs-5">VAWC</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">APRIL ESVER</h6>
                                    <span class="text-dark fs-5">BCWPC</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">GEMMA ANZA</h6>
                                    <span class="text-dark fs-5">Utility</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center border-bottom">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""
                                        class="rounded-circle mb-3" width="80" height="80">
                                    <h6 class="text-primary fs-5">ESTELITA MAGBANUA</h6>
                                    <span class="text-dark fs-5">Utility</span>
                                </div>
                                <ul
                                    class="px-2 py-3 bg-light list-unstyled d-flex align-items-center justify-content-center mb-0">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="credits fs-5">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="about.php">&copy; Cayabyabers</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>