<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelers - Malaria Control</title>
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            /* Sizing and Display */
            height: 60vh; /* Reduced from 80vh to 60vh */
            min-height: 400px;
            display: flex;
            flex-direction: column; /* Stack text content on top of the nav bar */
            justify-content: center;
            align-items: center;
            text-align: center;

            /* Background Image & Overlay */
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1576091160550-2173dba9996a?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* This pseudo-element creates the dark overlay */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            z-index: 1; /* Sits above the background image */
        }

        /* --- Hero Content Styling --- */
        .hero-content {
            position: relative; /* Ensure it's on top of the overlay */
            z-index: 2;
            flex-grow: 1; /* Pushes the nav to the bottom */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 600;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 600px;
        }



        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>


    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <!-- This container holds the main heading and subheading -->
        <div class="hero-content">
            <h1>Travelers</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>


    </section>

</body>
</html>
