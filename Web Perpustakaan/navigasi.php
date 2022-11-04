 <?php
  error_reporting(0);
  $sesi = $_SESSION['MEMBER'];

  ?>


 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
   <div class="container d-flex align-items-center justify-content-lg-between">
     <h1 class="logo me-auto me-lg-0">
       <a href="index.html">DIGILIB UNP<img src="" alt=""><span>.</span></a>
     </h1>
     <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     <nav id="navbar" class="navbar order-last order-lg-0">
       <ul>
         <li><a class="nav-link scrollto active" href="index.php?hal=home">Home</a></li>
         <li><a class="nav-link scrollto" href="index.php?hal=about">About</a></li>
         <li><a class="nav-link scrollto" href="index.php?hal=jasa">Services</a></li>
         <li><a class="nav-link scrollto" href="index.php?hal=portfolio">Portfolio</a></li>
         <!-- <li><a class="nav-link scrollto" href="index.php?hal=pegawai">Petugas</a></li> -->
         <!-- <li><a class="nav-link " href="index.php?hal=Buku">Buku</a></li> -->
         <li><a class="nav-link scrollto" href="index.php?hal=contact">Contact</a></li>



         <?php
          if (!isset($sesi)) { //-------jika belum/gagal login----------
          ?>
           <li><a class="nav-link scrollto" href="login_form.php">Login</a></li>
         <?php
          } else { //----------------jika berhasil login-------------------
          ?>
           <li class="dropdown">
             <a href="#"><span>Master Data</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="index.php?hal=buku">Buku</a></li>
               <li><a href="index.php?hal=pegawai">Petugas</a></li>
               <li><a href="index.php?hal=rak">Rak</a></li>
             </ul>
           </li>

           <li class="dropdown">
             <a href="#"><span><?= $sesi['fullname'] ?></span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="index.php?hal=member_profile">Profile</a></li>
                <?php
                if ($sesi['role'] == 'Admin'){ //-------hanya untuk admin----------
                  ?>
               <li><a href="index.php?hal=member">Kelola User</a></li>
              <?php } ?>
               <li><a href="logout.php">Logout</a></li>
             </ul>
           </li>
                  <!-- <li><a class="geystarted scrollto" href="index.php?hal=contact">Order</li> -->
         <?php } ?>





       </ul>
       <i class="bi bi-list mobile-nav-toggle"></i>
     </nav>
     <!-- .navbar -->

     <a href="#about" class="get-started-btn scrollto">Get Started</a>
   </div>
 </header>
 <!-- End Header -->