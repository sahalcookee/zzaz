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
                                <div class="text-center">
                                    <img class="img-fluid" src="assets/images/contact-ban-img.png" alt="">
                                </div>
                                <div class="pt-3 pt-lg-5 pb-2">
                                    <h4 class="font-fix-m fs-4 primary-blue">Let’s Talk</h4>
                                    <p class="font-poppins fw-medium light-blue">Let Us Hear From You.</p>
                                </div>
                                <div>
                                    <form id="contact-form" data-email="zzazatsolutions@gmail.com" action="form_submition.php" method="post" charset="UTF-8">
                                        <input type="text" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="Name" name="name" required>
                                        <input type="email" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="E-Mail" name="email" required>
                                        <input type="tel" class="cont-form-input w-100 border-bottom p-2 my-3" placeholder="Phone" name="phone" required>
                                        <textarea class="cont-form-input cont-form-txt-area w-100 border-bottom p-2 my-3" placeholder="Message" name="message"></textarea>
                                        <div class="text-center mt-3">
                                            <button type="submit" id="submit_btn" value="send" class="text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded border-0">Submit</button>
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
                                    <div class="d-flex align-items-center d-sm-block">
                                        <img class="me-3" src="assets/images/contact-mail-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3 cont-info-box-p">zbeesolutions@gmail.com</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="text-decoration-none cont-info-box p-4">
                                    <div class="d-flex align-items-center d-sm-block">
                                        <img class="me-3" src="assets/images/contact-phone-icon.svg" alt="">
                                        <div class="d-flex flex-column">
                                            <a href="tel:+601137422938" class="font-poppins fw-normal para-black pt-3 cont-info-box-p d-block text-decoration-none">Malaysia : +6011 37422938</a>
                                            <a href="tel:+6585477485" class="font-poppins fw-normal para-black pt-3 cont-info-box-p d-block text-decoration-none">Singapore : +65 8547 7485</a>
                                            <a href="tel:+919995768540" class="font-poppins fw-normal para-black pt-3 cont-info-box-p d-block text-decoration-none">India : +91 9995768540</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none cont-info-box p-4 d-block" href="#">
                                    <div class="d-flex align-items-center d-sm-block">
                                        <img class="me-3" src="assets/images/contact-location-icon.svg" alt="">
                                        <p class="font-poppins fw-normal para-black pt-3 cont-info-box-p">NO. 24 JALAN NAKHODA 1 TAMAN NAKHODA, 32200 LUMUT, PERAK</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <a class="text-decoration-none p-4 d-block">
                                    <div class="d-flex align-items-center d-sm-block">
                                        <img class="me-3" src="assets/images/contact-time-icon.svg" alt="">
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


<!-- contact-form-submition-script  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    
    $mail_sent = @$_GET['mail_sent'];
    if($mail_sent){
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Enquiry  Submitted',
            text: 'We will reach you soon!'
          })</script>";
        echo '<script>window.history.pushState({}, document.title, "/" + "contact");</script>';
    }
     ?>
<!-- submit button disable after click  -->
     <script>
            document.querySelector("form").addEventListener("submit", function(){
                document.getElementById("submit_btn").disabled= true;
            })
     </script>

     <!-- title change  -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var newTitle = "ZBEE Solutions | Contact Us.";
            document.title = newTitle;
        });
    </script>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    </body>
</html>