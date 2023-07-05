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
                            <h4 class="font-fix-m fs-4 light-blue pt-0 pt-lg-5">Career</h4>
                            <h2 class="font-fix-sb fs-2 extra-light-blue">We’re Hiring!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abt-ban-img-parent">
                            <div class="abt-ban-img-child">
                                <img class="img-fluid abt-ban-img" src="assets/images/career-ban-img.png" alt="">
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
            <h2 class="font-fix-sb fs-2 primary-blue">Featured Jobs</h2>
            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">MERN Stack Developer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Development</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're looking for a talented MERN Stack Developer to join our team. You'll design, develop, and implement innovative web applications using MongoDB, Express.js, React.js, and Node.js. From concept to deployment, you'll be involved in the entire software development lifecycle. Strong front-end skills, RESTful API experience, and a passion for staying current with industry trends are essential. Join us and contribute to our dynamic and rewarding organization.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-2 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">MERN</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="MERN Stack Developer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Flutter Developer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Development</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a skilled Flutter Developer to join our team. You'll design and develop visually appealing mobile applications using the Flutter framework. Collaborating with cross-functional teams, you'll translate requirements into functional features and ensure seamless integration. Strong mobile app development skills, problem-solving abilities, and a passion for staying current with industry trends are essential. Join us and contribute to our innovative and dynamic organization.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-2 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Flutter</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Flutter Developer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">PHP Laravel Developer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Development</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a talented PHP/Laravel Developer to join our team. As a Laravel Developer, you'll design, develop, and maintain robust web applications using Laravel. Your focus will be on writing clean, efficient code, implementing new features, and ensuring high performance. Strong PHP and Laravel knowledge, along with proficiency in front-end technologies, is required. Join our collaborative team and contribute to an exciting environment where your skills and expertise will be valued.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-2 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">PHP</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="PHP Laravel Developer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Graphic Designer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Designing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a talented Graphic Designer to join our team. As a Graphic Designer, you'll create visually stunning designs for marketing materials and digital platforms. Collaborating closely with cross-functional teams, you'll develop concepts and deliver high-quality visual assets that effectively communicate our brand message. Proficiency in design software and a strong portfolio showcasing creativity and attention to detail are essential. Join our innovative and collaborative team and contribute your expertise to an exciting environment.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">2-4 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Any Degree</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Graphic Designer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">UI/UX Designer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Designing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a skilled UI/UX Designer to join our team. As a UI/UX Designer, you'll create intuitive and visually appealing user interfaces and seamless user experiences across digital platforms. Collaborate closely with cross-functional teams, conduct user research, and iterate designs based on feedback. Proficiency in design tools, user-centered design principles, and a strong portfolio showcasing your skills are essential. Join our innovative and collaborative team and contribute your expertise to an exciting environment.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">2-4 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Any Degree</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="UI/UX Designer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Web Designer</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Designing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a talented Web Designer to join our team. As a Web Designer, you'll create visually stunning and user-friendly website designs. Collaborate closely with clients and cross-functional teams, incorporating branding elements and delivering designs that align with clients' goals. Proficiency in design tools, strong attention to detail, and a passion for staying current with web design trends are essential. Join our innovative and collaborative team and contribute your expertise to an exciting environment.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">2-4 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Any Degree</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Web Designer" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Digital Marketing Executive</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Marketing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a skilled Digital Marketing Executive to join our team. As a Digital Marketing Executive, you'll develop and implement strategies to enhance online brand visibility and customer engagement. Manage digital campaigns, analyze performance metrics, and optimize marketing efforts across various channels. Strong knowledge of digital tools, analytical skills, and an understanding of consumer behavior is essential. Join our dynamic team and contribute to an innovative environment where your expertise will be valued.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1-3 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Any Degree</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Digital Marketing Executive" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Project Manager</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Marketing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking an experienced Project Manager to join our team. As a Project Manager, you'll oversee the planning, execution, and delivery of projects, ensuring they stay within scope, budget, and timeline. Coordinate resources, manage stakeholder expectations, and facilitate effective communication among team members. Strong leadership, organizational, and problem-solving skills are essential. Join our dynamic team and contribute your expertise to an exciting environment.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">3-5 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Any Degree</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Project Manager" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">Software QA Tester</h4>
                        <div class="my-3">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu mb-2 mb-md-0 d-inline-block">Marketing</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Malaysia</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">Singapore</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red mb-2 mb-md-0 d-inline-block">India</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">We're seeking a detail-oriented Software QA Tester to join our team. As a QA Tester, you'll ensure the quality and functionality of our software products through rigorous testing and bug identification. Conduct manual and automated tests, document issues, and collaborate with cross-functional teams to improve the development process. Strong analytical skills and attention to detail are essential. Join our innovative and collaborative team and contribute to an exciting environment.</p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1-3 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">Degree in Computer Science</span>
                            </div>
                            <!-- <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Software QA Tester" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- popup  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-4 p-lg-5 rounded-4">
                <div class="modal-header p-0 border-0 mb-3">
                    <h1 class="modal-title fs-4 font-fix-sb primary-blue" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <form enctype="multipart/form-data" id="contact-form" data-email="zzazatsolutions@gmail.com" action="form_submition.php" method="post" charset="UTF-8">
                        <input type="hidden" name="position" id="position">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 mb-3 mb-lg-0">
                                    <div class="mb-1">
                                        <label for="name" class="font-poppins fw-normal text-black" for="name">Name*</label><br>
                                        <input name="name" type="text" id="name" class="font-poppins fw-normal w-100 rounded career-form-input py-3 px-3 mb-3 mt-1" placeholder="Enter your name" required>
                                    </div>
                                    <div class="mb-1">
                                        <label for="phone" class="font-poppins fw-normal text-black" for="name">Phone*</label><br>
                                        <input name="phone" type="tel" id="phone" class="font-poppins fw-normal w-100 rounded career-form-input py-3 px-3 mb-3 mt-1" placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="mb-1">
                                        <label for="email" class="font-poppins fw-normal text-black" for="name">Email*</label><br>
                                        <input name="email"  type="email" id="email" class="font-poppins fw-normal w-100 rounded career-form-input py-3 px-3 mb-3 mt-1" placeholder="Enter your email" required>
                                    </div>
                                    <div>
                                        <label class="font-poppins fw-semibold primary-blue rounded px-4 py-3 career-file-label" for="file-input" id="file-label">Upload Your CV</label>
                                        <input class="career-file" type="file" name="attachment" id="file-input" onchange="updateLabel(this)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <label for="message" class="font-poppins fw-normal text-black">Message</label>
                                        <textarea name="message" id="message" class="font-poppins fw-normal w-100 rounded career-form-input py-2 px-3 mb-3 mt-1 career-popup-textarea" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" id="submit_btn" value="send" class="d-inline-block text-decoration-none text-white font-poppins fw-semibold z-butn rounded border-0 career-popoup-button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- contact-bar  -->
    <section class="py-5 contact-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="font-fix-sb fs-2 primary-blue">We're Here To Help With Your Next Software Project.</h2>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="me-3 me-md-5 mt-4 mt-md-0">
                            <img src="assets/images/contact-bar-img.svg" alt="">
                        </div>
                        <div class="text-decoration-none light-blue">
                            <div class="mt-4 mt-md-0">
                                <h4 class="font-fix-m fs-3 text-start lh-lg">Contact Us Now</h4>
                                <a class="font-fix-m fs-5 text-start lh-md d-block text-decoration-none light-blue contact-bar-a" href="tel:+6011 37422938">Malaysia +6011 37422938</a>
                                <a class="font-fix-m fs-5 text-start lh-md d-block text-decoration-none light-blue contact-bar-a" href="tel:+65 8547 7485">Singapore +65 8547 7485</a>
                                <a class="font-fix-m fs-5 text-start lh-md d-block text-decoration-none light-blue contact-bar-a" href="tel:+91 9995768540">India +91 9995768540</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- javascript  -->
    
     <!-- form script  -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- contact-submition-script  -->
     <?php 
    $mail_sent = @$_GET['mail_sent'];
    if($mail_sent){
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Application  Submitted',
            text: 'We will reach you soon!'
        })</script>";
        echo '<script>window.history.pushState({}, document.title, "/" + "career");</script>';
    }
    ?>

