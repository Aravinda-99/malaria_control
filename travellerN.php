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

            min-height: 480px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            text-align: center;

            position: relative;

            background-image: url('asset/image/traveller12.jpg');

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

        /* --- View Button Styling --- */
        .view-button {
            background-color: rgb(5, 44, 0);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .view-button:hover {
            background-color: rgb(8, 65, 0);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .view-button .icon {
            font-size: 1rem;
        }

        /* --- Modal/Image Viewer Styling --- */
        .country-list-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .country-list-modal.active {
            display: flex;
        }

        .modal-container {
            position: relative;
            width: 90%;
            max-width: 1200px;
            max-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }

        .modal-close {
            position: absolute;
            top: -40px;
            right: 0;
            background-color: rgb(5, 44, 0);
            color: white;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 1.25rem;
            transition: all 0.3s ease;
            border: none;
        }

        .modal-close:hover {
            background-color: rgb(8, 65, 0);
            transform: scale(1.1);
        }

        .modal-image {
            max-width: 100%;
            max-height: 85vh;
            object-fit: contain;
            border-radius: 5px;
        }

        /* Country List Content Styling */
        .country-list-content {
            width: 100%;
            max-height: 85vh;
            overflow-y: auto;
            padding: 1rem 0;
        }

        .country-list-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: rgb(5, 44, 0);
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e0e0e0;
        }

        .country-list-columns {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .country-column {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 1.5rem;
        }

        .country-column h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: rgb(5, 44, 0);
            margin-top: 0;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid rgb(5, 44, 0);
            text-align: center;
        }

        .country-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .country-list li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: #333;
            line-height: 1.6;
            border-bottom: 1px solid #e8e8e8;
        }

        .country-list li:last-child {
            border-bottom: none;
        }

        .country-list li::before {
            content: '\f0a9';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: rgb(5, 44, 0);
            opacity: 0.6;
            font-size: 0.85rem;
        }

        .country-note {
            font-size: 0.9rem;
            color: #666;
            font-style: italic;
            margin-top: 0.25rem;
            padding-left: 1.5rem;
        }

        @media (max-width: 1024px) {
            .country-list-columns {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .modal-container {
                width: 95%;
                padding: 1rem;
            }

            .modal-close {
                top: -35px;
                width: 2rem;
                height: 2rem;
                font-size: 1rem;
            }

            .modal-image {
                max-height: 80vh;
            }

            .country-list-content {
                max-height: 80vh;
            }

            .country-list-title {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .country-list-columns {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .country-column {
                padding: 1rem;
            }

            .country-column h3 {
                font-size: 1.25rem;
            }
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

             <h2><i class="fas fa-suitcase icon"></i>Traveller’s Guide – Stay Protected from Malaria</h2>

             <h3>Sri Lanka: Malaria-Free, but Still Vigilant</h3>

            <p>Sri Lanka was certified malaria-free by the <strong> World Health Organization (WHO) in 2016</strong>, and the <strong>last indigenous malaria case was reported in 2012.</strong></p>

            <p>This remarkable achievement was the result of decades of strong surveillance, treatment, and community action led by the <strong>Anti-Malaria Campaign (AMC)</strong> of the Ministry of Health.</p>

            <p>However, malaria continues to exist in many parts of the world — especially in <strong> Africa, South and Southeast Asia, and South America.</strong></p>

            <p>Each year, Sri Lankans travel to and return from these countries for employment, pilgrimage, trade, or study.</p>

            <p>To ensure that malaria never returns to our island, it is important that every traveller <strong>takes precautions before, during, and after travel.</strong></p>

         

        </div>



        <div class="content-card">

            <h2><i class="fas fa-plane-departure icon"></i>For Sri Lankans Travelling Abroad</h2>

            

            <h3>1. Before You Travel</h3>

            <h4>a. Find out if your destination is malaria-endemic</h4>

            <p>Malaria is present in more than 80 countries — including India, Myanmar, Indonesia, Thailand, Pakistan, Bangladesh, most of Africa, and parts of South America.
Check with the <strong>Anti-Malaria Campaign</strong> or visit the WHO website to verify if your travel destination has malaria.
</p>

   <h4>b. Obtain Free Malaria Chemoprophylaxis</h4>

          <p>Travellers from Sri Lanka to malaria-endemic countries are entitled to <strong> free anti-malaria preventive medicine </strong> from AMC.
</p>

                   <p>Where to get it:
</p>

           <ul>

                <li>           Anti-Malaria Campaign Headquarters, Colombo 05</li>
                <li>       Any  <strong>Regional Malaria Office (RMO) </strong>island-wide</li>

              


            </ul>
 
            <p>When to start:</p>

               <ul>

                <li>       Visit at least <strong>one week before departure</strong></li>

                  <li>      Bring your <strong>passport and travel details</strong></li>
                <li>       Follow the AMC doctor’s advice on the correct medicine (e.g., Doxycycline, Mefloquine, or Atovaquone–Proguanil) and when to start/stop it.</li>
                <li>       Continue the tablets <strong>during travel</strong> and for <strong>four weeks after returning</strong>, depending on the drug prescribed.</li>



            </ul>

     <p style="font-size:18px; line-height:1.4;">
  💊 Prophylaxis is safe and effective. Pregnant women and people with medical conditions should consult a doctor for tailored advice.
</p>

            

            <h3>2. During Your Stay Abroad</h3>

            <p>Even with preventive medicine, you must protect yourself from mosquito bites — the malaria parasite spreads only through the bite of an infected Anopheles mosquito.</p>

            

            <p style="font-size:18px; line-height:1.4;">
  🦟 Avoid Mosquito Bites
</p>

           

            <ul>

                <li>   Sleep under a <strong>Long-Lasting Insecticidal Net (LLIN)</strong> every night.</li>

                <li>   Apply <strong>mosquito repellent</strong> (DEET, picaridin, or lemon eucalyptus oil) on exposed skin.</li>

                <li>   Wear <strong>light-coloured, long-sleeved clothing</strong> in the evenings and at night.</li>

                <li>  Use <strong>insecticide sprays or coils</strong> inside rooms after sunset.</li>
                  <li> Stay in <strong>screened or air-conditioned rooms</strong> whenever possible.</li>
                    <li>   Avoid outdoor activities between <strong>dusk and dawn</strong> — peak biting hours.</li>

            </ul>



            <p style="font-size:18px; line-height:1.4;">
  💡 Stay Alert for Symptoms
</p>

  <p>If you develop <strong>fever, chills, or body aches</strong> while abroad, <strong>seek medical care immediately</strong> and ask for a <strong>malaria test.</strong> Early treatment prevents complications and protects others.</p>

            
<!-- 
            <div class="alert-box-warning">

                <p><strong>Important:</strong> Prophylaxis must be started <strong>before</strong> travel, continued <strong>during</strong> the stay,

                and for up to <strong>4 weeks after</strong> leaving the endemic area (depending on the

                drug type).</p>

                <p style="margin-top: 0.5rem;">Prophylaxis is safe for most travellers, including adults and

                children above 8 years. Pregnant women and people with chronic illnesses should

                seek medical advice before use.</p>

            </div> -->

            

            <h3>3. After You Return to Sri Lanka</h3>

            <p style="font-size:18px; line-height:1.4;">
            🧪 Get Tested for Malaria
            </p>

            <p>All travellers returning from malaria-endemic countries must be <strong>screened for malaria,</strong> even if they feel healthy.</p>

            <p>Free testing available at:</p>

            <ul>
                <li>Anti-Malaria Campaign Headquarters, Colombo 05</li>
                <li>Nearest Regional Malaria Office</li>
                <li>All government hospitals with malaria microscopy or RDT facilities</li>
            </ul>

            <p>Testing Schedule:</p>

            <ul>
                <li>Immediately upon return</li>
                <li>At 1 month, 6 months, and 12 months after return</li>
            </ul>

            <p>This follow-up ensures detection of infections that may appear months later (P. vivax, P. ovale).</p>

            <p style="font-size:18px; line-height:1.4;">
  ⚠️ Don't Donate Blood for 3 Years
</p>

            <p>Returnees from endemic countries should <strong>not donate blood for three years</strong> to prevent transfusion-transmitted malaria.</p>

            <p style="font-size:18px; line-height:1.4;">
  📞 If You Feel Unwell
</p>

            <p>If you develop fever after returning to Sri Lanka:</p>

            <ul>
                <li>Inform your doctor that you have travelled to a malaria-endemic country.</li>
                <li>Request a malaria test immediately.</li>
                <li>Contact the AMC 24-hour hotline for advice.</li>
            </ul>

            <p style="font-size:18px; line-height:1.4;">
  📞 071-284 1767
</p>

        </div>

        <div class="content-card">
            <h2><i class="fas fa-globe icon"></i>For Foreign Visitors to Sri Lanka</h2>

            <p>Welcome to <strong>Sri Lanka — a country free of malaria since 2012.</strong></p>
            <p>There is <strong>no indigenous malaria transmission</strong> on the island, but imported cases continue to be detected among travellers.</p>
            <p>To maintain our malaria-free status, we ask for your cooperation.</p>

            <h3>What You Should Know</h3>

            <ul>
                <li>You <strong>do not need malaria prophylaxis</strong> to visit Sri Lanka.</li>
                <li>There is <strong>no local malaria transmission</strong> — only isolated imported cases in people arriving from endemic countries.</li>
                <li>Our health system continuously monitors mosquito populations and human cases to prevent re-establishment.</li>
            </ul>

            <h3>If You Have Recently Been in a Malaria-Endemic Country</h3>

            <ul>
                <li>If you develop <strong>fever or flu-like symptoms</strong> during your stay, please visit the nearest <strong>government hospital</strong> or contact the <strong>Anti-Malaria Campaign.</strong></li>
                <li>Free malaria testing is available across the country.</li>
                <li>Early diagnosis ensures prompt treatment and prevents transmission.</li>
            </ul>

            <h3>If You Are Staying Long-Term in Sri Lanka</h3>

            <ul>
                <li>Avoid mosquito breeding around your residence by eliminating standing water.</li>
                <li>Use mosquito repellents or nets at night as a general preventive measure (for dengue and other mosquito-borne diseases).</li>
                <li>Cooperate with public health officers during any entomological or health surveillance visits.</li>
            </ul>

            <p style="font-size:18px; line-height:1.4; margin-top: 1.5rem;">
   Your awareness and cooperation help us preserve Sri Lanka's malaria-free achievement — a shared success story recognized worldwide.
</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-phone-alt icon"></i> Contact Us</h2>

            <p><strong>Anti-Malaria Campaign Headquarters</strong></p>
            <p>Public Health Building, 555/5, Elvitigala Mawatha, Colombo 05</p>
            <p style="font-size: 1.25rem; font-weight: 600; color: #333; margin: 0.5rem 0;">📞 071-284 1767</p>
            <p style="margin: 0.5rem 0;">📧 amc.office@health.gov.lk</p>
            <p style="margin: 0.5rem 0;"><strong>🌐 www.malariacampaign.gov.lk</strong></p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-lightbulb icon"></i> Remember</h2>

            <div class="table-container">
                <table class="dos-donts-table">
                    <thead>
                        <tr>
                            <th class="dos-header">If you travel to endemic countries</th>
                            <th class="donts-header">If you visit Sri Lanka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Get free prophylaxis before travel</td>
                            <td>No malaria prophylaxis required</td>
                        </tr>
                        <tr>
                            <td>Protect yourself from mosquito bites</td>
                            <td>Stay aware of dengue prevention</td>
                        </tr>
                        <tr>
                            <td>Test for malaria after return</td>
                            <td>Report fever to nearest hospital</td>
                        </tr>
                        <tr>
                            <td>Don't donate blood for 3 years</td>
                            <td>Cooperate with health checks</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
















        <!-- <div class="alert-box-danger">

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

        </div> -->

        <!-- <div class="content-card">

            <h2><i class="fas fa-clipboard-check icon"></i>Travel Tips to Stay Safe</h2>

            <div class="table-container">

                <table class="dos-donts-table">

                    <thead>

                        <tr>

                            <th class="dos-header"><i class="fas fa-check-circle icon"></i>Do's</th>

                            <th class="donts-header"><i class="fas fa-times-circle icon"></i>Don'ts</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Start prophylaxis before you travel</td>

                            <td>Don't skip doses of your medicine</td>

                        </tr>

                         <tr>

                            <td>Sleep under an insecticide-treated net</td>

                            <td>Don't rely only on repellents</td>

                        </tr>

                         <tr>

                            <td>Keep your surroundings mosquito-free</td>

                            <td>Don't assume you're immune</td>

                        </tr>

                         <tr>

                            <td>Get tested for malaria after return</td>

                            <td>Don't ignore fever after travel</td>

                        </tr>

                         <tr>

                            <td>Keep AMC hotline numbers handy</td>

                            <td>Don't donate blood for 3 years post-travel</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div> -->

        <div class="content-card">
            <h2><i class="fas fa-globe-americas icon"></i>Malaria Endemic Country List – 2025</h2>
            <p>View the complete list of countries where malaria is endemic. This information is crucial for travellers planning to visit these regions.</p>
            <button class="view-button" onclick="openCountryListModal()">
                <i class="fas fa-eye icon"></i>View Country List
            </button>
        </div>

        <div class="alert-box-summary">

            <h3>Together, Let's Keep Sri Lanka Malaria-Free</h3>

            <p>Malaria prevention begins with you. Every traveller's cooperation is vital to ensure Sri Lanka remains a global success story in malaria elimination.</p>

            <div class="slogan">

                <p style="margin-bottom: 0.5rem;"> Before you travel – protect yourself.</p>

                <p style="margin-bottom: 0.5rem;"> After you return – test yourself.</p>

                <p> Together – protect Sri Lanka.</p>

            </div>

        </div>



    </main>

    <!-- Country List Modal -->
    <div class="country-list-modal" id="countryListModal" onclick="closeCountryListModal(event)">
        <div class="modal-container">
            <button class="modal-close" onclick="closeCountryListModal(event)">
                <i class="fas fa-times"></i>
            </button>
            <div class="country-list-content">
                <h2 class="country-list-title">Malaria Endemic Country List – 2025</h2>
                <div class="country-list-columns">
                    <!-- Africa Column -->
                    <div class="country-column">
                        <h3>AFRICA</h3>
                        <ul class="country-list">
                            <li>Angola</li>
                            <li>Benin</li>
                            <li>Botswana</li>
                            <li>Burkina Faso</li>
                            <li>Burundi</li>
                            <li>Cameroon</li>
                            <li>Central African Republic</li>
                            <li>Chad</li>
                            <li>Comoros</li>
                            <li>Congo</li>
                            <li>Cote d'Ivoire</li>
                            <li>Djibouti</li>
                            <li>Democratic Republic of Congo</li>
                            <li>Equatorial Guinea</li>
                            <li>Eritrea</li>
                            <li>Eswatini</li>
                            <li>Ethiopia</li>
                            <li>Gabon</li>
                            <li>Gambia</li>
                            <li>Ghana</li>
                            <li>Guinea</li>
                            <li>Guinea-Bissau</li>
                            <li>Kenya</li>
                            <li>Liberia</li>
                            <li>Madagascar</li>
                            <li>Malawi</li>
                            <li>Mali</li>
                            <li>Mauritania</li>
                            <li>Mayotte</li>
                            <li>Mozambique</li>
                            <li>Namibia</li>
                            <li>Niger</li>
                            <li>Nigeria</li>
                            <li>Rwanda</li>
                            <li>Sao Tome & Principe</li>
                            <li>Senegal</li>
                            <li>Sierra Leone</li>
                            <li>Somalia</li>
                            <li>South Africa</li>
                            <li>Sudan</li>
                            <li>South Sudan</li>
                            <li>Togo</li>
                            <li>Tanzania</li>
                            <li>Uganda</li>
                            <li>Zambia</li>
                            <li>Zimbabwe</li>
                        </ul>
                    </div>

                    <!-- Asia Column -->
                    <div class="country-column">
                        <h3>ASIA</h3>
                        <ul class="country-list">
                            <li>Afghanistan</li>
                            <li>Bangladesh</li>
                            <li>Bhutan</li>
                            <li>Cambodia</li>
                            <li>India</li>
                            <li>Indonesia</li>
                            <li>Iran</li>
                            <li>Iraq</li>
                            <li>Laos</li>
                            <li>Malaysia</li>
                            <li>Myanmar</li>
                            <li>Nepal</li>
                            <li>North Korea</li>
                            <li>Pakistan</li>
                            <li>Papua New Guinea</li>
                            <li>Philippines</li>
                            <li>Saudi Arabia
                                <div class="country-note">(Yemen border)</div>
                            </li>
                            <li>Solomon Islands</li>
                            <li>South Korea</li>
                            <li>Thailand</li>
                            <li>Turkey</li>
                            <li>Vanuatu</li>
                            <li>Vietnam</li>
                            <li>Yemen</li>
                        </ul>
                    </div>

                    <!-- The Americas Column -->
                    <div class="country-column">
                        <h3>THE AMERICAS</h3>
                        <ul class="country-list">
                            <li>Belize</li>
                            <li>Bolivia</li>
                            <li>Brazil</li>
                            <li>Colombia</li>
                            <li>Costa Rica</li>
                            <li>Dominican Republic</li>
                            <li>Ecuador</li>
                            <li>French Guiana</li>
                            <li>Guatemala</li>
                            <li>Guyana</li>
                            <li>Haiti</li>
                            <li>Honduras</li>
                            <li>Mexico</li>
                            <li>Nicaragua</li>
                            <li>Panama</li>
                            <li>Peru</li>
                            <li>Venezuela</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openCountryListModal() {
            document.getElementById('countryListModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCountryListModal(event) {
            // Close if clicking the close button or the overlay (not the container)
            if (!event || event.target.classList.contains('modal-close') || event.target.id === 'countryListModal') {
                document.getElementById('countryListModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal on Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modal = document.getElementById('countryListModal');
                if (modal.classList.contains('active')) {
                    closeCountryListModal();
                }
            }
        });
    </script>

    <?php include 'include/footer.php'; ?>



</body>

</html>