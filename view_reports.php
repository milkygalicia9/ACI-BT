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

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    // Function to redirect to view_transactions page with document type parameter
    function moreInfo(docType, docId) {
                window.location.href = 'more_info_barangay_clearance.php?docType=' + encodeURIComponent(docType) + '&docId=' + encodeURIComponent(docId);
            }

 </script>


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
                             class="text-light">SK Officials</span>
                     </a>
                 </li>
                 <li>
                     <a href="staffs.php">
                         <i class="bi bi-people-fill text-light" style="font-size: 12px;"></i><span
                             class="text-light">Barangay Staffs</span>
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


    <section class="section dashboard">
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
                                      
                  
                                      <li><p class="dropdown-item lead" onclick="moreInfo('Barangay Clearance', 1)"
                                        style="cursor: pointer;">Show Info</p></li>
                                  
                                    </ul>
                                  </div>
                  
                                  <div class="card-body">
                                
                                    <h5 class="card-title" ><marquee loop="-1"  direction="left">BARANGAY CLEARANCE </marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6> <?php echo $count_clearance; ?> </h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                  
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
                      
                                          <li><p class="dropdown-item display-1" onclick="moreInfo('Business Permit (New)', 1)"
                                        style="cursor: pointer;">Show Info</p></li>
                                        </ul>
                                      </div>
                      
                                      <div class="card-body">
                                    
                                        <h5 class="card-title marquee" ><marquee  direction="left">BUSINESS PERMIT | <span class="text-success">NEW</span> </marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6> <?php echo $count_business_permit_new ?> </h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                  
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
                      
                                          <li><p class="dropdown-item display-1" onclick="moreInfo('Business Permit (Renew)', 3)"
                                        style="cursor: pointer;">Show Info</p></li>
                             
                                        </ul>
                                      </div>
                      
                                      <div class="card-body">
                                    
                                        <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">BUSINESS PERMIT | <span class="text-success">RENEW</span> </marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6> <?php echo $count_business_permit_renew ?></h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                  
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
                                
                                                    <li><p class="dropdown-item display-1" onclick="moreInfo('Certificate of Income', 5)"
                                        style="cursor: pointer;">Show Info</p></li>
                                                  </ul>
                                                </div>
                                
                                                <div class="card-body">
                                              
                                                  <h5 class="card-title" ><marquee loop="-1"  direction="left">CERTFICATE OF INCOME</marquee></h5>
                            
                                              <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                </div>
                                                <div class="ps-3">
                                                  <h6> <?php echo $count_certificate_of_income ?> </h6>
                                                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                            
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
                                
                                                    <li><p class="dropdown-item display-1" onclick="moreInfo('Certificate of Cohabitaion', 6)"
                                        style="cursor: pointer;">Show Info</p></li>
                                                    
                                                  </ul>
                                                </div>
                                
                                                <div class="card-body">
                                              
                                                  <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">CERTIFICATE OF COHABITATION</marquee></h5>
                            
                                              <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                </div>
                                                <div class="ps-3">
                                                  <h6> <?php echo $count_cohabitation; ?> </h6>
                                                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                            
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
                                
                                                    <li><p class="dropdown-item display-1" onclick="moreInfo('Certificate of Employability', 4)"
                                        style="cursor: pointer;">Show Info</p></li>
                                                    
                                                  </ul>
                                                </div>
                                
                                                <div class="card-body">
                                              
                                                  <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">CERTIFICATE OF EMPLOYABILITY</marquee></h5>
                            
                                              <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                </div>
                                                <div class="ps-3">
                                                  <h6> <?php echo $count_certificate_of_employability ?> </h6>
                                                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                            
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
                      
                                          <li><p class="dropdown-item display-1" onclick="moreInfo('Certificate of Indigency', 11)"
                                        style="cursor: pointer;">Show Info</p></li>
                                        </ul>
                                      </div>
                      
                                      <div class="card-body">
                                    
                                        <h5 class="card-title" ><marquee loop="-1"  direction="left">CERTIFICATE OF INDIGENCY</marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6><?php echo $count_indigency; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                  
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
                      
                                          <li><p class="dropdown-item display-1" onclick="moreInfo('Certificate of Indigency (AICS)', 10)"
                                        style="cursor: pointer;">Show Info</p></li>
                                          
                                        </ul>
                                      </div>
                      
                                      <div class="card-body">
                                    
                                        <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">CERTIFICATE OF INDIGENCY (AICS)</marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6> <?php echo $count_indigency_aics; ?> </h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                  
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
                      
                                          <li><p class="dropdown-item display-1" onclick="moreInfo('Complaint Certificate', 7)"
                                        style="cursor: pointer;">Show Info</p></li>
                                          
                                        </ul>
                                      </div>
                      
                                      <div class="card-body">
                                    
                                        <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">COMPLAINT CERTIFICATE</marquee></h5>
                  
                                    <div class="d-flex align-items-center">
                                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                      </div>
                                      <div class="ps-3">
                                        <h6> <?php echo $count_complaint_certificate; ?> </h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                  
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
            
                                <li><p class="dropdown-item display-1" onclick="moreInfo('Death Certificate', 8)"
                                        style="cursor: pointer;">Show Info</p></li>
                              </ul>
                            </div>
            
                            <div class="card-body">
                          
                              <h5 class="card-title" ><marquee loop="-1"  direction="left">DEATH CERTIFICATE</marquee></h5>
        
                          <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <div class="ps-3">
                              <h6> <?php echo $count_death_certificate; ?> </h6>
                              <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        
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
            
                                <li><p class="dropdown-item display-1" onclick="moreInfo('First Time Job Seeker', 4)"
                                        style="cursor: pointer;">Show Info</p></li>
                                
                              </ul>
                            </div>
            
                            <div class="card-body">
                          
                              <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">FIRST TIME JOB SEEKER</marquee></h5>
        
                          <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <div class="ps-3">
                              <h6><?php echo $count_first_time_job_seeker; ?></h6>
                              <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
        
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
            
                                <li><p class="dropdown-item display-1" onclick="moreInfo('Lot Ownership', 12)"
                                        style="cursor: pointer;">Show Info</p></li>
                                
                              </ul>
                            </div>
            
                            <div class="card-body">
                          
                              <h5 class="card-title marquee" ><marquee loop="-1"  direction="left">LOT OWNERSHIP</marquee></h5>
        
                          <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <div class="ps-3">
                              <h6> <?php echo $count_lot_ownership; ?> </h6>
                              <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
        
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
  
                      <li><p class="dropdown-item display-1" onclick="moreInfo('Transfer of Residency', 13)"
                                        style="cursor: pointer;">Show Info</p></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                
                    <h5 class="card-title" ><marquee loop="-1"  direction="left">TRANSFER OF RESIDENCY</marquee></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  </div>
                  <div class="ps-3">
                    <h6> <?php echo $count_transfer_of_residency; ?></h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
          
        </div>
      </div><!-- End Left side columns -->
