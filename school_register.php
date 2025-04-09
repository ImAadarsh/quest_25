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
                        <p>Register your school for QUEST 2025.</p>
                    </div>
                    <form action="controllers/school_register.php" method="POST" class="appointment-form ajax-contact me-xl-5" id="schoolRegistrationForm">
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
        <div class="form-group">
            <label for="preferred_month">Preferred Month for Classroom Round</label>
            <select class="form-control" id="preferred_month" name="preferred_month" required>
                <option value="">Select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="col-12 form-btn mt-4">
            <div id="loader" style="display:none; text-align:center; margin-bottom:15px;">
                <div class="spinner"></div>
                <p>Processing your registration, please wait...</p>
            </div>
                        <button type="submit" id="submitBtn" name="submit" class="th-btn style-border2">Register <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                    </div>
                </div>
    <div id="form-messages" class="form-messages mb-0 mt-3"></div>
</form>

<!-- Terms & Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>1. Registration and Participation</h6>
                <p>By registering for QUEST 2025, schools agree to:</p>
                <ul>
                    <li>Provide accurate and complete information during registration</li>
                    <li>Participate in all scheduled events and activities</li>
                    <li>Follow the guidelines and rules set by the organizers</li>
                    <li>Maintain professional conduct throughout the event</li>
                </ul>

                <h6>2. Data Privacy and Security</h6>
                <p>The organizers commit to:</p>
                <ul>
                    <li>Protect all personal and institutional data provided</li>
                    <li>Use the information only for event-related purposes</li>
                    <li>Not share data with unauthorized third parties</li>
                    <li>Comply with relevant data protection regulations</li>
                </ul>

                <h6>3. Event Participation</h6>
                <p>Schools understand that:</p>
                <ul>
                    <li>Registration does not guarantee selection</li>
                    <li>The organizers reserve the right to modify event schedules</li>
                    <li>Participants must adhere to deadlines and guidelines</li>
                    <li>Non-compliance may result in disqualification</li>
                </ul>

                <h6>4. Communication</h6>
                <p>Schools agree to:</p>
                <ul>
                    <li>Receive event-related communications</li>
                    <li>Maintain updated contact information</li>
                    <li>Respond to important notifications promptly</li>
                    <li>Share relevant information with participating students and staff</li>
                </ul>

                <h6>5. Intellectual Property</h6>
                <p>Schools acknowledge that:</p>
                <ul>
                    <li>Event materials are protected by copyright</li>
                    <li>Photos and videos taken during the event may be used for promotional purposes</li>
                    <li>Participants retain rights to their original work</li>
                    <li>The event name and logo cannot be used without permission</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="th-btn style-border2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="th-btn" id="acceptTerms">Accept & Close</button>
            </div>
        </div>
    </div>
</div>

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
    
    .form-messages {
        padding: 10px;
        border-radius: 5px;
        margin-top: 15px;
        display: none;
    }
    
    .form-messages.success {
        display: block;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .form-messages.error {
        display: block;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .form-control.error {
        border-color: #dc3545;
    }

    .form-control.success {
        border-color: #28a745;
    }
    
    .modal-content {
        border-radius: 15px;
    }
    
    .modal-header {
        border-bottom: 1px solid #dee2e6;
        background-color: #f8f9fa;
        border-radius: 15px 15px 0 0;
    }
    
    .modal-body {
        padding: 20px;
    }
    
    .modal-body h6 {
        color: white;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .modal-body p {
        color: white;

    }
    
    .modal-body ul {
        padding-left: 20px;
        margin-bottom: 15px;
    }
    
    .modal-body li {
        margin-bottom: 5px;
        color: wheat;
    }
    
    .modal-footer {
        border-top: 1px solid #dee2e6;
        background-color: #f8f9fa;
        border-radius: 0 0 15px 15px;
    }
    
    .terms-checkbox-container {
        margin: 15px 0;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .terms-label {
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        font-size: 16px;
    }

    .terms-label input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .checkbox-text {
        color: #333;
    }

    .checkbox-text a {
        color: #007bff;
        text-decoration: underline;
    }

    .checkbox-text a:hover {
        color: #0056b3;
    }

    .terms-error-message {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
        display: none;
    }

    .terms-error-message.show {
        display: block;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('schoolRegistrationForm');
    const loader = document.getElementById('loader');
    const submitBtn = document.getElementById('submitBtn');
    const formMessages = document.getElementById('form-messages');
    
    // Function to validate form fields
    function validateForm() {
        let isValid = true;
        const inputs = form.querySelectorAll('input[required]');
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });
        
        // Validate email format
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
            isValid = false;
            email.classList.add('error');
        }
        
        // Validate mobile number (at least 10 digits)
        const mobile = document.getElementById('mobile');
        const mobileRegex = /^\d{10,}$/;
        if (!mobileRegex.test(mobile.value.trim())) {
            isValid = false;
            mobile.classList.add('error');
        }
        
        return isValid;
    }
    
    // Function to show messages
    function showMessage(message, type) {
        formMessages.innerHTML = message; // Using innerHTML to allow HTML in messages
        formMessages.className = 'form-messages mb-0 mt-3 ' + type;
        formMessages.style.display = 'block';
        
        // Scroll to message
        formMessages.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        if (!validateForm()) {
            showMessage('Please fill all required fields correctly', 'error');
            return;
        }
        
        // Show loader and disable submit button
        loader.style.display = 'block';
        submitBtn.disabled = true;
        
        // Create FormData object
        const formData = new FormData(form);
        
        // Send form data using fetch API
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            // Log raw response for debugging
            console.log('Response status:', response.status);
            
            // Get the response text
            return response.text();
        })
        .then(function(text) {
            // Log raw text for debugging
            console.log('Raw response text:', text);
            
            // Hide loader and enable submit button
            loader.style.display = 'none';
            submitBtn.disabled = false;
            
            // Try to parse as JSON
            try {
                // Parse the JSON response
                const data = JSON.parse(text);
                console.log('Parsed JSON data:', data);
                
                // Determine message and type based on status
                if (data.status === 'success') {
                    // Display success message
                    showMessage(data.message, 'success');
                    
                    // Reset form on success
                    form.reset();
                    
                    // Remove error classes
                    form.querySelectorAll('.error').forEach(el => {
                        el.classList.remove('error');
                    });
                    
                    // Redirect after success
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 5000);
                } else {
                    // Display error message
                    showMessage(data.message || 'An unknown error occurred', 'error');
                }
            } catch (e) {
                // If parsing fails, show the raw text
                console.error('Error parsing JSON:', e);
                showMessage('Server error: ' + text, 'error');
            }
        })
        .catch(function(error) {
            // Hide loader and enable submit button
            loader.style.display = 'none';
            submitBtn.disabled = false;
            
            // Log and show error
            console.error('Fetch error:', error);
            showMessage('Connection error. Please try again later.', 'error');
        });
    });
    
    // Add input event listeners for real-time validation
    form.querySelectorAll('input[required]').forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('error');
            }
        });
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