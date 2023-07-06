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
                            <h2 class="font-fix-sb fs-2 extra-light-blue mb-4">Web Development</h2>
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Get Your Estimate</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/webdev-ban-img.png" alt="">
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
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Web Design And Development</h2>
                    <p class="font-poppins fw-normal para-black">Web design and development is the process of creating visually appealing and functional websites. It involves a combination of artistic design skills and technical knowledge to produce websites that are user-friendly, visually engaging, and optimized for performance. Web designers utilize various tools and technologies to create layouts, select color schemes, and design graphical elements that enhance the user experience.</p>
                    <p class="font-poppins fw-normal para-black">Web developers, on the other hand, focus on the technical implementation of these designs, using programming languages such as HTML, CSS, and JavaScript to build the website's structure and functionality. They ensure that the website is responsive, compatible across different devices and browsers, and optimized for search engines. Web design and development are integral to establishing a strong online presence, enabling businesses and individuals to effectively communicate and engage with their target audience in the digital realm.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/webdev-s1-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="banner-bg py-5">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Web Design And Development At ZAZZ</h2>
                    <p class="font-poppins fw-normal light-blue">At our company, we specialize in web design and development, creating stunning and functional websites that meet the unique needs of our clients. Our team of skilled designers and developers work collaboratively to bring our clients' visions to life, ensuring a seamless user experience and a visually appealing interface. We believe that a well-designed website is not only aesthetically pleasing but also intuitive and user-friendly, making it easy for visitors to navigate and find the information they need.</p>
                    <p class="font-poppins fw-normal light-blue">From crafting captivating layouts to implementing cutting-edge technologies, we are committed to delivering high-quality websites that effectively represent our clients' brands and drive their online success. With our expertise in responsive design, search engine optimization, and web analytics, we strive to create websites that not only look great but also perform optimally across all devices and attract organic traffic. Trust us to transform your online presence and take your business to new heights with our exceptional web design and development services.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Benefits</h2>
                    <ul class="font-poppins fw-medium extra-light-blue list-unstyled appdev-s2-ul">
                        <li class="ms-5 mb-4">Enhanced user experience.</li>
                        <li class="ms-5 my-4">Improved search engine visibility (SEO).</li>
                        <li class="ms-5 my-4">Increased website performance.</li>
                        <li class="ms-5 my-4">Mobile responsiveness.</li>
                        <li class="ms-5 my-4">Secure and reliable functionality.</li>
                        <li class="ms-5 my-4">Streamlined navigation and user flow.</li>
                        <li class="ms-5 my-4">Cross-browser compatibility.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- section 3  -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h2 class="font-fix-sb fs-2 primary-blue pb-3">Custom Web Application Development</h2>
                        <p class="font-poppins fw-normal para-black">Provides businesses with the advantage of having a solution that aligns perfectly with their processes, helping them streamline operations, improve efficiency, and achieve their objectives more effectively. By incorporating unique features, intuitive user interfaces, and seamless integration with existing systems, custom web applications offer a powerful tool that empowers businesses to optimize their operations and stay ahead in a competitive digital landscape.</p>
                    </div>
                    <div>
                        <h2 class="font-fix-sb fs-2 primary-blue pb-3">Website Development and Maintenance</h2>
                        <p class="font-poppins fw-normal para-black">Website development and maintenance are integral aspects of establishing a successful online presence. Website development involves the creation and design of a website, including its layout, functionality, and overall user experience. Skilled web developers utilize programming languages, frameworks, and design tools to build websites that align with the client's objectives and target audience.Effective website maintenance ensures that visitors have a seamless and engaging experience while interacting with the site, ultimately contributing to increased traffic, user satisfaction, and business success.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/webdev-s3-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section 4  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/webdev-s4-img.png" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">E-Commerce Website Development</h2>
                        <p class="font-poppins fw-normal light-blue">With the increasing popularity of online shopping, e-commerce websites have become essential tools for businesses to reach a wider audience and tap into the global market.The development process involves creating a user-friendly interface, integrating secure payment gateways, implementing inventory management systems, and ensuring a smooth and efficient checkout process. Additionally, features such as product search, customer reviews, and personalized recommendations enhance the user experience and promote customer satisfaction.</p>
                    </div>
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Portal Development</h2>
                        <p class="font-poppins fw-normal light-blue">Web portal development refers to the process of creating a centralized online platform that serves as a gateway to various resources and services. It involves designing and building a user-friendly interface that provides seamless access to information, applications, and tools. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-5  -->
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
                    <h2 class="font-fix-sb fs-2 extra-light-blue pb-3">Revolutionizing Web Dev With Tech</h2>
                    <p class="font-poppins fw-normal light-blue">We constantly stay up-to-date with the latest technologies to ensure our services are always cutting-edge.</p>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-1.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-2.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-3.png" alt="">
                        </div>
                    <div class="d-flex justify-content-around my-5">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-4.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-5.png" alt="">
                        <img class="h-s3-filtr-item-img" src="assets/images/h-web-6.png" alt="">
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
                    <img class="img-fluid" src="assets/images/webdev-s5-img.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue pb-3">Discover the Perfect Web Development Company</h2>
                    <p class="font-poppins fw-normal para-black">From responsive design and user-friendly interfaces to seamless navigation and optimized performance, we prioritize delivering websites that not only look visually stunning but also provide a superior user experience.</p>
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