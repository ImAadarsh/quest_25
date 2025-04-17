<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance - QUEST 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0a0b1a 0%, #12152c 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .maintenance-container {
            text-align: center;
            max-width: 800px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .logo {
            width: 200px;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #4e8cff, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            min-width: 100px;
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4e8cff;
        }

        .countdown-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            margin-top: 5px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-link {
            color: #fff;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-5px);
            color: #4e8cff;
        }

        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info a {
            color: #4e8cff;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .maintenance-container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .countdown {
                flex-wrap: wrap;
            }

            .countdown-item {
                min-width: 80px;
                padding: 15px;
            }

            .countdown-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <img src="assets/img/logo.png" alt="QUEST 2025 Logo" class="logo">
        <h1>We'll Be Back Soon!</h1>
        <p>We're currently performing scheduled maintenance to improve your experience. Please check back later.</p>
        
        <div class="countdown">
            <div class="countdown-item">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>

        <div class="social-links">
            <a href="https://facebook.com" class="social-link" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com" class="social-link" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" class="social-link" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com" class="social-link" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="contact-info">
            <p>Need immediate assistance?</p>
            <p>Email us at <a href="mailto:info@eduace.in">info@eduace.in</a></p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    <script>
        // Set the date we're counting down to (24 hours from now)
        const countDownDate = new Date().getTime() + (24 * 60 * 60 * 1000);

        // Update the countdown every 1 second
        const x = setInterval(function() {
            // Get current date and time
            const now = new Date().getTime();
            
            // Find the distance between now and the countdown date
            const distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Display the result
            document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
            
            // If the countdown is finished, display a message
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = "00";
                document.getElementById("hours").innerHTML = "00";
                document.getElementById("minutes").innerHTML = "00";
                document.getElementById("seconds").innerHTML = "00";
            }
        }, 1000);
    </script>
</body>
</html> 