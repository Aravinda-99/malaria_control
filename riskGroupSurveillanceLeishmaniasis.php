<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk-Group Surveillance for Leishmaniasis - Malaria Control</title>
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
            background-image: url('asset/image/Leishmaniasis risk group surveillance.png');
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

        .content-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #444;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
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
            margin-bottom: 1.5rem;
        }

        .alert-box {
            background-color: #fff5f2;
            border: 1px solid #ffae9b;
            border-left-width: 5px;
            padding: 1.25rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            margin-top: 1.5rem;
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
            
            .content-card h4 {
                font-size: 1.1rem;
                margin-top: 1.25rem;
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

            .alert-box {
                padding: 1.25rem 1.25rem;
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
            
            .content-card h4 {
                font-size: 1rem;
                margin-top: 1rem;
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

            .alert-box {
                padding: 1rem 1.25rem;
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
            <h1>Risk-Group Surveillance for Leishmaniasis</h1>
        </div>
    </section>

    <main class="content-section">
        <div class="content-card intro-card">
            <h2><i class="fas fa-users-cog icon"></i> Risk-Group Surveillance for Leishmaniasis</h2>
            <p>Effective prevention and control of leishmaniasis in Sri Lanka requires targeted surveillance of populations at highest risk of exposure. Risk-group surveillance helps identify early infections, detect transmission hotspots, and guide public health action before disease spreads further. This forms a key component of the national strategy for surveillance and early detection outlined in the NSP 2024–2028.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-user-shield icon"></i> Who Are the High-Risk Groups?</h2>
            <p>Based on epidemiological patterns, behaviour, and environmental exposure, the following groups are considered at higher risk:</p>
            
            <div class="highlight-box">
                <h3>1. Outdoor and Agricultural Workers</h3>
                <ul>
                    <li>Farmers, cultivators, chena workers</li>
                    <li>Cattle herders and persons working in paddy fields</li>
                    <li>Workers involved in forestry, land clearing, irrigation schemes</li>
                </ul>
                <p>These groups are frequently exposed to sandfly habitats, especially during dawn and dusk.</p>
            </div>

            <div class="highlight-box">
                <h3>2. Military Personnel and Security Forces</h3>
                <p>Historically, soldiers stationed in scrubland and jungle areas were the earliest affected group in Sri Lanka. Many are stationed in highly endemic districts with active sandfly breeding sites.</p>
            </div>

            <div class="highlight-box">
                <h3>3. Residents in Endemic Areas</h3>
                <p>Communities living in districts such as:</p>
                <ul>
                    <li>Anuradhapura</li>
                    <li>Polonnaruwa</li>
                    <li>Hambantota</li>
                    <li>Matara</li>
                    <li>Kurunegala</li>
                    <li>Matale</li>
                    <li>Monaragala, Ratnapura, Gampaha and Badulla (emerging high-reporting areas)</li>
                </ul>
                <p>are at sustained risk because of environmental factors favouring vector breeding.</p>
            </div>

            <div class="highlight-box">
                <h3>4. People Living Near High-Risk Environments</h3>
                <ul>
                    <li>Houses with cracks, damp walls, and poor plastering</li>
                    <li>Residences close to cattle sheds, banana groves, thick vegetation</li>
                    <li>Poorly maintained gardens with decaying organic matter</li>
                </ul>
                <p>These settings provide ideal sandfly breeding sites.</p>
            </div>

            <div class="highlight-box">
                <h3>5. Immunocompromised Individuals</h3>
                <p>Patients with:</p>
                <ul>
                    <li>HIV/AIDS</li>
                    <li>Chronic illnesses</li>
                    <li>Long-term steroid use</li>
                </ul>
                <p>may experience more severe disease forms and require close monitoring.</p>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-clipboard-list icon"></i> What Does Risk-Group Surveillance Involve?</h2>
            <p>Risk-group surveillance focuses on systematically screening, monitoring, and investigating populations who are at increased risk. A Structured parasitological and entomological surveillance in these groups are needed to be strengthened.</p>
            
            <div class="highlight-box">
                <h3>1. Active Case Detection (ACD)</h3>
                <ul>
                    <li>Field-based screening in high-risk communities</li>
                    <li>Mobile dermatology clinics for point-of-care diagnosis</li>
                    <li>Household visits by PHFOs and entomology staff</li>
                    <li>Screening outdoor workers, military camps, and farming communities</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3>2. Early Referral and Laboratory Confirmation</h3>
                <p>Suspected cases undergo:</p>
                <ul>
                    <li>Slit-skin smear (SSS)</li>
                    <li>Biopsy and histopathology</li>
                    <li>PCR where available</li>
                </ul>
                <p>This ensures prompt confirmation and treatment.</p>
            </div>

            <div class="highlight-box">
                <h3>3. Monitoring Transmission Hotspots</h3>
                <p>Villages reporting clusters or increased cases undergo:</p>
                <ul>
                    <li>Entomological surveillance</li>
                    <li>Reservoir host assessments</li>
                    <li>Environmental evaluations</li>
                </ul>
            </div>

            <div class="highlight-box">
                <h3>4. Seasonal Surveillance</h3>
                <p>Case peaks occur after monsoon rains (Feb–Mar and Jul–Oct). Enhanced surveillance is carried out during these months.</p>
            </div>

            <div class="highlight-box">
                <h3>5. Surveillance for Visceral Leishmaniasis (VL)</h3>
                <p>Although rare, VL remains a serious threat.</p>
                <p>High-risk individuals with:</p>
                <ul>
                    <li>Prolonged fever</li>
                    <li>Weight loss</li>
                    <li>Enlarged liver and spleen</li>
                </ul>
                <p>are screened using rK-39 rapid diagnostic tests and bone marrow biopsy.</p>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-heart icon"></i> How Communities Benefit</h2>
            
            <div class="two-col">
                <div class="highlight-box">
                    <h3>Early Detection Saves Time & Prevents Spread</h3>
                    <p>Risk-group surveillance helps diagnose cases early, preventing complications and reducing the transmission cycle.</p>
                </div>
                <div class="highlight-box">
                    <h3>Improved Access to Care</h3>
                    <p>Mobile clinics and community screening bring dermatology services closer to remote populations.</p>
                </div>
            </div>

            <div class="highlight-box">
                <h3>Better Social and Environmental Response</h3>
                <p>When hotspots are identified early, vector control and community awareness programmes can begin immediately.</p>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-handshake icon"></i> AMC's Commitment</h2>
            <p>The AMC is strengthening risk-group surveillance by:</p>
            <ul>
                <li>Establishing a national surveillance plan for CL, MCL, and VL</li>
                <li>Conducting active case detection in endemic and emerging districts</li>
                <li>Training health staff in surveillance and integrated vector management</li>
                <li>Improving access to diagnostic tools and strengthening PHFO-led community surveillance</li>
                <li>Engaging communities, schools, and local institutions in early detection and prevention</li>
            </ul>
            <p>Through focused surveillance of high-risk groups, Sri Lanka aims to reduce the burden of cutaneous leishmaniasis and prevent the emergence of more severe forms of the disease.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>

