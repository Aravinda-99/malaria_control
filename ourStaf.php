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
            flex-direction: column;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            gap: 40px; /* Space between rows */
        }

        /* Each row group */
        .staff-row-group {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px; /* Space between the cards */
        }

        /* Row title */
        .staff-row-title {
            width: 100%;
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            color: #4a7c59;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #4a7c59;
        }

        /* Individual Member Card */
        .staff-team-member {
            background-color:rgba(206, 206, 206, 0.56);
            text-align: center;
            padding: 15px;
            border-radius: 8px; /* Optional: for slightly rounded corners */
            /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); Optional: adds a subtle shadow */
            width: 230px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Member Photo - circular, smaller and cover to ensure correct cropping */
        .staff-team-member img {
            width: 140px;
            height: 140px;
            object-fit: cover; /* Fill the circle without distortion */
            object-position: center center; /* center the focal point */
            border-radius: 50%; /* Make image circular */
            margin-bottom: 12px;
            border: 3px solid #ffffff; /* subtle white ring */
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            background-color: #f0f0f0; /* fallback background while image loads */
            display: block; /* remove inline descender gaps */
        }

        /* (removed avatar-bg fallback - using <img> avatars only) */

        /* If some images are low-resolution or badly cropped, we can provide
           a fallback that uses the image as a background for better positioning.
           Use the class .avatar-bg on the element to switch. This requires
           changing <img> to a div.avatar-bg with inline style `background-image: url(...)`.
           Leave it optional for now; object-position covers most cases. */

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
                gap: 30px;
            }
            .staff-row-group {
                flex-direction: column;
                align-items: center;
            }
            .staff-row-title {
                font-size: 1.5rem;
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
    <!-- Row 1: Director -->
    <div class="staff-row-group">
        <h2 class="staff-row-title">Director</h2>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. XXX">
            <h3>Dr. XXX</h3>
            <p class="staff-role">Director</p>
            <p class="staff-qualifications">
             Anti Malaria Campaign
            </p>
        </div>
        <!-- Added Deputy Director -->
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Deputy Director">
            <h3>Dr. XXX</h3>
            <p class="staff-role">Deputy Director</p>
            <p class="staff-qualifications">
                Anti Malaria Campaign
            </p>
        </div>
    </div>

    <!-- Row 2: Consultant Community Physicians -->
    <div class="staff-row-group">
        <h2 class="staff-row-title">Consultant Community Physician</h2>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr.  M P P U Chulasiri">
            <h3 style="margin-bottom: 10px;">Dr. Pubudu Chulasiri</h3>
            <p class="staff-role">Consultant Community Physician</p>
            <p class="staff-qualifications">
            MBBS, MSc., MD (Community Medicine) <br> <br> MSc. (Applied Statistics)
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Nethmini Thenuwara">
            <h3 style="margin-bottom: 10px;">Dr. Indeewarie Gunaratna</h3>
            <p class="staff-role">Consultant Community Physician</p>
            <p class="staff-qualifications">
            MBBS, MSc., MD (Community Medicine)
            </p>
            <p class="staff-qualifications" style="margin-top: 5px;">
            MSc. (Medical Entomology and Applied Parasitology)
            </p>
        </div>
        <!-- Added another Consultant Community Physician -->
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Consultant Community Physician">
            <h3>Dr. Arulkumaran Segarajasingham</h3>
            <p class="staff-role">Consultant Community Physician</p>
            <p class="staff-qualifications" style="margin-top: 5px;">
            MBBS, MSc., MD (Community Medicine)
            </p>
        </div>
    </div>

    <!-- Row 3: Medical Officers -->
    <div class="staff-row-group">
        <h2 class="staff-row-title">Medical Officer</h2>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Gayani Ranasinghe">
            <h3 style="margin-bottom: 10px;">Dr. Samantha Jayasinghe</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
              MBBS
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Shamila Jayakuru">
            <h3 style="margin-bottom: 10px;">Dr. Shamila Jayakuru</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Sarojini Gallage">
            <h3 style="margin-bottom: 10px;">Dr. Sarojini Gallage</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Nalin Maduranga">
            <h3 style="margin-bottom: 10px;">Dr. Nalin Maduranga</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Srimal de Silva">
            <h3 style="margin-bottom: 10px;">Dr. Srimal de Silva</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. xxx">
            <h3 style="margin-bottom: 10px;">Dr. xxx</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. xxx">
            <h3 style="margin-bottom: 10px;">Dr. xxx</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. xxx">
            <h3 style="margin-bottom: 10px;">Dr. xxx</h3>
            <p class="staff-role">Medical Officer</p>
            <p class="staff-qualifications">
            MBBS
            </p>
        </div>
    </div>

    <!-- Row 4: Parasitologist -->
    <div class="staff-row-group">
        <h2 class="staff-row-title">Parasitologist</h2>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Kumudu Gunasekara">
            <h3>Dr. Kumudu Gunasekara</h3>
            <p class="staff-role">Parasitologist</p>
            <p class="staff-qualifications">
                MSc Reading for PhD
            </p>
        </div>
    </div>

    <!-- Row 5: Entomologists -->
    <div class="staff-row-group">
        <h2 class="staff-row-title">Entomologist</h2>
        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Mihirini Hewawitharana">
            <h3 style="margin-bottom: 10px;">Dr. Mihirini Hewawitharana</h3>
            <p class="staff-role">Entomologist</p>
            <p class="staff-qualifications">
            BSc. (Hons.) Zoology, M.Sc., PhD (Medical and Molecular Entomology)
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Dr. Jeewani Harishchandra">
            <h3 style="margin-bottom: 10px;">Dr. Jeewani Harishchandra</h3>
            <p class="staff-role">Entomologist</p>
            <p class="staff-qualifications">
            BSc. (Hons.) Zoology, M.Sc., PhD (Medical Entomology)
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Mr. Thilan Fernando">
            <h3 style="margin-bottom: 10px;">Mr. Thilan Fernando</h3>
            <p class="staff-role">Entomologist</p>
            <p class="staff-qualifications">
            BSc. (Hons.) Zoology, M.Phil. (Molecular Entomology)
            </p>
        </div>

        <div class="staff-team-member">
            <img src="asset/image/profileN.jpg" alt="Photo of Ms. P Somasekaran">
            <h3 style="margin-bottom: 10px;">Ms. P Somasekaran</h3>
            <p class="staff-role">Entomologist</p>
            <p class="staff-qualifications">
            BSc. (Hons.) Zoology, MSc. (Medical Entomology and Applied Parasitology)
            </p>
        </div>
    </div>

</section>

<?php include 'include/footer.php'; ?>
</body>
</html>