<script>
    document.querySelector("form").addEventListener("submit", function(){
        document.getElementById("submit_btn").disabled= true;
    })
    </script>


<!-- modal  -->
<script>
    const exampleModal = document.getElementById('exampleModal')
            if (exampleModal) {
                exampleModal.addEventListener('show.bs.modal', event => {
                    // Button that triggered the modal
                    const button = event.relatedTarget
                    // Extract info from data-bs-* attributes
                    const recipient = button.getAttribute('data-bs-whatever')
                    // If necessary, you could initiate an Ajax request here
                    // and then do the updating in a callback.
                    
                    // Update the modal's content.
                    const modalTitle = exampleModal.querySelector('.modal-title')
                    const modalBodyInput = exampleModal.querySelector('.modal-body input')
                    
                    modalTitle.textContent = `${recipient}`;
                    document.getElementById("position").value = recipient;
                    
                })
            }
            </script>
    <!-- no file chosen -->
    <script>
        function updateLabel(input) {
            var label = document.getElementById("file-label");
            if (input.value) {
                label.innerHTML = input.files[0].name;
            } else {
                label.innerHTML = "Upload Your CV";
            }
        }
        </script>

    <!-- title change  -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var newTitle = "ZAZZ Solutions | Career.";
            document.title = newTitle;
        });
    </script>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    </body>
</html>