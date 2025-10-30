<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaria Prophylaxis for Travellers</title>
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
            font-weight: 500; /* Bolder */
            margin: 0;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3); /* Added text shadow */
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
            margin: 2rem auto; /* Center the content */
            padding: 0 1rem; /* Padding for mobile */
            background-color: transparent; /* Section is now just a container */
        }
        
        /* 3. Card-Based Layout */
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
        .mb-3 {
            text-align: center;
            display: flex;
            flex-direction: column;
        }
        
        /* 2. Styling for Font Awesome Icons in headings */
        .content-card h2 .icon {
            margin-right: 12px;
            font-size: 1.75rem;
            color: rgb(5, 44, 0);
            opacity: 0.8;
        }

        .content-card h3 {
            font-size: 1.5rem;
            color: #333;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
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

        /* 4. "ABCDEF" Highlight Grid */
        .abcdef-list {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns on desktop */
            gap: 1.5rem;
        }

        .abcdef-item {
            display: flex;
            align-items: flex-start;
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
        }
        
        .abcdef-item span { /* The letter A, B, C... */
            font-size: 2rem;
            font-weight: 700;
            color: rgb(5, 44, 0);
            margin-right: 1rem;
            line-height: 1;
        }
        
        .abcdef-item p {
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.5;
            color: #333;
        }


        /* Info box for hotline */
        .hotline-box {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-left: 5px solid rgb(5, 44, 0);
            padding: 1.5rem;
            margin-top: 1.5rem;
            border-radius: 4px;
            font-size: 1.1rem;
            color: #333;
            font-weight: 500;
        }
        
        .hotline-box .icon {
            margin-right: 10px;
        }
        
        /* 5. Special Alert Box */
        .alert-box {
            background-color: #fff8f7;
            border: 1px solid #d9534f;
            border-left-width: 5px;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .alert-box p {
            margin-bottom: 1rem;
            margin-top: 1rem;
        }
        
        .alert-box h3 {
            color: #d9534f;
            margin-top: 0;
            font-weight: 700;
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
            
            /* 4. Stack ABCDEF list on mobile */
            .abcdef-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Provision of prophylaxis</h1>
            <p>Keep Sri Lanka Malaria-Free</p>
        </div>
    </section>

    <main class="content-section">
    
        <div class="content-card">
            <h2 class="mb-3">Malaria Prophylaxis for Travellers</h2>
            <p>Sri Lanka was certified by the World Health Organization as
            a malaria-free country in 2016. However, malaria remains common in many
            parts of Africa, Asia, and South America.</p>

            <p>Each year, several Sri Lankans who travel abroad to malaria-endemic countries
            return home with the disease. Preventing imported malaria is essential to
            maintain our malaria-free status.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-globe-africa icon"></i>Before You Travel</h2>
            <p>If you are planning to visit a malaria-endemic country,
            you should:</p>
            <ul>
                <li>Consult the Anti Malaria Campaign (AMC) or your nearest Regional Malaria Office (RMO) at least two weeks before travel.</li>
                <li>Get medical advice on malaria prevention methods and obtain the appropriate preventive medication (chemoprophylaxis).</li>
                <li>Learn about mosquito-bite prevention measures to protect yourself while abroad.</li>
            </ul>
            <div class="hotline-box">
                <i class="fas fa-phone-alt icon"></i>
                For information and appointments, call the AMC Hotline – <strong>0712841767</strong>
                or contact your nearest RMO (see our staff).
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-compass icon"></i>ABCDEF of Malaria Prevention</h2>
            <div class="abcdef-list">
                <div class="abcdef-item">
                    <span>A</span><p><strong>Be Aware</strong> of the malaria risk in your destination</p>
                </div>
                 <div class="abcdef-item">
                    <span>B</span><p><strong>Avoid mosquito bites</strong> (especially from dusk to dawn)</p>
                </div>
                 <div class="abcdef-item">
                    <span>C</span><p><strong>Take Chemoprophylaxis</strong> (preventive medication) when advised</p>
                </div>
                 <div class="abcdef-item">
                    <span>D</span><p><strong>Get Diagnosed</strong> early if you develop fever</p>
                </div>
                 <div class="abcdef-item">
                    <span>E</span><p><strong>Seek Early</strong> and effective treatment if malaria is detected</p>
                </div>
                 <div class="abcdef-item">
                    <span>F</span><p><strong>Remember that malaria can be Fatal</strong> if diagnosis and treatment are delayed</p>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-viruses icon"></i>How Malaria Spreads</h2>
            <p>Malaria is caused by a parasite transmitted through the bite
            of infected female Anopheles mosquitoes.</p>
            <p>Symptoms usually appear 7 days or more after infection and include fever,
            chills, headache, tiredness, and body aches.</p>
            <p>If untreated, malaria can lead to serious complications and death.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-first-aid icon"></i>What Travellers Should Do</h2>
            <h3>1. Prevent Mosquito Bites</h3>
            <ul>
                <li>Sleep under a mosquito net, preferably a Long-Lasting Insecticidal Net (LLIN).</li>
                <li>Use mosquito repellents containing DEET on exposed skin.</li>
                <li>Wear long sleeves and trousers after dusk.</li>
                <li>Stay in rooms with screens or air conditioning.</li>
                <li>Use mosquito coils or vaporizers approved by health authorities.</li>
            </ul>

            <h3>2. Take Preventive Medication (Chemoprophylaxis)</h3>
            <p>Depending on your travel destination, you may be advised to
            take medication such as:</p>
            <ul>
                <li><strong>Chloroquine</strong> – for countries where malaria is mostly Plasmodium vivax.</li>
                <li><strong>Mefloquine, Doxycycline, or Atovaquone-Proguanil</strong> – for areas with Plasmodium falciparum or chloroquine resistance.</li>
            </ul>
            <p>You must start the medication one week before
            travelling, continue during the trip, and after your return,
            as advised by your doctor.</p>
            <p><strong>No medicine gives 100% protection,</strong> but correct use greatly reduces your risk.</p>
        </div>
        
        <div class="alert-box">
            <h3><i class="fas fa-exclamation-triangle"></i> If You Develop a Fever</h3>
            <p>If you experience fever, chills, or flu-like symptoms
            during travel or within one year after returning:</p>
            <ul>
                <li>Get tested for malaria immediately.</li>
                <li>Tell the doctor about your travel history.</li>
                <li>Testing is free at the AMC Headquarters, Regional Malaria Offices, and all
                major hospitals in Sri Lanka.</li>
            </ul>
            <p class="mb-0">Even if the first test is negative, testing should be
            repeated for three consecutive days if fever persists.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-baby icon"></i>Special Advice for Pregnant Women and Children</h2>
            <ul>
                <li>Pregnant women should avoid travel to malaria-endemic areas whenever possible.</li>
                <li>If unavoidable, consult a doctor for safe preventive medication (usually chloroquine).</li>
                <li>Young children are especially vulnerable to malaria and should be protected carefully with mosquito nets and repellents.</li>
                <li>Safe medicines can be prescribed according to their body weight.</li>
            </ul>
        </div>
    </main>
    

    <?php include 'include/footer.php'; ?>

</body>
</html>