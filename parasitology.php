<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parasitological</title>
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
            max-width: 1100px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .content-container h2 {
            color: rgb(5, 44, 0);
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid rgb(5, 44, 0);
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

    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Parasitological Structure</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>

<section class="content-section">
    <div class="content-container">
        <h2>Parasitological Surveillance Summary (2017)</h2>
        <p>The chart below illustrates the monthly breakdown of parasitological surveillance activities conducted throughout 2017, categorized by the method of case detection.</p>
        <img src="asset/image/parasitology.png" alt="Bar chart showing the 2017 summary of Parasitological Surveillance data, broken down by month and detection method" style="width: 100%; max-width: 1100px; margin-top: 20px; display: block; margin-left: auto; margin-right: auto; border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
    </div>
</section>

<?php include 'include/footer.php'; ?>
</body>
</html>