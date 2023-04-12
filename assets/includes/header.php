<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zzaz</title>
    <link rel="icon" type="x-icon/image" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner-bg">
        <!-- header  -->
        <!-- desktop nav  -->
        <div id="dynamic" class="bg-transparent d-none d-lg-block"> 
            <div class="container">
                <nav class="desk-nav py-4">
                    <div class="row align-items-baseline">
                        <div class="col-lg-3">
                            <a href="#"><img src="assets/images/logo.svg" alt=""></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="d-flex list-unstyled d-flex justify-content-between">
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">About</a></li>
                                <li class="dropdown">
                                    <a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">App Development</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Web Development</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Graphics Designing</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">UI/UX Designing</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Corporate Designing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Solutions
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Another action</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Projects</a></li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Career</a></li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 text-end">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">Let’s Talk</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- responsive-nav  -->
        <nav class="navbar bg-body-tertiary fixed-top d-block d-lg-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img class="w-75 resp-logo" src="assets/images/logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span><img class="resp-toggler" src="assets/images/toggler.png" alt=""></span>
                </button>
                <div class="offcanvas offcanvas-end resp-nav-bg" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img class="w-50" src="assets/images/logo.svg" alt=""></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                            <ul class="d-flex list-unstyled d-flex flex-column text-center">
                                <li class="py-2"><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">About</a></li>
                                <li class="dropdown py-2">
                                    <a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">App Development</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Web Development</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Graphics Designing</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">UI/UX Designing</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Corporate Designing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown py-2">
                                    <a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Solutions
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Action</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Another action</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="py-2"><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Projects</a></li>
                                <li class="py-2"><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Career</a></li>
                                <li class="py-2"><a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#">Contact</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </nav>
    