<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screening of Returnees - Malaria Control</title>
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
            /* 1. Using new Poppins font */
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
            background-image: url('asset/image/travelbanner.png');
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
            font-weight: 500;
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
            .content-card {
                padding: 1.5rem;
            }
            .content-card h2 {
                font-size: 1.75rem;
            }
            .content-card h2 .icon {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Screening of Returnees</h1>
            <p>Preventing the Re-introduction of Malaria to Sri Lanka</p>
        </div>
    </section>

    <main class="content-section">
    
        <div class="content-card">
            <h2 style="text-align: center;"><i class="fas fa-microscope icon"></i>Screening of Returnees from Malaria-Endemic Countries</h2>
            <p>Sri Lanka remains free of indigenous malaria since 2012, but
            the risk of re-introduction continues through travellers returning from endemic
            regions. The Anti-Malaria Campaign (AMC) conducts systematic screening to
            identify and treat imported malaria cases early, preventing onward transmission.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-users icon"></i>Who Should Be Screened</h2>
            <ul>
                <li>Sri Lankan citizens returning from malaria-endemic countries (Africa, South Asia, Southeast Asia, etc.) (Country List- Link)</li>
                <li>Foreign workers, pilgrims, military personnel, and tourists arriving from endemic regions</li>
                <li>Travellers with fever or flu-like symptoms within one year of return</li>
            </ul>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-tasks icon"></i>Screening Process</h2>
            <ul>
                <li>Blood smear and/or Rapid Diagnostic Test (RDT) conducted by trained Public Health Laboratory Technicians (PHLTs) or Public Health Field Officers (PHFOs).</li>
                
                <li>Filter paper samples collected for molecular confirmation where microscopy is not immediately available.</li>
                <li>Screening initiated within 24 hours of notification and repeated after 3–4 weeks if indicated (secondary screening).</li>
            </ul>
        </div>
        
        <div class="alert-box">
            <h2><i class="fas fa-shield-alt icon"></i>Why It Matters</h2>
            <p>Every imported malaria case poses a risk of re-establishing local transmission,
            especially in areas where Anopheles mosquito vectors still exist. 
            

            [Image of Anopheles mosquito life cycle]

            Early
            detection protects individuals and communities while sustaining Sri Lanka’s
            malaria-free status.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>