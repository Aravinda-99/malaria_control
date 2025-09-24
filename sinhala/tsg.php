<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support Group</title>
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
            max-width: 1200px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .content-container h2 {
            color: rgb(0, 51, 4);
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid rgb(0, 51, 4);
            padding-bottom: 0.5rem;
        }

        .content-container h3 {
            color: rgb(0, 51, 4);
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
        .about-nav ul li:nth-child(5) a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:nth-child(5) a:hover {
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
    <h1>Technical Support Group</h1>
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


<section class="content-section">
    <div class="content-container">
        <h2>Technical Support Group to the Anti Malaria Campaign Sri Lanka</h2>
        <p>
            The Technical Support Group (TSG) has been appointed by the Director General of Health Services for the purpose of providing carefully considered evidence based strategic and technical advice and recommendations to the Anti Malaria Campaign (AMC) for the prevention of reintroduction (PoR) of malaria in Sri Lanka. The TSG comprises 17 members with a broad range of expertise in the fields relevant to malaria control and elimination, which include parasitology, malariology, epidemiology, pharmacology, general medicine, vector control and biology, sociology and disease control. Members have been selected basically on their individual capacities to provide expertise and guidance to the AMC. The TSG also includes members from the Ministry of Health at the central and provincial levels including the AMC. In order to provide comprehensive recommendations, additional members with specific expertise in particular fields are being co-opted in the TSG meetings. The TSG is chaired by the Director General of Health Services. The TSG functions in a purely advisory capacity to provide advice and recommendations to the DGHS and Director AMC. The Ministry of Health supports and provide a facilities and resources to conduct meetings and relevant activities of the TSG. The membership of the TSG is reviewed every 3 years and revised accordingly. TSG is convened once every two months on a pre-determined date, and additional meetings may be called if and when necessary. Case Review Committee is a subcommittee of TSG, which meets every month to conduct an independent review of every case of malaria reported in the country.
        </p>
        
        <h3>Terms of reference</h3>
        <ul>
            <li>To regularly review the malaria situation in the country with the Anti Malaria Campaign (AMC) with a view of assessing challenges for the successful implementation of the malaria elimination programme in Sri Lanka.</li>
            <li>To provide strategic advice and technical inputs for the successful elimination and Prevention of reintroduction of malaria from Sri Lanka.</li>
            <li>To formulate, as needed, specific recommendations and key policies for improving the national malaria elimination programme.</li>
            <li>To support the Anti-Malaria Campaign to develop the National Strategic Plans and annual reports.</li>
            <li>To support the AMC in key areas of intervention such as advocacy and capacity building.</li>
            <li>The full members to attend regular meetings of the TSG (every two months or as required).</li>
            <li>Advocate the human resources needs/ gaps related to sustain malaria elimination.</li>
        </ul>
    </div>
</section>
<?php include 'include/footer.php'; ?>
</body>
</html>