<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Management</title>
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

        /* === NEW STYLES FOR THE CHARTS SECTION === */
        .charts-grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); /* Responsive columns */
            gap: 2rem;
            margin: 2.5rem 0;
        }

        .chart-item {
            background-color: #fdfdfd;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        /* Make specific charts span the full width if needed */
        .chart-item-full-width {
            grid-column: 1 / -1; /* Span all columns */
        }

        .chart-item h3 {
            margin-top: 0;
            color: #333;
        }

        .chart-item img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: 1rem;
        }

        /* Responsive adjustments for the grid */
        @media (max-width: 400px) {
            .charts-grid-container {
                grid-template-columns: 1fr; /* Single column on very small screens */
            }
        }
        /* === END OF NEW STYLES === */

    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Case Management</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>

<section class="content-section">
    <div class="content-container">
        <h2>Malaria Patients in Sri Lanka 2018, In Detail</h2>
        <p style="text-align: center; font-weight: bold; font-size: 1.1rem;">
            Total of 48 Malaria Patients – 47 Imported* cases and 1 Introduced** case.
        </p>

        <div class="charts-grid-container">
            
            <div class="chart-item chart-item-full-width">
                <img src="asset/image/case/c1.png" alt="Pie chart showing malaria cases by nationality: 71% Sri Lankan (n=34) and 29% Foreigners (n=14).">
            </div>

            <!-- <div class="chart-item">
                <h3>2. According to the Gender</h3>
                <img src="asset/image/chart_2_gender.png" alt="Pie chart showing malaria cases by gender: 92% Males (n=44) and 8% Females (n=4).">
            </div> -->
            
        </div>

        <div class="highlight-box">
            <p><strong>*Imported Case:</strong> Malaria acquired from overseas but the disease diagnosed while in Sri Lanka.</p>
            <p><strong>**Introduced Case:</strong> Malaria patient originated from within Sri Lanka directly related to an imported malaria case.</p>
        </div>

        <div class="charts-grid-container">
            <div class="chart-item chart-item-full-width">
                
                <img src="asset/image/case/c2.png" alt="Bar chart detailing the distribution of malaria cases by risk category, such as Foreign Labor, Tri forces, Gem traders, etc.">
            </div>

            <div class="chart-item chart-item-full-width">
                <img src="asset/image/case/c3.png" alt="Pie chart of malaria cases by parasite type: 63% P.vivax (n=30), 31% P.falciparum (n=15), and 6% P.ovale (n=3).">
            </div>
        </div>

    </div>
</section>

<?php include 'include/footer.php'; ?>
</body>
</html>