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
    //$issued_date = $conn->real_escape_string($_POST["issued_date"]);
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
            $trans_stmt = $conn->prepare("INSERT INTO transactions (transact_by, doc_id, fullname, client_trans_id, created_at) VALUES (?, 1, ?, (SELECT COUNT(*) FROM barangay_clearance), NOW())");
            $trans_stmt->bind_param('is', $admin_id, $fullname);

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

<style>
    .iframe-container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }

    .iframe-container iframe {
        width: 21.05cm;
        height: 30cm;
        border: none;
        box-sizing: border-box;
    }

    @media print {
        iframe {
            border: none;
            width: 21cm !important;
            height: 29.7cm !important;
        }
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

    form {
        font-size: .9em;
    }

    select {
        width: 100%;
        cursor: pointer;
    }

    .card {
        border: none;
        position: relative;
        border-radius: 10px;
        background: #efefef;
        box-shadow: 5px 5px 4px #c8d0e7, -1px -1px 3px #fff;
    }
</style>

<body style="background-color: #F4F3EF;">
    <header id="header" class="header fixed-top d-flex align-items-center w-100"
        style="background-color: #F4F3EF; padding: 0">
        <?php include 'includes/header.php' ?>
    </header>

    <aside id="sidebar" class="sidebar" style="background-color: #174793; padding: 0;">
        <?php include 'includes/sidebar.php' ?>
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
                <div class="col-lg-4" id="fillup">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fillup Certificate</h5>
                            <!-- General Form Elements -->
                            <label for="certificateType"> Select Certificate</label><br>
                            <div class="col-md-12">
                                <select class="p-2 text-left form-control" id="certificateType"
                                    onchange="toggleFields()">
                                    <option value="">--select certificates--</option>
                                    <option value="barangay_clearance">Barangay Clearance</option>
                                    <option value="business_permit_new">Barangay Business Permit New</option>
                                    <option value="business_permit_renew">Barangay Business Permit Renew</option>
                                    <option value="certificate_of_employability">Certificate Of Employability</option>
                                    <option value="certificate_of_income">Certificate of Income</option>
                                    <option value="cohabitation">Certificate of Cohabitation</option>
                                    <option value="complaint_certificate">Complaint Certificate</option>
                                    <option value="death_certificate">Death Certificate</option>
                                    <option value="first_time_job_seeker">Barangay Certification (First time Job Seeker)
                                    </option>
                                    <option value="indigency">Indigency</option>
                                    <option value="indigency_aics">Indigency (AICS)</option>
                                    <option value="lot_ownership">Lot Ownership</option>
                                    <option value="Oathtaking">Oathtaking</option>
                                    <option value="transfer_of_residency">Certificate of Transfer</option>
                                </select>
                            </div>
                            <hr>
                            <div class="certificates">
                                <div id="barangay_clearance">
                                    <?php include 'forms/barangay_clearance.php' ?>
                                </div>

                                <div id="business_permit_new">
                                    <?php include 'forms/business_permit_new.php' ?>
                                </div>

                                <div id="business_permit_renew">
                                    <?php include 'forms/business_permit_renew.php' ?>
                                </div>

                                <div id="certificate_of_employability">
                                    <?php include 'forms/certificate_of_employability.php' ?>
                                </div>

                                <div id="certificate_of_income">
                                    <?php include 'forms/certificate_of_income.php' ?>
                                </div>

                                <div id="cohabitation">
                                    <?php include 'forms/cohabilitation.php' ?>
                                </div>

                                <div id="complaint_certificate">
                                    <?php include 'forms/complaint_certificate.php' ?>
                                </div>

                                <div id="death_certificate">
                                    <?php include 'forms/death_certificate.php' ?>
                                </div>

                                <div id="first_time_job_seeker">
                                    <?php include 'forms/first_time_job_seeker.php' ?>
                                </div>

                                <div id="indigency_aics">
                                    <?php include 'forms/indigency_aics.php' ?>
                                </div>

                                <div id="indigency">
                                    <?php include 'forms/indigency.php' ?>
                                </div>

                                <div id="lot_ownership">
                                    <?php include 'forms/lot_ownership.php' ?>
                                </div>

                                <div id="Oathtaking"> ⁡⁢⁣⁢<!-- ‍wala sa database table -->⁡⁡
                                    <?php include 'forms/Oathtaking.php' ?>
                                </div>

                                <div id="transfer_of_residency">
                                    <?php include 'forms/transfer_of_residency.php' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="">
                            <h5 class="card-title" style="padding: 20px;">View Certificate</h5>
                            <div class="iframe-container">
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