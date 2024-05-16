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
                <img src="assets/img/cap-log.png" height="250" alt="">
            </div>
        </div>

        <ul class="sidebar-nav" id="sidebar-nav" style="padding: 15px;">
            <!-- <li class="nav-item">
                <a class="nav-link text-light" href="home.php" style="background-color: #174793;">
                    <i class="bi bi-grid text-light"></i>
                    <span>Dashboard</span>
                </a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" data-bs-target="#dashboard-nav" data-bs-toggle="collapse"
                    href="#" style="background-color: #174793;">
                    <i class="bi bi-menu-button-wide"></i><span>Dashboard</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="dashboard-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="gen_docs.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">Generate Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_transactions.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">View Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_reports.php">
                            <i class="bi bi-circle text-light"></i><span class="text-light">View Reports</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed text-light" data-bs-target="#officials-nav" data-bs-toggle="collapse"
                    href="#" style="background-color: #174793;">
                    <i class="bi bi-menu-button-wide"></i><span>Officials</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="officials-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
            </li>

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

        <div class="pagetitle mb-5 mt-3">
            <div class="col-md-11">
                <div class="welcome-card d-flex align-items-center justify-content-between">
                <h3>Welcome, <?php echo $_SESSION['username'] ?>!</h3>
                <script type="text/javascript">
                    tday=new Array	("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                    tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                    function GetClock(){
                    var d=new Date();
                    var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                    var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                    if(nhour==0){ap=" AM";nhour=12;}
                    else if(nhour<12){ap=" AM";}
                    else if(nhour==12){ap=" PM";}
                    else if(nhour>12){ap=" PM";nhour-=12;}

                    if(nmin<=9) nmin="0"+nmin;
                    if(nsec<=9) nsec="0"+nsec;

                    document.getElementById('datetime').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+" , "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+tday[nday]+"";
                    }
                    window.onload=function(){
                    GetClock();
                    setInterval(GetClock,1000);
                    }
                </script>
                <h6 class="" id="datetime"></h6>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="col-md-12 d-flex align-items-center justify-content-around mt-4">
                <form action="gen_docs.php" class="row">
                    <div class="col-md-12"> <button class="card">
                            <div class="card-document">
                                <h6 class="card-title">Generate Documents</h6>
                            </div>
                            <div class="card-body">
                                <img height="250" width="280" src="./assets/img/certs.png" alt="">
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
                            <div class="card-document">
                                <h6 class="card-title">View Transactions</h6>
                            </div>
                            <div class="card-body">
                                <img height="250" width="280" src="./assets/img/list.png" alt="">
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
                            <div class="card-document">
                                <h6 class="card-title">View Reports</h6>
                            </div>
                            <div class="card-body">
                                <img height="250" width="280" src="./assets/img/reports.png" alt="">
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