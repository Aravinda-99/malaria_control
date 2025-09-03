<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Header</title>
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

        /* --- Navigation Bar Styling --- */
        .main-nav {
            position: relative; /* Ensure it's on top of the overlay */
            z-index: 2;
            width: 100%;
            background-color: white;
        }

        .main-nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center; /* Center the nav items */
            flex-wrap: wrap; /* Allow items to wrap on smaller screens */
        }

        .main-nav a {
            display: block;
            padding: 18px 25px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .main-nav a:hover {
            background-color: #f0f0f0;
            color: #000;
        }

        /* Active state for the current page link */
        .main-nav li.active a {
            background-color: #8a151b; /* Dark red color from the image */
            color: white;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .main-nav ul {
                flex-direction: column; /* Stack nav items vertically on small screens */
                align-items: center;
            }

            .main-nav a {
                padding: 15px 20px;
                width: 100vw;
                text-align: center;
                border-bottom: 1px solid #eee;
            }
        }
    </style>
</head>
<body>


    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <!-- This container holds the main heading and subheading -->
        <div class="hero-content">
            <h1>Services</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>

        <!-- Navigation Bar -->
        <nav class="main-nav">
            <ul>
                <!-- The 'active' class highlights the current page link -->
                <li class="active"><a href="#">Diagnosis &amp; Treatment</a></li>
                <li><a href="#">Parasitological Surveillance</a></li>
                <li><a href="#">Entomological Surveillance</a></li>
                <li><a href="#">Vector Control</a></li>
                <li><a href="#">Risk Group &amp; Public Awareness</a></li>
            </ul>
        </nav>
    </section>

</body>
</html>
