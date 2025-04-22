<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Venue Partners</title>
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
        .city-card {
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85);
        }
        
        .city-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .city-card img {
            height: 180px;
            object-fit: cover;
            transition: all 0.5s ease;
            filter: contrast(1.1);
        }
        
        .city-card:hover img {
            transform: scale(1.05);
        }
        
        .city-card .card-body {
            padding: 1rem;
            background: transparent;
        }
        
        .city-card .card-title {
            color: #222;
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .venue-info {
            background-color: rgba(248, 249, 250, 0.6);
            border-radius: 8px;
            padding: 0.75rem;
            margin-top: 0.75rem;
            backdrop-filter: blur(5px);
        }
        
        .date-badge {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: white;
            padding: 6px 12px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 8px;
            font-size: 0.85rem;
            box-shadow: 0 3px 8px rgba(78, 84, 200, 0.3);
        }
        
        .venue-name {
            color: #333;
            font-weight: 600;
            font-size: 0.95rem;
        }
        
        .national-finals-card {
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(135deg, #1a2980, #26d0ce);
            box-shadow: 0 15px 35px rgba(26, 41, 128, 0.25);
            margin-top: 2rem;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
        }
        
        .national-finals-card::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url('quest/pattern.png') repeat;
            opacity: 0.1;
            z-index: -1;
        }
        
        .national-finals-card img {
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            filter: contrast(1.1) brightness(1.05);
            border: 3px solid rgba(255, 255, 255, 0.2);
        }
        
        .national-finals-card:hover img {
            transform: scale(1.03);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        .finals-badge {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .finals-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            position: relative;
            display: inline-block;
        }
        
        .finals-title::after {
            content: "";
            position: absolute;
            height: 4px;
            width: 60%;
            background: rgba(255, 255, 255, 0.3);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }
        
        .finals-info-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            padding: 1.25rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-left: 5px solid #1a2980;
            transition: all 0.3s ease;
        }
        
        .finals-info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }
        
        .finals-label {
            color: #1a2980;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .finals-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin: 0;
        }
        
        .info-card {
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .section-title {
            margin-bottom: 2.5rem;
            position: relative;
            text-align: center;
            font-weight: 800;
            letter-spacing: -1px;
            background: linear-gradient(to right, #1a2980, #26d0ce);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .section-title:after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #1a2980, #26d0ce);
        }
        
        .venue-container {
            position: relative;
            z-index: 1;
        }
        
        .venue-container:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('quest/map-bg.png') center/cover no-repeat;
            opacity: 0.05;
            z-index: -1;
        }
        
        .btn-futuristic {
            background: linear-gradient(135deg, #1a2980, #26d0ce);
            border: none;
            color: white;
            border-radius: 30px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(26, 41, 128, 0.25);
        }
        
        .btn-futuristic:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(26, 41, 128, 0.35);
        }
        
        .info-box {
            background: white;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
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
                        <h1 class="breadcumb-title">Venue Partners</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Venue Partners</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Venue Partners Area  
==============================-->
    <div class="space-bottom mt-50 venue-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-area text-center mb-40">
                        <span class="sub-title">Venue Partners</span>
                        <h2 class="sec-title section-title">Quest Regional Finals 2025</h2>
                        <p>Prestigious schools across India hosting Quest 2025 competitions.</p>
                    </div>
                </div>
            </div>

            <!-- City Grid Layout -->
            <div class="grid-container">
                <!-- Hyderabad -->
                <div class="card city-card h-100">
                    <img src="city/hydrabad.png" class="card-img-top" alt="Hyderabad">
                    <div class="card-body">
                        <h5 class="card-title">Hyderabad</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 31st Oct 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">Silver Oaks International School, Bachupally                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chennai -->
                <div class="card city-card h-100">
                    <img src="city/chennai.png" class="card-img-top" alt="Chennai">
                    <div class="card-body">
                        <h5 class="card-title">Chennai</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 15th Nov 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">MCTM Chidambaram</div>
                        </div>
                    </div>
                </div>
                
                <!-- Bangalore -->
                <div class="card city-card h-100">
                    <img src="city/banglore.png" class="card-img-top" alt="Bangalore">
                    <div class="card-body">
                        <h5 class="card-title">Bangalore</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 18th Oct 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">St. Josephs Boys High School</div>
                        </div>
                    </div>
                </div>
                
                <!-- Lucknow -->
                <div class="card city-card h-100">
                    <img src="city/lucknow.png" class="card-img-top" alt="Lucknow">
                    <div class="card-body">
                        <h5 class="card-title">Lucknow</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 29th Nov 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">Pioneer Montessorie School Eldeco</div>
                        </div>
                    </div>
                </div>
                
                <!-- Varanasi -->
                <div class="card city-card h-100">
                    <img src="city/varanasi.png" class="card-img-top" alt="Varanasi">
                    <div class="card-body">
                        <h5 class="card-title">Varanasi</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 26th Nov 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">Sunbeam Varuna Varanasi</div>
                        </div>
                    </div>
                </div>
                
                <!-- Jaipur -->
                <div class="card city-card h-100">
                    <img src="city/jaipur.png" class="card-img-top" alt="Jaipur">
                    <div class="card-body">
                        <h5 class="card-title">Jaipur</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> To be announced
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">To be announced</div>
                        </div>
                    </div>
                </div>
                
                <!-- Dehradun -->
                <div class="card city-card h-100">
                    <img src="city/dehradun.png" class="card-img-top" alt="Dehradun">
                    <div class="card-body">
                        <h5 class="card-title">Dehradun</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> To be announced
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">To be announced</div>
                        </div>
                    </div>
                </div>
                
                <!-- Noida -->
                <!-- <div class="card city-card h-100">
                    <img src="city/noida.png" class="card-img-top" alt="Noida">
                    <div class="card-body">
                        <h5 class="card-title">Noida</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> To be announced
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">Delhi Public School, GBN</div>
                        </div>
                    </div>
                </div> -->
                
                <!-- Ghaziabad -->
                <div class="card city-card h-100">
                    <img src="city/ghaziabad.png" class="card-img-top" alt="Ghaziabad">
                    <div class="card-body">
                        <h5 class="card-title">Ghaziabad</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 6th Dec 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">DPS SV</div>
                        </div>
                    </div>
                </div>
                
                <!-- Gurugram -->
                <div class="card city-card h-100">
                    <img src="city/gurgaon.png" class="card-img-top" alt="Gurugram">
                    <div class="card-body">
                        <h5 class="card-title">Gurugram</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> 13th Dec 2025
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">GD Goenka Signature School</div>
                        </div>
                    </div>
                </div>
                
                <!-- Indore -->
                <div class="card city-card h-100">
                    <img src="city/indore.png" class="card-img-top" alt="Indore">
                    <div class="card-body">
                        <h5 class="card-title">Indore</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> To be announced
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">To be announced</div>
                        </div>
                    </div>
                </div>
                                <!-- Ghaziabad -->
                <!-- <div class="card city-card h-100">
                    <img src="city/ghaziabad.png" class="card-img-top" alt="Ghaziabad">
                    <div class="card-body">
                        <h5 class="card-title">Ghaziabad</h5>
                        <div class="date-badge">
                            <i class="fas fa-calendar-alt me-2"></i> To be announced
                        </div>
                        <div class="venue-info">
                            <div class="venue-name">Delhi Public School, Siddharth Vihar</div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- National Finals -->
            <div class="card national-finals-card">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5 mb-4 mb-md-0">
                            <img src="city/noida.png" class="img-fluid rounded" alt="National Finals">
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="finals-badge">
                                <i class="fas fa-trophy me-2"></i> Grand Finale
                            </div>
                            <h2 class="finals-title text-white">National Finals 2025</h2>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="finals-info-box">
                                        <div class="finals-label">
                                            <i class="fas fa-calendar-day"></i> Date
                                        </div>
                                        <p class="finals-value">20th December 2025</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="finals-info-box">
                                        <div class="finals-label">
                                            <i class="fas fa-map-marker-alt"></i> Venue
                                        </div>
                                        <p class="finals-value">Delhi Public School, GBN</p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <p class="text-white mb-0">Join us for the exciting culmination of Quest 2025 as top performing schools compete for the championship title.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Information Section -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card info-card mb-4 h-100">
                        <div class="card-body p-3">
                            <h5 class="card-title fs-4 fw-bold text-center mb-3">For Schools</h5>
                            <p class="card-text">Interested in hosting the Quest competition at your school? Join our prestigious list of venue partners.</p>
                            <div class="text-center mt-3">
                                <a href="mailto:info@eduace.in" class="btn-futuristic">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card info-card mb-4 h-100">
                        <div class="card-body p-3">
                            <h5 class="card-title fs-4 fw-bold text-center mb-3">For Participants</h5>
                            <p class="card-text">Want to participate in Quest 2025? Register your school now and showcase your talent.</p>
                            <div class="text-center mt-3">
                                <a href="school_register.php" class="btn-futuristic">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--==============================
	Footer Area
==============================-->
<?php include "include/footer.php"; ?>

    <!--********************************
			Code End Here 
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
