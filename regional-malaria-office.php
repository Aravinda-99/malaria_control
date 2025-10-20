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

        /* Table Styles */
        .rmo-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .rmo-table th {
            background-color: rgb(0, 51, 4);
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .rmo-table td {
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            border-right: 1px solid #e9ecef;
            vertical-align: top;
        }

        .rmo-table td:last-child {
            border-right: none;
        }

        .rmo-table tr:hover {
            background-color: #f8f9fa;
        }

        .rmo-table tr:last-child td {
            border-bottom: none;
        }

        .rmo-table tbody tr {
            border-top: 1px solid #e9ecef;
        }

        .rmo-table tbody tr.province-group-start {
            border-top: 2px solid rgb(0, 51, 4);
        }

        .rmo-table tbody tr.province-group-start td {
            border-top: 2px solid rgb(0, 51, 4);
        }

        .rmo-table tbody tr.province-group-start td:first-child {
            background-color: #f8f9fa;
            font-weight: 700;
        }

        .province-name {
            font-weight: 600;
            color: rgb(0, 51, 4);
            font-size: 1.1rem;
        }

        .officer-info {
            color: #333;
            line-height: 1.5;
        }

        .district-name {
            font-weight: 500;
            color: #666;
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

            .rmo-table {
                font-size: 0.9rem;
            }

            .rmo-table th,
            .rmo-table td {
                padding: 0.75rem 0.5rem;
            }

            .province-name {
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
        <h2>Regional Malaria Medical Officers (RMOs)</h2>
        
        <div class="highlight-box">
            <p><strong>Regional Malaria Medical Officers (RMOs) play a pivotal role in sustaining Sri Lanka's malaria-free status and strengthening surveillance for leishmaniasis.</strong> They lead regional implementation of prevention, surveillance, case management, and vector control activities under the guidance of the Anti Malaria Campaign (AMC). RMOs coordinate case-based surveillance, ensure early detection and prompt treatment of malaria—particularly imported cases—and oversee entomological monitoring, outbreak preparedness, and response activities. They work closely with hospitals, laboratories, and public health teams to maintain high vigilance against re-establishment of transmission. In addition, RMOs direct regional leishmaniasis control efforts, including case detection, patient follow-up, vector surveillance, and coordination with dermatologists and regional health authorities. They also conduct training, awareness, and capacity-building programs for health workers and communities. Through their leadership and continuous engagement, RMOs ensure that malaria and leishmaniasis surveillance and control remain strong, integrated, and responsive to evolving public health challenges in Sri Lanka.</p>
        </div>

        <h3>Regional Malaria Officers by Province</h3>
        
        <table class="rmo-table">
            <thead>
                <tr>
                    <th>Province</th>
                    <th>Regional Malaria Officer</th>
                    <th>District/Area</th>
                </tr>
            </thead>
            <tbody>
                <tr class="province-group-start">
                    <td class="province-name">Western Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Colombo</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Kalutara</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Gampaha</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">Central Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Kandy and Nuwara Eliya</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Matale</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">North Central Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Anuradhapura</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Polonnaruwa</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">Northern Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Jaffna</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Kilinochchi</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Mannar</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Vavuniya</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">North Western Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Kurunegala</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Maho</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Puttalam</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">Sabaragamuwa Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Kegalle</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Ratnapura</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">Southern Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Galle</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Matara</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Hambantota</td>
                </tr>
                
                <tr class="province-group-start">
                    <td class="province-name">Uva Province</td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Badulla</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="officer-info"><strong>Dr. XXX</strong><br>Regional Malaria Officer</td>
                    <td class="district-name">Monaragala</td>
                </tr>
            </tbody>
        </table>

        <div class="highlight-box">
            <p><strong>Through their leadership and continuous engagement, RMOs ensure that malaria and leishmaniasis surveillance and control remain strong, integrated, and responsive to evolving public health challenges in Sri Lanka.</strong></p>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>
</body>
</html>