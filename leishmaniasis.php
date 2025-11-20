<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leishmaniasis - Malaria Control</title>
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
            background-image: url('asset/image/noimages2.jpg');
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
            <h1>Get to know about Leishmaniasis</h1>
        </div>
    </section>

    <main class="content-section">
        <div class="content-card intro-card">
            <h2><i class="fas fa-info-circle icon"></i> Get to know about Leishmaniasis</h2>
            <p>A protozoan parasite from more than 20 Leishmania species causes leishmaniasis. Leishmania parasites are known to be spread by more than 90 species of sandflies. The illness comes in three primary forms:</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-virus icon"></i> Forms of Leishmaniasis</h2>
            
            <div class="highlight-box">
                <h3>Visceral leishmaniasis</h3>
                <p>In more than 95% of cases, visceral leishmaniasis (VL), commonly referred to as kala-azar, is fatal if treatment is not received. It is typified by sporadic episodes of fever, weight loss, liver and spleen enlargement, and anaemia. India, Brazil, and East Africa account for the majority of instances. Every year, between 50,000 and 90,000 new cases of VL are reported globally. Rare cases are being documented in Sri Lanka. It has the ability to spread and cause death.</p>
            </div>

            <div class="highlight-box">
                <h3>Cutaneous leishmaniasis (CL)</h3>
                <p>The most prevalent type, cutaneous leishmaniasis (CL), results in skin lesions, primarily ulcers, on exposed body parts. These may result in severe impairment or stigma, as well as permanent scarring. The Americas, the Mediterranean basin, the Middle East, and central Asia account for about 95% of CL cases. An estimated 600,000 to one million new cases are reported globally each year. Anuradhapura, Polonnaruwa, Kurunegala, Hambantota, Matara, Matale, and numerous other districts account for the majority of the more than 3,000 cases of cutaneous leishmaniasis reported in Sri Lanka each year.</p>
            </div>

            <div class="highlight-box">
                <h3>Mucocutaneous leishmaniasis</h3>
                <p>The mucous membranes of the mouth, throat, and nose can be partially or completely destroyed by mucocutaneous leishmaniasis. Brazil, Ethiopia, Peru, and Bolivia (the Plurinational State) account for more than 90% of cases of mucocutaneous leishmaniasis. In Sri Lanka, this is not reported.</p>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-exchange-alt icon"></i> Transmission</h2>
            <p>The bites of female phlebotomine sandflies, which feed on blood to lay their eggs, can spread the Leishmania parasite. Leishmania parasites can originate from about 70 animal species, including humans.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>

