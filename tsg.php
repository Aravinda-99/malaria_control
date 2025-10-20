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
            border-left: 4px solid rgb(0, 51, 4);
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0 8px 8px 0;
        }

        /* Table Styles */
        .tsg-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .tsg-table th {
            background-color: rgb(0, 51, 4);
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .tsg-table td {
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            border-right: 1px solid #e9ecef;
            vertical-align: top;
        }

        .tsg-table td:last-child {
            border-right: none;
        }

        .tsg-table tr:hover {
            background-color: #f8f9fa;
        }

        .tsg-table tr:last-child td {
            border-bottom: none;
        }

        .member-name {
            font-weight: 600;
            color: rgb(0, 51, 4);
            font-size: 1.1rem;
        }

        .member-role {
            color: #333;
            line-height: 1.5;
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

            .tsg-table {
                font-size: 0.9rem;
            }

            .tsg-table th,
            .tsg-table td {
                padding: 0.75rem 0.5rem;
            }

            .member-name {
                font-size: 1rem;
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
        <h2>Technical Support Group (TSG)</h2>
        
        <div class="highlight-box">
            <p><strong>The Technical Support Group (TSG) of the Anti Malaria Campaign (AMC) provides expert guidance for sustaining Sri Lanka's malaria-free status and preventing re-establishment.</strong> Comprising specialists in public health, parasitology, entomology, epidemiology, and clinical medicine, the TSG advises on surveillance, case management, vector control, and policy development. It reviews technical reports, monitors emerging challenges such as imported cases, drug resistance, and vector behavior, and ensures program alignment with WHO recommendations. Through its evidence-based advice and strategic oversight, the TSG strengthens national capacity for malaria and leishmaniasis surveillance and control, supporting AMC's goal of maintaining a resilient disease-free Sri Lanka.</p>
        </div>

        <h3>Members of the Technical Support Group</h3>
        
        <table class="tsg-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role/Affiliation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="member-name">Dr. Asela Gunawardene, Chairperson</td>
                    <td class="member-role">Director General of Health Services<br>Ministry of Health, Colombo 10</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. S.M. Arnold</td>
                    <td class="member-role">Deputy Director General (PHS) I<br>Ministry of Health, Colombo 10</td>
                </tr>
                <tr>
                    <td class="member-name">-</td>
                    <td class="member-role">Medical Supply Division<br>Colombo 10</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Ranjith Batuwanthudawe</td>
                    <td class="member-role">Director, Health Promotion Bureau<br>Colombo 10</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Prasad Katulanda</td>
                    <td class="member-role">President, Sri Lanka College of Physicians</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Pushpa Weerasinghe</td>
                    <td class="member-role">President, Sri Lanka College of General Practitioners</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Kamini Mendis</td>
                    <td class="member-role">Emeritus Professor, Consultant in Malaria and Tropical Diseases<br>Former WHO Consultant</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Rajitha Wickramasinghe</td>
                    <td class="member-role">Senior Professor, Department of Public Health<br>Faculty of Medicine, University of Kelaniya</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Deepika Fernando</td>
                    <td class="member-role">Senior Professor, Department of Parasitology<br>Faculty of Medicine, University of Colombo</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Nirmitha Lalindi De Silva</td>
                    <td class="member-role">Lecturer in Parasitology, Department of Parasitology<br>Faculty of Medicine, University of Ruhuna, Karapitiya</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Rohini Fernandopulle</td>
                    <td class="member-role">Professor in Clinical Pharmacology<br>Department of Pharmacology, Faculty of Medicine<br>Gen. SJKD Defense University</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Chandanie Wanigatunge</td>
                    <td class="member-role">Professor of Pharmacology<br>Department of Pharmacology, Faculty of Medical Sciences<br>University of Sri Jayewardenepura</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Anula Wijesundere</td>
                    <td class="member-role">Consultant Physician</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Upul Dissanayake</td>
                    <td class="member-role">Consultant Physician<br>National Hospital in Sri Lanka</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. P.A.D.H. Nayana Gunathilaka</td>
                    <td class="member-role">Professor in Parasitology<br>Department of Parasitology, Faculty of Medicine<br>University of Kelaniya, Ragama</td>
                </tr>
                <tr>
                    <td class="member-name">Prof. Thusitha Jayasooriya</td>
                    <td class="member-role">Emeritus Professor, Professor of Zoology<br>Faculty of Natural Sciences<br>Open University of Sri Lanka</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Dhammika Aryawansa</td>
                    <td class="member-role">Regional Malaria Officer<br>Regional Malaria Office, Maho</td>
                </tr>
                <tr>
                    <td class="member-name">Dr. Waruni Gunathilake</td>
                    <td class="member-role">Regional Malaria Officer<br>Regional Malaria Office, Anuradhapura</td>
                </tr>
            </tbody>
        </table>

        <div class="highlight-box">
            <p><strong>Through its evidence-based advice and strategic oversight, the TSG strengthens national capacity for malaria and leishmaniasis surveillance and control, supporting AMC's goal of maintaining a resilient disease-free Sri Lanka.</strong></p>
        </div>
    </div>
</section>
<?php include 'include/footer.php'; ?>
</body>
</html>