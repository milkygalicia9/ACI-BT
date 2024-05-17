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
                    <i class="bi bi-people"></i><span>Officials</span><i class="bi bi-chevron-down ms-auto"></i>
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

    <main id="main" class="main" style="border: 1px solid black">
        <div class="pagetitle">
            <h1>Barangay Official Profile</h1>
            <!-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav> -->
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center text-dark">

                            <img src="assets/img/devs/carl.jpg" height="100" alt="Profile" class="rounded-circle">
                            <h2>Carl Vincent Alabastro</h2>
                            <h3>Tired and lonely</h3>
                            <div class="social-links mt-2">
                                <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
                                <a href="#" class="updateProfile"><i class="bi bi-camera-fill"></i></a>
                                <input type="file" id="profilePictureInput" accept="image/*" style="display: none;">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Settings</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview text-dark" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small">Ako si Carl Vincent Alabastro. <br> May utang pa ako kay Philip</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">Carl Vincent Alabastro</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">Philips Flash Drive Company</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">Hahaha wala</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">Philippinesis</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">Sa tabi ng PSU</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">Dalawa orig</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">carlhatdog@gmail.com</div>
                                    </div>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="credits">
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

    <script>
        document.querySelector('.updateProfile').addEventListener('click', function (event) {
            event.preventDefault();
            document.getElementById('profilePictureInput').click();
        });

        document.getElementById('profilePictureInput').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector('.profile-card img').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>


</body>

</html>