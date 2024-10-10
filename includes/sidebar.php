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
        <a class="nav-link collapsed text-light" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"
            style="background-color: #174793;">
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