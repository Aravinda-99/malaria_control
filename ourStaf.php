<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Experts</title>
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
            font-weight: bold;
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

        /* Main Section Container */
        .staff-team-showcase {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Allows items to wrap to the next line on smaller screens */
            gap: 30px; /* Space between the cards */
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        /* Individual Member Card */
        .staff-team-member {
            background-color: #ffffff;
            text-align: center;
            padding: 15px;
            border-radius: 8px; /* Optional: for slightly rounded corners */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Optional: adds a subtle shadow */
            width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Member Photo */
        .staff-team-member img {
            width: 240px;
            height: 240px;
            object-fit: contain; /* Ensures the image covers the area without distortion */
            border-radius: 2px; /* Matches the image's slightly rounded square look */
            margin-bottom: 12px;
        }

        /* Member Name */
        .staff-team-member h3 {
            font-size: 1.1em;
            color: #333; /* Default name color */
            font-weight: normal;
            margin: 10px 0 5px 0;
            line-height: 1.3;
        }

        /* Special class for the green title text */
        .staff-team-member h3 .staff-title-green {
            color: #4a7c59; /* A green color similar to the image */
            display: block; /* Puts the name on the next line */
        }

        /* Member Role (e.g., Entomologist) */
        .staff-team-member .staff-role {
            font-size: 1em;
            font-weight: bold;
            color: #111;
            margin: 0 0 10px 0;
        }

        /* Member Qualifications */
        .staff-team-member .staff-qualifications {
            font-size: 0.9em;
            color: #666;
            line-height: 1.4;
            margin: 0;
        }

        /* --- Responsive Design for Mobile --- */
        @media (max-width: 768px) {
            .staff-team-showcase {
                flex-direction: column; /* Stack the cards vertically */
                align-items: center; /* Center the stacked cards */
            }
        }

        /* Navigation Bar */
        .about-nav {
            background-color: rgb(209, 209, 209);
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
            background-color:rgb(189, 189, 189);
        }

        /* Special style for the first navigation item */
        .about-nav ul li:nth-child(2) a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:nth-child(2) a:hover {
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
    <h1>Meet Our Experts</h1>
    <p>Dedicated Professionals Committed to Malaria Prevention of Re-establishment and control of Leishmaniasis</p>
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

<section class="staff-team-showcase">
    <!-- Director -->
    <div class="staff-team-member">
        <img src="asset/image/staf/s11.jpg" alt="Photo of Dr. Champa Aluthweera">
        <h3>Dr. Champa Aluthweera </h3>
        <p class="staff-role">Director</p>
        <p class="staff-qualifications">
            
        </p>
    </div>

    <!-- Deputy Director -->
    <!-- Note: No Deputy Director currently listed -->

    <!-- Consultant Community Physicians -->
    <div class="staff-team-member">
        <img src="asset/image/staf/s9.jpg" alt="Photo of Dr.  M P P U Chulasiri">
        <h3>Dr.  M P P U Chulasiri</h3>
        <p class="staff-role">Consultant Community Physician</p>
        <p class="staff-qualifications">
        MBBS (Colombo), MSc., MD (Community Medicine)
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s10.jpg" alt="Photo of Dr. Nethmini Thenuwara">
        <h3>Dr. Nethmini Thenuwara</h3>
        <p class="staff-role">Consultant Community Physician (Surveillance, Monitoring and Evaluation)</p>
        <p class="staff-qualifications">
        MBBS (Colombo), MSc, MD (Community Medicine)
        </p>
    </div>

    <!-- Medical Officers -->
    <div class="staff-team-member">
        <img src="asset/image/staf/s5.jpg" alt="Photo of Dr. Gayani Ranasinghe">
        <h3>Dr. Gayani Ranasinghe</h3>
        <p class="staff-role">Medical Officer</p>
        <p class="staff-qualifications">
        MBBS, MSc (Com-Med)
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s6.jpg" alt="Photo of Dr. S Jayasinghe">
        <h3>Dr. S Jayasinghe</h3>
        <p class="staff-role">Medical Officer</p>
        <p class="staff-qualifications">
        MBBS
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s7.jpg" alt="Photo of Dr. A H N Maduranga">
        <h3>Dr. A H N Maduranga</h3>
        <p class="staff-role">Medical Officer</p>
        <p class="staff-qualifications">
        MBBS
        </p>
    </div>

    <!-- Parasitologist -->
    <div class="staff-team-member">
        <img src="asset/image/staf/s4.jpg" alt="Photo of Ms. W M K Gunasekara">
        <h3>Ms. W M K Gunasekara</h3>
        <p class="staff-role">Parasitologist</p>
        <p class="staff-qualifications">
            MSc Reading for PhD
        </p>
    </div>

    <!-- Entomologists -->
    <div class="staff-team-member">
        <img src="asset/image/staf/s1.jpg" alt="Photo of Ms. P Somasekaran">
        <h3>Ms. P Somasekaran</h3>
        <p class="staff-role">Entomologist</p>
        <p class="staff-qualifications">
            B.Sc. sp. Zoology (Colombo),MSc in Medical Entomology and Applied Parasitology (reading)
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s2.jpg" alt="Photo of Ms. R D J Harishchandra">
        <h3><span class="staff-title-green">Ms. R D J</span> Harishchandra</h3>
        <p class="staff-role">Entomologist</p>
        <p class="staff-qualifications">
            B.Sc. Special Degree in Zoology, M.Sc.
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s3.jpg" alt="Photo of Ms. H M P Hewavitharane">
        <h3>Ms. H M P Hewavitharane</h3>
        <p class="staff-role">Entomologist</p>
        <p class="staff-qualifications">
            B.Sc. Special Degree in Zoology, M.Sc.
        </p>
    </div>

    <div class="staff-team-member">
        <img src="asset/image/staf/s8.jpg" alt="Photo of Mr M A S T Fernando">
        <h3>Mr M A S T Fernando</h3>
        <p class="staff-role">Entomologist</p>
        <p class="staff-qualifications">
        B.Sc. sp. Zoology (Kelaniya), M.Phil. (Kelaniya)
        </p>
    </div>

</section>

<?php include 'include/footer.php'; ?>
</body>
</html>