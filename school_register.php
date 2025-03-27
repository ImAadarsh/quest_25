<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Agents</title>
    <meta name="author" content="Quest">
    <meta name="description" content="Eduace Quest 2025">
    <meta name="keywords" content="Eduace Quest 2025, Endeavour Digital">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
<?php include "include/meta_images.php"; ?>

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-light">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>

    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="S" class="characters">S</span>

                    <span preloader-text="E" class="characters">E</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="S" class="characters">S</span>

                    <span preloader-text="O" class="characters">O</span>

                    <span preloader-text="N" class="characters">N</span>

                    <span preloader-text="3" class="characters">3</span>
                </div>
            </div>
        </div>
    </div> <!--==============================
    Mobile Menu
  ============================== -->
<?php include "include/mobile.php"; ?><!--==============================
    Sidemenu
============================== -->
<?php include "include/slidemenu.php"; ?><!--==============================
	Header Area
==============================-->
<?php include "include/header.php"; ?>


    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="quest/header.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">School Registration</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>School Registration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Appointment Area   
==============================-->
    <div class="space-bottom mt-50">
        <div class="container">
            <div class="row gx-60 align-items-center">
                <div class="col-lg-5">
                    <div class="appointment-thumb text-xl-end mb-lg-0 mb-50">
                        <img src="quest/Register.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="title-area mb-35">
                        <h2 class="sec-title">Get Your School Enrolled</h2>
                    </div>
                    <form action="https://questeduace.in/controllers/school_register.php" method="POST" class="appointment-form ajax-contact me-xl-5">
    <div class="row">
        <div class="login-top">
            <h3>School Registration Form</h3>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="text" class="form-control" name="name" id="name" placeholder="Contact Person Name*" required>
            <i class="fal fa-user"></i>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
            <i class="fal fa-envelope"></i>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="text" class="form-control" name="designation" id="designation" placeholder="Contact Person Designation*" required>
            <i class="fal fa-briefcase"></i>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number*" required>
            <i class="fal fa-phone"></i>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="text" class="form-control" name="principal_name" id="principal_name" placeholder="School's Principal Name*" required>
            <i class="fal fa-user-tie"></i>
        </div>
        <div class="form-group style-border style-radius col-md-6">
            <input type="text" class="form-control" name="school_name" id="school_name" placeholder="School Name*" required>
            <i class="fal fa-school"></i>
        </div>
        <div class="form-group style-border style-radius col-md-12">
            <input type="text" class="form-control" name="city" id="city" placeholder="City*" required>
            <i class="fal fa-city"></i>
        </div>
        <div class="col-12 form-group style-border style-radius">
            <div class="back-check-box">
                <input type="checkbox" id="box-1" > I agree to the <em>Terms & Conditions</em>
            </div>
        </div>
        <div class="col-12 form-btn mt-4">
            <div id="loader" style="display:none; text-align:center; margin-bottom:15px;">
                <div class="spinner"></div>
                <p>Processing your registration, please wait...</p>
            </div>
            <button type="submit" id="button" name="submit" class="th-btn style-border2">Register <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
        </div>
    </div>
    <p class="form-messages mb-0 mt-3"></p>
</form>

<style>
    .spinner {
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        border-top: 4px solid #3498db;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
        margin: 0 auto;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function() {
        // Show the loader
        document.getElementById('loader').style.display = 'block';
        
        // Disable the submit button to prevent multiple submissions
        document.getElementById('button').disabled = true;
    });
});
</script>

                </div>

            </div>

        </div>
    </div><!--==============================
	Footer Area
==============================-->
<?php include "include/footer.php"; ?>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Gsap -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>