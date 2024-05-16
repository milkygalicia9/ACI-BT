<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ACI-BT | Generate Documents</title>
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
      <li class="nav-item">
        <a class="nav-link text-light" href="home.php" style="background-color: #174793;">
          <i class="bi bi-grid text-light"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"
          style="background-color: #174793;">
          <i class="bi bi-menu-button-wide"></i><span>Officials</span><i class="bi bi-chevron-down ms-auto"></i>
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
        <a class="nav-link collapsed" href="login.php" style="background-color: #F4F3EF;">
          <i class="bi bi-question-circle"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>

  </aside>


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
<<<<<<< HEAD
                <select class="  p-2 text-left" id="certificateType" onchange="toggleFields()" style="cursor: pointer;">
=======
                  <select class=" form-control p-2 text-center" id="certificateType" onchange="toggleFields()"
                    style="cursor: pointer;">
>>>>>>> 8d78131249e70238ad5774807bc327751ebd03dd
                    <option value="">--select certificates--</option>
                    <option value="barangay_clearance">Barangay Clearance</option>
                    <option value="business_permit_new">Barangay Business Permit New</option>
                    <option value="business_permit_renew">Barangay Business Permit Renew</option>
                    <option value="certificate_of_employability">Certificate Of Employability
                    </option>
                    <option value="certificate_of_income">Certificate of Income</option>
                    <option value="cohabitation">Certificate of Cohabitation</option>
                    <option value="complaint_certificate">Complaint Certificate</option>
                    <option value="death_certificate">Death Certificate</option>
                    <option value="first_time_job_seeker">Barangay Certification (First time Job
                      Seeker)</option>
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

<<<<<<< HEAD
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
=======
                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class="form-control text-center" style="width: 8%;" name="" id="">
                      <option value="">Jr</option>
                      <option value="">Sr</option>
                      <option value="">I</option>
                      <option value="">II</option>
                      <option value="">III</option>
                    </select><br>
                    <label for="">Purok:</label><br>
                    <select class="form-control p-2 w-25 text-left" name="" id="">
>>>>>>> 8d78131249e70238ad5774807bc327751ebd03dd
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
                    <input type="text" class="form-control" name="birthplace"
                      placeholder="Ex. Puerto Princesa City"><br>

<<<<<<< HEAD
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
=======
                    <label for="">Birthday:</label>
                    <input type="date" class="form-control" name="birthday">
                    <br>
                    <label for="">Civil Status:</label>
                    <select class="form-control" onchange="update()" name="" id="gg">
                      <option value="Maried">Marriied</option>
                      <option value="Widow">window</option>
                      <option value="Single">singol</option>
                    </select>
                    <br>
                    <label for="">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period" placeholder="Ex. 3 years"><br>
>>>>>>> 8d78131249e70238ad5774807bc327751ebd03dd

                    <label for="">Purpose:</label>
                    <!-- <input type="text" class="form-control" name="purpose"> -->
                    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
                      placeholder="Ex. Undecided"></input><br>

                    <!-- <label for="">Duty Officer Full Name:</label>
                  <input type="textarea" class="form-control" name="duty_officer_full_name" placeholder="Ex. Franz Miguel"> -->

                  </div>

                  <div id="business_permit_new">
                    <form action="">
                      <label for="businessName">Business name/ Trade Activity:</label>
                      <input type="text" class="form-control" name="business_name"><br>

                      <label for="">Purok:</label><br>
<<<<<<< HEAD
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
=======
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
>>>>>>> 8d78131249e70238ad5774807bc327751ebd03dd
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
                    <input type="text" class="form-control" name="dead_first_name"
                      placeholder="Name of Dead Person"><br>

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
                    <select name="" id="civil" onchange="updateText()" class="form-control">
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
  <script src="assets/js/main2.js"></script>
  <script>
    // Select all input elements of type "text"
    const inputs = document.querySelectorAll('input[type="text"]');

    // Add an event listener for input events to each input element
    inputs.forEach(input => {
      input.addEventListener('input', function () {
        let value = input.value;
        // Replace all characters that are not letters or spaces
        value = value.replace(/[^a-zA-Z\s]/g, '');
        // Limit the length of the value to 50 characters
        value = value.substring(0, 25);
        input.value = value;
      });
    });


  </script>
</body>

</html>