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
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">zBee</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">E-Commerce App in Malaysia</h2>
                                <p class="font-poppins fw-normal para-black">zBee is a versatile e-commerce app in Malaysia that enables users to browse and order products from a wide range of categories like restaurants, cafes, grocery stores, pharmacies, and more. It offers dedicated apps for delivery personnel (RiderzBee) and merchants (MerchanzBee), ensuring seamless operations and efficient deliveries. Experience convenience and endless shopping possibilities with zBee, the go-to e-commerce app in Malaysia.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/zbee.png" alt="zbee">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Gaadiworld</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">All-In-One App for Automobiles</h2>
                                <p class="font-poppins fw-normal para-black">Gaadiworld is an all-in-one mobile app that offers a wide range of automobile services at your fingertips. Whether you're looking to buy or sell used vehicles, request vehicle repairs and maintenance, or even get mobile car wash services, Gaadiworld has you covered. Additionally, the app provides convenient access to vehicle insurance, vehicle loan services, and a vast selection of vehicle parts, accessories, and add-ons for purchase. With the inclusion of an auction service for salvaged vehicles, Gaadiworld truly caters to all your automotive needs. Simplify your automotive experience with Gaadiworld, the ultimate app for all things related to automobiles.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/gaadiworld.png" alt="gaadiworld">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Louvre</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Gate Pass Application</h2>
                                <p class="font-poppins fw-normal para-black">The Louvre Gate Pass app is a cutting-edge solution designed for the renowned Louvre Museum in Abu Dhabi, UAE. It simplifies and automates the management of vehicle entry and exit at the museum. Security officers can easily track and monitor vehicles, generate digital gate passes, and ensure smooth operations and enhanced security. Experience the efficiency of the Louvre Gate Pass app, which transforms the vehicle access process at this prestigious museum.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/louvre.png" alt="Louvre">
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
                                <div>
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Official App of Sharjah Sports Council</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Government Service App</h2>
                                <p class="font-poppins fw-normal para-black">The Sharjah Sports Council is eager to contribute its efforts and skills to achieving the Sharjah Government's strategic goals in sports and youth activities. The official app of the Sharjah Sports Council is intended to publicize the council's different programmes and activities. Users will get the frequent updates about council’s latest news, events, awards etc.</p>
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
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Tajmahal</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Tiles and Sanitary App</h2>
                                <p class="font-poppins fw-normal para-black">Tajmahal, one of the best tiles and sanitary showrooms in Edathanattukara is modernized and now available online through the mobile app. Customers can use the app to view a wide range of products and their specifications, as well as to download catalogues and make inquiries about them. They can also see what's new and what's on offer.</p>
                                <div class="mt-2">
                                    <a class="proj-store-butn-a me-3" href="https://play.google.com/store/apps/details?id=com.cookee.tajmahal" target="_bank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                    <a class="proj-store-butn-a me-3" href="#" target="_bank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-2.png" alt="">
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
                                <p class="font-poppins fw-normal para-black">Introducing our revolutionary e-commerce grocery app - your one-stop solution for convenient, personalized, and reliable grocery shopping. Browse, order, and receive fresh produce, pantry staples, and more right at your doorstep. Enjoy smart search filters, personalized recommendations, and secure payment options. Say goodbye to long queues and hello to a seamless grocery shopping experience with our app.</p>
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
                                    <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">I-sculpt</span>
                                </div>
                                <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Invoice Printing App</h2>
                                <p class="font-poppins fw-normal para-black">I-sculpt is an invoice printing application used in compact printing devices. With this application, printing invoices in gyms and personal training centres is a breeze. Simply enter the customer's details and choose a package, and the invoice will be generated in no time. The dashboard of the application will provide the organization with an analytical report of their business, as well as the ability to manage the billing packages and instructors.</p>
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
                    <div class="mb-5">
                        <div class="shadow rounded-4 overflow-hidden">
                            <div class="proj-divtype-1 p-4 p-md-5">
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
                            <div class="banner-bg text-center">
                                <img class="img-fluid" src="assets/images/project-8.jpg" alt="">
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
                                    <img class="img-fluid" src="assets/images/qmacx.png" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Qmacx</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">B2B E-Commerce Platform</h2>
                                    <p class="font-poppins fw-normal para-black">Qmacx is a cutting-edge B2B e-commerce application exclusively designed for ordering and delivering car accessories, spare parts, and automobile add-ons in Qatar. This innovative platform provides a seamless and efficient solution for businesses in the automotive industry to browse, order, and receive essential products. With Qmacx, retailers can easily access a wide range of car-related items, ensuring a hassle-free procurement process. Streamline your automotive business operations with Qmacx, the go-to B2B e-commerce app for car accessories in Qatar.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/codat.png" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">CODAT</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Coupon and Offers Application</h2>
                                    <p class="font-poppins fw-normal para-black">CODAT is a dedicated coupon and offers application, specifically designed for users in Saudi Arabia. This convenient app allows users to easily explore and redeem a wide range of coupons and offers from multiple online and offline stores across the country. With CODAT, users can access and view all the exciting deals and discounts available on one centralized platform. Furthermore, the app also showcases exclusive giveaways and offers from popular social media influencers. CODAT has gained significant popularity in KSA, providing users with a seamless and viral couponing experience.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/project-5.jpg" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Thanal</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Crowd Funding App For Charity</h2>
                                    <p class="font-poppins fw-normal para-black">Thanal is a Kerala-based nonprofit charitable organization that engages in a variety of good deeds. Thanal oversees a variety of socially beneficial initiatives. Therefore Thanal requires a large number of public donations. Thanal App is a fundraising platform that allows Thanal to quickly receive more donations from generous people.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/4kids.png" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">4Kids</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">B2B E-Commerce Application</h2>
                                    <p class="font-poppins fw-normal para-black">4kids, the top toy distributor for retailers in Kerala, introduces their app for streamlined order and delivery processes. This user-friendly app allows retailers to easily browse, order, and track toys. With personalised recommendations and real-time tracking, the 4kids app enhances the retail experience, ensuring timely and efficient inventory management.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-applestore-butn.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="shadow rounded-4 overflow-hidden">
                                <div class="banner-bg text-center">
                                    <img class="img-fluid" src="assets/images/wer2.png" alt="">
                                </div>
                                <div class="proj-divtype-2 p-4 p-md-5">
                                    <div>
                                        <span class="font-fix-r px-3 py-2 me-2 rounded-pill para-black fs-6 career-box-sm-bg-blu">Wer2</span>
                                    </div>
                                    <h2 class="font-fix-sb fs-2 primary-blue mt-2 mb-3">Electric Scooter App</h2>
                                    <p class="font-poppins fw-normal para-black">Wer2 Corporate is an app designed exclusively for corporate clients of Wer2, a renowned e-scooter rental service in Qatar. With the Wer2 Corporate app, businesses and their staff members can easily access and utilize a designated number of e-scooters for convenient and eco-friendly transportation. The app is available on both the App Store and Play Store, ensuring accessibility for all users.</p>
                                    <div class="mt-2">
                                        <a class="proj-store-butn-a me-3" href="#" target="_blank"><img class="proj-store-butn" src="assets/images/proj-gplay-butn.svg" alt=""></a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- floating-button  -->
    <?php include 'assets/includes/whatsapp-float.php';?>

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