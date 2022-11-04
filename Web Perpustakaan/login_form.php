 <!-- Vendor CSS Files -->
 <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
 <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

 <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet" />

 <section class="vh-100">
   <div class="container-fluid h-custom">

     <div class="row d-flex justify-content-center align-items-center h-100">
       <div class="col-md-5 col-lg-1 col-xl-5">
         <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">
             <div class="carousel-item active" data-bs-interval="10000">
               <img src="https://images.pexels.com/photos/7723801/pexels-photo-7723801.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item" data-bs-interval="2000">
               <img src="https://images.pexels.com/photos/7723796/pexels-photo-7723796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
             </div>
             
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
       </div>

       <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
         <form method="POST" action="member_controler.php">
           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
             <p class="lead fw-normal mb-0 me-3">Sign in with</p>
             <button type="button" class="btn btn-primary btn-floating mx-1">
               <i class="fab fa-facebook-f"></i>
             </button>

             <button type="button" class="btn btn-primary btn-floating mx-1">
               <i class="fab fa-twitter"></i>
             </button>

             <button type="button" class="btn btn-primary btn-floating mx-1">
               <i class="fab fa-linkedin-in"></i>
             </button>
           </div>

           <div class="divider d-flex align-items-center my-4">
             <p class="text-center fw-bold mx-3 mb-0">Or</p>
           </div>

           <!-- Email input -->
           <div class="form-outline mb-4">
             <input type="text" name="username" class="form-control form-control" placeholder="Enter a valid email address" />
             <label class="form-label">Username</label>
           </div>

           <!-- Password input -->
           <div class="form-outline mb-3">
             <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" />
             <label class="form-label">Password</label>
           </div>

           <div class="d-flex justify-content-between align-items-center">
             <!-- Checkbox -->
             <div class="form-check mb-0">
               <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
               <label class="form-check-label" for="form2Example3">
                 Remember me
               </label>
             </div>
             <a href="#!" class="text-body">Forgot password?</a>
           </div>

           <div class="text-center text-lg-start mt-4 pt-2">
             <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

             <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
           </div>
         </form>
       </div>
     </div>
   </div>
   <!-- <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
   <div class="text-white mb-3 mb-md-0">
     Copyright © 2020. All rights reserved.
   </div>
   <!-- Copyright -->

   <!-- Right -->
   <div>
     <a href="#!" class="text-white me-4">
       <i class="fab fa-facebook-f"></i>
     </a>
     <a href="#!" class="text-white me-4">
       <i class="fab fa-twitter"></i>
     </a>
     <a href="#!" class="text-white me-4">
       <i class="fab fa-google"></i>
     </a>
     <a href="#!" class="text-white">
       <i class="fab fa-linkedin-in"></i>
     </a>
   </div>
   <!-- Right -->
   </div> -->
 </section>


 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

 <!-- Font awesome -->
 <script src="https://kit.fontawesome.com/83bc8e55c0.js" crossorigin="anonymous"></script>