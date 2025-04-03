<?php
session_start();

// Password authentication
$valid_passwords = [
    '1@QUEST_NEW_2503' => true,
    '1@SRK' => true
];

// Check if user is trying to log in
if (isset($_POST['password'])) {
    $entered_password = $_POST['password'];
    
    if (isset($valid_passwords[$entered_password])) {
        $_SESSION['auth_registered_schools'] = true;
        // Redirect to remove the form submission from browser history
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $login_error = "Invalid password. Please try again.";
    }
}

// Check if user is logged out
if (isset($_GET['logout'])) {
    unset($_SESSION['auth_registered_schools']);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Only process database connection if authenticated
if (isset($_SESSION['auth_registered_schools']) && $_SESSION['auth_registered_schools'] === true) {
    // Include database connection
    require_once 'config/database.php';

    // Get database connection
    $conn = getConnection();

    // Check if connection is successful
    $error_message = '';
    $schools = [];
    $metrics = [
        'total' => 0,
        'cities' => [],
        'monthly' => []
    ];

    if (!is_array($conn) || !isset($conn['error'])) {
        try {
            // Get all schools
            $stmt = $conn->query("SELECT * FROM schools ORDER BY created_at DESC");
            $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Calculate metrics if schools exist
            if (!empty($schools)) {
                // Total count
                $metrics['total'] = count($schools);
                
                // Cities breakdown
                $cities = [];
                foreach ($schools as $school) {
                    $city = trim($school['city']);
                    if (!empty($city)) {
                        if (!isset($cities[$city])) {
                            $cities[$city] = 0;
                        }
                        $cities[$city]++;
                    }
                }
                arsort($cities); // Sort by count
                $metrics['cities'] = array_slice($cities, 0, 5); // Top 5 cities
                
                // Monthly breakdown
                $monthly = [];
                foreach ($schools as $school) {
                    $month = date('M Y', strtotime($school['created_at']));
                    if (!isset($monthly[$month])) {
                        $monthly[$month] = 0;
                    }
                    $monthly[$month]++;
                }
                $metrics['monthly'] = $monthly;
            }
            
            // Handle CSV Export
            if (isset($_GET['export']) && $_GET['export'] === 'csv') {
                // Set headers for CSV download
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="quest_2025_schools_' . date('Y-m-d') . '.csv"');
                
                // Open output stream
                $output = fopen('php://output', 'w');
                
                // Add UTF-8 BOM for Excel compatibility
                fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
                
                // Add CSV headers
                fputcsv($output, ['ID', 'School Name', 'Principal Name', 'Contact Person', 
                          'Designation', 'Email', 'Mobile', 'City', 'Registered At']);
                
                // Add data rows
                foreach ($schools as $school) {
                    fputcsv($output, [
                        $school['id'],
                        $school['school_name'],
                        $school['principal_name'],
                        $school['name'],
                        $school['designation'],
                        $school['email'],
                        $school['mobile'],
                        $school['city'],
                        $school['created_at']
                    ]);
                }
                
                fclose($output);
                exit;
            }
            
            // Handle Excel Export (as CSV with Excel headers)
            if (isset($_GET['export']) && $_GET['export'] === 'excel') {
                // Set headers for Excel download
                header('Content-Type: application/vnd.ms-excel');
                header('Content-Disposition: attachment; filename="quest_2025_schools_' . date('Y-m-d') . '.xls"');
                
                echo '<!DOCTYPE html>
                <html>
                <head>
                    <meta charset="UTF-8">
                    <title>QUEST 2025 Registered Schools</title>
                </head>
                <body>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>School Name</th>
                                <th>Principal Name</th>
                                <th>Contact Person</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>City</th>
                                <th>Registered At</th>
                            </tr>
                        </thead>
                        <tbody>';
                
                foreach ($schools as $school) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($school['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['school_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['principal_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['name']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['designation']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['email']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['mobile']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['city']) . '</td>';
                    echo '<td>' . htmlspecialchars($school['created_at']) . '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody></table></body></html>';
                exit;
            }
            
            error_log("Found " . count($schools) . " schools in the database");
        } catch (PDOException $e) {
            $error_message = 'Failed to retrieve schools. Please try again later.';
            error_log("Error retrieving schools: " . $e->getMessage());
        }
    } else {
        $error_message = 'Database connection failed. Please try again later.';
        error_log("Database connection error: " . ($conn['error'] ?? 'Unknown error'));
    }
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
        
        .login-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        
        .login-form h3 {
            margin-bottom: 20px;
            text-align: center;
        }
        
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #3a53e2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .login-form button:hover {
            background-color: #2a41c9;
        }
        
        .login-error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        
        .logout-link {
            text-align: right;
            margin-bottom: 20px;
        }
        
        .logout-link a {
            color: #6c757d;
            text-decoration: none;
        }
        
        .logout-link a:hover {
            text-decoration: underline;
        }
        
        /* New styles for metrics and search */
        .metrics-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .metric-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            flex: 1;
            min-width: 200px;
            text-align: center;
        }
        
        .metric-card h3 {
            margin-top: 0;
            color: #3a53e2;
            font-size: 16px;
            font-weight: 600;
        }
        
        .metric-value {
            font-size: 36px;
            font-weight: 700;
            color: #343a40;
            margin: 10px 0;
        }
        
        .city-list {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        
        .city-list li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 14px;
        }
        
        .city-count {
            background: #e9ecef;
            border-radius: 20px;
            padding: 2px 8px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .tools-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .search-box {
            flex-grow: 1;
            max-width: 500px;
        }
        
        .search-box input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .export-buttons {
            display: flex;
            gap: 10px;
        }
        
        .export-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }
        
        .export-btn:hover {
            background-color: #218838;
            color: white;
        }
        
        .export-btn.excel {
            background-color: #20744a;
        }
        
        .export-btn.excel:hover {
            background-color: #185e3b;
        }
        
        .monthly-chart {
            height: 150px;
            margin-top: 15px;
            display: flex;
            align-items: flex-end;
            gap: 8px;
        }
        
        .chart-bar {
            flex-grow: 1;
            background-color: #3a53e2;
            border-radius: 4px 4px 0 0;
            position: relative;
            min-width: 30px;
        }
        
        .chart-label {
            position: absolute;
            bottom: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
        }
        
        .chart-value {
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
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
            <?php if (!isset($_SESSION['auth_registered_schools']) || $_SESSION['auth_registered_schools'] !== true): ?>
                <!-- Login Form -->
                <div class="login-form">
                    <h3>Administrator Login</h3>
                    <?php if (isset($login_error)): ?>
                        <div class="login-error">
                            <?php echo $login_error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="">
                        <input type="password" name="password" placeholder="Enter password" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-12">
                        <div class="logout-link">
                            <a href="?logout=1">Logout</a>
                        </div>
                        
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
                                <!-- Metrics Section -->
                                <div class="metrics-container">
                                    <div class="metric-card">
                                        <h3>TOTAL SCHOOLS</h3>
                                        <div class="metric-value"><?php echo $metrics['total']; ?></div>
                                        <p>Schools registered for QUEST 2025</p>
                                    </div>
                                    
                                    <div class="metric-card">
                                        <h3>TOP CITIES</h3>
                                        <?php if (!empty($metrics['cities'])): ?>
                                            <ul class="city-list">
                                                <?php foreach ($metrics['cities'] as $city => $count): ?>
                                                    <li>
                                                        <span><?php echo htmlspecialchars($city); ?></span>
                                                        <span class="city-count"><?php echo $count; ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php else: ?>
                                            <p>No city data available</p>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="metric-card">
                                        <h3>REGISTRATION TREND</h3>
                                        <?php if (!empty($metrics['monthly'])): ?>
                                            <div class="monthly-chart">
                                                <?php 
                                                $max_value = max($metrics['monthly']);
                                                foreach ($metrics['monthly'] as $month => $count): 
                                                    $height = ($count / $max_value) * 100;
                                                ?>
                                                    <div class="chart-bar" style="height: <?php echo $height; ?>%">
                                                        <div class="chart-value"><?php echo $count; ?></div>
                                                        <div class="chart-label"><?php echo $month; ?></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <p>No trend data available</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <!-- Tools Section (Search & Export) -->
                                <div class="tools-container">
                                    <div class="search-box">
                                        <input type="text" id="schoolSearch" placeholder="Search by school name, city, contact person..." onkeyup="searchSchools()">
                                    </div>
                                    
                                    <div class="export-buttons">
                                        <a href="?export=csv" class="export-btn">
                                            <i class="fas fa-file-csv"></i> Export to CSV
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="school-table" id="schoolTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>School Name</th>
                                                <th>Principal Name</th>
                                                <th>Contact Person</th>
                                                <th>Designation</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>City</th>
                                                <th>Registered At</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($schools as $school): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($school['id']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['school_name']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['principal_name']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['designation']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['email']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['mobile']); ?></td>
                                                    <td><?php echo htmlspecialchars($school['city']); ?></td>
                                                    <td><?php echo date('d M Y H:i', strtotime($school['created_at'])); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Search Functionality -->
                                <script>
                                    function searchSchools() {
                                        var input, filter, table, tr, td, i, j, txtValue, found;
                                        input = document.getElementById("schoolSearch");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("schoolTable");
                                        tr = table.getElementsByTagName("tr");
                                        
                                        // Loop through all table rows (skip header)
                                        for (i = 1; i < tr.length; i++) {
                                            found = false;
                                            // Check all columns
                                            for (j = 0; j < tr[i].cells.length; j++) {
                                                td = tr[i].cells[j];
                                                if (td) {
                                                    txtValue = td.textContent || td.innerText;
                                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                        found = true;
                                                        break;
                                                    }
                                                }
                                            }
                                            // Show/hide row based on search match
                                            tr[i].style.display = found ? "" : "none";
                                        }
                                    }
                                </script>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
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