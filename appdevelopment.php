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
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Get Your Estimate</a>
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
                    <p class="font-poppins fw-normal para-black">With a focus on innovation and quality, our app development team is dedicated to helping businesses stay ahead of the curve in a rapidly evolving digital landscape. Our team of experienced developers is skilled in using the latest technologies and development frameworks to create mobile apps that run seamlessly across different platforms, including iOS and Android. We take a collaborative approach to app development, working closely with our clients to ensure that their app meets their specific requirements and exceeds their expectations.
</p>
                    <p class="font-poppins fw-normal para-black">We offer a range of mobile app development services, including app design, development, testing, and deployment. We also provide ongoing maintenance and support to ensure that our clients' apps remain up-to-date and bug-free.
</p>
                    <p class="font-poppins fw-normal para-black">Whether you need a simple mobile app or a complex enterprise-level application, we can help. Our mobile app development service is tailored to meet the unique needs of businesses across different industries, including healthcare, finance, retail, and more.
</p>
                    <p class="font-poppins fw-normal para-black">We pride ourselves on delivering high-quality, cost-effective, and timely solutions that help our clients achieve their business goals. Contact us today to learn more about how our mobile app development service can help your business succeed in the mobile-first world.</p>
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
            <div class="row align-items-top">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">App Strategy</h2>
                    <p class="font-poppins fw-normal light-blue">ZBEE solutions focuses on delivering high-quality, user-centric apps that provide a seamless experience for our users. We prioritize thorough research and analysis of user needs and preferences, as well as market trends and competitor offerings, to ensure our apps meet and exceed expectations.</p>
                    <p class="font-poppins fw-normal light-blue">Our development process includes agile methodologies, frequent testing and iteration, and close collaboration between our development team and stakeholders to ensure alignment with project goals. We also prioritize scalability and flexibility, designing apps that can easily adapt to changing user needs and evolving technology landscapes. Overall, our mobile app development strategy is designed to deliver innovative, engaging, and effective solutions that meet the needs of our users and drive business success.</p>
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
                    <p class="font-poppins fw-normal para-black">Browse through our creative endeavors.</p>
                </div>
            </div>
            <div class="owl-carousel owl-carousel-2 owl-theme">
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-2.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Tiles And Sanitary App</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="appdev-s3-main-div rounded-3 text-center">
                        <span class="appdev-s3-card-div-2-shadow">
                            <div class="banner-bg rounded-top-3 px-3 shadow appdev-s3-card-div-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/proj-img-1.png" alt="">
                            </div>
                        </span>
                        <h4 class="font-fix-m fs-4 light-blue py-4 appdev-s3-card-h">Government Service App</h4>
                    </div>
                </div>
                <div class="item">
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
                    <p class="font-poppins fw-normal light-blue">We constantly stay up-to-date with the latest technologies to ensure our services are always cutting-edge.</p>
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
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Discover the Perfect App Development Company</h2>
                    <p class="font-poppins fw-normal para-black">We offer a range of mobile app development services, including app design, development, testing, and deployment. We also provide ongoing maintenance and support to ensure that our clients' apps remain up-to-date and bug-free.</p>
                    <p class="font-poppins fw-normal para-black">We pride ourselves on delivering high-quality, cost-effective, and timely solutions that help our clients achieve their business goals. Contact us today to learn more about how our mobile app development service can help your business succeed in the mobile-first world.</p>
                    <div class="mt-4">
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- javascript  -->
    <!-- title change  -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var newTitle = "ZBEE Solutions | App Development.";
            document.title = newTitle;
        });
    </script>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>
    <?php include 'assets/includes/servicepage-carousel-script.php';?>
    </body>
</html>