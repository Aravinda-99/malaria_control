<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Engagement - Malaria Control</title>
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
            /* no text-align:center here */
        }
        
        /* --- Style for the main title --- */
        .content-section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: rgb(5, 44, 0);
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 3px solid #052c00;
            display: table;
            padding-bottom: 0.4rem;
            line-height: 1.1;
            margin-left: auto;
            margin-right: auto;
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
        
        /* --- Style for the Quote Box --- */
        .quote-box {
            background-color: #f8f9fa;
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
        
        .alert-box-summary h3 {
            color: #052c00;
            margin-top: 0;
            font-weight: 700;
            margin-bottom: 0.5rem;
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
            <h1>Community Engagement</h1>
            <p>Empowering People to Keep Sri Lanka Malaria-Free</p>
        </div>
    </section>

    <main class="content-section">
        
        <h2 class="content-section-title"><i class="fas fa-users icon"></i>Community Engagement</h2>
    
        <div class="content-card">
            <p>Community participation is central to sustaining malaria
            elimination.</p>
            <p>The Anti-Malaria Campaign (AMC) promotes active community engagement to
            build awareness, encourage early testing, and strengthen preventive practices
            that reduce mosquito breeding and human–vector contact.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-bullseye-pointer icon"></i>Objectives of Community Engagement</h2>
            <ul>
                <li>To create public awareness on malaria prevention and early detection.</li>
                <li>To encourage health-seeking behavior among people returning from
                endemic countries.</li>
                <li>To empower communities to identify and eliminate mosquito breeding sites.</li>
                <li>To promote responsible travel and adherence to malaria prophylaxis.</li>
                <li>To build partnerships with local authorities, workplaces, and schools
                for long-term vigilance.</li>
            </ul>
        </div>
        
        <div class="content-card">
            <h2><i class="fas fa-tasks icon"></i>Key Activities</h2>
            
            <h3>1. Health Education and Awareness Campaigns</h3>
            
            <ul>
                <li>Awareness programs are conducted in schools, factories, temples, mosques, and
                workplaces.</li>
                <li>Information materials such as leaflets, posters, videos, and social media content
                are distributed to educate the public about malaria symptoms, testing, and
                prevention.</li>
                <li>Messages are customized in Sinhala, Tamil, and English to reach all communities.</li>
            </ul>

            <h3>2. Engagement of Local Leaders and Volunteers</h3>
            <ul>
                <li>Community and religious leaders, youth groups, and local government officers are
                involved in malaria awareness drives.</li>
                <li>Trained Community Malaria Volunteers (CMVs) assist in case detection,
                health education, and vector surveillance in rural and high-risk areas.</li>
            </ul>
            
            <h3>3. Collaboration with Private Sector and Institutions</h3>
            <ul>
                <li>Partnerships with construction companies, tourism operators, plantation sectors, and
                employers of migrant workers ensure regular screening and preventive
                actions.</li>
                <li>Educational institutions and universities are supported to screen foreign students
                from endemic countries.</li>
            </ul>
            
            <h3>4. Community-Based Vector Control</h3>
            
            <ul>
                <li>Communities are mobilized to identify and eliminate standing water sources such as
                tanks, drains, and containers.</li>
                <li>Environmental clean-up campaigns are conducted in collaboration with local health
                authorities and municipal councils.</li>
                <li>Residents are encouraged to use Long-Lasting Insecticidal Nets (LLINs) and
                repellents, especially in receptive regions.</li>
                
            </ul>
        </div>

        <div class="quote-box">
            <cite>AMC’s Message to the Public</cite>
            <blockquote>“Malaria-free does not mean malaria is gone forever. Every
            citizen must remain vigilant — test for malaria if fever develops after travel,
            destroy mosquito breeding sites, and report suspicious cases to health
            authorities.”</blockquote>
        </div>
        
        <div class="content-card">
            <h2><i class="fas fa-hands-helping icon"></i>How You Can Help</h2>
            <ul>
                <li>Get tested for malaria after returning from an endemic country — even if you
                feel well.</li>
                <li>Sleep under a mosquito net every night.</li>
                <li>Keep your home and surroundings free of stagnant water.</li>
                <li>Support malaria screening programs in your area.</li>
                <li>Spread the word — awareness saves lives.</li>
            </ul>
        </div>

        <div class="alert-box-summary">
            <h3>Together for a Malaria-Free Sri Lanka</h3>
            <p>The success of malaria elimination depends not only on surveillance and health
            systems but also on community ownership.</p>
            <p style="margin-top: 1rem;">Through education, partnership, and collective action, Sri Lanka continues to stand
            as a global example of how communities and public health authorities can work
            together to maintain a malaria-free nation.</p>
        </div>

    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>