<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Detection & Follow-Up - Cutaneous Leishmaniasis</title>
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
            background-image: url('asset/image/caseDetection11.png');
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
            font-size: 2.5rem;
            margin: 0;
            font-weight: 500;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 650px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
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
            font-size: 1.35rem;
            font-weight: 600;
            color: #333;
            margin-top: 1.5rem;
            margin-bottom: 0.7rem;
        }

        .content-card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1rem;
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
            gap: 3rem;
        }

        .indication-box {
            background-color: #fdfcf1;
            border: 1px solid #f0e0a0;
            border-left: 5px solid #d8ab00;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .highlight-box {
            border-left: 5px solid rgb(5, 44, 0);
            padding-left: 1.25rem;
            background-color: #f9fbf8;
        }

        .alert-box {
            background-color: #fff5f2;
            border: 1px solid #ffae9b;
            border-left-width: 5px;
            padding: 1.25rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            margin-top: 1.5rem;
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
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1 >Case Detection, Diagnosis, Treatment & Follow-Up</h1>
    </section>

    <main class="content-section">
        <div class="content-card">
            <h2><i class="fas fa-search icon"></i>Case Detection</h2>
            <div class="alert-box">
                <h3>Cutaneous leishmaniasis (CL) typically presents as a:</h3>
                <ul>
                    <li>Painless papule, nodule, plaque, or non-healing ulcer</li>
                    <li>Located mostly on exposed body areas such as the face, neck, arms, and legs
Most patients remain asymptomatic, and lesions can persist for weeks to months.</li>
                </ul>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-vials icon"></i>Diagnosis</h2>
            <div class="two-col">
                <div class="highlight-box">
                    <h3>Clinical Criteria</h3>
                    <p>A suspected case meets at least four of the following features:</p>
                    <ul>
                        <li>Residence in or travel to endemic areas.</li>
                        <li>Painless, non-itchy lesions.</li>
                        <li>Lesions persisting for weeks or months.</li>
                        <li>Poor response to conventional antibiotics.</li>
                        <li>History of similar lesions in the locality.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h3>Clinical Notes</h3>
                    <ul>
                        <li>Most lesions are painless; absence of pruritus should raise suspicion.</li>
                        <li>Document duration, travel history, and previous antibiotic courses.</li>
                        <li>Photograph lesions to assist dermatology referrals.</li>
                        <li>Notify the RMO early if criteria are met.</li>
                    </ul>
                </div> -->
            </div>
            <div class="alert-box">
                <h3>Confirmatory Tests</h3>
                <div class="two-col">
                    <div>
                        <h4>Cutaneous Leishmaniasis</h4>
                        <ul>
                            <li>Slit Skin Smear (SSS) – first-line diagnostic method.</li>
                            <li>Biopsy and histology for smear-negative cases.</li>
                            <li>PCR where available.</li>
                            <li>Culture in select settings.</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Visceral Leishmaniasis</h4>
                        <ul>
                            <li>rK-39 serology for visceral and mucocutaneous types.</li>
                            <li>Bone marrow biopsy.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-syringe icon"></i>Treatment</h2>
            <p>Treatment for CL is offered only in government hospitals by dermatology teams, following nationally approved guidelines.</p>
            <div class="two-col">
                <div>
                    <div class="indication-box">
                    <h3>Indications for Treatment</h3>
                    <ul>
                        <li>All confirmed cases</li>
                    </ul>
                    <p>Treatment regimen will be based on:</p>
                    <ul>
                        <li>Lesions near vital structures (eye, nose, joints).</li>
                        <li>Large, multiple, or progressive lesions.</li>
                        <li>Immunocompromised patients.</li>
                        <li>Cosmetic concerns.</li>
                        <li>Suspected treatment failure or relapse.</li>
                    </ul>
                    </div>
                </div>
                <div>
                    <h3>Available Treatment Options</h3>
                    <h4>First-line Therapies</h4>
                    <ul>
                        <li>Intralesional Sodium Stibogluconate (IL-SSG).</li>
                        <li>Cryotherapy.</li>
                    </ul>
                    <h4>Second-line Therapies</h4>
                    <ul>
                        <li>Systemic Sodium Stibogluconate.</li>
                        <li>Thermotherapy.</li>
                        <li>Oral azoles (e.g., fluconazole) in selected cases.</li>
                        <li>Amphotericin B for complicated or atypical forms.</li>
                        <li>Miltefosine in specific indications.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2><i class="fas fa-clipboard-check icon"></i> Follow-Up of Patients</h2>
            <p>Follow-up is critical for early detection of relapse and monitoring treatment response. Patients with CL are assessed for:</p>
            <ul>
                <li>Lesion healing – complete re-epithelialization expected within 45 days.</li>
                <li>Signs of relapse.</li>
                <li>Treatment failure – lesions worsening within 14 days or failing to heal by day 45.</li>
                <li>Adverse drug reactions.</li>
                <li>Need for additional therapy.</li>
            </ul>
            <p>AMC supports follow-up through dermatology clinics and Public Health Inspector (PHI) home visits.</p>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>
</body>
</html>

