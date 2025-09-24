<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regional Malaria Officers</title>
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
            border-left: 4px solid rgb(0, 51, 4);
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
            background-color:rgb(189, 189, 189);
        }

        /* Special style for the first navigation item */
        .about-nav ul li:nth-child(4) a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:nth-child(4) a:hover {
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
    <h1>Regional Malaria Officers</h1>
    <p>Key Players in Malaria Control and Prevention</p>
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
        <h2>Role of Regional Medical/Malaria Officers (RMO/RMOO)</h2>
        
        <p>Regional Medical/Malaria Officers (RMO/RMOO) play a key role in malaria control, elimination, and prevention of re-establishment programs in Sri Lanka.</p>

        <h3>Historical Context</h3>
        
        <div class="highlight-box">
            <h4>Before 1989 (Decentralization)</h4>
            <p>Regional Medical/Malaria Officers implemented district-level malaria control under the Director, Anti-Malaria Campaign.</p>
        </div>

        <div class="highlight-box">
            <h4>After 1989 (Devolution of Health Administration)</h4>
            <p>Following the devolution of health administration to Provincial Councils, their role shifted to technical advisors to Regional Directors of Health Services and Medical Officers of Health, who were then entrusted with control/elimination/POR activities.</p>
        </div>

        <h3>Regional Structure</h3>
        
        <ul>
            <li>A "region" is generally a district, but some districts (e.g., Kurunegala, Ampara) are divided into several RMO regions.</li>
            <li>Before decentralization, regions didn't always align with administrative districts.</li>
            <li>Malarious areas were sub-divided into sub-regional offices managed by a senior PHI.</li>
        </ul>

        <h3>Officer Recruitment and Qualifications</h3>
        
        <h4>Original Recruitment Policy</h4>
        <p>Originally, the post was "Regional Medical Officer (Anti-Malaria Campaign)" filled by medical officers with a medical degree.</p>

        <h4>Policy Change in Early 1980s</h4>
        <p>Due to a shortage of medical officers, a policy was introduced to recruit biological science graduates with:</p>
        <ul>
            <li>Four-year Zoology special degree with entomology and/or parasitology</li>
            <li>Recruitment through the Sri Lanka Scientific Service (SLSS)</li>
            <li>Official designation: "Regional Officers (Anti-Malaria Campaign)"</li>
            <li>Commonly referred to as "Regional Malaria Officers (RMOO)"</li>
        </ul>

        <div class="highlight-box">
            <h4>Career Development Requirements</h4>
            <p>SLSS RMOO are required to obtain a Masters or Ph.D. in entomology or parasitology at a certain career point as an "efficiency bar." This approach strengthened the campaign by incorporating academically qualified and experienced officers.</p>
        </div>

        <h3>Current Responsibilities</h3>
        
        <p>RMOO are currently responsible for the "prevention of reintroduction of malaria (PORM) programme" at the district level, under the technical guidance of the National Directorate of Anti-Malaria Campaign.</p>

        <div class="highlight-box">
            <h4>Challenges of PORM</h4>
            <p>This task is described as more challenging than malaria control, requiring innovative approaches for:</p>
            <ul>
                <li>Tracking risk populations</li>
                <li>Assessing local receptivity and vulnerability</li>
                <li>Ensuring local preparedness to prevent transmission</li>
            </ul>
        </div>

        <h3>Additional Contributions</h3>
        
        <p>Beyond malaria, RMOO also contribute to controlling other vector-borne diseases in their regions, such as:</p>
        <ul>
            <li>Dengue</li>
            <li>Leishmaniasis</li>
        </ul>
    </div>
</section>

<?php include 'include/footer.php'; ?>
</body>
</html>