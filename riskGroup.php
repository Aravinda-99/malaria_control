<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk-Group Surveillance - Malaria Control</title>
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
            font-size: 3rem;
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
        
        /* --- NEW: Style for the Quote Box --- */
        .quote-box {
            background-color: #f7fff7;
            border-left: 5px solid rgb(5, 44, 0);
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            margin-bottom: 2.5rem;
        }
        .quote-box blockquote {
            margin: 0;
            font-size: 1.1rem;
            font-style: italic;
            color: #333;
            line-height: 1.7;
        }
        .quote-box cite {
            display: block;
            margin-top: 1rem;
            font-style: normal;
            font-weight: 600;
            color: rgb(5, 44, 0);
            text-align: right;
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
            .quote-box {
                padding: 1rem 1.5rem;
            }
            .quote-box blockquote {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Risk-Group Surveillance</h1>
            <p>Protecting High-Risk Populations from Malaria Reintroduction</p>
        </div>
    </section>

    <main class="content-section">
        
        <h2 class="content-section-title"><i class="fas fa-users-viewfinder icon"></i>Risk-Group Surveillance</h2>
    
        <div class="content-card">
            <p>Even though Sri Lanka has successfully eliminated malaria,
            the risk of reintroduction remains due to international travel, labour
            migration, and regional vector presence.</p>
            <p>To safeguard the nation’s malaria-free status, the Anti-Malaria Campaign
            (AMC) conducts risk-group surveillance — a proactive system to
            identify and monitor populations most vulnerable to malaria infection and
            potential transmission.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-user-tag icon"></i>Who Are Considered Risk Groups?</h2>
            <p>Risk groups are individuals or communities who have a higher
            probability of exposure to malaria parasites or mosquito vectors. They
            include:</p>
            <ul>
                <li>Returnees from malaria-endemic countries (especially Africa, South and Southeast Asia).
                
                </li>
                <li>Foreign migrant workers and students arriving from endemic regions.</li>
                <li>Military personnel, peacekeepers, or contract workers returning
                from high-risk missions abroad.</li>
                <li>Pilgrims and travellers visiting countries with active malaria transmission.</li>
                <li>Residents of high-receptivity areas — locations where Anopheles
                mosquitoes still exist and can support malaria transmission.
                
                </li>
                <li>Populations living near ports, airports, and border entry points.</li>
            </ul>
        </div>
        
        <div class="content-card">
            <h2><i class="fas fa-cogs icon"></i>How Risk-Group Surveillance Works</h2>
            <p>Risk-group surveillance ensures early detection and
            treatment of imported malaria cases before they can spread locally.</p>
            <p>The process involves multiple coordinated activities led by Regional Malaria
            Officers (RMOs), Public Health Laboratory Technicians (PHLTs), and field
            teams under AMC guidance.</p>
            
            <h3>1. Screening and Case Detection</h3>
            <ul>
                <li>All returnees from endemic countries are screened for malaria parasites
                using microscopy or Rapid Diagnostic Tests (RDTs).</li>
                
                <li>Mobile malaria screening clinics are conducted at international airports,
                seaports, military camps, and community settings.</li>
                <li>Individuals with fever or malaria-like symptoms are tested immediately and
                re-tested after 3–4 weeks (secondary screening).</li>
            </ul>
            
            <h3>2. Mapping and Monitoring</h3>
            <ul>
                <li>RMOs maintain updated databases of at-risk populations and areas,
                including work sites, hostels, and construction zones.</li>
                <li>GIS-based mapping helps identify clusters of high-risk individuals and
                prioritize surveillance coverage.
                
                </li>
            </ul>
            
            <h3>3. Continuous Follow-Up</h3>
             <ul>
                <li>All identified risk-group members are followed up through home visits or
                contact tracing.</li>
                <li>Health education and preventive advice (including use of insecticide-treated
                nets) are provided.</li>
                <li>If a malaria-positive case is detected, case-based reactive response is
                initiated immediately in the area.</li>
            </ul>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-shield-heart icon"></i>Why Risk-Group Surveillance Matters</h2>
            <ul>
                <li>Prevents the re-establishment of local transmission in receptive areas.</li>
                <li>Ensures early diagnosis and complete treatment of imported infections.</li>
                <li>Protects communities living near high-risk zones such as ports of entry,
                development sites, and resettlement areas.</li>
                <li>Supports national and global efforts to sustain malaria elimination.</li>
            </ul>
        </div>

        <div class="quote-box">
            <blockquote>“Every traveller returning from a malaria-endemic country
            must be screened and, if needed, treated — because even one missed infection
            can restart transmission.”</blockquote>
            <cite>— Anti-Malaria Campaign, Ministry of Health</cite>
        </div>

    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>