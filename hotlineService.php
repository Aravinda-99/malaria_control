<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24/365 Hotline Service - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa; /* Lighter page background */
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            height: 60vh;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/Hotline.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 1; 
        }

        .hero-content {
            position: relative;
            z-index: 2;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-content h1 .icon {
            margin-right: 10px;
            font-size: 3.2rem;
            opacity: 0.9;
        }

        .hero-content p {
            font-size: 1.35rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 600px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }
        
        /* --- New Content Section Styling --- */
        .content-section {
            max-width: 1200px;
            margin: 4rem auto; /* Center the content */
            padding: 0 1rem; /* Padding for mobile */
            background-color: transparent; /* Section is now just a container */
        }
        
        /* --- NEW: Style for the main title --- */
        .content-section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: rgb(5, 44, 0);
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .content-section-title .icon {
            margin-right: 12px;
            font-size: 2.25rem;
            color: rgb(5, 44, 0);
            opacity: 0.8;
        }
        
        /* Card-Based Layout */
        .content-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .content-card h2 {
            font-size: 2rem;
            font-weight: 600;
            color: rgb(5, 44, 0);
            margin-top: 0; /* No top margin inside card */
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.75rem;
        }
        
        /* Styling for Font Awesome Icons in headings */
        .content-card h2 .icon {
            margin-right: 12px;
            font-size: 1.75rem;
            color: rgb(5, 44, 0);
            opacity: 0.8;
        }

        .content-card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1rem;
        }
        
        /* Fixed: First paragraph in a card shouldn't have top margin */
        .content-card p:first-child {
            margin-top: 0;
        }

        .content-card ul {
            list-style-type: none; /* Remove default bullets */
            padding-left: 0;
            margin-bottom: 1.5rem;
        }

        .content-card li {
            position: relative;
            padding-left: 30px; /* Space for custom bullet */
            margin-bottom: 0.75rem;
            line-height: 1.7;
            color: #555;
        }

        /* Custom bullet icon */
        .content-card li::before {
            content: '\f138'; /* Font Awesome check icon */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: rgb(5, 44, 0);
            opacity: 0.7;
        }
        
        /* Special Hotline Box */
        .hotline-box {
            background-color: rgb(5, 44, 0);
            color: #ffffff;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2.5rem;
            box-shadow: 0 5px 15px rgba(5, 44, 0, 0.2);
        }
        
        .hotline-box h2 {
            margin: 0 0 1rem 0;
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .hotline-box .numbers {
            font-size: 2.25rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        
        .hotline-box .icon {
            margin-right: 10px;
        }

        /* Special Alert Box */
        .alert-box {
            /* Using a green theme for 'importance' */
            background-color: #f7fff7; 
            border: 1px solid #052c00;
            border-left-width: 5px;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            margin-bottom: 2.5rem;
        }
        
        .alert-box h2, .alert-box h3 { /* Style heading for alert box */
            color: #052c00;
            margin-top: 0;
            font-weight: 700;
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0.5rem;
        }
        
        .alert-box p {
            color: #333;
            margin-bottom: 0;
        }
        
        .alert-box .icon {
            margin-right: 10px;
        }


        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content h1 .icon {
                font-size: 2.25rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            
            .content-section {
                margin: 2rem auto;
                padding: 0 1rem;
            }
            
            /* --- NEW: Responsive for main title --- */
            .content-section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
            .content-section-title .icon {
                font-size: 1.75rem;
            }
            
            .content-card {
                padding: 1.5rem;
            }
            .content-card h2 {
                font-size: 1.75rem;
            }
            .content-card h2 .icon {
                font-size: 1.5rem;
            }
            
            .hotline-box .numbers {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Hotline Service</h1>
            <p>Rapid Response and Expert Guidance Anytime</p>
        </div>
    </section>

    <main class="content-section">
        
        <h2 class="content-section-title"><i class="fas fa-headset icon"></i>24/ 365 Hotline Service</h2>
    
        <div class="content-card">
            <p>The AMC operates a dedicated 24-hour malaria hotline
            to ensure rapid response and expert guidance at any time.</p>
        </div>

        <div class="hotline-box">
            <h2><i class="fas fa-phone-alt icon"></i>Hotline Numbers</h2>
            <div class="numbers">
                011-762 6626 | 071 284 1767
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-concierge-bell icon"></i>Services Provided</h2>
            <ul>
                <li>Immediate reporting of suspected or confirmed malaria cases by healthcare institutions, laboratories, or the public.</li>
                <li>Expert advice on diagnosis, treatment, and case management for clinicians and hospitals.</li>
                <li>Coordination of field investigation and entomological response through the nearest Regional Malaria Office (RMO).</li>
                <li>Assistance to travellers seeking malaria chemoprophylaxis or testing after return from endemic countries.</li>
            </ul>
        </div>
        
        <div class="alert-box">
            <h2><i class="fas fa-shipping-fast icon"></i>The 1-2-5 Day Strategy</h2>
            <p>This hotline plays a crucial role in maintaining the 1-2-5
            day strategy — **notification within 1 day**, **investigation within 2 days**, and
            **response within 5 days** of detection — forming the backbone of Sri Lanka’s
            prevention-of-re-establishment (PoR) system.</p>
            
        </div>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>