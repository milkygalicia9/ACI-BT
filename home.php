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

    <title>ACI-BT | Home</title>
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
    .navbar-wrapper button {
        width: 100px;
        background-color: #729ED9;
    }

    .card {
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        position: relative;
        display: inline-block;
        border-radius: 10px;
        background: #efefef;
        box-shadow: 5px 5px 4px #c8d0e7, -1px -1px 3px #fff;
        color: #585858;
    }

    .card:active {
        box-shadow: inset 1px 1px 3px #c8d0e7, inset -1px -1px 3px #fff;
    }

    .card:hover {
        transform: scale(1.1);
        background-color: rgb(255, 230, 91);
    }
</style>

<body class="w-100" style="background-color: #F4F3EF;">

<header id="header" class="header fixed-top d-flex align-items-center w-100"
        style="background-color: #F4F3EF; padding: 0">
        <?php include 'includes/header.php' ?>
    </header>

    <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">
        <?php include 'includes/sidebar.php' ?>
    </aside>

    <main id="main" class="main">
        <div class="pagetitle mb-5 m-5">
            <div class="col-md-12">
                <div class="welcome-card d-flex align-items-center justify-content-between">
                    <h3 class="fs-1 pt-3">Welcome, <b><?php echo $_SESSION['username'] ?>!</b></h3>
                    <script type="text/javascript">
                        tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                        tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                        function GetClock() {
                            var d = new Date();
                            var nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getFullYear();
                            var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds(), ap;

                            if (nhour == 0) { ap = " AM"; nhour = 12; }
                            else if (nhour < 12) { ap = " AM"; }
                            else if (nhour == 12) { ap = " PM"; }
                            else if (nhour > 12) { ap = " PM"; nhour -= 12; }

                            if (nmin <= 9) nmin = "0" + nmin;
                            if (nsec <= 9) nsec = "0" + nsec;

                            document.getElementById('datetimes').innerHTML = "" + nhour + ":" + nmin + ":" + nsec + ap + " , " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + tday[nday] + "";
                        }
                        window.onload = function () {
                            GetClock();
                            setInterval(GetClock, 1000);
                        }
                    </script>
                    <h6 class="" id="datetime"></h6>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="col-md-12 d-flex align-items-center justify-content-around p-3 pb-5 mb-5">
                <form action="i-Ng-UI.php" class="row">
                    <div class="col-md-12"> <button class="card">
                            <div class="card-document p-2">
                                <h6 class="card-title fw-semibold fs-2">Generate Documents</h6>
                            </div>
                            <div class="card-body">
                                <img height="360" width="400" src="./assets/img/certs.png" alt="">
                            </div>
                            <div class="card-document">
                                <hr>
                                <div class="stats">
                                </div>
                            </div>
                        </button>
                    </div>
                </form>
                <form action="view_transactions.php">
                    <div class="col-md-12"> <button class="card">
                            <div class="card-document p-2">
                                <h6 class="card-title fw-semibold fs-2">View Transactions</h6>
                            </div>
                            <div class="card-body">
                                <img height="360" width="400" src="./assets/img/list.png" alt="">
                            </div>
                            <div class="card-document">
                                <hr>
                                <div class="stats">
                                </div>
                            </div>
                        </button>
                    </div>
                </form>
                <form action="view_reports.php">
                    <div class="col-md-12"> <button class="card">
                            <div class="card-document p-2">
                                <h6 class="card-title fw-semibold fs-2">View Reports</h6>
                            </div>
                            <div class="card-body">
                                <img height="360" width="400" src="./assets/img/reports.png" alt="">
                            </div>
                            <div class="card-document">
                                <hr>
                                <div class="stats">
                                </div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </section>

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