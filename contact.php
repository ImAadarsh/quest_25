<?php include "include/connect.php"; 
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
    $message_text = mysqli_real_escape_string($connect, $_POST['message']);
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO contacts (name, email, mobile, message, created_at, updated_at) VALUES ('$name', '$email', '$mobile', '$message_text', '$created_at', '$created_at')";

    if (mysqli_query($connect, $sql)) {
        $message = "<div class='alert alert-success'>Your message has been sent successfully!</div>";
    } else {
        $message = "<div class='alert alert-danger'>Sorry, there was an error sending your message. Please try again later.</div>";
    }
}

mysqli_close($connect);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Contact</title>
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
    <style>
        .about-contact-details-text {
            margin-bottom: 8px;
        }
        
        .about-contact-details-text a {
            color: #2c3e50;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .about-contact-details-text a:hover {
            color: #E31837;
        }
        
        @media (max-width: 768px) {
            .about-contact-details {
                text-align: center;
            }
            
            .about-contact-details-text {
                margin-bottom: 12px;
            }
        }
    </style>

</head>

<body class="bg-light">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->
     

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
                        <h1 class="breadcumb-title">Contact</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title ">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:+917753888063">+91 77538 88063</a></p>
                            <p class="about-contact-details-text"><a href="tel:+919026803330">+91 90268 03330</a></p>
                            <p class="about-contact-details-text"><a href="tel:+919246308588">+91 92463 08588</a></p>
                            <p class="about-contact-details-text"><a href="tel:+918400700199">+91 84007 00199</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:info@eduace.in">info@eduace.in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
    <div class="space contact-area-3 z-index-common" data-bg-src="assets/img/bg/contact-bg-1-1.png" data-overlay="title" data-opacity="3">
        <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-6">
                    <div class="appointment-wrap2 bg-white me-xxl-5">
                        <h2 class="form-title ">Contact Us</h2>
                        <?php echo $message; ?>
                        <form action="contact.php" method="POST" class="appointment-form ajax-contact">
    <div class="row">
        <div class="form-group style-border style-radius col-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*" required>
            <i class="fal fa-user"></i>
        </div>
        <div class="form-group style-border style-radius col-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" required>
            <i class="fal fa-envelope"></i>
        </div>
        <div class="form-group style-border style-radius col-12">
            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your phone*" required>
            <i class="fal fa-phone"></i>
        </div>
        <div class="col-12 form-group style-border style-radius">
            <i class="far fa-comments"></i>
            <textarea name="message" placeholder="Type Your Message" class="form-control" required></textarea>
        </div>
        <div class="col-12 form-btn mt-4">
            <button type="submit" name="submit" class="th-btn">Submit Message <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
        </div>
    </div>
    <!-- <p class="form-messages mb-0 mt-3"></p> -->
</form>

                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map z-index-common">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.7939195916774!2d78.55618197665515!3d25.47855592024485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397771e6f7e2836f%3A0x5fa93aadee1e14ad!2sMahendra%20Puri%20Colony!5e0!3m2!1sen!2sin!4v1742664316207!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address bg-theme">
                <div class="thumb">
                    <img src="https://www.ipnfoundation.org/images/header-logo-white.png" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">Address:</h4>
                    <p class="text">101, Mahendrapuri Colony,
Near Kali mata mandir,
Gwalior road, Jhansi</p>
                    <h4 class="title">Post Code:</h4>
                    <p class="text">284003</p>
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