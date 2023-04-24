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
                        <h4 class="font-poppins fw-medium fs-4">PHP Intern</h4>
                        <div class="mt-2 mb-4">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu">Development</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red">Malaysia</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of </p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-1 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">B-Tech</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="PHP Intern" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 p-4 mb-5 shadow rounded-4">
                <div class="row align-items-center">
                    <div class="col-lg-9 career-box-border">
                        <h4 class="font-poppins fw-medium fs-4">UI/UX Designer</h4>
                        <div class="mt-2 mb-4">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu">Designer</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red">Malaysia</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of </p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-1 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">B-Tech</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div>
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
                        <h4 class="font-poppins fw-medium fs-4">PHP Intern</h4>
                        <div class="mt-2 mb-4">
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-blu">Development</span>
                            <span class="font-poppins fw-normal px-3 py-1 me-2 rounded-pill primary-blue career-box-sm-p career-box-sm-bg-red">Malaysia</span>
                        </div>
                        <p class="font-poppins fw-normal para-black mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of </p>
                        <div class="d-flex flex-wrap">
                            <div class="me-5 my-2">
                                <img src="assets/images/career-exp.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">0-1 year</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-edu.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">B-Tech</span>
                            </div>
                            <div class="me-5 my-2">
                                <img src="assets/images/career-ctc.svg" alt="">
                                <span class="font-poppins fw-normal light-blue">1,80,000/year</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-end text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="PHP Intern" href="#">Apply Now</a>
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
                    <form enctype="multipart/form-data" id="contact-form" data-email="sahalthanveer@gmail.com" action="form_submition.php" method="post" charset="UTF-8">
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
                        <a href="#" class="contact-bar-a text-decoration-none light-blue">
                            <div class="mt-4 mt-md-0">
                                <h4 class="font-fix-m fs-4 text-center lh-lg">Contact Us Now<br>+91 2547815364</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

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
        echo '<script>window.history.pushState({}, document.title, "/" + "zzaz/career.php");</script>';
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

