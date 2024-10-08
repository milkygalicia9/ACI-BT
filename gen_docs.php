<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

//Include database connection file
include("db.php");

// Check if form is submitted
if (isset($_POST["barangay_clearance"])) {
    // Sanitize and assign form data to variables
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $middle_initial = $conn->real_escape_string($_POST["middle_initial"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $suffix = $conn->real_escape_string($_POST["suffix"]);
    $purok = $conn->real_escape_string($_POST["purok"]);
    $birthplace = $conn->real_escape_string($_POST["birthplace"]);
    $birthdate = $conn->real_escape_string($_POST["birthday"]);
    $civil_status = $conn->real_escape_string($_POST["civil_status"]);
    $period_of_residency = $conn->real_escape_string($_POST["residency_period"]);
    $issued_date = $conn->real_escape_string($_POST["issued_date"]);
    $purpose = $conn->real_escape_string($_POST["purpose"]);
    //$duty_officer_name = $conn->real_escape_string($_POST["duty_officer_full_name"]);

    // Define SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO barangay_clearance (fullname, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $fullname = $first_name . ' ' . $middle_initial . ' ' . $last_name . ' ' . $suffix;
    $fullname = ucwords($fullname);
    $issued_date = date('Y-m-d');
    $duty_officer_name = $_SESSION['username'];
    $stmt->bind_param('sssssssss', $fullname, $purok, $birthplace, $birthdate, $civil_status, $period_of_residency, $issued_date, $purpose, $duty_officer_name);

    // Execute SQL query
    if ($stmt->execute()) {
        echo "New record inserted successfully";
        
        // Fetch admin ID
        $sql = "SELECT id FROM admin WHERE username = ?";
        $admin_stmt = $conn->prepare($sql);
        $admin_stmt->bind_param('s', $_SESSION['username']);
        $admin_stmt->execute();
        $admin_result = $admin_stmt->get_result();
        // Add missing import statement
        if ($admin_result->num_rows > 0) {
          $row = mysqli_fetch_assoc($admin_result);
          $admin_id = $row['id'];

          // Modify SQL query to use COUNT function correctly
          $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, client_trans_id, created_at) VALUES (?, 1, (SELECT COUNT(*) FROM barangay_clearance), NOW())");
          $trans_stmt->bind_param('i', $admin_id);

          if ($trans_stmt->execute()) {
            echo "Transaction record inserted successfully";
          } else {
            echo "Error: " . $trans_stmt->error;
          }

          $trans_stmt->close();
        } else {
          echo "Error: Admin user not found.";
            echo "Error: Admin user not found.";
        }

        $admin_stmt->close();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>


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
        <span class="d-none d-lg-block fs-3">ACI-BT</span>
      </a>
    </div>

    <i class="bi bi-list toggle-sidebar-btn"></i>

    <div class="title h-100 pl-5 w-100 d-flex align-items-center justify-content-between"
      style="padding-left: 20px; padding-top: 8px;">
      <h4 class="text-dark fs-3">Automated Credential Issuance for Barangay Tiniguiban</h4>
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
                    <i class="bi bi-grid text-light fs-5"></i>
                    <span class="fs-5">Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#" style="background-color: #174793;">
                    <i class="bi bi-diagram-3 fs-5"></i><span class="fs-5">Officials</span><i
                        class="bi bi-chevron-down ms-auto fs-5"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="officials.php">
                            <i class="bi bi-person-check-fill text-light fs-5" style="font-size: 12px;"></i><span
                                class="text-light fs-5">Barangay Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="sk.php">
                            <i class="bi bi-person-badge text-light fs-5" style="font-size: 12px;"></i><span
                                class="text-light fs-5">SK Officials</span>
                        </a>
                    </li>
                    <li>
                        <a href="staffs.php">
                            <i class="bi bi-people-fill text-light fs-5" style="font-size: 12px;"></i><span
                                class="text-light fs-5">Barangay Staffs</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed text-light" href="about.php" style="background-color: #174793;">
                    <i class="bi bi-question-circle fs-5"></i>
                    <span class="fs-5">About</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php" style="background-color: #F4F3EF;">
                    <i class="bi bi-power text-dark fs-5"></i>
                    <span class="fs-5">Logout</span>
                </a>
            </li>
        </ul>
    </aside>

  <main id="main" class="main">
    <section class="section">
      <div class="d-flex pb-2 pt-0 mt-0">
        <a href="home.php" class="d-flex">
          <div class="icon">
            <i class="bi-caret-left-square fs-4 p-2 text-primary"></i>
          </div>
          <div class="back d-flex text-primary align-items-center fs-5">
            Back
          </div>
        </a>
      </div>
      <div class="row">
        <div class="col-lg-6" id="fillup">

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
                  /* width: 21.05cm; */
                  height: 32cm;
                  border: none;
                  overflow: hidden !important;
                  transform: scale(0.9);
                  transform-origin: 0 0;
                  /* border: 2px solid black; */
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

                .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px; 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
              </style>

              <!-- General Form Elements -->
              <label for="certificateType"> Select Certificate</label><br>
              <div class="col-md-6">
                <select class="  p-2 text-left" id="certificateType" onchange="toggleFields()" style="cursor: pointer;">
                  <option value="">--select certificates--</option>
                  <option value="barangay_clearance">Barangay Clearance</option>
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
                  <form action="#" method="post" id="form">

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="">Purok:</label>
                    <select class=" p-2 w-25 text-left" name="puroks" id="puroks">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
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

                    <label for="">Birthday:</label>
                    <input type="date" class="form-control" id="birthdate" name="birthday">
                    <br>
                    <label for="">Civil Status:</label>
                    <select class="form-control" onchange="update()" name="civil_status" id="stats">
                      <option value="Married">Married</option>
                      <option value="Widow">Window</option>
                      <option value="Single">Single</option>
                    </select>
                    <br>
                    <label for="">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period" placeholder="Ex. 3 years"><br>

                    <label for="">Purpose:</label>
                    <!-- <input type="text" class="form-control" name="purpose"> -->
                    <input type="text" name="purpose" class="form-control" id="" cols="30" rows="10"
                      placeholder="Ex. Undecided"></input><br>

                    <!-- <label for="">Duty Officer Full Name:</label>
                  <input type="textarea" class="form-control" name="duty_officer_full_name" placeholder="Ex. Franz Miguel"> -->
                    <button name="barangay_clearance" id="coco" onclick="printIframe()" type="submit">Print</button>
                    <input type="date" name="issueddate" style="display:none; position:absolute;"> 

                  </form>
                </div>

                <div id="business_permit_new">
                  <form action="#" method="post" id="form">

                    <label for="businessName">Business name/ Trade Activity:</label>
                    <input type="text" name="businessName" class="form-control" name="business_name"><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
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
                    <button name="business_permit_new" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>






                <div id="business_permit_renew">
                  <form action="#" method="post" id="form">
                    <label for="businessName">Business name/ Trade Activity:</label>
                    <input type="text" class="form-control" name="business_name_renew"><br>

                    <label for="">Purok:</label><br>
                    <select name="" id="purok">
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
                    <input type="text" class="form-control" name="manager_operator_renew">

                    <label for="">Address(Manager / Operator)</label>
                    <input type="text" class="form-control" name="manager_operator_address_renew">

                    <!-- <label for="businessIssuedDate">Issued Date:</label>
                  <input type="date" class="form-control" name="business_issued_date"><br> -->
                    <button name="business_permit_renew" onclick="printIframe()" type="submit">Print</button>







                  </form>
                </div>

                <div id="certificate_of_employability">
                  <form action="#" method="post" id="form">

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="">Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Ex. 20">

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->

                    <label for="">Duty Officer Full Name:</label>
                    <input type="text" name="Duty_Officer" class="form-control">
                    <button name="certificate_of_employability" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="certificate_of_income">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <br>
                    <label for="">Amount (In Numeric Form)</label>
                    <input type="number" name="amount" class="form-control" maxlength="10"><br>

                    <!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->

                    <label for="">Duty Officer Full Name:</label>
                    <input type="text" class="form-control">
                    <button name="certificate_of_income" onclick="printIframe()" type="submit">Print</button>
                  </form>
                </div>

                <div id="cohabitation">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. J"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="cohabitant1Birthdate">Birthdate:</label>
                    <input type="date" class="form-control" name="birth_date"><br>

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name1" placeholder="Ex. Barbie"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial1" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name1" placeholder="Ex. J"><br>


                    <label for="cohabitant1Birthdate">Birthdate:</label>
                    <input type="date" class="form-control" name="cohabitant_birth_date"><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>
                    <!--Month and Year daw-->
                    <label for="dateOfMarriage">Period of marriage:</label>
                    <input type="month" onchange="updateText()" id="month" class="form-control"
                      name="date_of_marriage"><br>

                    <label for="">Duty Officer Full Name</label>
                    <input type="text" class="form-control" name="duty_officer_full_name">
                  </form>
                  <button name="cohabitation" onclick="printIframe()" type="submit">Print</button>

                </div>

                <div id="complaint_certificate">
                  <form action="#" method="post" id="form">
                    <!--With honorifics-->
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Age</label>
                    <input type="number" name="age" class="form-control">

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="">Date Filed:</label>
                    <input type="date" class="form-control">

                    <!--Respondent Full Name-->
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_namec" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initialc" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_namec" placeholder="Ex. Dela Cruz"><br>



                    <label for="">Suffix:</label>
                    <input type="text" class="form-control"><br>

                    <label for="">Case Number:</label>
                    <input type="number" class="form-control">

                    <label for="">VAWC Official Name</label>
                    <input type="text" class="form-control">
                    <button name="complaint_certificate" onclick="printIframe()" type="submit">Print</button>
                  </form>
                  <!-- <label for="">Issued Date:</label>
                  <input type="date" class="form-control"> -->

                </div>

                <div id="death_certificate">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>
                    <label for="deathAge">Age:</label>
                    <input type="number" class="form-control" name="dead_age"><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="dateOfDeath">Date of death:</label>
                    <input type="date" class="form-control" name="date_of_death"><br>

                    <label for="timeOfDeath">Time of death:</label>
                    <input type="time" class="form-control" name="time_of_death"><br>

                    <label for="causeOfDeath">Cause of death:</label>
                    <input type="text" class="form-control" name="cause_of_death"><br>

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_named" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initiald" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_named" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
                    <input type="text" class="form-control" name="relationship_to_dead_person"><br>

                    <label for="dateRequested">Date requested:</label>
                    <input type="date" class="form-control" name="date_requested"><br>
                    <button name="death_certificate" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="first_time_job_seeker">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

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
                    <button name="first_time_job_seeker" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="indigency_aics">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="indigencyIssuedDate">Issued Date:</label>
                    <input type="date" class="form-control" name="issued_date"><br>
                    <button name="indigency_aics" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="indigency">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Age</label>
                    <input type="number" class="form-control" name="age">

                    <label for="">Civil Status</label>
                    <select name="" id="civil" onchange="updateText()" class="form-control">
                      <option value="">Select Civil Status</option>
                      <option value="m">Married</option>
                      <option value="s">Single</option>
                      <option value="w">Widow</option>
                    </select>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select><br>
                    <button name="indigency" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="lot_ownership">
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>

                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

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
                    <button name="lot_ownership" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="Oathtaking"> ⁡⁢⁣⁢<!-- ‍wala sa database table -->⁡⁡
                  <form action="#" method="post" id="form">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>



                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

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
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="guardianAge">Guardian Age:</label>
                    <input type="number" class="form-control" name="guardian_age"><br>

                    <!-- <label for="guardianOption">Option (Parent/ Guardian):</label>
                  <input type="text" class="form-control" ><br> -->

                    <!-- <label for="applicantName">Name of Applicant:</label>
                  <input type="text" class="form-control" ><br> -->

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="applicantResidencyPeriod2">Period of Residency:</label>
                    <input type="number" class="form-control" name="residency_period"><br>

                    <!-- <label for="guardianFullName2">Guardian Full Name:</label>
                  <input type="text" class="form-control" ><br> -->
                    <button name="Oathtaking" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>

                <div id="transfer_of_residency">
                  <form action="#" method="post" id="form">

                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ex. Juan"><br>

                    <label for="">Middle Initial:</label>
                    <input type="text" class="form-control" name="middle_initial" placeholder="Ex. J"><br>

                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Ex. Dela Cruz"><br>


                    <label for="">Suffix:</label>
                    <!-- <input type="text" class="form-control" name="suffix" placeholder=""><br> -->
                    <select class=" text-left" style="width: 8%;" name="suffix" id="suffixs">
                      <option value="">N/A</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                    </select><br><br>

                    <label for="">Purok:</label><br>
                    <select name="puroks" id="puroks" onchange="update()">
                      <option value="Centro">Centro</option>
                      <option value="Hurawan">Huwaran</option>
                      <option value="Kaakbayan">Kaakbayan</option>
                      <option value="New Princesa"> New Princesa</option>
                      <option value="San Franciso I">San Franciso I</option>
                      <option value="San Franciso II">San Franciso II</option>
                      <option value="Sandiwa">Sandiwa</option>
                      <option value="Trece">Trece</option>
                      <option value="Uha">UHA</option>
                    </select>

                    <label for="">Previous Address:</label>
                    <input type="text" class="form-control" name="previous_address"><br>

                    <label for="">Current Address:</label>
                    <input type="text" class="form-control" name="current_address"><br>
                    <button name="transfer_of_residency" onclick="printIframe()" type="submit">Print</button>

                  </form>
                </div>
              </div>
              <!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="card bg-light">
            <div class="card-body d-flex justify-content-center align-items-center">
              <h5 class="card-title">View Certificate</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
              <iframe id="myIframe" class="col-lg-12" width="100%" height="100%" style="border: none;"></iframe>
            </div>
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <h5 class="card-title">View Certificate</h5>
            <?php
            if (isset($_POST["barangay_clearance"])) {
              echo "<p>business_permit_new</p>";
            }

            ?>
          </div>
          <div class="card-body d-flex justify-content-center align-items-center">
            <iframe id="myIframe" class="col-lg-12" width="100%" height="100%" style="border: none;"></iframe>
          </div>
        </div>

      </div>
      </div>
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
  <script>

  </script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/main2.js"></script>
  <script>
    // Select all input elements of type "text"
    const today = new Date();
        const formattedDate = today.toISOString().split('T')[0];

        document.getElementById('issueddate').value = formattedDate;

  </script>
</body>

</html>