<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zzaz</title>
    <link rel="icon" type="x-icon/image" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner-bg">
        <!-- header  -->
        <!-- desktop nav  -->
        <div class="bg-transparent d-none d-lg-block dynamic"> 
            <div class="container">
                <nav class="desk-nav py-4">
                    <div class="row align-items-baseline">
                        <div class="col-lg-3">
                            <a href="index"><img src="assets/images/logo.svg" alt=""></a>
                        </div>
                        <div class="col-lg-6">
                            <ul class="d-flex list-unstyled d-flex justify-content-between">
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('about');?>" href="about">About</a></li>
                                <li class="dropdown">
                                    <a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('appdevelopment');?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="appdevelopment">App Development</a></li>
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
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Visitor Management System</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Feedback Management System</a></li>
                                        <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Facility Management System</a></li>
                                    </ul>
                                </li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('projects');?>" href="projects">Projects</a></li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('career');?>" href="career">Career</a></li>
                                <li><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('contact');?>" href="contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 text-end">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Let’s Talk</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- responsive-nav  -->
        <div class="navbar d-block d-lg-none py-3 dynamic">
            <div class="container-fluid">
                <a class="navbar-brand" href="index"><img class="w-75" src="assets/images/logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span><img src="assets/images/toggler.png" alt=""></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header py-3">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="index"><img class="w-75" src="assets/images/logo.svg" alt=""></a></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mt-5">
                        <ul class="d-flex list-unstyled d-flex flex-column text-center">
                            <li class="py-2 fs-5"><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('about');?>" href="about">About</a></li>
                            <li class="dropdown py-2 fs-5">
                                <a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('appdevelopment');?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu dropdown-menu-resp">
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="appdevelopment">App Development</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Web Development</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Graphics Designing</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">UI/UX Designing</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Corporate Designing</a></li>
                                </ul>
                            </li>
                            <li class="dropdown py-2 fs-5">
                                <a class="text-white text-decoration-none font-poppins fw-medium link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Solutions
                                </a>
                                <ul class="dropdown-menu dropdown-menu-resp">
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Visitor Management System</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Feedback Management System</a></li>
                                    <li><a class="dropdown-item py-2 ps-5 font-poppins fw-medium primary-blue" href="#">Facility Management System</a></li>
                                </ul>
                            </li>
                            <li class="py-2 fs-5"><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('projects');?>" href="projects">Projects</a></li>
                            <li class="py-2 fs-5"><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('career');?>" href="career">Career</a></li>
                            <li class="py-2 fs-5"><a class="text-white text-decoration-none font-poppins fw-medium link-hover <?php active('contact');?>" href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    