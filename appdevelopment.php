<?php include 'assets/includes/header.php';?>
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active-nav';
  } 
}
?>
    
    <!-- banner  -->
        <section class="py-5 mb-3 mb-lg-5">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="mt-2 mt-lg-5 pt-lg-3 pt-xl-5 mb-5 mb-lg-0">
                            <h4 class="font-fix-m fs-4 light-blue pt-0 pt-lg-5">Service</h4>
                            <h2 class="font-fix-sb fs-2 extra-light-blue mb-4">App Development</h2>
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">Get Your Estimate</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/appdev-ban-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- section 1  -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Mobile App Development</h2>
                    <p class="font-poppins fw-normal para-black">Cross-platform app development is the most affordable, time-saving solution for mobile apps & is one of the most happening IT trends lately. Flutter, a Google product, is undeniably one of the most hashed-out frameworks in this area. And at Cookee, we often use it in our software projects.</p>
                    <p class="font-poppins fw-normal para-black">Android app developers at Cookee, are experts in designing customized apps using native or multi-platform technologies. And the flow & design vary owing to our client's specific demands. Core frameworks and languages are selected based on the nature of the mobile app and its inclusive features.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/appdev-s1-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="banner-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">App Strategy</h2>
                    <p class="font-poppins fw-normal light-blue">Cross-platform app development is the most affordable, time-saving solution for mobile apps & is one of the most happening IT trends lately. Flutter, a Google product, is undeniably one of the most hashed-out frameworks in this area. And at Cookee, we often use it in our software projects.</p>
                    <p class="font-poppins fw-normal light-blue">Android app developers at Cookee, are experts in designing customized apps using native or multi-platform technologies. And the flow & design vary owing to our client's specific demands. Core frameworks and languages are selected based on the nature of the mobile app and its inclusive features.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Benefits</h2>
                    <ul class="font-poppins fw-medium extra-light-blue list-unstyled appdev-s2-ul">
                        <li class="ms-5 mb-4">Simplified development process.</li>
                        <li class="ms-5 my-4">Excellent results.</li>
                        <li class="ms-5 my-4">A single codebase for iOS and Android mobile apps.</li>
                        <li class="ms-5 my-4">Resources, time and cost-saving.</li>
                        <li class="ms-5 my-4">No need for multiple teams.</li>
                        <li class="ms-5 my-4">Enables developers to swiftly start-up.</li>
                        <li class="ms-5 my-4">Allows making changes instantly and more.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Our Works On Display</h2>
                    <p class="font-poppins fw-normal para-black">Android app developers at Cookee, are experts in designing customized apps using native or multi-platform technologies. And the flow & design </p>
                </div>
            </div>
            <div class="row mt-2 gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-2.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Tiles And Sanitary App</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="projects">View More</a>
            </div>
        </div>
    </section>

    <!-- contact-bar  -->
    <section class="py-5 contact-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="font-fix-sb fs-2 primary-blue">We're Here To Help With Your Next Software Project.</h2>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="me-3 me-md-5 mt-4 mt-md-0">
                            <img src="assets/images/contact-bar-img.svg" alt="">
                        </div>
                        <a href="#" class="contact-bar-a text-decoration-none light-blue">
                            <div class="mt-4 mt-md-0">
                                <h4 class="font-fix-m fs-4 text-center lh-lg">Contact Us Now<br>+91 2547815364</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-4  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Revolutionizing App Dev With Tech</h2>
                    <p class="font-poppins fw-normal light-blue">Android app developers at Cookee, are experts in designing customized apps using native or multi-platform technologies. And the flow & design vary owing to our client's specific demands. Core frameworks and </p>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-ios-5.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-ios-2.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/appdev-s4-apple.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-andr-3.png" alt="">
                    </div>
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-ios-1.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-andr-1.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-andr-2.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-ios-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-5  -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 px-0 px-sm-5">
                    <img class="img-fluid" src="assets/images/appdev-s5-img.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Mobile App Development</h2>
                    <p class="font-poppins fw-normal para-black">Cross-platform app development is the most affordable, time-saving solution for mobile apps & is one of the most happening IT trends lately. Flutter, a Google product, is undeniably one of the most hashed-out frameworks in this area. And at Cookee, we often use it in our software projects.</p>
                    <div class="mt-4">
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>