<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Malaria Control</title>
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
            background-image: url('asset/image/contactBanner.png');
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

        /* --- Contact Section (ported from index.php) --- */
        .contact-section {
            padding: 4rem 2rem;
            background: #fff;
        }
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 3rem;
            align-items: flex-start;
        }
        .contact-form-container { flex: 1; }
        .contact-form-container h2 {
            font-size: 2rem;
            color: #6a0000;
            margin-bottom: 1rem;
        }
        .contact-form-container p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            height: 48px;
            box-sizing: border-box;
        }
        .contact-form .full-width { grid-column: 1 / -1; }
        .contact-form textarea {
            resize: vertical;
            min-height: 110px;
            box-sizing: border-box;
        }
        .contact-form button {
            background-color: #6a0000;
            color: #fff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            grid-column: 1 / -1;
            justify-self: start;
        }
        .contact-form button:hover { background-color: #800000; }
        .map-container { flex: 1; }
        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        @media (max-width: 992px) {
            .contact-container { flex-direction: column; }
        }
        @media (max-width: 768px) {
            .contact-form { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>


    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <!-- This container holds the main heading and subheading -->
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>


    </section>

    <!-- Section 10: Contact Us -->
    <section class="contact-section">
            <div class="contact-container">
                <div class="contact-form-container">
                    <h2>Get Touch With Us</h2>
                    <p>Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <form class="contact-form">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="email" placeholder="Email" class="full-width">
                        <input type="tel" placeholder="Contact Number" class="full-width">
                        <textarea placeholder="Description" class="full-width"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.99788079931!2d79.87483977413454!3d6.8908555187871725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2daad00001%3A0x1f19fdaa8ff1bf2b!2sAnti%20Malaria%20Campaign%20HQ!5e0!3m2!1sen!2slk!4v1756896063776!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    <?php include 'include/footer.php'; ?>

</body>
</html>
