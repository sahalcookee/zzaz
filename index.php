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
                        <img class="h-banner-img img-fluid" src="assets/images/h-banner-img.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="fs-1 extra-light-blue font-fix-sb pb-3">Experience Next-Level Productivity with Our Software Solutions</h1>
                            <p class="font-poppins font-normal light-blue pb-4">Technology is constantly evolving, and businesses must keep up to stay relevant.</p>
                            <div class="pb-5">
                                <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">Let’s Talk</a>
                            </div>
                            <img src="assets/images/h-ban-tech.svg" alt=""><span class="mx-3"><img src="assets/images/h-ban-plus.png" alt=""></span><span class="extra-light-blue font-fix-sb">Technologies</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-0 mb-lg-5">
                    <div class="col-lg-10 offset-lg-2 h-ban-clip">
                        <div class="container h-ban-clip-ps py-4">
                            <div class="d-flex justify-content-around justify-content-lg-between flex-wrap">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-1.png" alt="">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-2.png" alt="">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-3.png" alt="">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-4.png" alt="">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-5.png" alt="">
                                <img class="p-3 p-md-0 object-fit-contain h-ban-client-img" src="assets/images/h-ban-client-6.png" alt="">
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
                        <p class="font-poppins font-normal para-black">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="rounded rounded-3 h-s1-card-div p-4">
                        <img src="assets/images/h-s1-icon-1.png" alt="">
                        <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">App Development</h4>
                        <p class="font-poppins font-normal light-blue m-0 h-s1-card-p">the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="rounded rounded-3 h-s1-card-div p-4">
                        <img src="assets/images/h-s1-icon-2.png" alt="">
                        <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Web Development</h4>
                        <p class="font-poppins font-normal light-blue m-0 h-s1-card-p">the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="rounded rounded-3 h-s1-card-div p-4">
                        <img src="assets/images/h-s1-icon-3.png" alt="">
                        <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Graphic Design</h4>
                        <p class="font-poppins font-normal light-blue m-0 h-s1-card-p">the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="rounded rounded-3 h-s1-card-div p-4">
                        <img src="assets/images/h-s1-icon-4.png" alt="">
                        <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">UI/UX Design</h4>
                        <p class="font-poppins font-normal light-blue m-0 h-s1-card-p">the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="rounded rounded-3 h-s1-card-div p-4">
                        <img src="assets/images/h-s1-icon-5.png" alt="">
                        <h4 class="fs-4 primary-blue font-fix-m pt-2 pb-3">Corporate Design</h4>
                        <p class="font-poppins font-normal light-blue m-0 h-s1-card-p">the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- section -2  -->
    <section class="py-5 banner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/h-s2-img-1.png" alt="">
                </div>
                <div class="col-lg-6">
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3 mt-2">Innovation At The Core</h2>
                        <p class="font-poppins font-normal light-blue pb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 extra-light-blue mt-5">What Makes Us Different</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins font-normal light-blue mt-2 mt-lg-5">ou need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="position-relative h-s2-ttlcard-parent">
                        <div class="row g-2 position-absolute h-s2-ttlcard">
                            <div class="col-lg-6 col-md-6">
                                <div class="rounded rounded-2 h-s2-card-div d-flex align-items-center justify-content-center p-3 text-center">
                                    <h5 class="font-poppins fw-semibold light-blue fs-5 m-0 h-s2-card-h">No False Promises</h5>
                                    <p class="font-poppins fw-normal primary-blue m-0 h-s2-card-p">Zzaz serves the legitimate truth and service. No false promises are given. We give our word on the things we are able to do.</p>
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
                    <img class="img-fluid" src="assets/images/h-s2-img-2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5 h-s3-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-fix-sb fs-2 primary-blue">Smart Solutions: The Technology That Enhances Our Efficiency</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins font-normal para-black">ou need to be su hidden in the middle of text. All the Lo ure there isn't anything embarrassing ou need to be su   All the Lo ure there isn't anything embarrassing ou need to be su </p>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-4 d-flex flex-wrap justify-content-start" id="myBtnContainer">
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h active" id="filter-clicked" onclick="filterSelection('ios')">IOS</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('android')">Android</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('uiux')">UI/UX</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('web')">Web Development</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('database')">Database</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('cloud')">Cloud & Push Notification</button>
                            <button class="p-2 border border-0 h-s3-filt-butn rounded rounded-5 primary-blue m-2 shadow-sm font-poppins font-normal h-s3-filter-h" onclick="filterSelection('payment')">Payment</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="py-2 py-lg-4">
                            <div class="d-flex flex-wrap justify-content-around justify-content-lg-between">
                                <!-- ios  -->
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Swift</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">PWA</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Objective-C</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-4.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">X-Code</span>
                                </div>
                                <div class="text-center m-3 filterDiv ios android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-ios-5.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Flutter</span>
                                </div>
                                <!-- android  -->
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Java</span>
                                </div>
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Kotlin</span>
                                </div>
                                <div class="text-center m-3 filterDiv android">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-andr-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Android<br>Studio</span>
                                </div>
                                <!-- ui ux  -->
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Sketch</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Adobe XD</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Zeplin</span>
                                </div>
                                <div class="text-center m-3 filterDiv uiux">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-uiux-4.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Invision</span>
                                </div>
                                <!-- web develop  -->
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">HTML5<br>CSS3</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Angular</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Node.js</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-4.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">PHP</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-5.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Laravel</span>
                                </div>
                                <div class="text-center m-3 filterDiv web">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-web-6.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Codelgniter</span>
                                </div>
                                <!-- database  -->
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">MongoDB</span>
                                </div>
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">MySQL</span>
                                </div>
                                <div class="text-center m-3 filterDiv database">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-data-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">MSSQL</span>
                                </div>
                                <!-- cloud  -->
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Google<br>Cloud</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">AWS</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Firebase<br>FCM</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-4.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Firebase<br>Crashlytics</span>
                                </div>
                                <div class="text-center m-3 filterDiv cloud">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-cloud-5.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Google<br>Analytics</span>
                                </div>
                                <!-- payment  -->
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-1.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Telr</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-2.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Payfort</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-3.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">RazorPay</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-4.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">CCAvenue</span>
                                </div>
                                <div class="text-center m-3 filterDiv payment">
                                    <div class="h-s3-fil-item rounded-circle shadow text-center mb-2">
                                        <img class="object-fit-contain h-s3-filtr-item-img" src="assets/images/h-pay-5.png" alt="">
                                    </div>
                                    <span class="font-poppins font-normal primary-blue h-s3-item-text">Paytm</span>
                                </div>
                            </div>
                        </div>
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
                    <div>
                        <h2 class="font-fix-sb fs-2 extra-light-blue pb-3 mt-2">A Track Record of Excellence: Our Past Projects</h2>
                        <p class="font-poppins font-normal light-blue pb-4">ou need to be su hidden in the middle of text. All the Lo ure there isn't anything embarrassing ou need to be su   All the Lo ure there isn't anything embarrassing ou need to be su </p>
                        <div class="d-none d-lg-block">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center flex-column flex-sm-row">
                        <div>
                            <div>
                                <div class="p-2">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-1.png" alt="">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-5 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-2.png" alt="">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-5 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="p-2">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-3.png" alt="">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-5 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-4.png" alt="">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-5 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="text-center position-relative h-s4-card-div rounded overflow-hidden">
                                        <img class="img-fluid" src="assets/images/h-s4-img-5.png" alt="">
                                        <div class="position-absolute translate-middle top-50 start-50 w-75 h-s4-card-text">
                                            <p class="m-0 font-fix-sb text-white fs-5 mb-5 mb-lg-3 mb-xl-5">Official app of Sharjah sports council</p>
                                            <div class="d-flex justify-content-around">
                                                <a href="#"><img src="assets/images/h-s4-ios-store.png" alt=""></a>
                                                <a href="#"><img src="assets/images/h-s4-play-store.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 d-block d-lg-none text-center">
                        <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" href="#">View More</a>
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
                    <h2 class="font-fix-sb fs-2 primary-blue">Honest Reviews from Our Customers</h2>
                </div>
                <div class="col-lg-6">
                    <p class="font-poppins font-normal para-black">ou need to be su hidden in the middle of text. All the Lo ure there isn't anything embarrassing ou need to be su   All the Lo ure th</p>
                </div>
            </div>
            <div class="mt-5">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="banner-bg w-100 px-5 py-4 position-relative rounded h-s5-testim-div">
                            <img class="mb-2" src="assets/images/h-s5-quote.png" alt="">
                            <p class="font-poppins font-normal extra-light-blue m-0 text-center px-5">“There are many variations of passages of Lorem Ipsum available, but the majority have suffered re are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in There are many variations of passages of Lorem Ipsum available, but the majority have suffered re are many variations of passages of Lorem Ipsum available, bu”</p>
                            <p class="font-fix-sb extra-light-blue text-end mt-3 pe-5">Customer Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
            }
        </script>
        <!-- make filter clicked at refresh  -->
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
            document.getElementById("filter-clicked").click();
            });
        </script>
        
