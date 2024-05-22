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

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center w-100"
        style="background-color: #F4F3EF; padding: 0">

        <div class="d-flex align-items-center justify-content-between h-100 p-2">
            <a href="home.php" class="logo d-flex align-items-center justify-content-center">
                <span class="d-none d-lg-block">ACI-BT</span>
            </a>
        </div>

        <i class="bi bi-list toggle-sidebar-btn"></i>

        <div class="title h-100 d-flex align-items-center" style="padding-left: 20px; padding-top: 8px;">
            <h4 class="text-dark ">Automated Credential Issuance for Barangay Tiniguiban</h4>
        </div>

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">

        <div class="barangay-logo h-50 w-100" style="background-color: #729ED9; margin-bottom: 2px;">
            <div class="barangay-logo h-100 d-flex align-items-center justify-content-center">
                <a href="home.php">
                    <img src="assets/img/cap-log.png" height="250" alt="">
                </a>
            </div>
        </div>

        <ul class="sidebar-nav" id="sidebar-nav" style="padding: 15px;">
            <li class="nav-item">
                <a class="nav-link text-light" href="home.php" style="background-color: #174793;">
                    <i class="bi bi-grid text-light"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#" style="background-color: #174793;">
                    <i class="bi bi-diagram-3"></i><span>Officials</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="officials.php">
                            <i class="bi bi-person-check-fill text-light" style="font-size: 12px;"></i><span
                                class="text-light">Barangay Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="sk.php">
                            <i class="bi bi-person-badge text-light" style="font-size: 12px;"></i><span
                                class="text-light">SK
                                Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="staffs.php">
                            <i class="bi bi-people-fill text-light" style="font-size: 12px;"></i><span
                                class="text-light">Barangay
                                Staffs</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" href="about.php" style="background-color: #174793;">
                    <i class="bi bi-question-circle"></i>
                    <span>About</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php" style="background-color: #F4F3EF;">
                    <i class="bi bi-power text-dark"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
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
                                    <h6 class="text-primary">EVELYN G. COMAHIG</h6>
                                    <span class="text-dark fs-4">Accounting Clerk</span>
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
                                    <h6 class="text-primary">ZANGELICA B. NEPOMUCENO</h6>
                                    <span class="text-dark fs-4">Clerk</span>
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
                                    <h6 class="text-primary">MINERVA IGNACIO</h6>
                                    <span class="text-dark fs-4">VAWC</span>
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
                                    <h6 class="text-primary">APRIL ESVER</h6>
                                    <span class="text-dark fs-4">BCWPC</span>
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
                                    <h6 class="text-primary">GEMMA ANZA</h6>
                                    <span class="text-dark fs-4">Utility</span>
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
                                    <h6 class="text-primary">ESTELITA MAGBANUA</h6>
                                    <span class="text-dark fs-4">Utility</span>
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
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="about.html">&copy; Cayabyabers</a>
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