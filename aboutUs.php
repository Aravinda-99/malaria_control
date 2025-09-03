<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us & Malaria Info</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Basic Resets and Font Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Main Header Container */
        .about-header-container {
            width: 100%;
            border-bottom: 3px solid #8B0000; /* Dark red border at the very bottom */
        }

        /* Top decorative red bar */
        .about-top-bar {
            height: 5px;
            background-color: #8B0000; /* Dark red */
        }

        /* Hero Section with Background Image */
        .about-hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://placehold.co/1920x600/6c757d/ffffff?text=Your+Image+Here');
            height: 60vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            border-top: 2px solid #fff;
            border-bottom: 2px solid #fff;
        }

        .about-hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .about-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* Navigation Bar */
        .about-nav {
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            padding: 0 2rem;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .about-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }

        .about-nav ul li {
            display: inline-block;
            white-space: nowrap;
            margin: 0;
        }

        .about-nav ul li a {
            display: block;
            padding: 1rem 1.5rem;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .about-nav ul li a:hover {
            background-color: #f0f0f0;
        }

        /* Special style for the first navigation item */
        .about-nav ul li:first-child a {
            background-color: #800000;
            color: #ffffff;
        }

        .about-nav ul li:first-child a:hover {
            background-color: #a00000;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-hero-section {
                height: 40vh;
            }
            .about-hero-section h1 {
                font-size: 2rem;
            }
            .about-hero-section p {
                font-size: 1rem;
            }
            .about-nav {
                padding: 0.5rem 0;
            }
            .about-nav ul {
                flex-direction: column;
                align-items: center;
                flex-wrap: wrap;
            }
            .about-nav ul li a {
                padding: 0.75rem 1rem;
                width: 100vw;
                text-align: center;
            }
        }

        /* Vision and Mission Section Styles */
        .about-vision-mission-container {
            width: 100%;
            display: flex;
            color: #333;
        }

        .about-vision-mission-container .text-content,
        .about-vision-mission-container .image-content {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-vision-mission-container .text-content {
            background-color: #800000;
            color: white;
            padding: 4rem;
            flex-direction: column;
            align-items: flex-start;
        }

        .about-vision-mission-container .text-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .about-vision-mission-container .text-content p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .about-vision-mission-container .image-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        /* Reverse order for the mission section */
        #mission {
            flex-direction: row-reverse;
        }

        /* Responsive adjustments for vision and mission */
        @media (max-width: 992px) {
            .about-vision-mission-container {
                flex-direction: column;
            }
            #mission {
                flex-direction: column;
            }
            .about-vision-mission-container .text-content,
            .about-vision-mission-container .image-content {
                width: 100%;
            }
            .about-vision-mission-container .text-content {
                padding: 2rem;
            }
            .about-vision-mission-container .text-content h2 {
                font-size: 2rem;
            }
        }
        
        /* =============================================== */
        /* Styles for the Guiding Principles Section      */
        /* =============================================== */
        .guiding-principles-container {
            width: 100%;
            display: flex;
            padding: 4rem 0;
            background-color: #ffffff;
            color: #333;
        }

        .guiding-principles-container .principles-text,
        .guiding-principles-container .principles-image {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .guiding-principles-container .principles-text {
            flex-direction: column;
            align-items: flex-start;
            padding: 2rem 4rem;
        }

        .guiding-principles-container .principles-text h2 {
            font-size: 2.5rem;
            color: #800000;
            margin-bottom: 1.5rem;
        }

        .guiding-principles-container .principles-text p {
            font-style: italic;
            color: #6c757d;
            margin-bottom: 1.5rem;
            border-left: 3px solid #f0f0f0;
            padding-left: 1rem;
        }

        .guiding-principles-container .principles-text ul {
            list-style-position: outside;
            padding-left: 1.5rem;
        }

        .guiding-principles-container .principles-text ul li {
            margin-bottom: 1rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .guiding-principles-container .principles-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 992px) {
            .guiding-principles-container {
                flex-direction: column-reverse;
                padding: 2rem 0;
            }
            .guiding-principles-container .principles-text,
            .guiding-principles-container .principles-image {
                width: 100%;
            }
            .guiding-principles-container .principles-text {
                padding: 2rem;
            }
            .guiding-principles-container .principles-image {
                padding: 1rem;
            }
            .guiding-principles-container .principles-text h2 {
                font-size: 2rem;
            }
        }


    </style>
</head>
<body>

<?php include 'include/header.php'; ?>
    <header class="about-header-container">
        <div class="about-top-bar"></div>
        <section class="about-hero-section">
            <h1>About Us</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </section>
        <nav class="about-nav">
            <ul>
                <li><a href="#vision">Vision & Mission</a></li>
                <li><a href="#principles">Guiding Principles</a></li>
                <li><a href="#malaria-info">Malaria Info</a></li>
                <li><a href="#staff">Our Staff</a></li>
                <li><a href="#structure">Organizational Structure</a></li>
                <li><a href="#officers">Regional Officers</a></li>
                <li><a href="#support">Technical Support Group</a></li>
                <li><a href="#review">Case Review Community</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="vision" class="about-vision-mission-container">
            <div class="text-content">
                <h2>Our Vision</h2>
                <p>To Create A Healthier Sri Lanka Where Every Individual Has Access To Compassionate, Reliable, And Preventive Healthcare, Empowering Communities To Thrive Free From Disease.</p>
            </div>
            <div class="image-content">
                <img src="https://placehold.co/800x400/000000/ffffff?text=Vision+Image" alt="Eye representing vision">
            </div>
        </section>

        <section id="mission" class="about-vision-mission-container">
            <div class="text-content">
                <h2>Our Mission</h2>
                <p>To Deliver Patient-Centered Healthcare Through Dedicated Service, Modern Medical Practices, And Community Outreach — With A Focus On Disease Prevention, Early Detection, And Education, Especially In Vulnerable Rural Areas.</p>
            </div>
            <div class="image-content">
                <img src="https://placehold.co/800x400/1e3a8a/ffffff?text=Mission+Image" alt="Target representing mission">
            </div>
        </section>

        <section id="principles" class="guiding-principles-container">
            <div class="principles-text">
                <h2>Guiding principles</h2>
                <p>The text is difficult to read in the image you provided. I have transcribed it as best I can below. Please review and correct it.</p>
                <ul>
                    <li>Unwavering dedication to evidence-based medicine, ensuring scientifically proven solutions and exceptional technological advancements are at the forefront of our NGO's Care Alliance Programme and that the RDNS squad therapy is an essential part of all interventions and activities.</li>
                    <li>Strive to eliminate access disparities in quality melanoma diagnosis and prevention.</li>
                    <li>Emphasis on increasing knowledge of the entire population.</li>
                    <li>Absolute Adherence.</li>
                    <li>Giving Dignity.</li>
                    <li>Bring social justice to all patients.</li>
                    <li>Unwavering respect.</li>
                </ul>
            </div>
            <div class="principles-image">
                <img src="https://placehold.co/800x600/adb5bd/495057?text=Guiding+Principles+Image" alt="Team looking over a map with a magnifying glass">
            </div>
        </section>

        <?php include 'about/malaria.php'; ?>

    <!-- Strategies 2-->
        <section id="principles" class="guiding-principles-container">
            <div class="principles-text">
                <h2>Guiding principles</h2>
                <p>The text is difficult to read in the image you provided. I have transcribed it as best I can below. Please review and correct it.</p>
                <ul>
                    <li>Unwavering dedication to evidence-based medicine, ensuring scientifically proven solutions and exceptional technological advancements are at the forefront of our NGO's Care Alliance Programme and that the RDNS squad therapy is an essential part of all interventions and activities.</li>
                    <li>Strive to eliminate access disparities in quality melanoma diagnosis and prevention.</li>
                    <li>Emphasis on increasing knowledge of the entire population.</li>
                    <li>Absolute Adherence.</li>
                    <li>Giving Dignity.</li>
                    <li>Bring social justice to all patients.</li>
                    <li>Unwavering respect.</li>
                </ul>
            </div>
            <div class="principles-image">
                <img src="https://placehold.co/800x600/adb5bd/495057?text=Guiding+Principles+Image" alt="Team looking over a map with a magnifying glass">
            </div>
        </section>

    </main>
    <?php include 'include/footer.php'; ?>

</body>
</html>

