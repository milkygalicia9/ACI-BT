<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACI-BT | About</title>
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
    .card {
        color: #fff;
        border: none;
        position: relative;
        border-radius: 10px;
        background: #efefef;
        box-shadow: 5px 5px 4px #c8d0e7, -1px -1px 3px #fff;
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
                    <span>Home</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#" style="background-color: #174793;">
                    <i class="bi bi-people"></i><span>Officials</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="officials.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">Barangay Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="sk.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">SK Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="staffs.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">Barangay Staffs</span>
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
            <div class="container p-3">
                <div class="about">
                    <p class="text-dark" style="font-size: 20px;">About ACI-BT</p>
                </div>
                <div class="row d-flex">
                    <div class="col-lg-5 p-5">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/acs-logo.png" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/cap-log.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/psu-logo.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/devs/carl.jpg" class="d-block w-100 rounded-circle" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 brgy-details">
                        <div class="details-container">
                            <div class="card p-3" style="font-size: .8em;">
                                <p class="text-black">
                                    ACI-BT: Automated Credential Issuance of Barangay Tiniguiban is an automated
                                    system for certificate and permit generation that is being developed.
                                    This strategic initiative aims to modernize administrative processes, improve
                                    service delivery, and enhance efficiency and transparency in local governance.
                                </p>
                            </div>
                            <div class="card p-3" style="font-size: .8em;">
                                <p class="text-black-50 ">
                                    ACI-BT: Automated Credential Issuance of Barangay Tiniguiban is developed by <a
                                        href="#developers">3rd year students</a> from Bachelor of Science in
                                    Computer Science, Palawan State University.
                                </p>
                            </div>
                            <div class="card p-3" style="font-size: .8em;">
                                <p class="text-black-50 ">
                                    ACI-BT: Automated Credential Issuance of Barangay Tiniguiban offers the
                                    advantage of workload reduction through the automation of certificate
                                    processing. This alleviation will enable staff to manage their tasks more
                                    efficiently, allowing them to focus on other essential responsibilities. The
                                    implementation of a computerized system provides valuable training opportunities
                                    for staff, allowing them to enhance their technological skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
<!-- 
                <section style="height: 400px;">
                    <div class="blank"></div>
                </section> -->

                <section class="tab-pane fade show active" id="developers" role="tabpanel"
                    aria-labelledby="pills-friends-tab" tabindex="0">
                    <h2 class="text-center text-info-emphasis fw-bold">Our Team</h2>

                    <div class="row d-flex align-items-center justify-content-center">

                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/carl.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Carl Vincent <br> Alabastro</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/philip.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Philip Arland <br> Alili</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/zoe.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Zoe Ayessa <br> Buesa</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/carl.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Michael Joshua <br> Calan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/jes.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Jessica <br> Cabilar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card mb-2 hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/charls.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Charls Brent <br> Cayabyab</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/troy.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Obrien Troy <br> Dangan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/lyrah.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Lyrah Rohi <br> Fernandez</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/carl.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Milky <br> Galicia</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/marco.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Kristian Marc <br> Anthony Ng</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/renz.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Renz Carl <br> Ozoa</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card hover-img">
                                <div class="card-body p-4 text-center">
                                    <img src="assets/img/devs/franz.jpg" alt="" class="rounded-circle mb-3" width="80"
                                        height="80">
                                    <h6 class="text-info-emphasis">Franz Miguel <br> Valonda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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