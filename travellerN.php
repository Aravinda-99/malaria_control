<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellers’ Health - Malaria Prevention</title>
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
            background-image: url('asset/image/travelBanner.png');
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
            line-height: 1.7;
        }
        
        .alert-box-summary .slogan {
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            margin-top: 1.5rem;
            color: rgb(5, 44, 0);
        }
        
        /* Special Alert Box (Yellow for warning) */
        .alert-box-warning {
            background-color: #fffaf0;
            border: 1px solid #ffc107;
            border-left-width: 5px;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 1rem;
        }
        .alert-box-warning p {
            margin: 0;
            color: #555;
        }
        .alert-box-warning strong {
            color: #333;
        }
        
        /* Special Alert Box (Red for DANGER) */
        .alert-box-danger {
            background-color: #fff8f7;
            border: 1px solid #d9534f;
            border-left-width: 5px;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            margin-bottom: 2.5rem;
        }
        
        .alert-box-danger h2 {
            color: #d9534f;
            margin-top: 0;
            font-weight: 700;
            border: none;
        }
        .alert-box-danger .hotline {
            font-size: 1.75rem;
            font-weight: 700;
            color: #d9534f;
            display: block;
            margin: 1rem 0;
        }
        
        /* --- NEW: Style for Do's and Don'ts Table --- */
        .dos-donts-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }
        
        .dos-donts-table th, .dos-donts-table td {
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            text-align: left;
            vertical-align: top;
            width: 50%;
        }
        
        .dos-donts-table th {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .dos-donts-table th.dos-header {
            background-color: #f0fff0;
            color: #28a745;
        }
        .dos-donts-table th.donts-header {
            background-color: #fff8f7;
            color: #d9534f;
        }
        .dos-donts-table .icon {
            margin-right: 8px;
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
             .content-card h3 {
                font-size: 1.25rem;
            }
            
            /* Stack table on mobile */
            .dos-donts-table, .dos-donts-table tbody, .dos-donts-table tr {
                display: block;
                width: 100%;
            }
            .dos-donts-table thead {
                display: none; /* Hide headers */
            }
            .dos-donts-table tr {
                margin-bottom: 1rem;
            }
            .dos-donts-table td {
                display: block;
                width: 100%;
                text-align: left;
            }
            .dos-donts-table td:first-child {
                background-color: #f0fff0;
                border-bottom: none;
            }
             .dos-donts-table td:last-child {
                background-color: #fff8f7;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Travellers’ Health and Malaria Prevention</h1>
            <p>Stay Protected — Keep Sri Lanka Malaria-Free</p>
        </div>
    </section>

    <main class="content-section">
    
        <div class="content-card">
            <p>Sri Lanka has been malaria-free since 2012, but the
            risk of reintroduction remains due to travellers arriving from or visiting
            malaria-endemic countries.</p>
            <p>If you are planning to travel to Africa, Asia, or South America — or returning
            from such regions — it’s essential to take malaria preventive measures
            and follow the advice of the Anti-Malaria Campaign (AMC).</p>
            <p><strong>Malaria is preventable, treatable, and curable,</strong> but
            it can be life-threatening if ignored. Your vigilance helps protect you,
            your family, and the nation from re-establishing this deadly disease.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-plane-departure icon"></i>Before You Travel</h2>
            
            <h3>1. Check if Your Destination Is Malaria-Endemic</h3>
            <p>Malaria is still present in many parts of the world,
            including:</p>
            
            <ul>
                <li><strong>Africa</strong> (e.g., Nigeria, Ghana, Kenya, Sudan, Tanzania)</li>
                <li><strong>South and Southeast Asia</strong> (e.g., India, Myanmar, Indonesia, Thailand,
                Pakistan)</li>
                <li><strong>Oceania</strong> (e.g., Papua New Guinea, Solomon Islands)</li>
                <li><strong>South America</strong> (e.g., Brazil, Peru, Venezuela)</li>
            </ul>
            <p>If your travel destination is in any of these regions, you
            are at risk of malaria infection.</p>
            
            <h3>2. Obtain Malaria Chemoprophylaxis (Preventive Medicine)</h3>
            <p>Travellers from Sri Lanka to malaria-endemic countries are entitled
            to <strong>free malaria prophylaxis</strong> from the Anti-Malaria Campaign Headquarters
            or the nearest Regional Malaria Office (RMO).</p>
            
            
            <p><strong>How to obtain prophylaxis:</strong></p>
            <ul>
                <li>Visit the AMC or your nearest RMO at least one week before departure.</li>
                <li>Bring your passport and travel details (destination and duration).</li>
                <li>You will receive advice on the most suitable preventive medicine, such
                as Doxycycline, Mefloquine, or Atovaquone–Proguanil,
                depending on your health condition and destination.</li>
                <li>You will be informed when to start and stop taking the medicine.</li>
            </ul>
            
            <div class="alert-box-warning">
                <p><strong>Important:</strong> Prophylaxis must be started <strong>before</strong> travel, continued <strong>during</strong> the stay,
                and for up to <strong>4 weeks after</strong> leaving the endemic area (depending on the
                drug type).</p>
                <p style="margin-top: 0.5rem;">Prophylaxis is safe for most travellers, including adults and
                children above 8 years. Pregnant women and people with chronic illnesses should
                seek medical advice before use.</p>
            </div>
            
            <h3>3. Take Preventive Measures Against Mosquito Bites</h3>
            
            <ul>
                <li>Sleep under a Long-Lasting Insecticidal Net (LLIN) every night.</li>
                <li>Apply mosquito repellent containing DEET, picaridin, or lemon eucalyptus oil on
                exposed skin.</li>
                <li>Wear light-coloured, long-sleeved clothing in the evenings and at night.</li>
                <li>Stay in screened or air-conditioned rooms when possible.</li>
                <li>Avoid outdoor exposure during peak mosquito activity hours (dusk to dawn).</li>
            </ul>
            <p>These steps protect you from malaria and other
            mosquito-borne diseases such as dengue, chikungunya, and Zika.</p>
        </div>
        
        <div class="content-card">
            <h2><i class="fas fa-house-chimney-medical icon"></i>After Returning to Sri Lanka</h2>
            
            <h3>1. Get Tested for Malaria</h3>
            <p>All travellers returning from malaria-endemic countries must
            undergo malaria blood testing — <strong>even if you have no symptoms.</strong></p>
            <p><strong>Testing Schedule:</strong></p>
            <ul>
                <li>Immediately after return to Sri Lanka</li>
                <li>At 1 month, 6 months, and 12 months after return</li>
            </ul>
             <p>You can get tested <strong>free of charge</strong> at:</p>
            <ul>
                <li>Anti-Malaria Campaign Headquarters, Colombo 05</li>
                <li>Nearest Regional Malaria Office</li>
                <li>Any Government Hospital with malaria diagnostic facilities</li>
            </ul>
            <p>Early testing ensures malaria is detected and treated before
            it spreads.</p>
            
            <h3>2. Watch for Symptoms</h3>
            <p>Seek <strong>immediate medical attention</strong> if you develop:</p>
            
            <ul>
                <li>Fever</li>
                <li>Chills and shivering</li>
                <li>Headache</li>
                <li>Nausea or vomiting</li>
                <li>Muscle aches or fatigue</li>
            </ul>
            <p><strong>Inform your doctor that you have travelled to a
            malaria-endemic country</strong> and request a malaria test.</p>
            <p>Even mild or delayed symptoms can indicate malaria — cases have occurred months
            after return due to dormant liver-stage parasites (P. vivax and P.
            ovale).</p>
            
            <h3>3. Do Not Donate Blood for 3 Years</h3>
            <p>Individuals returning from malaria-endemic countries are temporarily
            deferred from blood donation for three years, as malaria parasites
            can remain dormant in the body.</p>
            <p>This policy ensures the safety of Sri Lanka’s blood supply and prevents
            transfusion-transmitted malaria.</p>
        </div>

        <div class="alert-box-danger">
            <h2><i class="fas fa-exclamation-triangle"></i> In Case of Suspected Malaria</h2>
            <p style="margin-top: 0.5rem;">If you suspect you have malaria or have been exposed:</p>
            <p>Call the <strong>AMC 24-Hour Hotline:</strong></p>
            <span class="hotline">📞 071 284 1767</span>
            <ul>
                <li>Visit the nearest government hospital or RMO <strong>immediately.</strong></li>
                <li>Do not self-medicate — treatment requires expert supervision.</li>
            </ul>
            <p style="margin-top: 0.5rem;">All diagnostic testing and anti-malarial treatment are provided
            <strong>free of charge</strong> in Sri Lanka.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-clipboard-check icon"></i>Travel Tips to Stay Safe</h2>
            <div class="table-container">
                <table class="dos-donts-table">
                    <thead>
                        <tr>
                            <th class="dos-header"><i class="fas fa-check-circle icon"></i>Do’s</th>
                            <th class="donts-header"><i class="fas fa-times-circle icon"></i>Don’ts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Start prophylaxis before you travel</td>
                            <td>Don’t skip doses of your medicine</td>
                        </tr>
                         <tr>
                            <td>Sleep under an insecticide-treated net</td>
                            <td>Don’t rely only on repellents</td>
                        </tr>
                         <tr>
                            <td>Keep your surroundings mosquito-free</td>
                            <td>Don’t assume you’re immune</td>
                        </tr>
                         <tr>
                            <td>Get tested for malaria after return</td>
                            <td>Don’t ignore fever after travel</td>
                        </tr>
                         <tr>
                            <td>Keep AMC hotline numbers handy</td>
                            <td>Don’t donate blood for 3 years post-travel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-hospital icon"></i>Where to Get Help</h2>
            <strong>Anti-Malaria Campaign Headquarters</strong>
            <p style="margin-bottom: 0;">Public Health Building,<br>
            555/5 Elvitigala Mawatha, Colombo 05</p>
            <p style="font-size: 1.25rem; font-weight: 600; color: #333;">📞 011 762 6626</p>
            <p><strong>🌐 www.malariacampaign.gov.lk</strong></p>
            <p>Regional Malaria Offices (RMOs) are available in all
            provinces — contact your nearest office for malaria testing or prophylaxis
            services.</p>
        </div>
        
        <div class="alert-box-summary">
            <h3> Together, Let’s Keep Sri Lanka Malaria-Free</h3>
            <p>Malaria prevention begins with you. Every traveller’s cooperation is vital to ensure Sri Lanka remains a global success story in malaria elimination.</p>
            <div class="slogan">
                <p style="margin-bottom: 0.5rem;"> Before you travel – protect yourself.</p>
                <p style="margin-bottom: 0.5rem;"> After you return – test yourself.</p>
                <p> Together – protect Sri Lanka.</p>
            </div>
        </div>

    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>