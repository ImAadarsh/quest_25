<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Journey of QUEST 2025 - Season 03</title>
    <meta name="author" content="Endeavour Digital">
    <meta name="description" content="Journey of QUEST 2025">
    <meta name="keywords" content="QUEST 2025, Endeavour Digital">
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
        .journey-section {
            padding: 0px 0;
            background: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .journey-title {
            text-align: center;
            margin-bottom: 10px;
            position: relative;
            padding: 20px 0;
        }

        .journey-title h1 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            background: linear-gradient(45deg, #E31837, #FDB913, #00A0DC);
            padding: 20px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .journey-title h1::after {
            display: none;
        }

        .journey-title p {
            font-size: 1.3rem;
            color:rgb(190, 199, 209);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
            position: relative;
            padding: 20px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(253, 185, 19, 0.1);
        }

        .journey-image {
            width: 100%;
            max-width: 800px;
            margin: 0 auto 60px;
            display: block;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .journey-steps {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .journey-step {
            margin-bottom: 40px;
            position: relative;
            opacity: 1;
            transform: none;
        }

        .step-content {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .step-header {
            background: linear-gradient(45deg, #E31837, #FDB913, #00A0DC);
            padding: 20px;
            color: white;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: #E31837;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .step-title {
            font-size: 1.8rem;
            margin: 0;
            font-weight: 600;
        }

        .step-body {
            padding: 30px;
        }

        .step-description {
            color: #6c757d;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .step-description::before {
            content: '';
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #E31837, #FDB913, #00A0DC);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 5px;
        }

        .step-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #E31837, #FDB913, #00A0DC);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .feature-text {
            font-size: 1.1rem;
            color: #495057;
            margin: 0;
            font-weight: 500;
        }

        @media screen and (max-width: 768px) {
            .journey-title h1 {
                font-size: 2.8rem;
                letter-spacing: 1px;
                padding: 15px 25px;
            }

            .journey-title p {
                font-size: 1.1rem;
                padding: 15px;
                margin: 0 15px;
            }

            .step-header {
                flex-direction: column;
                text-align: center;
                padding: 15px;
            }

            .step-title {
                font-size: 1.5rem;
                
            }

            .step-body {
                padding: 20px;
            }

            .step-description {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .step-description::before {
                margin-bottom: 15px;
            }

            .feature-item {
                padding: 15px;
            }

            .feature-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .feature-text {
                font-size: 1rem;
            }

            .journey-image {
                max-width: 100%;
                margin-bottom: 40px;
            }
        }

        .contact-info {
            margin-top: 25px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #E31837, #FDB913, #00A0DC);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .contact-details {
            flex: 1;
        }

        .contact-label {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 3px;
        }

        .contact-value {
            font-size: 1.1rem;
            color: #2c3e50;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-value:hover {
            color: #E31837;
        }

        .contact-value.phone {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .phone-number {
            padding: 5px 10px;
            background: #f1f3f5;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .phone-number:hover {
            background: #e9ecef;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="Q" class="characters">S</span>
                    <span preloader-text="U" class="characters">E</span>
                    <span preloader-text="E" class="characters">A</span>
                    <span preloader-text="S" class="characters">S</span>
                    <span preloader-text="T" class="characters">O</span>
                    <span preloader-text="2" class="characters">N</span>
                    <span preloader-text="5" class="characters">3</span>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Mobile Menu
  ============================== -->
    <?php include "include/mobile.php"; ?>
    
    <!--==============================
	Header Area
==============================-->
    <?php include "include/header.php"; ?>

    <!--==============================
    Journey Section
==============================-->
    <section class="journey-section">
        <div class="container">
            <div class="journey-title">
                <h1>Journey of QUEST 2025</h1>
            </div>

            <div class="journey-steps">
                <div class="journey-step">
                    <div class="step-content">
                        <div class="step-header">
                            <div class="step-number">1</div>
                            <h2 class="step-title">School Registration</h2>
                        </div>
                        <div class="step-body">
                            <p class="step-description" data-step="1">Begin your QUEST journey by registering your school on the QUEST website. This is your first step towards QUEST 2025 Season 03 Registration.</p>
                            <!-- Add Reguster Now button button match to theme style -->
                            <a href="school_register.php" class="th-btn style2 th-btn-icon">Register Now</a>
                        </div>
                    </div>
                </div>

                <div class="journey-step">
                    <div class="step-content">
                        <div class="step-header">
                            <div class="step-number">2</div>
                            <h2 class="step-title">Team Contact</h2>
                        </div>
                        <div class="step-body">
                            <p class="step-description" data-step="2">Our dedicated QUEST Team will contact your school to provide detailed information about the event schedule and participation guidelines.</p>
                            
                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <div class="contact-label">Contact Numbers</div>
                                        <div class="contact-value phone">
                                            <a href="tel:+917753888063" class="phone-number">+91 77538 88063</a>
                                            <a href="tel:+919026803330" class="phone-number">+91 90268 03330</a>
                                            <a href="tel:+919246308588" class="phone-number">+91 92463 08588</a>
                                            <a href="tel:+918400700199" class="phone-number">+91 84007 00199</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <div class="contact-label">Email Address</div>
                                        <a href="mailto:info@eduace.in" class="contact-value">info@eduace.in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="journey-step">
                    <div class="step-content">
                        <div class="step-header">
                            <div class="step-number">3</div>
                            <h2 class="step-title">Classroom Level QUEST - Stage 1</h2>
                        </div>
                        <div class="step-body">
                            <p class="step-description" data-step="3">Participate in the exciting Classroom Level QUEST competition, where students showcase their STEAM knowledge and problem-solving skills.</p>

                        </div>
                    </div>
                </div>

                <div class="journey-step">
                    <div class="step-content">
                        <div class="step-header">
                            <div class="step-number">4</div>
                            <h2 class="step-title">Regional Final</h2>
                        </div>
                        <div class="step-body">
                            <p class="step-description" data-step="4">Top 20 teams from each school advance to the Regional Final, competing in the 10 Regional Final Centers.</p>

                        </div>
                    </div>
                </div>

                <div class="journey-step">
                    <div class="step-content">
                        <div class="step-header">
                            <div class="step-number">5</div>
                            <h2 class="step-title">National Final</h2> 
                            <!-- Add the Trophy Icon and big size and golden colour -->
                            <i class="fas fa-trophy me-2" style="font-size: 2rem; color: gold;"></i>
                        </div>
                        <div class="step-body">
                            <p class="step-description" data-step="5">The ultimate challenge! Regional winners compete in the National Final for the prestigious QUEST Master title.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
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

    <script>
        // Animate steps on scroll
        function checkScroll() {
            const steps = document.querySelectorAll('.journey-step');
            steps.forEach(step => {
                const stepTop = step.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (stepTop < windowHeight * 0.8) {
                    step.classList.add('visible');
                }
            });
        }

        // Initial check
        checkScroll();

        // Check on scroll
        window.addEventListener('scroll', checkScroll);
    </script>
</body>

</html>