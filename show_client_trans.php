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

    <title>ACI-BT | Transactions</title>
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
    .hover-img {
        border-bottom: 10px solid #F1F04B;
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
        <div class="d-flex pb-2">
            <a href="view_transactions.php" class="d-flex">
            <div class="icon">
                <i class="bi-caret-left-square fs-2 p-2 text-primary"></i>
            </div>
            <div class="back d-flex text-primary align-items-center fs-3">
                Back
            </div>
            </a>
        </div>
            <div class="row fs-4">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-3">Transaction Table</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <?php

                                require('db.php');

                                $id = $_GET['id'];
                                $table = strtolower($_GET['doc_name']);

                                $sql = "SELECT * FROM $table WHERE id = $id";

                                $result = $conn->query($sql);

                                // Check if there are rows returned
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        // For Barangay Certification
                                        if ($table == "barangay_clearance") {
                                            echo "<thead>";
                                            echo "<tr>";
                                            // echo "<th>ID</th>";
                                            echo "<th>Full Name</th>";
                                            echo "<th>Address</th>";
                                            echo "<th>Birthplace</th>";
                                            echo "<th>Birthdate</th>";
                                            echo "<th>Civil Status</th>";
                                            echo "<th>Period of Residency</th>";
                                            echo "<th>Issued Date</th>";
                                            echo "<th>Duty Officer Name</th>";
                                            echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                            echo "<tr>";
                                            // echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["fullname"] . "</td>";
                                            echo "<td>" . $row["address"] . "</td>";
                                            echo "<td>" . $row["birthplace"] . "</td>";
                                            echo "<td>" . $row["birthdate"] . "</td>";
                                            echo "<td>" . $row["civil_status"] . "</td>";
                                            echo "<td>" . $row["period_of_residency"] . "</td>";
                                            echo "<td>" . $row["issued_date"] . "</td>";
                                            echo "<td>" . $row["duty_officer_name"] . "</td>";
                                            echo "</tr>";
                                            echo "</tbody>";

                                        }

                                        // For Business Permit New
                                        if ($table == "business_permit_new") {
                                            echo "<thead>";
                                            echo "<tr>";
                                            // echo "<th>ID</th>";
                                            echo "<th>Business Name</th>";
                                            echo "<th>Business Address</th>";
                                            echo "<th>Business Owner</th>";
                                            echo "<th>Business Type</th>";
                                            echo "<th>Issued Date</th>";
                                            echo "<th>Duty Officer Name</th>";
                                            echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                            echo "<tr>";
                                            // echo "<td>" . $row["id"] . "</td>";
                                            echo "<td>" . $row["business_name"] . "</td>";
                                            echo "<td>" . $row["business_address"] . "</td>";
                                            echo "<td>" . $row["business_owner"] . "</td>";
                                            echo "<td>" . $row["business_type"] . "</td>";
                                            echo "<td>" . $row["issued_date"] . "</td>";
                                            echo "<td>" . $row["duty_officer_name"] . "</td>";
                                            echo "</tr>";
                                            echo "</tbody>";
                                        }
                                        // test
                                        // For Cohabitation
                                        // echo "<tr>";
                                        // echo "<td>" . $row["id"] . "</td>";
                                        // echo "<td>" . $row["fullname_male"] . "</td>";
                                        // echo "<td>" . $row["birthdate_male"] . "</td>";
                                        // echo "<td>" . $row["fullname_female"] . "</td>";
                                        // echo "<td>" . $row["birthdate_female"] . "</td>";
                                        // echo "<td>" . $row["address"] . "</td>";
                                        // echo "<td>" . $row["date_of_marriage"] . "</td>";
                                        // echo "<td>" . $row["years_married"] . "</td>";
                                        // echo "<td>" . $row["issued_date"] . "</td>";
                                        // echo "<td>" . $row["duty_officer_name"] . "</td>";
                                        // echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'><center>No transactions found</center></td></tr>";
                                }

                                // Close the database connection
                                $conn->close();
                                ?>
                            </table>
                            <!-- End Table with stripped rows -->

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
    <script src="assets/js/main.js"></script>

</body>

</html>