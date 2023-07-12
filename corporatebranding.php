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
                            <h2 class="font-fix-sb fs-2 extra-light-blue mb-4">Corporate Branding</h2>
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Get Your Estimate</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/branding-ban-img.png" alt="">
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
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Corporate Branding</h2>
                    <p class="font-poppins fw-normal para-black">Corporate branding refers to the practice of creating and promoting a unique and consistent identity for a company or organization. It involves the strategic development and management of various elements that contribute to shaping the overall perception of the company among its target audience, stakeholders, and the general public.</p>
                    <p class="font-poppins fw-normal para-black">A well-executed corporate branding strategy can not only help attract and retain customers but also attract top talent and foster a sense of pride and unity among employees. It serves as a powerful tool for shaping public perception and influencing consumer behavior, ultimately contributing to the long-term success and growth of the organization.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/branding-s1-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="banner-bg py-5">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Branding Strategy</h2>
                    <p class="font-poppins fw-normal light-blue">At Zazz, we prioritize a strong branding strategy to establish a distinctive and memorable identity in the market. Through careful market research and creative storytelling, we craft a compelling brand narrative that resonates with our target audience, fostering trust and loyalty while setting us apart from our competitors.</p>
                    <p class="font-poppins fw-normal light-blue">We are specialized in helping businesses establish a strong and distinct identity. With our expertise and creativity, we work closely with our clients to craft unique and compelling brand strategies. Our logo design, color schemes, and typography are meticulously tailored to reflect each client's vision and values.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Benefits</h2>
                    <ul class="font-poppins fw-medium extra-light-blue list-unstyled appdev-s2-ul">
                        <li class="ms-5 mb-4">Increased brand recognition.</li>
                        <li class="ms-5 my-4">Customer trust and loyalty.</li>
                        <li class="ms-5 my-4">Differentiation from competitors.</li>
                        <li class="ms-5 my-4">Premium perception.</li>
                        <li class="ms-5 my-4">Brand advocacy.</li>
                        <li class="ms-5 my-4">Consistent brand messaging and positioning.</li>
                        <li class="ms-5 my-4">Facilitates business expansion and growth.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <!-- service-page-carousel  -->
    <?php include 'assets/includes/service-carousel.php';?>

    <!-- contact-bar  -->
    <?php include 'assets/includes/contactbar.php';?>

    <!-- section-4  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Revolutionizing Branding With Tech</h2>
                    <p class="font-poppins fw-normal light-blue">We constantly stay up-to-date with the latest technologies to ensure our services are always cutting-edge.</p>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/indesign.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/photoshop.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/illustrator.png" alt="">
                    </div>
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/canva.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-uiux-1.png" alt="">
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
                    <img class="img-fluid" src="assets/images/branding-s5-img.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Corporate Branding At Zazz</h2>
                    <p class="font-poppins fw-normal para-black">We believe,corporate branding is more than just a logo and slogan. It's a strategic approach that reflects our values, vision, and commitment, establishing a strong identity that resonates with our stakeholders and sets us apart in the market.</p>
                    <div class="mt-4">
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- floating-button  -->
    <?php include 'assets/includes/whatsapp-float.php';?>

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