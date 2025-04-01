<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Participating Schools</title>
    <meta name="author" content="Quest">
    <meta name="description" content="Eduace Quest 2025">
    <meta name="keywords" content="Eduace Quest 2025, Endeavour Digital">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
<?php include "include/meta_images.php"; ?>
<!-- Endeavour Digital -->

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
     

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>

    <!--==============================
     Preloader
  ==============================-->


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
                        <h1 class="breadcumb-title">Participating Schools</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Participating Schools</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Property Page Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h2 class="fw-medium">Participating Schools</h2>
                    </div>

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap">
                            <form class="woocommerce-ordering" method="get">
                                <!--==========<<select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select> -->
                            </form>
                            <div class="nav" role=tablist>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fa-light fa-grid-2"></i></a>
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-list"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-lg-7">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                            <div class="schools-table-wrapper">
                                <div class="table-responsive">
                                    <table class="table table-hover schools-table">
                                        <thead>
                                            <tr>
                                                <th><i class="fas fa-school me-2"></i>School Name</th>
                                                <th><i class="fas fa-city me-2"></i>City</th>
                                                <th><i class="fas fa-map-marker-alt me-2"></i>State</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once 'include/sheets.php';
                                            $schools = getSchoolsList();
                                            
                                            if (!empty($schools)) {
                                                foreach ($schools as $school) {
                                                    if (count($school) >= 3) {
                                                        echo '<tr>';
                                                        echo '<td class="school-name">' . htmlspecialchars(trim($school[0])) . '</td>';
                                                        echo '<td>' . htmlspecialchars(trim($school[1])) . '</td>';
                                                        echo '<td>' . htmlspecialchars(trim($school[2])) . '</td>';
                                                        echo '</tr>';
                                                    }
                                                }
                                            } else {
                                                echo '<tr><td colspan="4" class="text-center">No schools found</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
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

<style>
.schools-table-wrapper {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
    padding: 20px;
    margin-top: 20px;
}

.schools-table {
    margin-bottom: 0;
}

.schools-table thead th {
    background: #f8f9fa;
    border-bottom: 2px solid #e9ecef;
    color: #2c3e50;
    font-weight: 600;
    padding: 15px;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
}

.schools-table tbody tr {
    transition: all 0.3s ease;
    border-bottom: 1px solid #f0f0f0;
}

.schools-table tbody tr:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

.schools-table td {
    padding: 15px;
    vertical-align: middle;
    color: #2c3e50;
}

.school-name {
    font-weight: 600;
    color: #2c3e50;
}

.status-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.status-badge.active {
    background: #e8f5e9;
    color: #2e7d32;
}

.status-badge.pending {
    background: #fff3e0;
    color: #ef6c00;
}

@media (max-width: 768px) {
    .schools-table-wrapper {
        padding: 10px;
    }
    
    .schools-table thead th {
        font-size: 0.8rem;
        padding: 10px;
    }
    
    .schools-table td {
        padding: 10px;
        font-size: 0.9rem;
    }
}
</style>
</body>

</html>