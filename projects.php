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
                            <h4 class="font-fix-m fs-4 light-blue pt-0 pt-lg-5">Our Projects</h4>
                            <h2 class="font-fix-sb fs-2 extra-light-blue">A Track Record of Excellence</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/projects-ban-img.png" alt="">
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
            <div class="row g-0 g-lg-5">
                <div class="col-lg-6">
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Official App of Sharjah Sports Council</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Government Service App</h2>
                                <p class="font-poppins fw-normal para-black">The Sharjah Sports Council is committed to supporting the Sharjah Government's vision for sports and youth activities, and they were eager to leverage the expertise and resources towards achieving these goals. The Sharjah Sports Council's official app aims to promote the council's various programs and events, and keep users informed about the latest news, awards, and other developments.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.inlogic.shjsc" target="_bank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="https://apps.apple.com/us/app/sharjah-sports-council/id1569560795" target="_bank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Grocery</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">E-Commerce Grocery App</h2>
                                <p class="font-poppins fw-normal para-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Thanal</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Crowd Funding App For Charity</h2>
                                <p class="font-poppins fw-normal para-black">Thanal is a Kerala-based nonprofit charitable organization that engages in a variety of good deeds. Thanal oversees a variety of socially beneficial initiatives. Therefore Thanal requires a large number of public donations. Thanal App is a fundraising platform that allows Thanal to quickly receive more donations from generous people.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.daya.thanal" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">I-Sculpt</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Invoice Printing App</h2>
                                <p class="font-poppins fw-normal para-black">i-sculpt is an invoice printing application used in compact printing devices. With this application, printing invoices in gyms and personal training centres is a breeze. Simply enter the customer's details and choose a package, and the invoice will be generated in no time. The dashboard of the application will provide the organization with an analytical report of their business, as well as the ability to manage the billing packages and instructors.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------- -->


                <div class="col-lg-6">
                    <div class="mt-0 mt-lg-5 pt-0 pt-lg-5">
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/project-2.jpg" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Tajmahal</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Tiles and Sanitary App</h2>
                                    <p class="font-poppins fw-normal para-black">Tajmahal, one of the best tiles and sanitary showrooms in Edathanattukara, has our futuristic mobile app for their customers.With the app, customers have access to an extensive range of products and their details, and they can download catalogs and make inquiries about anything that interests them. Moreover, they can stay informed about the latest additions and any deals available.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.cookee.tajmahal" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/project-4.jpg" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Daily Choice</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Food Delivery App</h2>
                                    <p class="font-poppins fw-normal para-black">Hungry? Let's place an online order for some delectable food from the greatest eateries in your area. Daily Choice is an app that lets you order food online and offers a wide range of unique options. The app includes features such as real-time tracking, cashback, promo codes, wallet, daily offers and more. There are also separate applications for restaurants and delivery partners, as well as a dashboard with an analytical report for the admin.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.cookee.dailychoice" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="https://apps.apple.com/in/app/daily-choice-food-delivery/id1533217862" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/project-6.jpg" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">USAFE</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">On-demand vehicle service</h2>
                                    <p class="font-poppins fw-normal para-black">USAFE is a network of technology-enabled automobile service centres that provide a seamless service experience with the simple tap on a smartphone. Breakdown, towing, flat tyre, ac servicing, washing, detailing, denting, painting, accident services, full service, and all roadside assistance are available through the USAFE app throughout Kerala. Subscribed customers of USAFE can take advantage of free pick-up and drop-off services also.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.cookee.usafe" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="https://apps.apple.com/us/app/usafe-vehicle-service-app/id1542153642" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/project-8.jpg" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Blindtex</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Order Management System</h2>
                                    <p class="font-poppins fw-normal para-black">Blindtex is a tablet app that assists salespeople in taking measurements and collecting orders from customers. A salesman can use Blindtex to record curtain and blind measurements as well as compute material costs, and then transmit the worksheet to the production unit. The salesperson has the option to edit, copy, reopen, and resend quotations, as well as transfer them to another salesperson.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
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

        <!-- javascript  -->
        <!-- title change  -->
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                var newTitle = "ZAZZ Solutions | Our Projects.";
                document.title = newTitle;
            });
            </script>
            
    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    </body>
</html>