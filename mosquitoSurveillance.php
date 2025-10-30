<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosquito Surveillance & Vector Control</title>
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
        
        /* --- NEW: Style for the data table --- */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            font-size: 0.95rem;
        }
        
        .data-table th, .data-table td {
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            text-align: left;
        }
        
        .data-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #333;
        }
        
        .data-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
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
            
            /* Make table scrollable on mobile */
            .table-container {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Mosquito Surveillance & Vector Control</h1>
            <p>Safeguarding Sri Lanka’s Malaria-Free Status</p>
        </div>
    </section>

    <main class="content-section">

        <h2 class="content-section-title">Safeguarding Sri Lanka’s Malaria-Free Status</h2>
        
        <div class="content-card">
            <p>Sri Lanka was certified malaria-free by the World Health
            Organization (WHO) in 2016 — a landmark public health achievement.</p>
            

            [Image of Anopheles mosquito life cycle]

            <p>However, the continued presence of Anopheles mosquitoes and increasing
            travel to and from malaria-endemic countries mean the threat of malaria
            reintroduction still exists.</p>
            <p>The Anti-Malaria Campaign (AMC) carries out
            continuous entomological surveillance and targeted vector control
            interventions to maintain zero local transmission and prevent the
            re-establishment of malaria in Sri Lanka.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-search-location icon"></i>1. Entomological Surveillance</h2>
            <p>Entomological surveillance is the cornerstone of malaria
            prevention during the Prevention of Reintroduction (PoR) phase.</p>
            
            <p>It involves systematic monitoring of mosquito populations to assess the risk
            of malaria transmission, known as **receptivity**, and to guide
            appropriate vector control responses.</p>
            
            <h3>Objectives</h3>
            <ul>
                <li>Identify and map Anopheles breeding sites and species distribution.</li>
                <li>Detect new or invasive malaria vectors, including Anopheles stephensi.</li>
                <li>Monitor mosquito density, biting behavior, and resting habits.</li>
                <li>Assess susceptibility and resistance to insecticides.</li>
                <li>Evaluate the impact of vector control measures and environmental changes.</li>
            </ul>
            
            <h3>Types of Surveillance</h3>
            <ul>
                <li>**Extended Sentinel Site Monitoring** – Conducted monthly in high-risk areas to
                track seasonal trends and vector behavior.</li>
                <li>**Routine Sentinel Site Monitoring** – Conducted quarterly in moderate-risk areas
                to monitor vector abundance and insecticide resistance.</li>
                <li>**Proactive Spot Checks** – Short-term surveys to assess new or vulnerable areas
                with potential risk of malaria reintroduction.</li>
                <li>**Reactive Spot Checks** – Conducted within 48 hours of a malaria case report to
                assess vector presence within a 1 km radius of the patient’s residence.</li>
            </ul>

            <h3>Techniques Used</h3>
            
            <ul>
                <li>Larval and adult mosquito collection</li>
                <li>Human landing catches and cattle-baited collections</li>
                <li>Resting collection and spray sheet methods</li>
                <li>Parity and infectivity testing</li>
                <li>Insecticide resistance and bioassay testing</li>
            </ul>
            <p>Entomological findings are used to determine malaria
            receptivity levels and decide the most appropriate interventions for each
            region.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-shield-alt icon"></i>2. Core Vector Control Interventions</h2>
            <p>Vector control aims to reduce or eliminate mosquito
            populations capable of transmitting malaria.</p>
            <p>The AMC uses a mix of core, supplementary, and personal
            protection interventions, depending on the ecological setting and risk
            level.</p>
            
            <h3>Indoor Residual Spraying (IRS)</h3>
            
            <p>IRS involves applying long-lasting insecticides on interior
            walls and ceilings where mosquitoes rest. It:</p>
            <ul>
                <li>Reduces mosquito lifespan and density.</li>
                <li>Decreases human–vector contact.</li>
                <li>Provides immediate interruption of transmission in outbreak or case-response
                situations.</li>
            </ul>
            <p>IRS is prioritized where vectors rest indoors (endophilic)
            and populations predominantly sleep inside houses.</p>

            <h3>Long-Lasting Insecticidal Nets (LLINs)</h3>
            
            <p>LLINs provide both a mechanical barrier and chemical
            protection against mosquito bites for at least three years. They are distributed to:</p>
            <ul>
                <li>Residents in receptive or vulnerable areas.</li>
                <li>Returnees from malaria-endemic countries.</li>
                <li>Populations in proximity to imported malaria cases.</li>
            </ul>
            <p>Before distribution, communities are educated on correct net
            usage and maintenance. Follow-up visits ensure compliance and longevity.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-water icon"></i>3. Supplementary Vector Control (LSM)</h2>
            <h3>Larval Source Management (LSM)</h3>
            <p>LSM targets mosquito larvae before they become adults and includes:</p>
            <ul>
                <li>**Environmental modification:** Permanent alteration of breeding sites (e.g., drainage,
                filling pits).</li>
                <li>**Environmental manipulation:** Temporary water management (e.g., flushing, cleaning
                drains).</li>
                <li>**Larviciding:** Application of biological or chemical agents such as Temephos or Bacillus
                thuringiensis israelensis (Bti) to kill larvae.</li>
                
                <li>**Biological control:** Introduction of larvivorous fish species like Aplocheilus
                dayi (“Nalahandaya”) or Poecilia reticulata (guppy) in confined
                water bodies.</li>
                
            </ul>
            <p>Larval control is especially useful in construction sites, irrigation
            schemes, or urban habitats where water collections are few, fixed, and findable.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-user-shield icon"></i>4. Personal Protection and Community Awareness</h2>
            <p>Personal measures reduce mosquito bites and protect
            individuals in high-risk settings:</p>
            <ul>
                <li>Use of repellents (creams, sprays, coils).</li>
                <li>Protective clothing covering arms and legs during evening hours.</li>
                <li>LLIN use every night regardless of the season.</li>
            </ul>
            <p>Community awareness programs emphasize eliminating mosquito
            breeding sites and the timely reporting of fever following travel to endemic
            countries.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-tasks icon"></i>5. Vector Control in Special Scenarios</h2>
            <p>Vector control measures are customized depending on
            epidemiological and environmental conditions:</p>
            
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Scenario</th>
                            <th>Recommended Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>When a malaria case is reported</td>
                            <td>Entomological survey within 48 hours; IRS and larval
                            control within 1 km radius; LLINs for household members.</td>
                        </tr>
                        <tr>
                            <td>Urban settings</td>
                            <td>Focal space spraying within 500 m; larval control using Temephos
                            or larvivorous fish.</td>
                        </tr>
                        <tr>
                            <td>Rural settings</td>
                            <td>IRS and LLINs covering a 1 km radius; larval control in
                            breeding sites.</td>
                        </tr>
                        <tr>
                            <td>Introduced or Indigenous cases</td>
                            <td>Intensive vector control within 1 km, repeated
                            surveillance for 3 years.</td>
                        </tr>
                         <tr>
                            <td>Presence of Anopheles stephensi</td>
                            <td>Continuous monitoring, larval source management, and
                            targeted adult control.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p style="margin-top: 1rem; font-size: 0.9rem; color: #666;">These
            measures are guided by real-time entomological data and coordinated
            between the AMC Headquarters and Regional Malaria Officers.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-vial-virus icon"></i>6. Insecticide Resistance Monitoring</h2>
            <p>Regular monitoring of mosquito susceptibility ensures
            effective insecticide use.</p>
            <p>AMC teams conduct annual resistance testing for all major vector species (An.
            culicifacies, An. subpictus, An. stephensi) using
            WHO-standard methods.</p>
            
            <p>Findings guide the selection and rotation of insecticides to delay resistance
            development.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-hands-helping icon"></i>7. Strengthening Surveillance and Partnerships</h2>
            <ul>
                <li>Entomological teams operate in every Regional Malaria Office, equipped with trained
                Health Entomology Officers and field staff.</li>
                <li>All surveillance data are mapped using GPS to identify vector breeding sites
                and prioritize interventions.</li>
                
                <li>Collaborations with local authorities, environmental agencies, and communities ensure
                sustainable vector management and rapid response to any malaria risk.</li>
            </ul>
        </div>
        
        <div class="alert-box-summary">
            <h3>Together for a Malaria-Free Future</h3>
            <p>Through science-driven surveillance, targeted vector
            control, and active community participation, the Anti-Malaria Campaign
            continues its mission to keep Sri Lanka malaria-free for life.</p>
            <p style="margin-top: 1rem;">Every citizen’s cooperation — in preventing mosquito breeding and seeking early
            testing — plays a vital role in protecting the nation’s health and global
            standing.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>