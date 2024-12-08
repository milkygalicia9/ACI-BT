<!-- Troy  -->
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <style>
    .carousel-control-next-icon,
    .carousel-control-prev-icon {
      filter: invert(1);
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main" class="main">

    <!-- <div class="d-flex pb-2">
            <a href="home.php" class="d-flex px-2">
                <div class="icon">
                    <i class="bi-caret-left-square fs-2 p-2 text-primary"></i>
                </div>
                <div class="back d-flex text-primary align-items-center fs-5">
                    Back
                </div>
            </a>
        </div> -->

    <header id="header" class="header fixed-top d-flex align-items-center w-100"
      style="background-color: #F4F3EF; padding: 0">
      <?php include 'includes/header.php' ?>
    </header>

    <?php
    // Include your PHP code here
    //include 'db.php';
    include 'queries_reports.php';
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

      const sum = <?php echo $sum; ?>;
      document.addEventListener('DOMContentLoaded', function () {

        // Calculate the clearance percentage
        const Sales_Clearance_Percent = (Sales_Clearance / sum) * 100;
        const Sales_Business_Permit_New_Percent = (Sales_Business_Permit_New / sum) * 100;
        const Sales_Business_Permit_Renew_Percent = (Sales_Business_Permit_Renew / sum) * 100;
        const Sales_Certificate_of_Employability_Percent = (Sales_Certificate_of_Employability / sum) * 100;
        const Sales_Certificate_of_Income_Percent = (Sales_Certificate_of_Income / sum) * 100;
        const Sales_Cohabitation_Percent = (Sales_Cohabitation / sum) * 100;
        const Sales_Complaint_Certificate_Percent = (Sales_Complaint_Certificate / sum) * 100;
        const Sales_Death_Certificate_Percent = (Sales_Death_Certificate / sum) * 100;
        const Sales_First_Time_Job_Seeker_Percent = (Sales_First_Time_Job_Seeker / sum) * 100;
        const Sales_Indigency_Percent = (Sales_Indigency / sum) * 100;
        const Sales_Indigency_AICS_Percent = (Sales_Indigency_AICS / sum) * 100;
        const Sales_Lot_Ownership_Percent = (Sales_Lot_Ownership / sum) * 100;
        const Sales_Transfer_of_Residency_Percent = (Sales_Transfer_of_Residency / sum) * 100;

        // Set the clearance percentage value into the span
        document.getElementById('clearance_percent').innerHTML = Sales_Clearance_Percent.toFixed(2) + '%';
        document.getElementById('business_permit_new_percent').innerHTML = Sales_Business_Permit_New_Percent.toFixed(2) + '%';
        document.getElementById('business_permit_renew_percent').innerHTML = Sales_Business_Permit_Renew_Percent.toFixed(2) + '%';
        document.getElementById('income_percent').innerHTML = Sales_Certificate_of_Income_Percent.toFixed(2) + '%';
        document.getElementById('cohabitation_percent').innerHTML = Sales_Cohabitation_Percent.toFixed(2) + '%';
        document.getElementById('coe_percent').innerHTML = Sales_Certificate_of_Employability_Percent.toFixed(2) + '%';
        document.getElementById('indigency_percent').innerHTML = Sales_Indigency_Percent.toFixed(2) + '%';
        document.getElementById('indigency_aics_percent').innerHTML = Sales_Indigency_AICS_Percent.toFixed(2) + '%';
        document.getElementById('complaint_percent').innerHTML = Sales_Complaint_Certificate_Percent.toFixed(2) + '%';
        document.getElementById('death_percent').innerHTML = Sales_Death_Certificate_Percent.toFixed(2) + '%';
        document.getElementById('ftjs_percent').innerHTML = Sales_First_Time_Job_Seeker_Percent.toFixed(2) + '%';
        document.getElementById('lot_percent').innerHTML = Sales_Lot_Ownership_Percent.toFixed(2) + '%';
        document.getElementById('transfer_percent').innerHTML = Sales_Transfer_of_Residency_Percent.toFixed(2) + '%';
      })




      // Function to redirect to view_transactions page with document type parameter
      function moreInfo(docType, docId) {
        window.location.href = 'more_info.php?docType=' + encodeURIComponent(docType) + '&docId=' + encodeURIComponent(docId);
      }

    </script>

    <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">
      <?php include 'includes/sidebar.php' ?>
    </aside>

    <section class="section dashboard">
      <div class="d-flex pb-2">
        <a href="home.php" class="d-flex">
          <div class="icon">
            <i class="bi-caret-left-square fs-2 p-2 text-primary"></i>
          </div>
          <div class="back d-flex text-primary align-items-center fs-3">
            Back
          </div>
        </a>
      </div>
      <div class="row">
        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <!-- Left side columns -->
              <div class="container-fluid col-lg" style="overflow-x: hidden;">
                <div class="row">

                  <!-- Sales Card -->
                  <div class="col-md-4">
                    <div class="card info-card sales-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>


                          <li>
                            <p class="dropdown-item lead" onclick="moreInfo('Barangay Clearance', 1)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          BARANGAY CLEARANCE
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color: rgba(255, 0, 0, 1)">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_barangay_clearance; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="clearance_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>
                      <script>
                        // Wait for the page to load before running the script
                        document.addEventListener('DOMContentLoaded', function () {
                          // Use PHP variables in JavaScript
                          const Sales_Clearance = <?php echo $$count_barangay_clearance; ?>;
                          const sum = <?php echo $sum; ?>;

                          // Calculate the clearance percentage
                          const Sales_Clearance_Percent = (Sales_Clearance / sum) * 100;

                          // Set the clearance percentage value into the span
                          document.getElementById('clearance_percent').innerHTML = Sales_Clearance_Percent.toFixed(2) + '%';
                        });
                      </script>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-md col-md-4">
                    <div class="card info-card revenue-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Business Permit (New)', 2)"
                              style="cursor: pointer;">Show Info</p>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          BUSINESS PERMIT | <span class="text-success">NEW</span>
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color: rgba(54, 162, 235, 1)">
                              stroke-linejoin="round" class="feather feather-file-text" >
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_business_permit_new ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="business_permit_new_percent">%</span>
                            <span class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div><!-- End Revenue Card -->


                  <!-- Customers Card -->
                  <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Business Permit (Renew)', 3)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title ">
                          BUSINESS PERMIT | <span class="text-success">RENEW</span>
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color: rgba(255, 206, 86, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_business_permit_renew ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="business_permit_renew_percent">%</span>
                            <span class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>

                      </div>
                    </div>

                  </div><!-- End Customers Card -->


                </div>
              </div><!-- End Left side columns -->
            </div>
            <div class="carousel-item">

              <!-- Left side columns -->
              <div class="container-fluid col-lg-12">
                <div class="row">



                  <!-- Sales Card -->
                  <div class="col-md-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Certificate of Income', 8)"
                              style="cursor: pointer;">Show Info</p>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          CERTFICATE OF INCOME
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(153, 102, 255, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_certificate_of_income ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="income_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-md col-md-4">
                    <div class="card info-card revenue-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Certificate of Cohabitaion', 4)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title ">
                          CERTIFICATE OF COHABITATION
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(255, 165, 0, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_cohabitation; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="cohabitation_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div><!-- End Revenue Card -->



                  <!-- Customers Card -->
                  <div class="col-xxl-4 col-md-4">

                    <div class="card info-card customers-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Certificate of Employability', 5)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title ">
                          CERTIFICATE OF EMPLOYABILITY
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(75, 192, 192, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_certificate_of_employability ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="coe_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>

                      </div>
                    </div>

                  </div><!-- End Customers Card -->



                </div>
              </div><!-- End Left side columns -->
            </div>

            <!-- Third Row -->
            <div class="carousel-item">

              <!-- Left side columns -->
              <div class="container-fluid col-lg-12">
                <div class="row">



                  <!-- Sales Card -->
                  <div class="col-md-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Certificate of Indigency', 6)"
                              style="cursor: pointer;">Show Info</p>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          CERTIFICATE OF INDIGENCY
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(77, 0, 77, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_indigency; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="indigency_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-md col-md-4">
                    <div class="card info-card revenue-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Certificate of Indigency (AICS)', 7)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title ">
                          CERTIFICATE OF INDIGENCY (AICS)
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(16, 16, 16, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_indigency_aics; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="indigency_aics_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div><!-- End Revenue Card -->



                  <!-- Customers Card -->
                  <div class="col-xxl-4 col-md-4">

                    <div class="card info-card customers-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Complaint Certificate', 9)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          COMPLAINT CERTIFICATE
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(0, 51, 102, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_complaint_certificate; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="complaint_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>

                      </div>
                    </div>

                  </div><!-- End Customers Card -->



                </div>
              </div><!-- End Left side columns -->
            </div>

            <!-- FOURTH ROW -->
            <div class="carousel-item">

              <!-- Left side columns -->
              <div class="container-fluid col-lg-12">
                <div class="row">



                  <!-- Sales Card -->
                  <div class="col-md-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Death Certificate', 10)"
                              style="cursor: pointer;">Show Info</p>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          DEATH CERTIFICATE
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(0, 128, 0, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_death_certificate; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="death_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-md col-md-4">
                    <div class="card info-card revenue-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('First Time Job Seeker', 11)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title ">
                          FIRST TIME JOB SEEKER
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(153, 0, 0, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_first_time_job_seeker; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="ftjs_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div><!-- End Revenue Card -->



                  <!-- Customers Card -->
                  <div class="col-xxl-4 col-md-4">

                    <div class="card info-card customers-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Lot Ownership', 12)"
                              style="cursor: pointer;">Show Info</p>
                          </li>

                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          LOT OWNERSHIP
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(128, 0, 0, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_lot_ownership; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="lot_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>

                      </div>
                    </div>

                  </div><!-- End Customers Card -->



                </div>
              </div><!-- End Left side columns -->
            </div>

            <!-- FIFTH ROW -->
            <div class="carousel-item">

              <!-- Left side columns -->
              <div class="container-fluid col-lg-12">
                <div class="row">



                  <!-- Sales Card -->
                  <div class="col-md-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter" style="z-index: 10;">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Option</h6>
                          </li>

                          <li>
                            <p class="dropdown-item display-1" onclick="moreInfo('Transfer of Residency', 13)"
                              style="cursor: pointer;">Show Info</p>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">

                        <h5 class="card-title">
                          TRANSFER OF RESIDENCY
                        </h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-file-text"
                              style="color:rgba(153, 153, 0, 1);">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <div class="ps-3">
                            <h6>
                              <?php echo $count_transfer_of_residency; ?>
                            </h6>
                            <span class="text-success small pt-1 fw-bold" id="transfer_percent">%</span> <span
                              class="text-muted small pt-2 ps-1">increase</span>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                </div>
              </div><!-- End Left side columns -->
            </div>




          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev"
            style="position:  absolute; left: -99px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next"
            style="position:  absolute; right: -99px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


        <div class="container col-md-12">
          <div class="card-body pb-0">
            <h5 class="card-title">Bar Chart <span>| Reports</span></h5>

            <select id="yearFilter" onchange="updateChart()">
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
            </select>

            <select id="monthFilter" onchange="updateChart()">
              <option value="all">All</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>

            <div class="col-lg">
              <canvas id="myChart" style="width: 800px; height: 240px;"></canvas>
              <button onclick="printChartData()">Print Reports</button>


              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              <script>
                // Data for the bar chart
                const chartData = {
                  labels: ['Barangay Clearance', 'Business Permit (New)', 'Business Permit (Renew)', 'Certificate of Income', 'Certificate of Cohabitation', 'Certificate of Employability', 'Certificate of Indigency', 'Certificate of Indidency (AICS)', 'Complaint Certificate', 'Death Certificate', 'First Time Job Seeker', 'Lot Ownership', 'Transfer of Residency'],
                  datasets: [{
                    label: 'Number of Issued Certificates',
                    backgroundColor: [
                      'rgba(255, 25, 25, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 165, 0, 0.2)',
                      'rgba(0, 51, 102, 0.2)',
                      'rgba(0, 128, 0, 0.2)',
                      'rgba(153, 0, 0, 0.2)',
                      'rgba(77, 0, 77, 0.2)',
                      'rgba(16, 16, 16, 0.2)',
                      'rgba(128, 0, 0, 0.2)',
                      'rgba(153, 153, 0, 0.2)'
                    ],
                    borderColor: [
                      'rgba(255, 0, 0, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 165, 0, 1)',
                      'rgba(0, 51, 102, 1)',
                      'rgba(0, 128, 0, 1)',
                      'rgba(153, 0, 0, 1)',
                      'rgba(77, 0, 77, 1)',
                      'rgba(16, 16, 16, 1)',
                      'rgba(128, 0, 0, 1)',
                      'rgba(153, 153, 0, 1)'
                    ],
                    borderWidth: 1,
                    data: [
                      Sales_Clearance,
                      Sales_Business_Permit_New,
                      Sales_Business_Permit_Renew,
                      Sales_Certificate_of_Income,
                      Sales_Cohabitation,
                      Sales_Certificate_of_Employability,
                      Sales_Indigency,
                      Sales_Indigency_AICS,
                      Sales_Complaint_Certificate,
                      Sales_Death_Certificate,
                      Sales_First_Time_Job_Seeker,
                      Sales_Lot_Ownership,
                      Sales_Transfer_of_Residency]
                  }]
                };

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

                const myChart = new Chart(document.getElementById('myChart'), chartConfig);

                // Print function to open a new window with both table and chart
                function printChartData() {
                  const chartCanvas = document.getElementById('myChart');
                  const chartImageURL = chartCanvas.toDataURL("image/png");

                  // Generate the table content with chart data
                  const chartLabels = chartData.labels;
                  const chartValues = chartData.datasets[0].data;
                  let content = '<html><head><title>Print Reports</title></head><body>';
                  content += '<h2>Certificate Reports</h2>';
                  content += '<h3>Table of Issued Certificates</h3>';
                  content += '<table border="1" style="width: 100%; text-align: left;"><thead><tr><th>Certificate Type</th><th>Number Issued</th></tr></thead><tbody>';

                  // Populate table rows
                  chartLabels.forEach((label, index) => {
                    content += `<tr><td>${label}</td><td>${chartValues[index]}</td></tr>`;
                  });
                  content += '</tbody></table>';

                  // Add the chart image to the print window content
                  content += '<h3>Bar Chart</h3>';
                  content += `<img src="${chartImageURL}" style="width: 100%; height: auto;">`;

                  content += '</body></html>';

                  // Open a new window for printing and render the content
                  const printWindow = window.open('', '_blank');
                  printWindow.document.write(content);
                  printWindow.document.close();
                  printWindow.print();
                }
              </script>

              <script>
                function updateChart() {
                  const month = document.getElementById('monthFilter').value;
                  const year = document.getElementById('yearFilter').value;

                  // Construct the URL with both month and year parameters
                  let url = `getChartData.php?month=${month}&year=${year}`;

                  fetch(url)
                    .then(response => response.json())
                    .then(data => {
                      // If 'month' is 'all', reset the chart data to default values
                      if (month === 'all') {
                        myChart.data.datasets[0].data = [
                          data["Barangay Clearance"],
                          data["Business Permit New"],
                          data["Business Permit Renew"],
                          data["Certificate of Income"],
                          data["Cohabitation"],
                          data["Certificate of Employability"],
                          data["Indigency"],
                          data["Indigency AICS"],
                          data["Complaint Certificate"],
                          data["Death Certificate"],
                          data["First Time Job Seeker"],
                          data["Lot Ownership"],
                          data["Transfer of Residency"]
                        ];
                      } else {
                        // Update chart data with the fetched values from the specific month/year
                        myChart.data.datasets[0].data = Object.values(data);
                      }

                      // Update the chart with new data
                      myChart.update();
                    })
                    .catch(error => console.error('Error fetching chart data:', error));
                }

              </script>
            </div>
          </div>
        </div>


        <!-- End News & Updates -->

      </div><!-- End Right side columns -->

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