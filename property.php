<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduace Quest 2025 - Property</title>
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
                        <h1 class="breadcumb-title">All Property</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.php">Home</a></li>
                            <li>Properties</li>
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
            <ul class="nav nav-tabs property-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent-tab-pane" type="button" role="tab" aria-controls="rent-tab-pane" aria-selected="true">Rent</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" role="tab" aria-controls="buy-tab-pane" aria-selected="false">Buy</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">Showing 1–9 of 16 results</p>
                    </div>

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                            <div class="nav" role=tablist>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fa-light fa-grid-2"></i></a>
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-list"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                    <div class="row gy-40">
                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-1.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Toronto Townhouse</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2715 Ash, South Dakota 83475</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-2.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Serenity Villa</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2464 Royal, New Jersey</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-3.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Loft Pent House</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">6391 Elgin St. Celina</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-4.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Villa Qubic</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">4517 Washington Manchester</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-5.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Spectral Houses</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">1901 Thornridge, Hawaii 81063</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-6.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Modern House</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2715 Ash Dr. San Jose</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-7.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Villa Archetype</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">3517 W. Gray St. Utica</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-8.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Alpina house</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">6391 Elgin St. Celina</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="assets/img/property/property-s-1-9.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.php">Emma House</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">4517 Washington Manchester</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb">
                            <img src="assets/img/property/property1-1.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                01 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.php">Villa Berkel-Enschot</a></h4>
                                <p class="property-card-text">India's leading knowledge company, empowering students in Tier-1, 2, and 3 towns. Enhancing life skills and general awareness through engaging quizzes.</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-1.png" alt="img">
                                        <a href="property-details.php">Admin</a>
                                    </div>
                                    <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb">
                            <img src="assets/img/property/property1-2.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                02 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.php">Toronto Townhouse</a></h4>
                                <p class="property-card-text">India's leading knowledge company, empowering students in Tier-1, 2, and 3 towns. Enhancing life skills and general awareness through engaging quizzes.</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-2.png" alt="img">
                                        <a href="property-details.php">Admin</a>
                                    </div>
                                    <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb">
                            <img src="assets/img/property/property1-3.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                03 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.php">Virgin Vineyard House</a></h4>
                                <p class="property-card-text">India's leading knowledge company, empowering students in Tier-1, 2, and 3 towns. Enhancing life skills and general awareness through engaging quizzes.</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-3.png" alt="img">
                                        <a href="property-details.php">Admin</a>
                                    </div>
                                    <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-card-wrap style-dark">
                        <div class="property-thumb">
                            <img src="assets/img/property/property1-4.png" alt="img">
                        </div>
                        <div class="property-card style-dark">
                            <div class="property-card-number">
                                04 </div>
                            <div class="property-card-details">
                                <span class="property-card-subtitle">Apartment</span>
                                <h4 class="property-card-title"><a href="property-details.php">Apartments Auckland</a></h4>
                                <p class="property-card-text">India's leading knowledge company, empowering students in Tier-1, 2, and 3 towns. Enhancing life skills and general awareness through engaging quizzes.</p>
                                <div class="property-card-price-meta">
                                    <h5 class="property-card-price">$45,000.00</h5>
                                    <div class="property-ratting-wrap">
                                        <div class="star-ratting">
                                            <i class="fas fa-star"></i>
                                            4.9
                                        </div>
                                        10 Review
                                    </div>
                                </div>
                                <div class="property-card-meta">
                                    <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                    <span class="divider-line"></span>
                                    <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                </div>
                                <div class="property-btn-wrap">
                                    <div class="property-author-wrap">
                                        <img src="assets/img/property/property-user-1-4.png" alt="img">
                                        <a href="property-details.php">Admin</a>
                                    </div>
                                    <a href="property-details.php" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="mt-60 text-center">
                <div class="th-pagination ">
                    <ul>
                        <!-- <li><a class="prev-page" href="blog.php"><i class="far fa-arrow-left me-2"></i>Previous</a></li> -->
                        <li><a class="active" href="blog.php">1</a></li>
                        <li><a href="blog.php">2</a></li>
                        <li><a href="blog.php">3</a></li>
                        <li><a class="next-page" href="blog.php">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                    </ul>
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
</body>

</html>