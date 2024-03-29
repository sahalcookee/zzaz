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
        <section class="pt-4">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="h-banner-img img-fluid" src="assets/images/h-banner-img.png" alt="business growth">
                    </div>
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="h-ban-h extra-light-blue font-fix-sb pb-3">Empowering Growth Through Innovative Software Solutions</h1>
                            <p class="font-poppins fw-normal light-blue pb-4">Streamline your business processes with our innovative software solutions</p>
                            <div class="pb-5">
                                <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="contact">Let’s Talk</a>
                            </div>
                            <img src="assets/images/h-ban-tech.svg" alt="developing technology"><span class="mx-3"><img src="assets/images/h-ban-plus.png" alt="more"></span><span class="extra-light-blue font-fix-sb">Technologies</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-0 mb-lg-5">
                    <div class="col-lg-10 offset-lg-2 h-ban-clip">
                        <div class="container h-ban-clip-ps py-4">
                            <div class="d-flex justify-content-around justify-content-lg-between flex-wrap owl-carousel owl-carousel-3 owl-theme">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-1.png" alt="cleints">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-2.png" alt="cleints">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-3.png" alt="cleints">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-4.png" alt="cleints">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-5.png" alt="cleints">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img item" src="assets/images/h-ban-client-6.png" alt="cleints">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- section-1  -->
    <section class="py-5">
        <div class="container">
            <div class="row g-3 g-lg-4 align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div>
                        <h2 class="font-fix-sb fs-2 primary-blue">Services We Provide</h2>
                        <p class="font-poppins fw-normal para-black">We pride ourselves on delivering high-quality services to exceed your expectations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="text-decoration-none" href="appdevelopment">
                        <div class="rounded rounded-3 h-s1-card-div p-4">
                            <img src="assets/images/h-s1-icon-1.png" alt="app development">
                            <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">App Development</h4>
                            <p class="font-poppins fw-normal light-blue m-0 h-s1-card-p">With a focus on innovation and quality, our app development team is dedicated to helping businesses stay ahead of the curve in a rapidly evolving digital landscape.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="text-decoration-none" href="webdevelopment">
                        <div class="rounded rounded-3 h-s1-card-div p-4">
                            <img src="assets/images/h-s1-icon-2.png" alt="web development">
                            <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Web Development</h4>
                            <p class="font-poppins fw-normal light-blue m-0 h-s1-card-p">From design to development and beyond, our web development team offers a full suite of services to help your website reach its full potential.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="text-decoration-none" href="corporatebranding">
                        <div class="rounded rounded-3 h-s1-card-div p-4">
                            <img src="assets/images/h-s1-icon-3.png" alt="branding">
                            <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Corporate Branding</h4>
                            <p class="font-poppins fw-normal light-blue m-0 h-s1-card-p">Successful graphic design requires a deep understanding of design principles, an eye for aesthetics, and the ability to think creatively and solve problems. Our team totally nailed it!</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="text-decoration-none" href="uiuxdevelopment">
                        <div class="rounded rounded-3 h-s1-card-div p-4">
                            <img src="assets/images/h-s1-icon-4.png" alt="ui/ux">
                            <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">UI/UX Design</h4>
                            <p class="font-poppins fw-normal light-blue m-0 h-s1-card-p">We are committed to delivering UI/UX design solutions that are not only visually stunning but also optimized for accessibility and usability, ensuring that all users can enjoy your digital product.</p>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <a class="text-decoration-none" href="#">
                        <div class="rounded rounded-3 h-s1-card-div p-4">
                            <img src="assets/images/h-s1-icon-5.png" alt="">
                            <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Corporate Design</h4>
                            <p class="font-poppins fw-normal light-blue m-0 h-s1-card-p">Stand out from the competition with a visually stunning corporate design that resonates with your target audience.</p>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>
    
    <!-- section -2  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/h-s2-img-1.png" alt="about">
                </div>
                <div class="col-lg-6">
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3 mt-2">Innovation At The Core</h2>
                        <p class="font-poppins fw-normal light-blue pb-4">At ZZAZ Solutions , we're passionate about developing innovative software solutions that help our clients succeed in today's rapidly evolving digital landscape. Our team of experienced developers, designers, and project managers work together to create custom software applications that are tailored to meet the specific needs of each of our clients.</p>
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="about">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue mt-5">What Makes Us Different</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins fw-normal light-blue mt-2 mt-lg-5">We pride ourselves on providing exceptional software service, ensuring your satisfaction every step of the way. Trust is earned through transparency and follow-through.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="position-relative h-s2-ttlcard-parent">
                        <div class="row g-2 position-absolute h-s2-ttlcard">
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">No False Promises</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">ZZAZ serves the legitimate truth and service. No false promises are given. We give our word on the things we are able to do.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">Deliver Perfection</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">It is a hundred percent guarantee that our Apps will be the best quality. It will deliver to you within time with ultimate perfection.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">Agile Methodology</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">Considers all your essential requisite in one application and delivers to you favorably within short space of time with periodic updation.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">MVP in 30 Days</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">We help you build a short version of your project with enough features to experience and learn quickly to review and adapt plans frequently.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">Long Term Partnership</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">With efficient service, we build a long-term relationship with our clients. We are very sociable, so clients can share their innovative ideas with us happily.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">T-Shaped Developers</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">T shaped developers are expert in specific domain together with skilled across other domains too. They are special in the industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 h-s2-img2-pe">
                    <img class="img-fluid" src="assets/images/h-s2-img-2.png" alt="branding">
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5 h-s3-pt">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue">Smart Solutions: The Technology That Enhances Our Efficiency</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins fw-normal para-black">We constantly stay up-to-date with the latest technologies to ensure our services are always cutting-edge.</p>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-4 d-flex flex-wrap justify-content-center justify-content-sm-start" id="myBtnContainer">
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h active-filter" id="filter-clicked" onclick="filterSelection('ios')">IOS</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('android')">Android</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('uiux')">UI/UX</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('web')">Web Development</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('database')">Database</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('cloud')">Cloud & Push Notification</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins fw-normal h-s3-filter-h" onclick="filterSelection('payment')">Payment</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="py-2 py-lg-4">
                            <div class="d-flex flex-wrap justify-content-around justify-content-lg-start h-s3-filter-gap">
                                <!-- ios  -->
                                <div class="text-center m-3 filterDiv ios android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-5.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Flutter</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Swift</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">PWA</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Objective-C</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-4.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">X-Code</span>
                                </div>
                                <!-- android  -->
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Java</span>
                                </div>
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Kotlin</span>
                                </div>
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Android<br>Studio</span>
                                </div>
                                <!-- ui ux  -->
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-5.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Figma</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Sketch</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Adobe XD</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Zeplin</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-4.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Invision</span>
                                </div>
                                <!-- web develop  -->
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">HTML5</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-7.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">CSS3</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-10.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Bootstrap</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-11.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Tailwind CSS</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-8.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">React JS</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-9.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Vue JS</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Angular</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Node.js</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-4.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">PHP</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-5.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Laravel</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-6.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">CodeIgniter</span>
                                </div>
                                <!-- database  -->
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">MongoDB</span>
                                </div>
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">MySQL</span>
                                </div>
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">MSSQL</span>
                                </div>
                                <!-- cloud  -->
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Google<br>Cloud</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-5.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Google<br>Analytics</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Firebase<br>FCM</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-4.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Firebase<br>Crashlytics</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">AWS</span>
                                </div>
                                <!-- payment  -->
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-1.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Telr</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-2.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Payfort</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-3.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">RazorPay</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-4.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">CCAvenue</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-5.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Paytm</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-6.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">Stripe</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-7.png" alt="">
                                    </div>
                                    <span class="font-poppins fw-normal primary-blue h-s3-item-text">PayPal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3 mt-2">A Track Record of Excellence: Our Past Projects</h2>
                        <p class="font-poppins fw-normal light-blue pb-4">We understand the importance of staying ahead of the curve in a rapidly evolving industry, which is why we invest heavily in research and development to ensure that our software services remain at the forefront of technological advancements. We are dedicated to providing our clients with the best possible experience and delivering solutions that meet their unique needs and requirements. Our success is a testament to our hard work, dedication, and commitment to excellence.</p>
                        <div class="d-none d-lg-block">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="projects">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-end flex-column flex-sm-row">
                        <div>
                            <div>
                                <div class="p-2 h-s4-card-w">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-1.png" alt="government app development">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-6 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="https://apps.apple.com/us/app/sharjah-sports-council/id1569560795" target="_bank"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="https://play.google.com/store/apps/details?id=com.inlogic.shjsc" target="_bank"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 h-s4-card-w">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-2.png" alt="business app">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-6 mb-5 mb-lg-3 mb-xl-5">4Kids</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#" target="_blank">><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="p-2 h-s4-card-w">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-3.png" alt="business app">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-6 mb-5 mb-lg-3 mb-xl-5">Tajmahal</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="https://play.google.com/store/apps/details?id=com.cookee.tajmahal" target="_blank"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 h-s4-card-w">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-4.png" alt="scooter app">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-6 mb-5 mb-lg-3 mb-xl-5">Wer2</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 h-s4-card-w">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-5.png" alt="delivery app">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-6 mb-5 mb-lg-3 mb-xl-5">zBee</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#" target="_blank"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 d-block d-lg-none text-center">
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="projects">View More</a>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-5  -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-lg-baseline align-items-xl-start">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue">Honest Reviews from Our Customers</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins fw-normal para-black">Their words has encouraged us to keep pushing forward and to always put our customers first.</p>
                </div>
            </div>
            <div class="owl-carousel owl-carousel-1 owl-theme">
                <div class="item">
                    <div class="mt-3 mt-lg-5 pt-5">
                        <div class="row justify-content-center mt-4">
                            <div class="col-10">
                                <div class="banner-bg w-100 px-2 px-sm-3 px-md-5 py-4 position-relative rounded rounded-3 position-relative">
                                    <div class="rounded-circle overflow-hidden h-s5-testim-img-div position-absolute translate-middle start-50 top-0">
                                        <img class="img-fluid" src="assets/images/h-s5-testimony-img-1.png" alt="">
                                    </div>
                                    <img class="mb-2" src="assets/images/h-s5-quote.png" alt="">
                                    <p class="font-poppins fw-normal extra-light-blue m-0 text-center px-4">“ZZAZ Solutions exceeded all our expectations with their web development services. They not only created a stunning website but also optimized it for search engines, significantly boosting our online visibility. Their team's creativity and technical skills are unmatched. I'm thrilled with the results!”</p>
                                    <p class="font-fix-sb extra-light-blue text-end mt-3 pe-4">David Johnson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mt-3 mt-lg-5 pt-5">
                        <div class="row justify-content-center mt-4">
                            <div class="col-10">
                                <div class="banner-bg w-100 px-2 px-sm-3 px-md-5 py-4 position-relative rounded rounded-3 position-relative">
                                    <div class="rounded-circle overflow-hidden h-s5-testim-img-div position-absolute translate-middle start-50 top-0">
                                        <img class="img-fluid" src="assets/images/h-s5-testimony-img-3.png" alt="">
                                    </div>
                                    <img class="mb-2" src="assets/images/h-s5-quote.png" alt="">
                                    <p class="font-poppins fw-normal extra-light-blue m-0 text-center px-4">“I approached ZZAZ Solutions for mobile app development, and I'm extremely impressed with the outcome. They not only delivered a feature-rich app but also provided excellent post-launch support. ZZAZ Solutions is a reliable partner, and I'm looking forward to working with them on future projects.”</p>
                                    <p class="font-fix-sb extra-light-blue text-end mt-3 pe-4">Emily Chen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mt-3 mt-lg-5 pt-5">
                        <div class="row justify-content-center mt-4">
                            <div class="col-10">
                                <div class="banner-bg w-100 px-2 px-sm-3 px-md-5 py-4 position-relative rounded rounded-3 position-relative">
                                    <div class="rounded-circle overflow-hidden h-s5-testim-img-div position-absolute translate-middle start-50 top-0">
                                        <img class="img-fluid" src="assets/images/h-s5-testimony-img-2.png" alt="">
                                    </div>
                                    <img class="mb-2" src="assets/images/h-s5-quote.png" alt="">
                                    <p class="font-poppins fw-normal extra-light-blue m-0 text-center px-4">“ZZAZ Solutions has been our go-to partner for web development for years now. Their professionalism and attention to detail are unparalleled. They consistently deliver projects on time and within budget. Working with ZZAZ Solutions has been a game-changer for our online presence. We look forward to many more successful collaborations!”</p>
                                    <p class="font-fix-sb extra-light-blue text-end mt-3 pe-4">John Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mt-3 mt-lg-5 pt-5">
                        <div class="row justify-content-center mt-4">
                            <div class="col-10">
                                <div class="banner-bg w-100 px-2 px-sm-3 px-md-5 py-4 position-relative rounded rounded-3 position-relative">
                                    <div class="rounded-circle overflow-hidden h-s5-testim-img-div position-absolute translate-middle start-50 top-0">
                                        <img class="img-fluid" src="assets/images/h-s5-testimony-img-4.png" alt="">
                                    </div>
                                    <img class="mb-2" src="assets/images/h-s5-quote.png" alt="">
                                    <p class="font-poppins fw-normal extra-light-blue m-0 text-center px-4">“ZZAZ Solutions is our go-to IT partner for a reason. Their professionalism and dedication to delivering high-quality solutions are second to none. They've helped us streamline our business processes and enhance our digital presence. Working with ZZAZ Solutions has been a game-changer for our company.”</p>
                                    <p class="font-fix-sb extra-light-blue text-end mt-3 pe-4">Michael Adams</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- floating-button  -->
    <?php include 'assets/includes/whatsapp-float.php';?>
    
    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    <!-- javascript -->
        <!-- filter-tab  -->
        <script>
            filterSelection("all");
            function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
            }

            function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
                }
            }
            }

            // Hide elements that are not selected
            function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
            }

            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("h-s3-filter-h");
            for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active-filter");
                current[0].className = current[0].className.replace(" active-filter", "");
                this.className += " active-filter";
            });
            }
        </script>
        <!-- make filter clicked at refresh  -->
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
            document.getElementById("filter-clicked").click();
            });
        </script>
        
        <!-- carousel  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
           var owl = $('.owl-carousel-1');
                owl.owlCarousel({
                    items:1,
                    loop:true,
                    dots:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:2500,
                    autoplayHoverPause:true,
                });
        </script>

        <!-- client carousel  -->
        <script>
           var owl = $('.owl-carousel-3');
                owl.owlCarousel({
                    items:5,
                    loop:true,
                    dots:false,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:2500,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:3,
                        },
                        600:{
                            items:4,
                        },
                        1000:{
                            items:5,
                        }
                    }
                })
        </script>

        <!-- title change  -->
        <script>
        window.addEventListener('DOMContentLoaded', function() {
            var newTitle = "ZZAZ Solutions | Empowering Growth Through Innovative Software Solutions";
            document.title = newTitle;
        });
        </script>
    </body>
</html>
