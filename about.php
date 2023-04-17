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
                        <div class="mt-2 mt-lg-5 py-lg-3 py-xl-5 mb-5 mb-lg-4">
                            <h4 class="font-fix-m fs-4 light-blue pt-0 pt-lg-5">About Us</h4>
                            <h2 class="font-fix-sb fs-2 extra-light-blue">Innovation At The Core</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/h-s2-img-1.png" alt="">
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
                <div class="col-lg-3">
                    <div>
                        <span class="mb-3 abt-s1-h-line"></span>
                        <h1 class="fs-1 primary-blue font-fix-sb pb-3">Our Story</h1>
                        <p class="font-poppins fw-medium light-blue">Why We Started It ?</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <p class="font-poppins fw-normal para-black">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on thZe Internet tend to repeat predefined chunks as necessary,</p>
                    <p class="font-poppins fw-normal para-black">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on thZe Internet tend to repeat predefined chunks as necessary,</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5 banner-bg position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div>
                        <span class="mb-3 abt-s1-h-line abt-s1-h-line-2"></span>
                        <h1 class="fs-1 extra-light-blue font-fix-sb pb-3">Our Beliefs</h1>
                        <p class="font-poppins fw-medium light-blue">What Drives Us ?</p>
                    </div>
                    <div class="d-flex flex-column my-3 my--md-5 py-3">
                        <div class="d-flex abt-s2-box align-self-end py-3">
                            <div class="me-3">
                                <img class="abt-s2-box-img" src="assets/images/abt-s2-icon-1.png" alt="">
                            </div>
                            <div>
                                <h4 class="font-fix-sb fs-4 extra-light-blue mb-1">Vision</h4>
                                <p class="font-poppins fw-normal light-blue">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </p>
                            </div>
                        </div>
                        <div class="d-flex abt-s2-box py-3">
                            <div class="me-3">
                                <img class="abt-s2-box-img" src="assets/images/abt-s2-icon-2.png" alt="">
                            </div>
                            <div>
                                <h4 class="font-fix-sb fs-4 extra-light-blue mb-1">Mission</h4>
                                <p class="font-poppins fw-normal light-blue">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </p>
                            </div>
                        </div>
                        <div class="d-flex abt-s2-box align-self-end py-3">
                            <div class="me-3">
                                <img class="abt-s2-box-img" src="assets/images/abt-s2-icon-3.png" alt="">
                            </div>
                            <div>
                                <h4 class="font-fix-sb fs-4 extra-light-blue mb-1">Values</h4>
                                <p class="font-poppins fw-normal light-blue">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img class="abt-s2-big-img position-absolute end-0 translate-middle-y top-50" src="assets/images/abt-s2-big-img.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="mt-0 pt-0 mt-lg-5 pt-lg-5">
                        <span class="mb-3 abt-s1-h-line"></span>
                        <h1 class="fs-1 primary-blue font-fix-sb pb-3">FAQ</h1>
                        <p class="font-poppins fw-medium light-blue">Frequently Asked Questions</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div>
                        <div class="accordion accordion-flush" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h6 class="font-poppins fw-normal primary-blue fs-6">What is the price to develop a mobile app?</h6>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="font-poppins fw-normal para-black">Mobile app development requires the right blend of technology and resources. Zzaz Solutions develops apps that are customized and best fit our client demands. The cost of a mobile app varies according to the features, resources, type, & time involved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h6 class="font-poppins fw-normal primary-blue fs-6">Why choose Zzaz for your mobile app development?</h6>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="font-poppins fw-normal para-black">Mobile app development requires the right blend of technology and resources. Zzaz Solutions develops apps that are customized and best fit our client demands. The cost of a mobile app varies according to the features, resources, type, & time involved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h6 class="font-poppins fw-normal primary-blue fs-6">Does Zzaz develop on-demand mobile apps?</h6>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="font-poppins fw-normal para-black">Mobile app development requires the right blend of technology and resources. Zzaz Solutions develops apps that are customized and best fit our client demands. The cost of a mobile app varies according to the features, resources, type, & time involved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h6 class="font-poppins fw-normal primary-blue fs-6">What is the duration to develop a mobile app?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="font-poppins fw-normal para-black">Mobile app development requires the right blend of technology and resources. Zzaz Solutions develops apps that are customized and best fit our client demands. The cost of a mobile app varies according to the features, resources, type, & time involved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h6 class="font-poppins fw-normal primary-blue fs-6">Does Zzaz offer support or maintenance post-delivery?</h6>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="font-poppins fw-normal para-black">Mobile app development requires the right blend of technology and resources. Zzaz Solutions develops apps that are customized and best fit our client demands. The cost of a mobile app varies according to the features, resources, type, & time involved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>