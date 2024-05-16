<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html" class="active">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fillup Certificate</h5>
              <style>
                @media print {
                    iframe {
                        border: none;
                        width: 21cm !important;
                        height: 29.7cm !important;
                    }
                }

                iFrame {
                    top: 50%;
                    /* position: fixed !important; */
                    left: 50%;
                    width: 21.05cm;
                    height: 32cm;
                    border: none;
                    overflow: hidden !important;
                    transform: scale(0.8);
                    transform-origin: 0 0;
                    border: 2px solid black;
                }

                p {
                    color: white;
                    font-size: 12px;
                }

                .certificates div {
                    display: none;
                }

                .certificates div.active {
                    display: block;
                }
            </style>

              <!-- General Form Elements -->
              <form>
             
                <label for="certificateType"> Select Certificate</label><br>
                <div class="col-md-6">
                <select class="  p-2 text-left" id="certificateType" onchange="toggleFields()" style="cursor: pointer;">
                    <option value="">--select certificates--</option>
                    <option value="barangay_clearance" >Barangay Clearance</option>
                    <option value="business_permit_new">Barangay Business Permit New</option>
                    <option value="business_permit_renew">Barangay Business Permit Renew</option>
                    <option value="certificate_of_employability">Certificate Of Employability</option>
                    <option value="certificate_of_income">Certificate of Income</option>
                    <option value="cohabitation">Certificate of Cohabitation</option>
                    <option value="complaint_certificate">Complaint Certificate</option>
                    <option value="death_certificate">Death Certificate</option>
                    <option value="first_time_job_seeker">Barangay Certification (First time Job Seeker)</option>
                    <option value="indigency">Indigency</option>
                    <option value="indigency_aics">Indigency (AICS)</option>
                    <option value="lot_ownership">Lot Ownership</option>
                    <option value="Oathtaking">Oathtaking</option>
                    <option value="transfer_of_residency">Certificate of Transfer</option>
                </select>
                </div>
                <br>
                <div class="certificates">
                  
                  <div id="barangay_clearance">
                   
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                      <label for="">Middle Initial:</label>
                      <input type="text" class="form-control" name="middle_name" placeholder="Ex. J"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                      <label for="">Suffix:</label>
                      <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                      <select class=" text-left" style="width: 8%;" name="" id="suffix" >
                          <option value="">N/A</option>
                          <option value="Jr">Jr</option>
                          <option value="Sr">Sr</option>
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="">III</option>
                      </select><br><br>
                      <label for="">Purok:</label>
                     <select class=" p-2 w-25 text-left" name="" id="purok">
                      <option value="Centro">Centro</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                     </select>
                     <br>
<br>

                      <label for="">Birthplace:</label>
                      <input type="text" class="form-control" name="birthplace" placeholder="Ex. Puerto Princesa City"><br>

                      <label for="">Birthday:</label>
                      <input type="date" class="form-control" name="birthday">
                      <br>
                      <label for="">Civil Status:</label>
                      <select class="form-control" onchange="update()" name="" id="stats">
                          <option value="Maried">Married</option>
                          <option value="Widow">Window</option>
                          <option value="Single">Single</option>
                      </select>
                      <br>
                      <label for="">Period of Residency:</label>
                      <input type="number" class="form-control" name="residency_period" placeholder="Ex. 3 years"><br>

                      <label for="">Purpose:</label>
                      <!-- <input type="text" class="form-control" name="purpose"> -->
                      <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10" placeholder="Ex. Undecided"></input><br>

                      <!-- <label for="">Duty Officer Full Name:</label>
                      <input type="textarea" class="form-control" name="duty_officer_full_name" placeholder="Ex. Franz Miguel"> -->

                  </div>
                  
                  <div id="business_permit_new">
                    <form action="">
                      <label for="businessName">Business name/ Trade Activity:</label>
                      <input type="text" class="form-control" name="business_name"><br>

                      <label for="">Purok:</label><br>
                     <select name="" id="" onchange="">
                      <option value="Centro">Centro</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                     </select>
                     <br>
<br>
                      <label for="">Manager / Operator</label>
                      <input type="text" class="form-control" name="manager_operator">

                      <label for="">Address(Manager / Operator)</label>
                      <input type="text" class="form-control" name="manager_operator_address">

                      <!-- <label for="businessIssuedDate">Issued Date:</label>
                      <input type="date" class="form-control" name="business_issued_date"><br> -->
                      </form>
                  </div>

                  <div id="business_permit_renew">
                      <label for="businessName">Business name/ Trade Activity:</label>
                      <input type="text" class="form-control" name="business_name"><br>

                      <label for="">Purok:</label><br>
                     <select name="" id="">
                      <option value="Centro">Centro</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                     </select>
                     <br>
