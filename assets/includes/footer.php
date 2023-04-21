    <!-- footer  -->
    <section class="banner-bg pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="index"><img class="footer-logo-img" src="assets/images/logo.svg" alt=""></a>
                </div>
                <div class="col-9 text-end">
                    <div>
                        <a class="mx-1 fotr-social" href="#"><img src="assets/images/footer-facebook.svg" alt=""></a>
                        <a class="mx-1 fotr-social" href="#"><img src="assets/images/footer-linkedin.svg" alt=""></a>
                        <a class="mx-1 fotr-social" href="#"><img src="assets/images/footer-twitter.svg" alt=""></a>
                        <a class="mx-1 fotr-social" href="#"><img src="assets/images/footer-insta.svg" alt=""></a>
                        <a class="mx-1 fotr-social" href="#"><img src="assets/images/footer-pinterest.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-3 pb-5 mb-3">
                <div class="row gy-4">
                    <div class="col-sm-6 col-lg-2">
                        <h4 class="font-fix-sb fs-4 extra-light-blue mb-4">Menu</h4>
                        <ul class="footer-ul list-unstyled">
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="about">About</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="projects">Projects</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="career">Career</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h4 class="font-fix-sb fs-4 extra-light-blue mb-4">Services</h4>
                        <ul class="footer-ul list-unstyled">
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="appdevelopment">App Development</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Web Development</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Graphic Design</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">UI/UX Design</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Corporate Design</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <h4 class="font-fix-sb fs-4 extra-light-blue mb-4">Solutions</h4>
                        <ul class="footer-ul list-unstyled">
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Visitor Management System</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Feedback Management System</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Visitor Management System</a></li>
                            <li class="ms-3 mb-2"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">Feedback Management System</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h4 class="font-fix-sb fs-4 extra-light-blue mb-4">Contact</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3 ms-5 fotr-contact-phone"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">+91 2547815364</a></li>
                            <li class="mb-3 ms-5 fotr-contact-phone fotr-contact-mail"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">zzazsolutions@gmail.com</a></li>
                            <li class="mb-3 ms-5 fotr-contact-phone fotr-contact-location"><a class="font-poppins fw-medium text-decoration-none text-white link-hover" href="#">15-2, Jalan BK, Bandar Kinrara, 47180 Puchong, Selangor, Malaysia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center"><p class="font-poppins fw-medium text-white footer-copyright m-0 pb-1">© 2023 All rights reserved by Zzaz Solutions. Designed by <a class="text-white text-decoration-none" href="https://cookee.io" target="_blank">Cookee.</a></p></div>
        </div>
    </section>
    
    <!-- j Query  -->
        <!-- fixed-nav  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- javascript -->
        <!-- bootstrap  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- fixed-nav  -->
        <script>
            $(window).scroll(function(){
                if ($(this).scrollTop() > 900) {
                $('.dynamic').addClass('fixed-nav');
                } else {
                $('.dynamic').removeClass('fixed-nav');
                }
            });
        </script>
</body>
</html>