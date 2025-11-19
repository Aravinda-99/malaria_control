<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screening for Leishmaniasis - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .hero-section {
            height: 60vh;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/Screening for Leishmaniasis.png');
            background-size: cover;
            background-position: center;
            color: white;
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
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin: 0;
            font-weight: 500;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
        }

        .content-section {
            max-width: 1250px;
            margin: 4rem auto;
            padding: 0 1rem;
        }

        .content-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
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

        .section-intro {
            font-size: 1.05rem;
            font-weight: 500;
            color: #0d2b3a;
            margin-bottom: 1.25rem;
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
        }

        .content-card li::before {
            content: '\f111';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 4px;
            font-size: 0.5rem;
            color: rgb(5, 44, 0);
        }

        .two-col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .highlight-box {
            border-left: 5px solid rgb(5, 44, 0);
            padding-left: 1.25rem;
            background-color: #f9fbf8;
        }

        .contact-card {
            background-color: rgb(5, 44, 0);
            color: #fff;
            border-radius: 10px;
            padding: 1.75rem;
            margin-top: 1rem;
        }

        .contact-card p {
            color: #fff;
            margin: 0.3rem 0;
            font-weight: 400;
        }

        .alert-box-summary {
            background-color: #f7fff7;
            border: 1px solid #0d4d2f;
            border-left-width: 5px;
            padding: 1.5rem 2rem;
            border-radius: 8px;
            margin-bottom: 2.5rem;
        }

        .alert-box-summary h3 {
            margin: 0 0 0.75rem 0;
            color: #0d4d2f;
        }

        .alert-box-summary p {
            margin: 0.25rem 0;
            color: #333;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.4rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .content-card {
                padding: 1.75rem;
            }
            .content-card h2 {
                font-size: 1.65rem;
            }
            .content-card h3 {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1> Screening for Leishmaniasis</h1>
        </div>
    </section>

    <main class="content-section">
        <div class="content-card intro-card">
            <h2><i class="fas fa-notes-medical icon"></i> Screening for Leishmaniasis</h2>
            <p>Early identification of leishmaniasis is essential to prevent complications, reduce transmission, and ensure timely treatment. Because many patients first seek care at outpatient clinics, strengthening screening is a national priority.</p>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-users icon"></i> Who Should Be Screened?</h2>
            <div class="two-col">
                <div class="highlight-box">
                    <p>Screening is recommended for individuals living in or frequently visiting endemic areas. Priority groups include:</p>
                    <ul>
                        <li>Outdoor workers such as farmers, military personnel, and construction workers.</li>
                        <li>Residents living near scrub jungles, paddy fields, cattle sheds, or dense vegetation.</li>
                        <li>People with chronic, painless skin lesions unresponsive to routine antibiotics (suspected cutaneous leishmaniasis).</li>
                        <li>Patients presenting with prolonged fever, weight loss, and splenomegaly (suspected visceral leishmaniasis).</li>
                    </ul>
                </div>
                <div>
                    <h3>Why Screening Matters</h3>
                    <ul>
                        <li>Guides patients quickly to definitive diagnosis and treatment.</li>
                        <li>Limits parasite reservoirs, reducing community transmission.</li>
                        <li>Prevents severe morbidity and disability from advanced disease.</li>
                        <li>Feeds surveillance to monitor hotspots and mobilize targeted responses.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2>How Screening Is Conducted</h2>
            <p>Leishmaniasis is diagnosed by detecting Leishmania parasites (or DNA) in tissue specimens using microscopy, molecular methods, or specialized culture techniques.</p>
            <div class="two-col">
                <div>
                    <h3>Cutaneous Leishmaniasis</h3>
                    <ul>
                        <li>Clinical assessment of suspected skin lesions.</li>
                        <li>Slit-skin smear (SSS) by trained Public Health Laboratory Technicians (PHLTs); SSS is &gt;70% sensitive and 100% specific for CL.</li>
                        <li>Biopsy and histopathology for smear-negative cases.</li>
                        <li>PCR and culture (select tertiary centres) for confirmation.</li>
                    </ul>
                </div>
                <div>
                    <h3>Visceral Leishmaniasis</h3>
                    <ul>
                        <li>Clinical review focused on fever duration, weight loss, anaemia, and splenomegaly.</li>
                        <li>rK-39 rapid diagnostic test for quick bedside screening.</li>
                        <li>Bone marrow biopsy and specialist referral for definitive diagnosis.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2>Integration with National Surveillance</h2>
            <p>Leishmaniasis is a notifiable disease in Sri Lanka. According to national guidelines:</p>
            <ul>
                <li>Suspected cases must be notified to the Regional Malaria Officer / Anti Malaria Campaign and the MOH via H544.</li>
                <li>Both passive (facility-based) and active case detection are conducted in high-risk areas as outlined in the National Strategic Plan.</li>
            </ul>
            <p>AMC strengthens screening by organizing community clinics, mobile dermatology services, and enhanced surveillance in endemic districts.</p>
        </div>

        <!-- <div class="content-card">
            <h2><i class="fas fa-hands-helping icon"></i>Support for Patients & Clinicians</h2>
            <p>The Anti Malaria Campaign provides technical guidance, screening kits, and referral pathways for suspected cases.</p>
            <div class="contact-card">
                <p><strong>Anti Malaria Campaign Headquarters</strong></p>
                <p>Public Health Building, 555/5 Elvitigala Mawatha, Colombo 05</p>
                <p><strong>Hotline:</strong> 071 284 1767</p>
                <p><strong>Email:</strong> amc.office@health.gov.lk</p>
            </div>
        </div>

        <div class="alert-box-summary">
            <h3>Together, Let's Keep Sri Lanka Leishmaniasis-Safe</h3>
            <p>Screening clinics, mobile dermatology units, and community awareness programmes ensure early detection.</p>
            <p>Report suspected cases promptly, share travel or residence history, and follow AMC guidance for testing.</p>
        </div> -->
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>

