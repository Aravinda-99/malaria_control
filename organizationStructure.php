<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Structure</title>
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


        /* Organizational Structure Section */
        .org-structure-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .org-structure-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .org-structure-image {
            width: 100%;
            max-width: 1000px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: block;
            margin: 0 auto;
        }

        /* Responsive adjustments for org structure */
        @media (max-width: 768px) {
            .org-structure-section {
                padding: 20px 10px;
            }
            
            .org-structure-image {
                border-radius: 4px;
            }
        }

    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Organizational Structure</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>

<section class="org-structure-section">
    <div class="org-structure-container">
        <img src="asset/image/staf/amcdiagram.jpg" alt="Anti Malaria Campaign Organizational Structure" class="org-structure-image">
    </div>
</section>

<?php include 'include/footer.php'; ?>
</body>
</html>