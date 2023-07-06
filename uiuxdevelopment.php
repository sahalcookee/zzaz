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
                            <h2 class="font-fix-sb fs-2 extra-light-blue mb-4">UI/UX Development</h2>
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Get Your Estimate</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/uiuxdev-ban-img.png" alt="">
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
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">UI/UX Development</h2>
                    <p class="font-poppins fw-normal para-black">A successful UI/UX design combines aesthetic appeal with seamless functionality, aiming to provide users with a delightful and meaningful experience. Designers meticulously craft user interfaces that are visually appealing, easy to navigate, and consistent across different devices and platforms. By conducting user research, prototyping, and testing, they ensure that the product meets the needs and expectations of its target audience.</p>
                    <p class="font-poppins fw-normal para-black">Good UI/UX design is crucial for creating successful digital products and services. It enhances user satisfaction, increases efficiency, and provides a competitive edge, ultimately leading to higher customer retention and improved brand perception.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/uiuxdev-s1-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="banner-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">UI</h2>
                        <p class="font-poppins fw-normal light-blue">UI (User Interface) encompasses the design of buttons, menus, forms, and other interactive components, as well as the overall layout, typography, color scheme, and visual aesthetics of a digital product or system. It focuses on creating an intuitive, visually pleasing, and user-friendly interface that enhances the user's interaction and experience.</p>
                    </div>
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">UX</h2>
                        <p class="font-poppins fw-normal light-blue">UX (User Experience) refers to the overall experience and satisfaction a user has when interacting with a digital product or system. It encompasses the user's perceptions, emotions, and responses throughout their journey, including ease of use, efficiency, and enjoyment. UX design focuses on understanding user needs, aligning with their goals, and creating seamless and meaningful experiences that meet or exceed their expectations. It involves research, analysis, and iterative design processes to optimize usability, accessibility, and overall user satisfaction.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Benefits</h2>
                    <ul class="font-poppins fw-medium extra-light-blue list-unstyled appdev-s2-ul">
                        <li class="ms-5 mb-4">Enhanced user satisfaction and engagement.</li>
                        <li class="ms-5 my-4">Improved usability and ease of navigation.</li>
                        <li class="ms-5 my-4">Increased conversion rates and customer retention.</li>
                        <li class="ms-5 my-4">Improved accessibility and inclusivity.</li>
                        <li class="ms-5 my-4">Streamlined user flow and task completion.</li>
                        <li class="ms-5 my-4">Reduced user frustration and support inquiries.</li>
                        <li class="ms-5 my-4">Higher user adoption and faster learning curves.</li>
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
    <?php include 'assets/includes/contactbar.php';?>

    <!-- section-4  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Revolutionizing UI/UX Dev with Tech</h2>
                    <p class="font-poppins fw-normal light-blue">We constantly stay up-to-date with the latest technologies to ensure our services are always cutting-edge.</p>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-uiux-1.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-uiux-2.png" alt="">
                    </div>
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-uiux-3.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-uiux-4.png" alt="">
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
                    <img class="img-fluid" src="assets/images/uiuxdev-s5-img.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Connect With Zazz, Stay Ahead Of The Game.</h2>
                    <p class="font-poppins fw-normal para-black">At Zazz, we prioritize exceptional UI/UX design, ensuring seamless user experiences and visually appealing interfaces. By combining user-centric research with innovative design practices, we create intuitive solutions that leave a lasting impression on our customers.</p>
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
            var newTitle = "ZAZZ Solutions | App Development.";
            document.title = newTitle;
        });
    </script>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>
    <?php include 'assets/includes/servicepage-carousel-script.php';?>
    </body>
</html>