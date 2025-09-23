<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <!-- Font Awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            /* Sizing and Display */
            height: 60vh; /* Reduced from 80vh to 60vh */
            min-height: 400px;
            display: flex;
            flex-direction: column; /* Stack text content on top of the nav bar */
            justify-content: center;
            align-items: center;
            text-align: center;

            /* Background Image & Overlay */
            position: relative;
            background-image: url('asset/image/servicebanner.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* This pseudo-element creates the dark overlay */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            z-index: 1; /* Sits above the background image */
        }

        /* --- Hero Content Styling --- */
        .hero-content {
            position: relative; /* Ensure it's on top of the overlay */
            z-index: 2;
            flex-grow: 1; /* Pushes the nav to the bottom */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 600;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 600px;
        }

        /* --- Navigation Bar Styling --- */
        .main-nav {
            position: relative; /* Ensure it's on top of the overlay */
            z-index: 2;
            width: 100%;
            background-color: rgb(216, 216, 216);
        }

        .main-nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center; /* Center the nav items */
            flex-wrap: wrap; /* Allow items to wrap on smaller screens */
        }

        .main-nav a {
            display: block;
            padding: 18px 25px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: capitalize;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .main-nav a:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        /* Active state for the current page link */
        .main-nav li.active a {
            background-color: #8a151b; /* Dark red color from the image */
            color: white;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .main-nav ul {
                flex-direction: column; /* Stack nav items vertically on small screens */
                align-items: center;
            }

            .main-nav a {
                padding: 15px 20px;
                width: 100vw;
                text-align: center;
                border-bottom: 1px solid #eee;
            }
        }

        /* Diagnosis section (moved from service/serv.php) */
        .diagnosis-section {
            font-family: 'Inter', sans-serif;
            width: 100%;
            max-width: none;
            margin: 0; /* no external side margins to avoid page shift */
            padding: 20px 3rem; /* slightly increased internal side spacing */
            background-color: #ffffff;
            border-radius: 0;
        }

        .diagnosis-section .section-title {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #8B4513;
            padding-bottom: 15px;
            margin-bottom: 25px;
            border-bottom: 3px solid #8B4513;
            display: inline-block;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .diagnosis-section .info-list {
            list-style-type: disc;
            padding-left: 20px;
            margin: 0 0 30px 20px;
            color: #333;
            font-size: 16px;
            line-height: 1.7;
        }

        .diagnosis-section .info-list li {
            margin-bottom: 12px;
        }

        .diagnosis-section .image-gallery {
            display: flex;
            justify-content: center; /* center images horizontally */
            gap: 20px;
            flex-wrap: wrap;
        }

        .diagnosis-section .image-gallery img {
            width: 100%;
            max-width: calc(32% - 14px); /* slightly smaller images */
            height: auto;
            border-radius: 5px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .diagnosis-section .image-gallery img { max-width: 100%; }
            .diagnosis-section .section-title { font-size: 24px; }
            .diagnosis-section .info-list { font-size: 15px; }
        }

        /* Notification protocol section (under Diagnosis) */
        .notification-protocol {
            font-family: 'Inter', sans-serif;
            width: 100%;
            margin: 0;
            padding: 20px 3rem 20px 4rem; /* add a bit more space on the left */
            background-color: #ffffff;
        }

        .notification-protocol .np-title {
            color: #7a2f0f;
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 12px 0;
            border-bottom: 3px solid #7a2f0f; /* underline matches text width */
            display: inline-block;
            padding-bottom: 6px;
        }

        .notification-protocol .np-title-underline { display: none; }

        .notification-protocol ol {
            margin: 0;
            padding-left: 18px;
            color: #333;
            line-height: 1.6;
            font-size: 15px;
        }

        .notification-protocol ol li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <?php
    // Get the active service from URL parameter
    $service = isset($_GET['service']) ? $_GET['service'] : 'diagnosis';
    ?>

    <section class="hero-section">
        <!-- This container holds the main heading and subheading -->
        <div class="hero-content">
            <h1>Services</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>

        <!-- Navigation Bar -->
        <nav class="main-nav">
            <ul>
                <li class="<?php echo ($service == 'diagnosis' || $service == '') ? 'active' : ''; ?>">
                    <a href="service.php?service=diagnosis">Diagnosis &amp; Treatment</a>
                </li>
                <li class="<?php echo ($service == 'parasitological') ? 'active' : ''; ?>">
                    <a href="service.php?service=parasitological">Parasitological Surveillance</a>
                </li>
                <li class="<?php echo ($service == 'entomological') ? 'active' : ''; ?>">
                    <a href="service.php?service=entomological">Entomological Surveillance</a>
                </li>
                <li class="<?php echo ($service == 'vector') ? 'active' : ''; ?>">
                    <a href="service.php?service=vector">Vector Control</a>
                </li>
                <li class="<?php echo ($service == 'riskgroup') ? 'active' : ''; ?>">
                    <a href="service.php?service=riskgroup">Risk Group &amp; Public Awareness</a>
                </li>
            </ul>
        </nav>
    </section>

    <?php
    // Load the appropriate service content based on the URL parameter
    switch ($service) {
        case 'parasitological':
            include 'service/parasitological.php';
            break;
        case 'entomological':
            include 'service/entomological.php';
            break;
        case 'vector':
            include 'service/vector.php';
            break;
        case 'riskgroup':
            include 'service/riskgroup.php';
            break;
        default:
            // The Diagnosis & Treatment content is shown by default
    ?>
    <!-- Diagnosis section (moved from service/serv.php) -->
    <section class="diagnosis-section">
        <h2 class="section-title">Early Diagnosis &amp; Case Management</h2>
        <ul class="info-list">
            <li>All the patients with fever and a recent travel history to a malaria endemic country should be tested for malaria.</li>
            <li>Any patient suspected/ diagnosed of having malaria should be immediately notified via telephone to the Regional Malaria Officer (RMO) and the AMC HQ and <br> the relevant Medical Officer of Health (MOH).</li>
        </ul>
        <div class="image-gallery">
            <img src="asset/image/serv1.png" alt="Doctor taking a blood sample from a patient's finger.">
            <img src="asset/image/serv2.png" alt="Two nurses checking a patient's chart in a hospital room.">
            <img src="asset/image/serv3.png" alt="Doctor explaining medication to a patient.">
        </div>
    </section>

    <!-- When a suspected patient is notified section -->
    <section class="notification-protocol">
        <h2 class="np-title">When a suspected malaria patient is notified to the Anti Malaria Campaign</h2>
        <div class="np-title-underline"></div>
        <ol>
            <li>Diagnosis is confirmed using the Rapid Diagnostic Test (RDT) and blood films and where necessary the PCR.</li>
            <li>A patient confirmed of having malaria should be admitted for inward treatment for at least 3 days. Information pertaining to case management and surveillance is obtained from the patient by the AMC staff within 24 hours of the confirmation of the diagnosis.</li>
            <li>The case-based entomological and parasitological surveillance is commenced by the AMC staff within 48 hours of the confirmation of the diagnosis. Entomological surveillance is carried out in and around the patient's residence to search and control vector mosquitoes. Parasitological surveillance is carried out in and around patient's residence to screen for any malaria patients.</li>
            <li>The Anti Malaria Campaign provides guidance and anti-malarial drugs for the management of the patient. Depending on the Plasmodium species, the patient is treated with anti-malarial drugs followed by Primaquine to prevent a relapse.</li>
            <li>Following discharge, the patient is followed up in the field by the AMC staff with RDT and blood films. The follow-up period depends on the Plasmodium species.</li>
        </ol>
    </section>
    <?php
        break;
    }
    ?>

    <?php include 'include/footer.php'; ?>

</body>
</html>