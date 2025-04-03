<?php
// Include database connection
require_once 'config/database.php';

// Get database connection
$conn = getConnection();

// Check if connection is successful
$error_message = '';
$schools = [];

if (!isset($conn['error'])) {
    try {
        // Get all schools
        $stmt = $conn->query("SELECT * FROM schools ORDER BY created_at DESC");
        $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $error_message = 'Failed to retrieve schools. Please try again later.';
    }
} else {
    $error_message = 'Database connection failed. Please try again later.';
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Registered Schools</title>
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
        .school-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .school-table th, .school-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .school-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .school-table tr:hover {
            background-color: #f5f5f5;
        }
        
        .no-schools {
            text-align: center;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-top: 20px;
        }
        
        .error-message {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
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
                        <h1 class="breadcumb-title">Registered Schools</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Registered Schools</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Registered Schools Area   
==============================-->
    <div class="space-bottom mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area mb-35">
                        <h2 class="sec-title">Schools Registered for QUEST 2025</h2>
                    </div>
                    
                    <?php if (!empty($error_message)): ?>
                        <div class="error-message">
                            <?php echo $error_message; ?>
                        </div>
                    <?php else: ?>
                        <?php if (empty($schools)): ?>
                            <div class="no-schools">
                                <h3>No schools registered yet</h3>
                                <p>Be the first school to register for QUEST 2025!</p>
                                <a href="school_register.php" class="th-btn style-border2">Register Now <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></a>
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="school-table">
                                    <thead>
                                        <tr>
                                            <th>School Name</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Registration Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($schools as $school): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($school['school_name']); ?></td>
                                                <td><?php echo htmlspecialchars($school['name']); ?> (<?php echo htmlspecialchars($school['designation']); ?>)</td>
                                                <td><?php echo htmlspecialchars($school['email']); ?></td>
                                                <td><?php echo htmlspecialchars($school['city']); ?></td>
                                                <td><?php echo date('d M Y', strtotime($school['created_at'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
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