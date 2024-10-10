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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Transaction Table</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Full name</th>
                                        <th>Address</th>
                                        <th>Birth Place</th>
                                        <th>Birth Date</th>
                                        <th>Civil Status</th>
                                        <th>Period of Residency</th>
                                        <th>Issued Date</th>
                                        <th>Purpose</th>
                                        <th>Duty Officer Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require 'db.php';

                                    // Get doc_id from the URL
                                    $doc_id = isset($_GET['docId']) ? intval($_GET['docId']) : 0;

                                    if ($doc_id == 1) {
                                        // Fetch data from barangay_clearance table when doc_id is 1
                                        $sql = "SELECT fullname, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name 
                                            FROM barangay_clearance";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                // echo "<td>" . $row["id"] . "</td>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["birthplace"] . "</td>";
                                                echo "<td>" . $row["birthdate"] . "</td>";
                                                echo "<td>" . $row["civil_status"] . "</td>";
                                                echo "<td>" . $row["period_of_residency"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "<td>" . $row["purpose"] . "</td>";
                                                echo "<td>" . $row["duty_officer_name"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='10'><center>No barangay clearances found</center></td></tr>";
                                        }
                                    } else {
                                        // Fetch data from transactions table for other doc_ids
                                        $sql = "SELECT t.id, a.username AS transact_by, dt.doc_name, t.client_trans_id, t.created_at
                                            FROM transactions t
                                            INNER JOIN admin a ON t.transact_by = a.id
                                            INNER JOIN doctype dt ON t.doc_id = dt.id
                                            WHERE t.doc_id = $doc_id";

                                        $result = $conn->query($sql);

                                    }
                                    ?>
                                </tbody>
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