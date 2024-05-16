<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACI-BT | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i"
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
</head>

<style>
    .logo-overlap {
        height: 150px;
        margin-top: -60px;
        /* Adjust this value as needed */
        border: 5px solid white;
        /* Optional: adds a border to make the logo stand out */
    }
</style>


<body style="background-color: #F4F3EF;">
    <main>
        <div class="container p-0">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card">
                                <!-- <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p> -->
                                <div class="pb-0">
                                    <div class="image">
                                        <img src="./assets/img/tiniguiban.jpg" alt="..." class="img-fluid"
                                            style="height: 160px; width: 100%;">
                                    </div>
                                    <div class="card-body">
                                        <div class="author logo-overlap d-flex flex-column align-items-center">
                                            <img class="avatar border-gray m-2 rounded-circle"
                                                src="./assets/img/logo.jpg" alt="..."
                                                style="height: 100px; margin: 20;">
                                            <h5 class="title" style="color: #729ED9;">Welcome to ACI-BT!</h5>
                                            <label for="">Login</label>
                                        </div>
                                    </div>
                                </div>

                                <form class="row g-3 needs-validation p-3 pt-0" action="login_process.php" method="post"
                                    novalidate>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="yourUsername"
                                                required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="pages-register.html">Create
                                                an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="credits text-center">
                            Designed by <a href="about.html">&copy; Cayabyabers</a>
                        </div>
                    </div>
            </section>
        </div>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>