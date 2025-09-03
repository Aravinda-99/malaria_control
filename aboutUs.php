<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <style>
        /* Basic Resets and Font Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Main About Us Header Container */
        .about-header-container {
            width: 100%;
            border-bottom: 3px solid #8B0000; /* Dark red border at the very bottom */
        }

        /* Top decorative red bar */
        .top-bar {
            height: 5px;
            background-color: #8B0000; /* Dark red */
        }

        /* About Us Hero Section with Background Image */
        .about-hero-section {
            /* Replace with your image URL */
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://placehold.co/1920x600/6c757d/ffffff?text=Your+Image+Here');
            height: 60vh; /* Viewport height, adjust as needed */
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
            border-top: 2px solid #fff; /* White line at the top */
            border-bottom: 2px solid #fff; /* White line at the bottom */
        }

        .about-hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .about-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* About Us Navigation Bar */
        .about-nav {
            background-color: #ffffff;
            display: flex;
            justify-content: center; /* Center the navigation items */
            padding: 0 2rem;
        }

        .about-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .about-nav ul li {
            display: inline-block;
        }

        .about-nav ul li a {
            display: block;
            padding: 1rem 1.5rem;
            text-decoration: none;
            color: #333; /* Dark grey text */
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .about-nav ul li a:hover {
            background-color: #f0f0f0; /* Light grey on hover */
        }

        /* Special style for the first navigation item */
        .about-nav ul li:first-child a {
            background-color: #800000; /* Dark red background */
            color: #ffffff; /* White text */
        }

        .about-nav ul li:first-child a:hover {
            background-color: #a00000; /* Slightly lighter red on hover */
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
            }
            .about-nav ul li a {
                padding: 0.75rem 1rem;
                width: 100vw;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>
    <main>
    <header class="about-header-container">
        <!-- This section represents the main "hero" banner -->
        <section class="about-hero-section">
            <h1>About Us</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </section>

        <!-- This section holds the navigation links -->
        <nav class="about-nav">
            <ul>
                <li><a href="#vision">Vision & Mission</a></li>
                <li><a href="#staff">Our Staff</a></li>
                <li><a href="#structure">Organizational Structure</a></li>
                <li><a href="#officers">Regional Officers</a></li>
                <li><a href="#support">Technical Support Group</a></li>
                <li><a href="#review">Case Review Community</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </nav>
    </header>
    </main>

</body>
</html>
