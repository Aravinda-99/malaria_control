<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* Staff Page Specific Styles - Using unique prefixes to avoid conflicts */
        body.staff-page-body {
            font-family: Arial, sans-serif !important;
            background-color: #f4f4f4 !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        /* Hero Section with Background Image */
        .staff-hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('asset/image/Container.png');
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
            border-top: none;
            border-bottom: 2px solid #fff;
            margin: 0;
        }

        .staff-hero-section h1 {
            font-size: 3rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .staff-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* Responsive adjustments for hero section */
        @media (max-width: 768px) {
            .staff-hero-section {
                height: 40vh;
            }
            .staff-hero-section h1 {
                font-size: 2rem;
            }
            .staff-hero-section p {
                font-size: 1rem;
            }
        }

        /* Content Section */
        .content-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .content-container {
            max-width: 1000px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .content-container h2 {
            color: #800000;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #800000;
            padding-bottom: 0.5rem;
        }

        .content-container h3 {
            color: #6a0000;
            font-size: 1.4rem;
            margin: 2rem 0 1rem 0;
        }

        .content-container p {
            margin-bottom: 1.2rem;
            color: #333;
            text-align: justify;
        }

        .content-container ul {
            margin: 1rem 0 1.5rem 2rem;
        }

        .content-container li {
            margin-bottom: 0.8rem;
            color: #333;
        }

        .highlight-box {
            background-color: #f8f9fa;
            border-left: 4px solid #800000;
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0 8px 8px 0;
        }

        /* Photo Gallery Section */
        .photo-gallery-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-container h2 {
            color: rgb(0, 51, 4);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 2px solid rgb(0, 51, 4);
            padding-bottom: 0.5rem;
            display: inline-block;
            width: auto;
        }
        
        /* Centering the H2 heading */
        .gallery-container {
            text-align: center; 
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left; /* Reset text alignment for content */
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .image-caption {
            padding: 15px;
            font-size: 0.9rem;
            color: #333;
            background-color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content-section {
                padding: 20px 15px;
            }
            .content-container h2 {
                font-size: 1.5rem;
            }
            .content-container h3 {
                font-size: 1.2rem;
            }
            .photo-gallery-section {
                padding: 20px 15px;
            }
            .gallery-container h2 {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
            .gallery-grid {
                grid-template-columns: 1fr; /* Stack images on smaller screens */
            }
        }

        /* Navigation Bar */
        .about-nav {
            background-color:rgb(209, 209, 209);
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
            background-color:rgb(163, 163, 163);
        }

        /* Special style for the first navigation item */
        .about-nav ul li:nth-child(8) a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:nth-child(8) a:hover {
            background-color: rgb(0, 59, 5);
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
    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Photo Gallery</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>
<nav class="about-nav">
            <ul>
                <li><a href="aboutUs.php">Vision & Mission</a></li>
                <li><a href="ourStaf.php">Our Staff</a></li>
                <li><a href="organizationStructure.php">Organizational Structure</a></li>
                <li><a href="regional-malaria-office.php">Regional Officers</a></li>
                <li><a href="tsg.php">Technical Support Group</a></li>
                <li><a href="crc.php">Case Review Community</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="imageGallary.php">Gallery</a></li>
            </ul>
        </nav>

<section class="photo-gallery-section">
    <div class="gallery-container">
        <h2>Photo Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="asset/image/gallery/g1.jpg" alt="Stakeholder Meeting in March 2024">
                <div class="image-caption">Stakeholder Meeting 14th March 2024</div>
            </div>
            <div class="gallery-item">
                <img src="asset/image/gallery/g2.jpg" alt="World Malaria Day 2021 Art Competition">
                <div class="image-caption">World Malaria Day 2021 - Art Competition</div>
            </div>
            <div class="gallery-item">
                <img src="asset/image/gallery/g3.jpg" alt="World Malaria Day 2021 Press Briefing">
                <div class="image-caption">World Malaria Day 2021 | Press Briefing</div>
            </div>
            <div class="gallery-item">
                <img src="asset/image/gallery/g4.jpg" alt="World Malaria Day 2019 Anti Malaria Campaign">
                <div class="image-caption">World Malaria Day 2019 - Anti Malaria Campaign</div>
            </div>
            <div class="gallery-item">
                <img src="asset/image/gallery/g5.jpg" alt="World Malaria Day 2019 Media Conference">
                <div class="image-caption">World Malaria Day 2018 - Media Conference</div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php'; ?>
</body>
</html>