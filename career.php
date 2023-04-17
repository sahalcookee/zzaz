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
                        <div class="text-start text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-4 px-sm-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="PHP Intern" href="#">Apply Now</a>
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
                        <div class="text-start text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-4 px-sm-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="UI/UX Designer" href="#">Apply Now</a>
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
                        <div class="text-start text-lg-center mt-4 mt-lg-0">
                            <a class="d-inline-block text-decoration-none text-white font-poppins fw-semibold px-4 px-sm-5 py-3 z-butn rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="PHP Intern" href="#">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- popup  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5 rounded-4">
                <div class="modal-header p-0 border-0 mb-1">
                    <h1 class="modal-title fs-4 font-fix-sb primary-blue" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                        <form>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="font-poppins fw-normal text-black" for="name">Name*</label><br>
                                            <input type="text" class="font-poppins fw-normal w-100 rounded career-form-input py-2 px-3 mb-3 mt-1" placeholder="Enter your name">
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-poppins fw-normal text-black" for="name">Name*</label><br>
                                            <input type="text" class="font-poppins fw-normal w-100 rounded career-form-input py-2 px-3 mb-3 mt-1" placeholder="Enter your name">
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-poppins fw-normal text-black" for="name">Name*</label><br>
                                            <input type="text" class="font-poppins fw-normal w-100 rounded career-form-input py-2 px-3 mb-3 mt-1" placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    <!-- javascript  -->
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

                modalTitle.textContent = `${recipient}`
            })
        }
    </script>