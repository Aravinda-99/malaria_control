<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case-Based Reactive Response - Malaria Control</title>
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
            max-width: 1250px;
            margin: 4rem auto; /* Center the content */
            padding: 0 1rem; /* Padding for mobile */
            background-color: transparent; /* Section is now just a container */
        }
        
        /* --- Style for the main title --- */
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
        
        .content-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        
        .content-card h3:first-of-type {
            margin-top: 0;
        }
        
        /* Styling for Font Awesome Icons in headings */
        .content-card h2 .icon, .content-card h3 .icon {
            margin-right: 12px;
            font-size: 1.75rem;
            color: rgb(5, 44, 0);
            opacity: 0.8;
        }
         .content-card h3 .icon {
            font-size: 1.25rem;
         }


        .content-card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1rem;
        }
        
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

        /* Special Alert Box (Green for summary) */
        .alert-box-summary {
            background-color: #f7fff7; 
            border: 1px solid #052c00;
            border-left-width: 5px;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            margin-bottom: 2.5rem;
        }
        
        .alert-box-summary p {
            color: #333;
            margin-bottom: 0;
            font-weight: 500;
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
             .content-card h3 {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Case-Based Reactive Response</h1>
            <p>Identifying and Containing Potential Transmission</p>
        </div>
    </section>

    <main class="content-section">
        
        <h2 class="content-section-title"><i class="fas fa-bullseye icon"></i>Case-Based Reactive Response</h2>
    
        <div class="content-card">
            <p>Whenever a malaria case is confirmed, the AMC initiates a comprehensive
            reactive response to identify and contain any potential transmission.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-clipboard-list icon"></i>Components of the Reactive Response</h2>
            
            <h3>Case Investigation (within 24 hours)</h3>
            <ul>
                <li>A detailed history of travel, exposure, and symptoms is collected by the
                Regional Malaria Officer or the AMC surveillance team.</li>
                <li>A unique National Malaria Case Number is assigned for centralized tracking.</li>
                <li>A case discussion is held by the technical team and regional malaria
                officers on the following day to decide on source of infection and to
                plan the surveillance activities.</li>
                <li>The Case Review Committee (CRC) reviews every case to classify it as
                imported, introduced, induced, relapse, or recrudescence.</li>
                
            </ul>
            
            <h3>Parasitological Surveillance (within 48 hours)</h3>
            <ul>
                <li>Primary screening of household members and nearby residents within a 1 km
                radius of the patient’s night-stay area if indicated.</li>
                
                <li>Follow-up secondary screening of household members and nearby residents within a 1
                km radius of the patient’s night-stay areas will be conducted after
                3–4 weeks.</li>
                <li>Strengthened malaria testing among fever patients in nearby clinics.</li>
            </ul>

            <h3>Entomological Surveillance (within 48 hours)</h3>
            <ul>
                <li>Vector surveillance conducted to assess receptivity and identify Anopheles
                breeding sites.</li>
                <li>If vector presence is confirmed, vector control interventions (IRS,
                LLIN distribution, space spraying or larval source management) are
                completed within 10 days.</li>
                
            </ul>
            
            <h3>Health Education and Community Engagement</h3>
            <ul>
                <li>Education for patients, contacts, and the public on early detection, treatment
                adherence, and prevention measures.</li>
                <li>Coordination with local health teams to raise awareness among high-risk communities.</li>
            </ul>
        </div>
        
        <div class="alert-box-summary">
            <p>This case-based response — integrating clinical,
            parasitological, and entomological actions — is central to Sri Lanka’s success
            in sustaining malaria elimination and preventing re-establishment.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>