<br>

                      <label for="">Manager / Operator</label>
                      <input type="text" class="form-control" name="manager_operator">

                      <label for="">Address(Manager / Operator)</label>
                      <input type="text" class="form-control" name="manager_operator_address">

                      <!-- <label for="businessIssuedDate">Issued Date:</label>
                      <input type="date" class="form-control" name="business_issued_date"><br> -->
                  </div>

                  <div id="certificate_of_employability">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" placeholder="Ex. Juan"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" placeholder="Ex.Dela"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" placeholder="Ex. Cruz"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" placeholder="Ex. Jr"><br>

                      <label for="">Age</label>
                      <input type="number" class="form-control" placeholder="Ex. 20">

                      <label for="">Purok:</label>
                      <input type="text" class="form-control"><br>

                      <!-- <label for="">Issued Date:</label>
                      <input type="date" class="form-control"> -->

                      <label for="">Duty Officer Full Name:</label>
                      <input type="text" class="form-control">
                  </div>

                  <div id="certificate_of_income">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Purok:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Amount (In Numeric Form)</label>
                      <input type="number" class="form-control"><br>

                      <!-- <label for="">Issued Date:</label>
                      <input type="date" class="form-control"> -->

                      <label for="">Duty Officer Full Name:</label>
                      <input type="text" class="form-control">
                  </div>

                  <div id="cohabitation">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="cohabitant1Birthdate">Birthdate:</label>
                      <input type="date" class="form-control" name="birth_date"><br>

                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="cohabitant_first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="cohabitant_middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="cohabitant_last_name"><br>

                      <label for="cohabitant1Birthdate">Birthdate:</label>
                      <input type="date" class="form-control" name="cohabitant_birth_date"><br>

                      <label for="cohabitationPurok">Purok:</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <!--Month and Year daw-->
                      <label for="dateOfMarriage">Date of Marriage:</label>
                      <input type="date" class="form-control" name="date_of_marriage"><br>

                      <label for="periodOfMarriage">Period of marriage:</label>
                      <input type="number" class="form-control" name="period_of_marriage"><br>

                      <!-- <label for="cohabitationIssuedDate">Issued Date:</label>
                      <input type="date" class="form-control" name="issued_date"><br> -->

                      <label for="">Duty Officer Full Name</label>
                      <input type="text" class="form-control" name="duty_officer_full_name">
                  </div>

                  <div id="complaint_certificate">
                      <!--With honorifics-->
                      <label for="">First Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Age</label>
                      <input type="number" class="form-control">

                      <label for="">Purok:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Date Filed:</label>
                      <input type="date" class="form-control">

                      <!--Respondent Full Name-->
                      <label for="">First Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control"><br>

                      <label for="">Case Number:</label>
                      <input type="number" class="form-control">

                      <label for="">VAWC Official Name</label>
                      <input type="text" class="form-control">

                      <!-- <label for="">Issued Date:</label>
                      <input type="date" class="form-control"> -->
                  </div>

                  <div id="death_certificate">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="dead_first_name" placeholder="Name of Dead Person"><br>

                      <label for="">Middle Initial:</label>
                      <input type="text" class="form-control" name="dead_middle_initial"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="dead_last_name"><br>

                      <label for="">Suffix</label>
                      <input type="text" class="form-control" name="dead_suffix"><br>

                      <label for="deathAge">Age:</label>
                      <input type="number" class="form-control" name="dead_age"><br>

                      <label for="">Purok:</label>
                      <input type="text" class="form-control" name="dead_purok"><br>

                      <label for="dateOfDeath">Date of death:</label>
                      <input type="date" class="form-control" name="date_of_death"><br>

                      <label for="timeOfDeath">Time of death:</label>
                      <input type="time" class="form-control" name="time_of_death"><br>

                      <label for="causeOfDeath">Cause of death:</label>
                      <input type="text" class="form-control" name="cause_of_death"><br>

                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="requesting_first_name"
                          placeholder="Name of Requesting Person"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="requesting_middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="requesting_last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="requesting_suffix"><br>

                      <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
                      <input type="text" class="form-control" name="relationship_to_dead_person"><br>

                      <label for="dateRequested">Date requested:</label>
                      <input type="date" class="form-control" name="date_requested"><br>
                  </div>

                  <div id="first_time_job_seeker">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="jobSeekerPurok">Purok:</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <label for="residencyPeriod">Period of Residency:</label>
                      <input type="text" class="form-control" name="residency_period"><br>

                      <!--(Day/Month/Year daw)-->
                      <label for="certificationSignedDate">Signed date:</label>
                      <input type="date" class="form-control" name="signed_date"><br>

                      <!--(Month and Year daw)-->
                      <label for="certificationValidationDate">Validation date:</label>
                      <input type="date" class="form-control" name="validation_date"><br>

                      <!--(Full name daw)-->
                      <label for="">Witness</label>
                      <input type="text" class="form-control" name="witness">
                  </div>

                  <div id="indigency_aics">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Initial:</label>
                      <input type="text" class="form-control" name="middle_initial"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <!-- <label for="">Last Name:</label>
                      <input type="text"  class="form-control" ><br>
                   -->
                      <label for="">Suffix</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="">Purok</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <!-- <label for="">Purpose</label>
                      <input type="text"  class="form-control"  placeholder="Ex. Food Assistance"><br>
                   -->
                      <!-- <label for="">Purpose</label>
                      <input type="text"  class="form-control"  placeholder="Ex. Purpose Reason"><br>
                   -->
                      <label for="indigencyIssuedDate">Issued Date:</label>
                      <input type="date" class="form-control" name="issued_date"><br>
                  </div>

                  <div id="indigency">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="">Age</label>
                      <input type="number" class="form-control" name="age">
                      
                      <label for="">Civil Status</label>
                      <select name=""  id="civil" onchange="updateText()" class="form-control">
                          <option value="">Select Civil Status</option>
                          <option value="m">Married</option>
                          <option value="s">Single</option>
                          <option value="w">Widow</option>
                      </select>

                      <label for="">Purok:</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <!-- <label for="">Purpose:</label>
                      <input type="text" class="form-control"><br> -->

                      
                  </div>

                  <div id="lot_ownership">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="lot_first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="lot_middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="lot_last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="lot_suffix"><br>

                      <label for="">Purok:</label>
                      <input type="text" class="form-control" name="lot_purok"><br>

                      <ul style="list-style: none;">
                          <li>
                              <input type="checkbox">
                              <label for="">Claimant</label>
                          </li>
                          <li>
                              <input type="checkbox">
                              <label for="">Beneficiary</label>
                          </li>
                          <li>
                              <input type="checkbox">
                              <label for="">Actual Occupant</label>
                          </li>
                      </ul>

                      <label for="lotNumber">Lot Number:</label>
                      <input type="number" class="form-control" name="lot_number" placeholder="Lot No. 123"><br>

                      <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
                      <input type="number" class="form-control" name="lot_area_numerical"><br>

                      <!-- <label for="lotAreaWord">Area Measurement (Word Form):</label>
                      <input type="text" class="form-control"  disabled><br>
                   -->
                      <label for="lotLocationAddress">Location Address:</label>
                      <input type="text" class="form-control" name="lot_location_address"><br>

                      
                  </div>

                  <div id="Oathtaking"> ⁡⁢⁣⁢<!-- ‍wala sa database table -->⁡⁡
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="applicantAge">Age:</label>
                      <input type="number" class="form-control" name="age"><br>

                      <label for="applicantResidencyPeriod">Period of Residency:</label>
                      <input type="number" class="form-control" name="residency_period"><br>

                      <label for="applicantSignedDate">Signed date:</label>
                      <input type="date" class="form-control" name="signed_date"><br>

                      <!--For Guardian-->
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="guardian_first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="guardian_middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="guardian_last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="guardian_suffix"><br>

                      <label for="guardianAge">Guardian Age:</label>
                      <input type="number" class="form-control" name="guardian_age"><br>

                      <!-- <label for="guardianOption">Option (Parent/ Guardian):</label>
                      <input type="text" class="form-control" ><br> -->

                      <!-- <label for="applicantName">Name of Applicant:</label>
                      <input type="text" class="form-control" ><br> -->

                      <label for="applicantPurok">Purok:</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <label for="applicantResidencyPeriod2">Period of Residency:</label>
                      <input type="number" class="form-control" name="residency_period"><br>

                      <!-- <label for="guardianFullName2">Guardian Full Name:</label>
                      <input type="text" class="form-control" ><br> -->
                  </div>

                  <div id="transfer_of_residency">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="first_name"><br>

                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" name="middle_name"><br>

                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" name="last_name"><br>

                      <label for="">Suffix:</label>
                      <input type="text" class="form-control" name="suffix"><br>

                      <label for="">Purok:</label>
                      <input type="text" class="form-control" name="purok"><br>

                      <!-- <label for="">Nationality:</label>
                      <input type="text" class="form-control"><br>
                   -->
                      <!-- <label for="">Civil Status:</label>
                      <input type="text" class="form-control"><br> -->

                      <label for="">Previous Address:</label>
                      <input type="text" class="form-control" name="previous_address"><br>

                      <label for="">Current Address:</label>
                      <input type="text" class="form-control" name="current_address"><br>

                      
                  </div>

              </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Certificate</h5>
              <iframe id="myIframe" width="100%" height="100%"></iframe>

            
            </div>
          </div>
        </div>
      </div>
    </div>
          
        </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

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
  <script src="assets/js/main2.js"></script>
  <script>
    // Select all input elements of type "text"
    const inputs = document.querySelectorAll('input[type="text"]');

    // Add an event listener for input events to each input element
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            let value = input.value;
            // Replace all characters that are not letters or spaces
            value = value.replace(/[^a-zA-Z\s]/g, '');
            // Limit the length of the value to 50 characters
            value = value.substring(0, 25);
            input.value = value;
        });
    });
    
    
</script>+


</body>

</html>