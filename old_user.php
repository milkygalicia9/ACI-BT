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
        <a href="home.php" class="d-flex">
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
          <div class="card" id="transactions">
            <div class="card-body">
              <h5 class="card-title fs-3">Transaction Table</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <!-- <th>ID</th> -->
                    <!-- <th>Transacted by</th> -->
                    <th>Document Name</th>
                    <th>Client Name</th>
                    <!-- <th>Client Transaction ID</th> -->
                    <!-- <th>Created At</th> -->
                    <th>Action</th>
                    <th hidden></th>
                    <th hidden></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require 'db.php';

                  // $sql = "SELECT * FROM transactions";
                  // $sql = "SELECT t.id, a.username AS transact_by, dt.doc_name, t.client_trans_id, t.created_at
                  //                                     FROM transactions t
                  //                                     INNER JOIN admin a ON t.transact_by = a.id
                  //                                     INNER JOIN doctype dt ON t.doc_id = dt.id";

                  $sql = "SELECT t.id, a.username AS transact_by, dt.doc_name, 
                    CASE 
                      WHEN dt.id = 1 THEN bc.first_name
                      WHEN dt.id = 2 THEN bp.manager
                      WHEN dt.id = 3 THEN bpr.manager
                      WHEN dt.id = 4 THEN coe.fullname
                      ELSE 'Unknown' 
                    END AS first_name, 
                    CASE 
                      WHEN dt.id = 1 THEN bc.middle_name
                      WHEN dt.id = 2 THEN bp.manager
                      WHEN dt.id = 3 THEN bpr.manager
                      WHEN dt.id = 4 THEN coe.fullname
                      ELSE 'Unknown' 
                    END AS middle_name,
                    CASE 
                      WHEN dt.id = 1 THEN bc.last_name
                      WHEN dt.id = 2 THEN bp.manager
                      WHEN dt.id = 3 THEN bpr.manager
                      WHEN dt.id = 4 THEN coe.fullname
                      ELSE 'Unknown' 
                    END AS last_name, 
                    CASE
                      WHEN dt.id = 1 THEN concat(bc.first_name, ' ', bc.middle_name, ' ', bc.last_name)
                      WHEN dt.id = 2 THEN bp.manager
                      WHEN dt.id = 3 THEN bpr.manager
                      WHEN dt.id = 4 THEN coe.fullname
                      ELSE 'Unknown'
                    END AS full_name,
                    t.client_trans_id, t.created_at
                    FROM transactions t
                    INNER JOIN admin a ON t.transact_by = a.id
                    INNER JOIN doctype dt ON t.doc_id = dt.id
                    LEFT JOIN barangay_clearance bc ON t.client_trans_id = bc.id AND dt.id = 1
                    LEFT JOIN business_permit_new bp ON t.client_trans_id = bp.id AND dt.id = 2
                    LEFT JOIN business_permit_renew bpr ON  t.client_trans_id = bpr.id AND dt.id = 3
                    LEFT JOIN certificate_of_employability coe ON t.client_trans_id = coe.id AND dt.id = 4";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      // echo "<td>" . $row["id"] . "</td>";
                    //   echo "<td>" . $row["transact_by"] . "</td>";
                      echo "<td>" . $row["doc_name"] . "</td>";
                      echo "<td>" . $row["full_name"] . "</td>";
                    //   echo "<td>" . $row["client_trans_id"] . "</td>";
                    //   echo "<td>" . $row["created_at"] . "</td>";
                      echo "<td><a href=" . "gen_docs_mrcxng.php?client_trans_id=" . $row["client_trans_id"] . "&doc_name=" . str_replace(" ", "_", $row["doc_name"]) . "><button type=" . "submit" . ">SELECT</button></a></td>";
                      echo "<td hidden></td>";
                      echo "<td hidden></td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='5'><center>No transactions found</center></td></tr>";
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