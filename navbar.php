<head>
  <link rel="stylesheet" href="./styles/navbar.css" />
</head>
<nav class="navbar navbar-expand-lg bg-white box-shadow-2rem-black px-2 px-lg-5 py-1">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center py-0 text-center mx-auto" href="index.php">
                <img src="./images/index/logo.png" alt="Logo" class="logo-img d-none d-lg-block" />
                <img src="./images/index/logo.png" alt="Logo" class="logo-img-small d-block d-lg-none" />
            </a>

            <!-- Navbar Toggler (for Mobile View) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-lg-3 rounded-3">
                            <a class="nav-link montserrat-regular" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-lg-3 rounded-3 dropdown">
                            <a class="nav-link montserrat-regular" href="./services.php" role="button" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu rounded-4 mx-auto py-3 px-2 my-0">
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular" href="./services/medical_coding.php">Medical
                                        Coding</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular"
                                        href="./services/medical_record_review.php">Medical Record Review</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular"
                                        href="./services/medical_scribing.php">Medical Scribing</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular"
                                        href="./services/medical_transcription.php">Medical Transcription</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular"
                                        href="./services/pharmacovigilance.php">Pharmacovigilance</a>
                                </li>
                                <li>
                                    <a class="dropdown-item rounded-5 my-1 montserrat-regular"
                                        href="./services/revenue_cycle_management.php">Revenue Cycle Management</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mx-lg-3 rounded-3">
                            <a class="nav-link montserrat-regular" href="./case_study.php">Case Study</a>
                        </li>
                        <li class="nav-item mx-lg-3 rounded-3">
                            <a class="nav-link montserrat-regular" href="./about_us.php">About Us</a>
                        </li>
                        <li class="nav-item mx-lg-3 rounded-3">
                            <a class="nav-link montserrat-regular" href="./resources.php">Resources</a>
                        </li>
                        <li class="nav-item mx-lg-3 rounded-3">
                            <a class="nav-link montserrat-regular" href="./contact_us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>

            <!-- Social Media Icons -->
            <div class="fs-5 social-media-parent d-none d-lg-block">
                <a href="#" class="social-media rounded-3 text-decoration-none g-plus" target="_blank">
                    <i class="fab fa-google-plus-square"></i>
                </a>
                <a href="#" class="social-media rounded-3 text-decoration-none facebook" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="social-media rounded-3 text-decoration-none linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="social-media rounded-3 text-decoration-none instagram" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-media rounded-3 text-decoration-none twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </nav>