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
                            <h4 class="font-fix-m fs-4 light-blue pt-0 pt-lg-5">Contact</h4>
                            <h2 class="font-fix-sb fs-2 extra-light-blue">Reach Out To Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child p-4 p-sm-5 bg-white rounded shadow z-1">
                                <div>
                                    <img class="img-fluid" src="assets/images/contact-ban-img.png" alt="">
                                </div>
                                <div class="pt-3 pt-lg-5 pb-2">
                                    <h4 class="font-fix-m fs-4 primary-blue">Let’s Talk</h4>
                                    <p class="font-poppins fw-medium light-blue">Creating Better Business Outcomes. Building Stronger Customer Connections.</p>
                                </div>
                                <div>
                                    <form action="" method="post">
                                        <input type="text" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="Name" required>
                                        <input type="email" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="E-Mail" required>
                                        <input type="tel" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="Phone" required>
                                        <textarea class="cont-form-input cont-form-txt-area w-100 border-bottom p-2 my-3" placeholder="Message"></textarea>
                                        <div class="text-center mt-3">
                                            <button class="text-decoration-none text-white font-poppins fw-semibold px-4 py-2 z-butn rounded border-0" href="#">Submit</button>
                                        </div>
                                    </form>
                                </div>
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
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div class="row gy-1 gy-sm-5">
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none cont-info-box p-4 d-block" href="#">
                                    <div>
                                        <img src="assets/images/contact-mail-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3 cont-info-box-p">zzazsolutions@gmail.com</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none cont-info-box p-4 d-block" href="#">
                                    <div>
                                        <img src="assets/images/contact-phone-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3 cont-info-box-p">+91 2547815364</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none cont-info-box p-4 d-block" href="#">
                                    <div>
                                        <img src="assets/images/contact-location-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3 cont-info-box-p">15-2, Jalan BK, Bandar Kinrara, 47180 Puchong, Selangor, Malaysia</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none p-4 d-block">
                                    <div>
                                        <img src="assets/images/contact-time-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3">office time : 9AM to 6PM</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0 mb-lg-5 pb-3 pb-xl-5">
                        <span class="cont-span-line mt-5"></span>
                        <div class="mt-5">
                            <h5 class="fs-5 font-poppins fw-medium primary-blue">Follow us on</h5>
                            <div>
                                <p class="para-black"><a class="text-decoration-none para-black cont-social-a" href="#" target="_blank">Facebook</a> | <a class="text-decoration-none para-black cont-social-a" href="#" target="_blank">Instagram</a> | <a class="text-decoration-none para-black cont-social-a" href="#" target="_blank">Linkedin</a> | <a class="text-decoration-none para-black cont-social-a" href="#" target="_blank">Twitter</a> | <a class="text-decoration-none para-black cont-social-a" href="#" target="_blank">Pinterest</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>