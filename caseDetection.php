<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Detection & Treatment - Malaria Control</title>
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
            background-image: url('asset/image/Casedetection_Treatment_Followup_Malaria.png');
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
        
        /* Special Alert Box (Red for warning) */
        .alert-box-warning {
            background-color: #fff8f7;
            border: 1px solid #d9534f;
            border-left-width: 5px;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 1rem;
        }
        
        .alert-box-warning p {
            color: #333;
            margin-bottom: 0;
            font-weight: 500;
        }
        
        .alert-box-warning .icon {
            color: #d9534f;
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
            .justified {
            text-align: justify;        /* main: left + right justify */
            text-justify: inter-word;   /* better spacing (mostly for IE/Edge) */
            line-height: 1.6;           /* optional — readability */
            hyphens: auto;              /* allow hyphenation in long words (browser dependent) */
            /* text-align-last: justify;  -- last line justify karanna ona nam uncomment karanna (limited support) */
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Case Detection & Follow-Up</h1>
            <p>Ensuring Rapid Treatment and Complete Cure</p>
        </div>
    </section>

    <main class="content-section">
        
        <h2 class="content-section-title"><i class="fas fa-tasks icon"></i>Case Detection, Treatment, and Follow-Up</h2>
    
        <div class="content-card">
            <h2><i class="fas fa-search-plus icon"></i>Case Detection</h2>
            <p class="justified">All patients presenting with fever — especially with a
            history of travel to malaria-endemic countries — must be screened for malaria
            before any treatment is given. Laboratory confirmation through microscopy
            and/or RDT is mandatory for diagnosis.</p>
            
            <div class="alert-box-warning">
                <p class="justified"><i class="fas fa-exclamation-triangle icon"></i>If the patient is negative, continue microscopy for three
                consecutive days to confirm negativity.</p>
            </div>
            
            <p class="justified" style="margin-top: 1.5rem;">Positive cases are validated through AMC reference laboratories using PCR and
            quality-assured microscopy to ensure diagnostic accuracy.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-pills icon"></i>Treatment</h2>
            <p>Once malaria is confirmed:</p>
            <ul >
                <li>Treatment begins within two hours of laboratory confirmation.</li>
                <li>Patients are treated as inpatients under a consultant physician, following AMC’s Guidelines
                for the Management and Treatment of Patients with Malaria in Sri Lanka.</li>
                <li>All anti-malarial medicines are quality-assured and provided free of charge.</li>
                <li>Patients are managed under a Long-Lasting Insecticidal Net (LLIN) to prevent
                mosquito transmission.</li>
            </ul>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-calendar-check icon"></i>Follow-Up</h2>
            <ul>
                <li>Daily blood smears are taken during hospitalization until parasitemia clears.</li>
                <li>Post-discharge follow-up is arranged through the AMC and the Regional Malaria Officer.</li>
                <li>Patients are re-tested at scheduled intervals up to one year after diagnosis
                — more frequently for P. vivax or P. ovale cases requiring
                primaquine therapy.</li>
                <li>Patients are advised not to donate blood for 3 years following infection.</li>
            </ul>
        </div>
        
        <div class="alert-box-summary">
            <p>This structured process ensures rapid cure, prevents drug
            resistance, and eliminates potential sources of transmission.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>