</div>
          
                  


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="position:  absolute; left: -99px;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="position:  absolute; right: -99px;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        
          <div class="container col-md-12 border">

            <div class="card-body pb-0">
              <h5 class="card-title">Bar Chart  <span>| Reports</span></h5>
              <div class="col-lg">
                                <canvas id="myChart" style="width: 800px; height: 240px;"></canvas>

                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    // Data for the bar chart
                                    const chartData = {
                                        labels: ['Barangay Clearance', 'Business Permit (New)', 'Business Permit (Renew)', 'Certificate of Employability', 'Certificate of Income', 'Certificate of Cohabitation', 'Complaint Certificate', 'Death Certificate', 'First Time Job Seeker', 'Certificate of Indigency', 'Certificate of Indigency (AICS)', 'Lot Ownership', 'Transfer of Residency'],
                                        datasets: [{
                                            label: 'Number of Issued Certificates',
                                            backgroundColor: [
                                                'rgba(255, 25, 25, 0.2)', // Barangay Clearance
                                                'rgba(54, 162, 235, 0.2)', // Business Permit (New)
                                                'rgba(255, 206, 86, 0.2)', // Business Permit (Renew)
                                                'rgba(75, 192, 192, 0.2)', // Certificate of Employability
                                                'rgba(153, 102, 255, 0.2)', // Certificate of Income
                                                'rgba(255, 165, 0, 0.2)', // Cohabitation
                                                'rgba(0, 51, 102, 0.2)', // Complaint Certificate
                                                'rgba(0, 128, 0, 0.2)', // Death Certificate
                                                'rgba(153, 0, 0, 0.2)', // First Time Job Seeker
                                                'rgba(77, 0, 77, 0.2)', // Indigency
                                                'rgba(16, 16, 16, 0.2)', // Indigency (AICS)                                                                         
                                                'rgba(128, 0, 0, 0.2)', // Lot Ownership
                                                'rgba(153, 153, 0, 0.2)' // Transfer of Residency
                                            ],
                                            borderColor: [
                                                'rgba(255, 0, 0, 1)', // Barangay Clearance
                                                'rgba(54, 162, 235, 1)', // Business Permit (New)
                                                'rgba(255, 206, 86, 1)', // Business Permit (Renew)                                                
                                                'rgba(75, 192, 192, 1)', // Certificate of Employability
                                                'rgba(153, 102, 255, 1)', // Certificate of Income
                                                'rgba(255, 165, 0, 1)', // Cohabitation                         
                                                'rgba(0, 51, 102, 1)', // Complaint Certificate
                                                'rgba(0, 128, 0, 1)', // Death Certificate
                                                'rgba(153, 0, 0, 1)', // First Time Job Seeker
                                                'rgba(77, 0, 77, 1)', // Indigency
                                                'rgba(16, 16, 16, 1)', // Indigency (AICS)                                               
                                                'rgba(128, 0, 0, 1)', // Lot Ownership
                                                'rgba(153, 153, 0, 1)' // Transfer of Residency
                                            ],
                                            borderWidth: 1,
                                            data: [Sales_Clearance, Sales_Business_Permit_New, Sales_Business_Permit_Renew, Sales_Certificate_of_Employability, Sales_Certificate_of_Income, Sales_Cohabitation, Sales_Complaint_Certificate, Sales_Death_Certificate, Sales_First_Time_Job_Seeker, Sales_Indigency, Sales_Indigency_AICS, Sales_Lot_Ownership, Sales_Transfer_of_Residency]
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
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

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