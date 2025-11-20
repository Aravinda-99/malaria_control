<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Engagement - Leishmaniasis - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        html {
            overflow-x: hidden;
            width: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa;
            overflow-x: hidden;
            width: 100%;
            max-width: 100vw;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .hero-section {
            min-height: 60vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/Community engagement_Leishmanisis.png');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 20px;
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.55);
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
            width: 100%;
            max-width: 800px;
            box-sizing: border-box;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin: 0;
            font-weight: 500;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
            line-height: 1.2;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        main {
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        .content-section {
            max-width: 1250px;
            margin: 4rem auto;
            padding: 0 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        .content-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
            width: 100%;
            box-sizing: border-box;
            max-width: 100%;
        }

        .content-card h2 {
            font-size: 2rem;
            font-weight: 600;
            color: rgb(5, 44, 0);
            margin-top: 0;
            margin-bottom: 1.25rem;
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

        .content-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .content-card h3:first-of-type {
            margin-top: 0;
        }

        .content-card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .content-card p:first-child {
            margin-top: 0;
        }

        .intro-card {
            border-left: 5px solid rgb(5, 44, 0);
            background: linear-gradient(135deg, #f2fbf4, #ffffff);
        }
        .intro-card h2 {
            border-bottom: none;
            margin-bottom: 0.5rem;
        }
        .intro-card p {
            font-size: 1.05rem;
            font-weight: 500;
            color: #0c2f40;
        }

        .content-card ul {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 1.5rem;
        }

        .content-card li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 0.8rem;
            line-height: 1.7;
            color: #555;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .content-card li::before {
            content: '\f111';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 10px;
            font-size: 0.5rem;
            color: rgb(5, 44, 0);
        }

        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            width: 100%;
            box-sizing: border-box;
        }

        .highlight-box {
            border-left: 5px solid rgb(5, 44, 0);
            padding-left: 1.25rem;
            background-color: #f9fbf8;
            width: 100%;
            box-sizing: border-box;
            max-width: 100%;
        }

        /* RESPONSIVE CSS START */
        
        /* Force single column for grid on screens smaller than grid min-width */
        @media (max-width: 600px) {
            .two-col {
                grid-template-columns: 1fr;
                min-width: 0;
            }
        }
        
        /* Tablet and below (992px) */
        @media (max-width: 992px) {
            .content-section {
                margin: 3rem auto;
                padding: 0 1.5rem;
                width: 100%;
                box-sizing: border-box;
            }
            
            .content-card {
                padding: 2rem;
                width: 100%;
                box-sizing: border-box;
            }
            
            .two-col {
                gap: 2rem;
            }
        }
        
        /* Mobile devices (768px) */
        @media (max-width: 768px) {
            .hero-section {
                min-height: 400px;
                height: auto;
                padding: 15px;
            }

            .hero-content {
                padding: 0 10px;
            }

            .hero-content h1 {
                font-size: 2.2rem;
                line-height: 1.3;
            }
            
            .content-section {
                margin: 2rem auto;
                padding: 0 1rem;
                width: 100%;
                max-width: 100%;
                box-sizing: border-box;
            }

            .content-card {
                padding: 1.5rem;
                margin-bottom: 2rem;
                width: 100%;
                max-width: 100%;
                box-sizing: border-box;
            }

            .content-card h2 {
                font-size: 1.6rem;
                margin-bottom: 1rem;
            }
            
            .content-card h2 .icon {
                font-size: 1.4rem;
                margin-right: 8px;
            }
            
            .content-card h3 {
                font-size: 1.3rem;
                margin-top: 1.5rem;
            }

            .intro-card {
                padding: 1.5rem;
            }
            
            .intro-card p {
                font-size: 1rem;
            }

            .highlight-box {
                padding-left: 1rem;
                margin-bottom: 1rem;
            }

            /* Force single column on mobile for stability */
            .two-col {
                grid-template-columns: 1fr; 
                gap: 1.5rem;
                min-width: 0;
            }
            
            .content-card li {
                padding-left: 24px;
                font-size: 0.95rem;
            }
        }
        
        /* Very small mobile devices (480px) */
        @media (max-width: 480px) {
            .hero-section {
                min-height: 350px;
                padding: 10px;
            }

            .hero-content {
                padding: 0 10px;
            }

            .hero-content h1 {
                font-size: 1.8rem;
                line-height: 1.2;
            }
            
            .content-section {
                margin: 1.5rem auto;
                padding: 0 0.75rem;
            }

            .content-card {
                padding: 1.25rem;
                margin-bottom: 1.5rem;
                border-radius: 8px;
            }

            .content-card h2 {
                font-size: 1.4rem;
                margin-bottom: 0.875rem;
                padding-bottom: 0.5rem;
            }
            
            .content-card h2 .icon {
                font-size: 1.2rem;
                margin-right: 6px;
            }
            
            .content-card h3 {
                font-size: 1.15rem;
                margin-top: 1.25rem;
            }

            .content-card p {
                font-size: 0.95rem;
                line-height: 1.6;
            }

            .intro-card {
                padding: 1.25rem;
            }
            
            .intro-card h2 {
                font-size: 1.4rem;
            }
            
            .intro-card p {
                font-size: 0.95rem;
            }

            .highlight-box {
                padding-left: 0.875rem;
            }

            .two-col {
                gap: 1.25rem;
                min-width: 0;
            }
            
            .content-section {
                width: 100%;
                max-width: 100%;
                box-sizing: border-box;
            }
            
            .content-card {
                width: 100%;
                max-width: 100%;
                box-sizing: border-box;
            }
            
            .hero-section {
                width: 100%;
                max-width: 100vw;
            }
            
            .content-card li {
                padding-left: 22px;
                font-size: 0.9rem;
                margin-bottom: 0.7rem;
            }
            
            .content-card li::before {
                font-size: 0.45rem;
                top: 8px;
            }
        }
        /* RESPONSIVE CSS END */
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Community Engagement</h1>
        </div>
    </section>

    <main class="content-section">
        <div class="content-card intro-card">
            <h2><i class="fas fa-users icon"></i> Community Engagement</h2>
            <p>Community engagement is central to Sri Lanka's strategy to prevent and control leishmaniasis. The community involvement improves early detection, treatment-seeking behaviour, and acceptance of vector control measures.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-bullseye icon"></i> Key Objectives of Community Engagement</h2>
            <ul>
                <li>Improve public awareness of symptoms and early healthcare-seeking</li>
                <li>Promote personal protection measures to reduce sandfly bites</li>
                <li>Mobilize community support for environmental management</li>
                <li>Encourage participation in active surveillance and screening campaigns</li>
                <li>Reduce stigma associated with skin lesions</li>
            </ul>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-tasks icon"></i> Approaches Used</h2>
            
            <div class="highlight-box">
                <h3>1. Health Education & Awareness</h3>
                <ul>
                    <li>IEC materials for the public, schools, workplaces, and high-risk communities</li>
                    <li>Risk communication during PHFO field visits</li>
                    <li>Dermatology clinics providing counselling for patients and families</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3>2. Community-Based Vector Control</h3>
                <ul>
                    <li>Clean-up campaigns to remove organic waste</li>
                    <li>Community-led environmental modification around houses and farm areas</li>
                    <li>Engaging farmer organizations, local authorities, and religious leaders</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3>3. Engagement of Schools</h3>
                <ul>
                    <li>School awareness programmes in endemic areas</li>
                    <li>Use of student-led activities and competitions</li>
                    <li>Integration of basic knowledge into health clubs and school health promotion initiatives</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3>4. Multi-Stakeholder Partnerships</h3>
                <p>The AMC collaborates closely with:</p>
                <ul>
                    <li>Provincial health authorities</li>
                    <li>Dermatology units</li>
                    <li>Universities conducting research</li>
                    <li>Local government institutions</li>
                    <li>Community-based organizations and NGOs</li>
                </ul>
            </div>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>

