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

    <title>ACI-BT | More Info</title>
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
                            <h5 class="card-title">More Info</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <?php
                                        require 'db.php';

                                        // Get doc_id from the URL
                                        $doc_id = isset($_GET['docId']) ? intval($_GET['docId']) : 0;

                                        if ($doc_id == 1) {
                                            echo "
                                            <th>Full name</th>
                                            <th>Address</th>
                                            <th>Birth Place</th>
                                            <th>Birth Date</th>
                                            <th>Civil Status</th>
                                            <th>Period of Residency</th>
                                            <th>Issued Date</th>
                                            <th>Purpose</th>
                                            <th>Duty Officer Name</th>
                                        ";
                                        } elseif ($doc_id == 2 || $doc_id == 3) {
                                            echo "
                                            <th>Business Name</th>
                                            <th>Address</th>
                                            <th>Issued Date</th>
                                        ";
                                        } elseif ($doc_id == 4) {
                                            echo "
                                            <th>Fullname (Male)</th>
                                            <th>Birthdate (Male)</th>
                                            <th>Fullname (Female)</th>
                                            <th>Birthdate (Female)</th>
                                            <th>Address</th>
                                            <th>Date of Marriage</th>
                                            <th>Years Married</th>
                                            <th>Issued Date</th>
                                            <th>Duty Officer Name</th>
                                        ";
                                        } elseif ($doc_id == 5) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Issued Date</th>
                                            <th>Duty Officer Name</th>
                                        ";
                                        } elseif ($doc_id == 6) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Age</th>
                                            <th>Civil Status</th>
                                            <th>Address</th>
                                            <th>Purpose</th>
                                            <th>Issued Date</th>
                                        ";
                                        } elseif ($doc_id == 7) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Issued Date</th>
                                            <th>Transaction ID</th>
                                        ";
                                        } elseif ($doc_id == 8) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Income (Numeric)</th>
                                            <th>Income (Words)</th>
                                            <th>Issued Date</th>
                                            <th>Transaction ID</th>
                                        ";
                                        } elseif ($doc_id == 9) {
                                            echo "
                                            <th>Fullname of Complainant</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Date of Complain</th>
                                            <th>Fullname of Respondent</th>
                                            <th>Case No</th>
                                            <th>Officer in Charge</th>
                                            <th>Issued Date</th>
                                        ";
                                        } elseif ($doc_id == 10) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Date of Death</th>
                                            <th>Time of Death</th>
                                            <th>Requester Fullname</th>
                                            <th>Relationship</th>
                                            <th>Date Requested</th>
                                        ";
                                        } elseif ($doc_id == 11) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Period of Residency</th>
                                            <th>Signed Date</th>
                                            <th>Validation Date</th>
                                            <th>Witness</th>
                                            <th>Age</th>
                                            <th>Consent Fullname</th>
                                            <th>Relationship</th>
                                            <th>Consent Age</th>
                                            <th>Consent Address</th>
                                            <th>Consent Period of Residency</th>
                                            <th>Duty Officer</th>
                                        ";
                                        } elseif ($doc_id == 12) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Claimant</th>
                                            <th>Beneficiary</th>
                                            <th>Actual Occupant</th>
                                            <th>Lot No</th>
                                            <th>Area Measurement (Num)</th>
                                            <th>Area Measurement (Words)</th>
                                            <th>Location Address</th>
                                            <th>Issued Date</th>
                                        ";
                                        } elseif ($doc_id == 13) {
                                            echo "
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Nationality</th>
                                            <th>Civil Status</th>
                                            <th>Previous Address</th>
                                            <th>Purpose</th>
                                            <th>Issued Date</th>
                                        ";
                                        } else {
                                            echo "
                                            <th>ID</th>
                                            <th>Transacted By</th>
                                            <th>Document Name</th>
                                            <th>Client Transaction ID</th>
                                            <th>Created At</th>
                                        ";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($doc_id == 1) {
                                        // Fetch data from barangay_clearance table when doc_id is 1
                                        $sql = "SELECT fullname, address, birthplace, birthdate, civil_status, period_of_residency, issued_date, purpose, duty_officer_name 
                                        FROM barangay_clearance";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
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
                                            echo "<tr><td colspan='9'><center>No barangay clearances found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 2) {
                                        // Fetch data from business_permit_new table when doc_id is 2
                                        $sql = "SELECT business_name, address, issued_date FROM business_permit_new";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["business_name"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'><center>No new business permits found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 3) {
                                        // Fetch data from business_permit_renew table when doc_id is 3
                                        $sql = "SELECT business_name, address, issued_date FROM business_permit_renew";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["business_name"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'><center>No renewed business permits found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 4) {
                                        // Fetch data from cohabitation table when doc_id is 4
                                        $sql = "SELECT fullname_male, birthdate_male, fullname_female, birthdate_female, address, date_of_marriage, years_married, issued_date, duty_officer_name 
                                            FROM cohabitation";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname_male"] . "</td>";
                                                echo "<td>" . $row["birthdate_male"] . "</td>";
                                                echo "<td>" . $row["fullname_female"] . "</td>";
                                                echo "<td>" . $row["birthdate_female"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["date_of_marriage"] . "</td>";
                                                echo "<td>" . $row["years_married"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "<td>" . $row["duty_officer_name"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='9'><center>No cohabitation records found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 5) {
                                        // Fetch data from certificate_of_employability table when doc_id is 5
                                        $sql = "SELECT fullname, age, address, issued_date, duty_officer_name 
                                            FROM certificate_of_employability";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "<td>" . $row["duty_officer_name"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'><center>No employability certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 6) {
                                        // Fetch data from indigency table when doc_id is 6
                                        $sql = "SELECT fullname, age, civil_status, address, purpose, issued_date 
                                            FROM indigency";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["civil_status"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["purpose"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='6'><center>No indigency certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 7) {
                                        // Fetch data from indigency_aics table when doc_id is 7
                                        $sql = "SELECT fullname, address, issued_date, transaction_id 
                                            FROM indigency_aics";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "<td>" . $row["transaction_id"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><center>No indigency (AICS) certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 8) {
                                        // Fetch data from certificate_of_income table when doc_id is 8
                                        $sql = "SELECT fullname, address, income_num, income_words, issued_date, transaction_id 
                                            FROM certificate_of_income";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["income_num"] . "</td>";
                                                echo "<td>" . $row["income_words"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "<td>" . $row["transaction_id"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='6'><center>No certificates of income found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 9) {
                                        // Fetch data from complaint_certificate table when doc_id is 9
                                        $sql = "SELECT fullname_of_complainant, age, address, date_of_complain, fullname_of_respondent, case_no, officer_in_charge, issued_date 
                                            FROM complaint_certificate";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname_of_complainant"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["date_of_complain"] . "</td>";
                                                echo "<td>" . $row["fullname_of_respondent"] . "</td>";
                                                echo "<td>" . $row["case_no"] . "</td>";
                                                echo "<td>" . $row["officer_in_charge"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='8'><center>No complaint certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 10) {
                                        // Fetch data from death_certificate table when doc_id is 10
                                        $sql = "SELECT fullname, age, address, date_of_death, time_of_date, req_fullname, relationship, date_requested 
                                            FROM death_certificate";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["date_of_death"] . "</td>";
                                                echo "<td>" . $row["time_of_date"] . "</td>";
                                                echo "<td>" . $row["req_fullname"] . "</td>";
                                                echo "<td>" . $row["relationship"] . "</td>";
                                                echo "<td>" . $row["date_requested"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='8'><center>No death certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 11) {
                                        // Fetch data from first_time_job_seeker table when doc_id is 11
                                        $sql = "SELECT fullname, address, period_of_residency, signed_date, validation_date, witness, age, consent_fullname, relationship, consent_age, consent_address, consent_period_of_recidency, duty_officer 
                                            FROM first_time_job_seeker";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["period_of_residency"] . "</td>";
                                                echo "<td>" . $row["signed_date"] . "</td>";
                                                echo "<td>" . $row["validation_date"] . "</td>";
                                                echo "<td>" . $row["witness"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["consent_fullname"] . "</td>";
                                                echo "<td>" . $row["relationship"] . "</td>";
                                                echo "<td>" . $row["consent_age"] . "</td>";
                                                echo "<td>" . $row["consent_address"] . "</td>";
                                                echo "<td>" . $row["consent_period_of_recidency"] . "</td>";
                                                echo "<td>" . $row["duty_officer"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='13'><center>No first time job seeker certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 12) {
                                        // Fetch data from lot_ownership table when doc_id is 12
                                        $sql = "SELECT fullname, address, claimant, beneficiary, actual_occupant, lot_no, area_measurement_num, area_measurement_words, loc_address, issued_date 
                                            FROM lot_ownership";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["claimant"] . "</td>";
                                                echo "<td>" . $row["beneficiary"] . "</td>";
                                                echo "<td>" . $row["actual_occupant"] . "</td>";
                                                echo "<td>" . $row["lot_no"] . "</td>";
                                                echo "<td>" . $row["area_measurement_num"] . "</td>";
                                                echo "<td>" . $row["area_measurement_words"] . "</td>";
                                                echo "<td>" . $row["loc_address"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='10'><center>No lot ownership certificates found</center></td></tr>";
                                        }
                                    } elseif ($doc_id == 13) {
                                        // Fetch data from transfer_of_residency table when doc_id is 13
                                        $sql = "SELECT fullname, address, nationality, civil_status, previous_address, purpose, issued_date 
                                            FROM transfer_of_residency";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["fullname"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["nationality"] . "</td>";
                                                echo "<td>" . $row["civil_status"] . "</td>";
                                                echo "<td>" . $row["previous_address"] . "</td>";
                                                echo "<td>" . $row["purpose"] . "</td>";
                                                echo "<td>" . $row["issued_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'><center>No transfer of residency certificates found</center></td></tr>";
                                        }
                                    } else {
                                        // Default case to handle all other doc_id values
                                        $sql = "SELECT id, transacted_by, document_name, client_transaction_id, created_at 
                                            FROM transactions WHERE doc_id = $doc_id";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["id"] . "</td>";
                                                echo "<td>" . $row["transacted_by"] . "</td>";
                                                echo "<td>" . $row["document_name"] . "</td>";
                                                echo "<td>" . $row["client_transaction_id"] . "</td>";
                                                echo "<td>" . $row["created_at"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'><center>No transactions found</center></td></tr>";
                                        }
                                    }

                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>






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