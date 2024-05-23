<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACI-BT | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/cap-log.png" rel="icon">


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
        margin-top: -90px;
        border: 5px solid white;
    }
</style>


<body style="background-color: #F4F3EF;">
    <main>
        <div class="container p-0">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card" style="height: 740px;">
                                <!-- <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p> -->
                                <div class="pb-5">
                                    <div class="image">
                                        <img src="./assets/img/tiniguiban.jpg" alt="..." class="img-fluid rounded"
                                            style="height: 240px; width: 100%;">
                                    </div>
                                    <div class="card-body pb-5">
                                        <div class="author logo-overlap d-flex flex-column align-items-center">
                                            <img class="avatar border-gray m-2 rounded-circle"
                                                src="./assets/img/logo.jpg" alt="..."
                                                style="height: 120%; margin: 20;">
                                            <h5 class="title fs-2" style="color: #729ED9;">Welcome to ACI-BT!</h5>
                                            <label for="" class="fs-2">Login</label>
                                        </div>
                                    </div>
                                </div>
                                <form class="row g-3 needs-validation p-5 pt-4" action="login_process.php" method="post"
                                    novalidate>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label fs-5">Username</label>
                                        <div class="input-group has-validation" style="height: 50px;">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="yourUsername"
                                                placeholder="Enter Username" required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label fs-5">Password</label>
                                        <div class="input-group has-validation" style="height: 50px;">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="bi bi-lock"></i></span>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 fs-4" type="submit" style="height: 50px;">Login</button>
                                    </div>
                                </form>
                            </div>
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