<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACI-BT | View Reports</title>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">


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
    p {
        color: white;
        font-size: 12px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        color: #000;
    }

    .wrapper {
        overflow-y: scroll;
        /* Hide the vertical scrollbar */
        overflow-x: hidden;
        /* Optionally hide the horizontal scrollbar */
        height: 100vh;
        /* Set height to 100% of the viewport height */
    }

    .card {
        height: 350px;
        width: 350px;
        transition: transform 0.3s;
        font-size: 18px;
        font-weight: 400;
        border-bottom: 2px solid black;
    }

    .card:hover {
        transform: scale(1.1);
        background-color: rgb(255, 230, 91);
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        filter: invert(1);
    }


    .card-body {
        cursor: pointer;
    }

    .background-border {
        height: 70px;
        width: 70px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        position: absolute;
        top: 50px;
        right: 45px;
    }

    .cert {
        z-index: 1;
        border: 1px solid rgba(255, 255, 255, 0.4);
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
                x
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
                    <i class="bi bi-menu-button-wide"></i><span>Officials</span><i
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
                    <i class="bi bi-question-circle"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

    </aside>

    <main id="main" class="main">
        <?php
        // Include your PHP code here
        include 'db.php';
        ?>

        <script>
            // Use PHP variables in JavaScript
            const Sales_Clearance = <?php echo $count_clearance; ?>;
            const Sales_Business_Permit_New = <?php echo $count_business_permit_new ?>;
            const Sales_Business_Permit_Renew = <?php echo $count_business_permit_renew ?>;
            const Sales_Certificate_of_Employability = <?php echo $count_certificate_of_employability ?>;
            const Sales_Certificate_of_Income = <?php echo $count_certificate_of_income ?>;
            const Sales_Cohabitation = <?php echo $count_cohabitation; ?>;
            const Sales_Complaint_Certificate = <?php echo $count_complaint_certificate; ?>;
            const Sales_Death_Certificate = <?php echo $count_death_certificate; ?>;
            const Sales_First_Time_Job_Seeker = <?php echo $count_first_time_job_seeker; ?>;
            const Sales_Indigency = <?php echo $count_indigency; ?>;
            const Sales_Indigency_AICS = <?php echo $count_indigency_aics; ?>;
            const Sales_Lot_Ownership = <?php echo $count_lot_ownership; ?>;
            const Sales_Transfer_of_Residency = <?php echo $count_transfer_of_residency; ?>;
        </script>

        <div class="container content bg-light  border rounded  py-3"
            style="width: 97%;  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); overflow-x: hidden;">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgba(94, 180, 239);">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Business
                                        Permit (New)</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_business_permit_new ?>
                                            </div>
                                        </div>

                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgba(94, 180, 239);">

                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(255, 215, 119)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Business
                                        Permit (Renew)
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_business_permit_renew ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(255, 215, 119);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(188, 70, 70)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">First
                                        Time Job Seeker</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_first_time_job_seeker ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(188, 70, 70);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(255, 70, 70)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Barangay
                                        Clearance</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_clearance ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(255, 70, 70);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(255, 183, 50)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Certificate of Cohabitation
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_cohabitation ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(255, 183, 50);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(110, 204, 204)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Certificate of Employability
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_certificate_of_employability ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(110, 204, 204);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">




                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(183, 147, 255)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Certificate of Income</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_certificate_of_income ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(183, 147, 255);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(90, 123, 156)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Complaint Certificate</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_complaint_certificate ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(90, 123, 156);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(76, 166, 76)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Death
                                        Certificate</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_death_certificate; ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(76, 166, 76);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color:  rgb(120, 120, 120)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Indigency (AICS)</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_indigency_aics; ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(120, 120, 120);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(140, 90, 140)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">
                                        Indigency</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_indigency; ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(140, 90, 140);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(173, 90, 90)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Lot
                                        Ownership</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_lot_ownership; ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(173, 90, 90);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">


                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(188, 188, 88)">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Transfer
                                        of Residency</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">
                                                <?php echo $count_transfer_of_residency; ?>
                                            </div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(188, 188, 88);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-black">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Carl Vincent
                                        Alabastro</div>
                                    <img src="assets/img/devs/carl.jpg" height="100" width="100" alt="">
                                </div>
                                <div class="row px-3">
                                    <div class="col text-black">More Info</div>
                                    <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm">
                                    <div class="text-xs fw-bold text-gray-800 text-uppercase mb-1 pt-3">Charls Cayabyab
                                    </div>
                                    <img src="assets/img/devs/charls.jpg" height="100" width="100" alt="">
                                </div>
                                <div class="row px-3">
                                    <div class="col text-black">More Info</div>
                                    <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                </div>
                            </div>



                            <!-- <div class="col-md">
                                <div class="card-body border rounded my-1 shadow-sm"
                                    style="background-color: rgb(54, 162, 235); opacity: 0;">
                                    <div class="text-xs fw-bold text-primary text-uppercase mb-1 pt-3">Barangay
                                        Clearance</div>

                                    <div class="d-flex align-items-center justify-content-between mb-1"
                                        style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                                        <div class="card-icon">
                                            <div class="h5 mb-0 fw-bold text-gray-800 ml-5">145</div>
                                        </div>
                                        <div class="background-border"></div>
                                        <div class="cert mt-2" style="background-color: rgb(54, 162, 235);">
                                            <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1"
                                                height="70" alt="">
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col text-white">More Info</div>
                                        <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                                    </div>
                                </div>
                            </div> -->




                        </div>
                    </div>

                    <!-- Add more carousel-items with three images each as needed -->
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev"
                    style="position:  absolute; left: -70px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next"
                    style="position:  absolute; right: -70px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <!--End of Carousel -->

        <!-- Start of Charts -->

        <div class="container content bg-white border rounded py-2 mt-2"
            style="width: 97%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); overflow: hidden;">
            <div id="chartCarousel" class="carousel slide " data-bs-ride="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active px-5">
                        <div class="row">
                            <div class="col-lg">
                                <canvas id="myChart" style="width: 800px; height: 240px;"></canvas>

                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    // Data for the bar chart
                                    const chartData = {
                                        labels: ['Business Permit (New)', 'Business Permit (Renew)', 'First Time Job Seeker', 'Clearance', 'Cohabitation', 'Certificate of Employability', 'Certificate of Income', 'Complaint Certificate', 'Death Certificate', 'Indigency (AICS)', 'Indigency', 'Lot Ownership', 'Transfer of Residency'],
                                        datasets: [{
                                            label: 'Number of Issued Certificates',
                                            backgroundColor: [
                                                'rgba(54, 162, 235, 0.2)', // Business Permit (New)
                                                'rgba(255, 206, 86, 0.2)', // Business Permit (Renew)
                                                'rgba(153, 0, 0, 0.2)', // First Time Job Seeker
                                                'rgba(255, 25, 25, 0.2)', // Clearance
                                                'rgba(255, 165, 0, 0.2)', // Cohabitation
                                                'rgba(75, 192, 192, 0.2)', // Certificate of Employability
                                                'rgba(153, 102, 255, 0.2)', // Certificate of Income
                                                'rgba(0, 51, 102, 0.2)', // Complaint Certificate
                                                'rgba(0, 128, 0, 0.2)', // Death Certificate
                                                'rgba(16, 16, 16, 0.2)', // Indigency (AICS)
                                                'rgba(77, 0, 77, 0.2)', // Indigency                         
                                                'rgba(128, 0, 0, 0.2)', // Lot Ownership
                                                'rgba(153, 153, 0, 0.2)' // Transfer of Residency
                                            ],
                                            borderColor: [
                                                'rgba(54, 162, 235, 1)', // Business Permit (New)
                                                'rgba(255, 206, 86, 1)', // Business Permit (Renew)
                                                'rgba(153, 0, 0, 1)', // First Time Job Seeker
                                                'rgba(255, 0, 0, 1)', // Clearance
                                                'rgba(255, 165, 0, 1)', // Cohabitation
                                                'rgba(75, 192, 192, 1)', // Certificate of Employability
                                                'rgba(153, 102, 255, 1)', // Certificate of Income                         
                                                'rgba(0, 51, 102, 1)', // Complaint Certificate
                                                'rgba(0, 128, 0, 1)', // Death Certificate
                                                'rgba(16, 16, 16, 1)', // Indigency (AICS)
                                                'rgba(77, 0, 77, 1)', // Indigency
                                                'rgba(128, 0, 0, 1)', // Lot Ownership
                                                'rgba(153, 153, 0, 1)' // Transfer of Residency
                                            ],
                                            borderWidth: 1,
                                            data: [Sales_Business_Permit_New, Sales_Business_Permit_Renew, Sales_First_Time_Job_Seeker, Sales_Clearance, Sales_Cohabitation, Sales_Certificate_of_Employability, Sales_Certificate_of_Income, Sales_Complaint_Certificate, Sales_Death_Certificate, Sales_Indigency_AICS, Sales_Indigency, Sales_Lot_Ownership, Sales_Transfer_of_Residency]
                                        }]
                                    };

                                    // Configuration options
                                    const chartConfig = {
                                        type: 'bar',
                                        data: chartData,
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    };

                                    // Function to update chart dimensions based on window size
                                    function updateChartDimensions(chart) {
                                        var chartCanvas = chart.canvas;
                                        var parent = chartCanvas.parentNode;
                                        var containerWidth = parent.offsetWidth;
                                        var containerHeight = parent.offsetHeight;

                                        chartCanvas.style.width = containerWidth + 'px';
                                        chartCanvas.style.height = containerHeight + 'px';
                                        chart.resize(); // Resize the chart
                                    }

                                    // Render the bar chart
                                    const myChart = new Chart(document.getElementById('myChart'), chartConfig);

                                    // Update chart dimensions when the window is resized
                                    window.addEventListener('resize', function () {
                                        updateChartDimensions(myChart);
                                    });

                                    // Initial call to update chart dimensions
                                    updateChartDimensions(myChart);
                                </script>
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