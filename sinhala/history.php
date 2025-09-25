<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of Anti Malaria Campaign</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* Base Page Styles */
        body.staff-page-body {
            font-family: Arial, sans-serif !important;
            background-color: #f4f4f4 !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* Hero Section */
        .staff-hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('asset/image/Container.png');
            height: 60vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            margin: 0;
        }
        .staff-hero-section h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        /* Content Section */
        .content-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }
        .content-container {
            max-width: 1100px;
            margin: 0 auto;
        }
        .content-container h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        
        /* --- TIMELINE CARDS LAYOUT --- */
        .history-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 16px;
            margin-top: 2rem;
            padding-left: 0;
            border: none;
        }
        .timeline-item {
            background: #ffffff;
            border: 1px solid #e6e6e6;
            border-radius: 8px;
            padding: 14px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: background-color 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease, transform 0.2s ease;
        }
        .timeline-item:hover {
            background-color: #f0fff4; /* subtle green to match theme */
            border-color: #cfe8cf;
            box-shadow: 0 6px 14px rgba(0,0,0,0.08);
            transform: translateY(-2px);
        }
        .timeline-item:hover .timeline-year {
            background-color: #013912; /* dark green badge on hover */
        }
        
        .timeline-year {
            align-self: flex-start;
            background-color: #888;
            color: #fff;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 8px;
        }
        .timeline-entry h3 {
            margin: 4px 0 8px 0;
            font-size: 1.05rem;
            font-weight: 600;
            color: #333;
        }
        .timeline-image {
            width: 100%;
            height: auto;
            border-radius: 6px;
            margin: 6px 0 8px 0;
            border: 1px solid #eee;
            display: none !important; /* hide in card; shown in modal only */
        }
        .timeline-caption {
            font-size: 0.9rem;
            color: #666;
            display: none !important; /* hide in card; shown in modal only */
        }

        /* --- History Video Section --- */
        .history-video-section {
            margin-top: 2rem;
        }
        .history-video-wrapper {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding-bottom: 45%; /* reduced height */
            height: 0;
        }
        .history-video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
        }

        /* --- Modal (Popup) Styles --- */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            inset: 0;
            background: rgba(0,0,0,0.6);
            align-items: center;
            justify-content: center;
        }
        .modal.open { display: flex; }
        .modal-content {
            background: #fff;
            width: min(720px, 92vw);
            max-height: 90vh;
            overflow: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            padding: 20px 24px;
            position: relative;
        }
        .close-button {
            position: absolute;
            top: 8px;
            right: 12px;
            font-size: 28px;
            line-height: 1;
            border: none;
            background: transparent;
            color: #666;
            cursor: pointer;
        }
        #modalYear {
            display: inline-block;
            background: #888;
            color: #fff;
            padding: 6px 12px;
            border-radius: 6px;
            margin: 0 0 8px 0;
        }
        #modalTitle { margin: 6px 0 10px 0; }
        #modalImage { width: 100%; height: auto; border-radius: 6px; margin: 8px 0; }
        #modalCaption { color:#666; font-size: 0.95rem; font-style: italic; }

        /* --- MODAL (POPUP) STYLES --- */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.6);
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 25px;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .close-button {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close-button:hover {
            color: #000;
        }
        #modalYear {
            background-color: #888;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            display: inline-block;
            margin: 0;
        }
        #modalTitle {
            margin-top: 15px;
            font-size: 1.8rem;
        }
        #modalImage {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }
        /* Hide image/caption elements if they are empty */
        #modalImage[src=""] {
            display: none;
        }
        #modalCaption:empty {
            display: none;
        }
        #modalCaption {
            font-size: 0.9rem;
            color: #666;
            margin-top: 10px;
            font-style: italic;
        }

        /* Navigation Bar */
        .about-nav {
            background-color:rgb(209, 209, 209);
            display: flex;
            justify-content: center;
            padding: 0 2rem;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .about-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }

        .about-nav ul li {
            display: inline-block;
            white-space: nowrap;
            margin: 0;
        }

        .about-nav ul li a {
            display: block;
            padding: 1rem 1.5rem;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .about-nav ul li a:hover {
            background-color:rgb(163, 163, 163);
        }

        /* Special style for the first navigation item */
        .about-nav ul li:nth-child(7) a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:nth-child(7) a:hover {
            background-color: rgb(0, 59, 5);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-hero-section {
                height: 40vh;
            }
            .about-hero-section h1 {
                font-size: 2rem;
            }
            .about-hero-section p {
                font-size: 1rem;
            }
            .about-nav {
                padding: 0.5rem 0;
            }
            .about-nav ul {
                flex-direction: column;
                align-items: center;
                flex-wrap: wrap;
            }
            .about-nav ul li a {
                padding: 0.75rem 1rem;
                width: 100vw;
                text-align: center;
            }
        }
    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>
<section class="staff-hero-section">
    <h1>History of the Campaign</h1>
</section>
<nav class="about-nav">
            <ul>
                <li><a href="aboutUs.php">Vision & Mission</a></li>
                <li><a href="ourStaf.php">Our Staff</a></li>
                <li><a href="organizationStructure.php">Organizational Structure</a></li>
                <li><a href="regional-malaria-office.php">Regional Officers</a></li>
                <li><a href="tsg.php">Technical Support Group</a></li>
                <li><a href="crc.php">Case Review Community</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="imageGallary.php">Gallery</a></li>
            </ul>
        </nav>

<section class="content-section">
    <div class="content-container">
        <h2>History of Anti Malaria Campaign - Sri Lanka</h2>
        <p>Key milestones are shown below. (Click the relevant year or title to expand)</p>
        
        <div class="history-timeline">
            
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1911" data-title="First Antimalaria Center">1911</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1911" data-title="First Antimalaria Center">First Antimalaria Center</h3>
                    <img class="timeline-image" src="asset/image/first_AMC.jpg" alt="First Antimalaria Center in Kurunegala">
                    <p class="timeline-caption">The first antimalaria center in the country was set up at the town of Kurunegala in Sri Lanka (known as Ceylon before mid-1972).</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1913" data-title="Incrimination of vector Anopheles culicifacies" data-caption="Sir James and S.T. Gunasekera incriminated the mosquito Anopheles culicifacies, as the vector of malaria in the country.">1913</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1913" data-title="Incrimination of vector Anopheles culicifacies" data-caption="Sir James and S.T. Gunasekera incriminated the mosquito Anopheles culicifacies, as the vector of malaria in the country.">Incrimination of vector Anopheles culicifacies</h3>
                    <p class="timeline-caption">S.P. James and S.T. Gunasekera first incriminated the mosquito Anopheles culicifacies as the vector of malaria in the country.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1921" data-title="Appointment of first malariologist" data-img="https://i.imgur.com/e7qQY1u.png" data-caption="Henry F. Carter was appointed as the first malariologist in the country in 1921, but he died of malaria-related complications within the same year.">1921</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1921" data-title="Appointment of first malariologist" data-img="https://i.imgur.com/e7qQY1u.png" data-caption="Henry F. Carter was appointed as the first malariologist in the country in 1921, but he died of malaria-related complications within the same year.">Appointment of first malariologist</h3>
                    <img class="timeline-image" src="asset/image/HFCarter.jpg" alt="First Antimalaria Center in Kurunegala" data-width="30%" data-height="300px">
                    <p class="timeline-caption"> Henry F. Carter was appointed as the first malariologist in the country. Until his retirement in the 1950s. Carter made an enormous contribution to malariology in the country. vector-control measures started in 1921 and consisted mainly of draining, filling, clearing and oiling of actual and potential breeding places and the introduction of larvivorous fish</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1934/35" data-title="A devastating malaria epidemic">1934/35</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1934/35" data-title="A devastating malaria epidemic">A devastating malaria epidemic</h3>
                    <img class="timeline-image" src="asset/image/epid.jpg" alt="First Antimalaria Center in Kurunegala" data-width="90%" data-height="300px">
                    <p class="timeline-caption">The epidemic is the greatest pestilence in the recorded history of the island. It destroyed 80,000 live in seven months. violence of the epidemic was extreme; scarcely a single individual escaped. The havoc caused by the epidemic was not limited to the sickness and death. The epidemic in short was a catastrophe of the first magnitude. Colonel C. A. Gill said that, having recently returned from Ceylon, where he acted for a period of five months as expert adviser on malaria to the Ceylon Government, he was glad to have an opportunity of testifying to the extremely efficient arrangements made by Dr. R. Briercliffe, the Director of Medical and Sanitary Services, Ceylon, and the Ceylon Medical Department to cope with an unexpected and unprecedented emergency. With remarkable celerity the whole of the medical resources of the island were mobilized, the services of all available private practitioners, dispensers, and even medical students being requisitioned, whilst steps were immediately taken to enlarge existing hospitals, and to open temporary hospitals, dispensaries, and " treatment centres " wherever necessary. One thing that impressed him greatly was the immediate switching over of all available personnel of the Public Health Branch of the Medical Department and other specialists to assist in the treatment of the sick; this procedure would not have been possible in India, where the Medical and Public Health Departments were distinct. The policy followed in Ceylon-which he felt strongly was the right one-was that, after ain epidemic had broken out, the treatment of the sick should be taken over fully and promptly by the Medical Department, and not, as in India, left to the Public Health Department to deal with, with such assistance as it could get from the Medical Department. Other salient features of the medical scheme were the provision of free kitchens at dispensaries, the supply to hospitals and dispensaries of milk products for issue on medical grounds to children, and, on the administrative side, the establishment of an intelligence service, composed of sanitary inspectors and school teachers, to keep the department in touch with the conditions prevailing in villages, the institution of weekly reports from all hospitals and dispensaries, and the holding periodically of departmental conferences, under the chairmanship of the head of the department, at which the position was reviewed and future plans were discussed. The Medical Department was subjected to much undeserved criticism in the press of Ceylon, but he thoutght that the manner in which this epidemic had been fought was not only highly creditable to the Medical Department, but was probably without precedent in the history of civil medical administration. From the epidemiological point of view the epidemic presented many unusual features, such, for example, as its association with drought and not excessive rainfall, and the occurrence of two waves of mortality instead of one, as in India.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1946" data-title="Introduction of DDT">1946</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1946" data-title="Introduction of DDT">Introduction of DDT</h3>
                    <img class="timeline-image" src="asset/image/fual.jpg" alt="First Antimalaria Center in Kurunegala" data-width="90%" data-height="300px">
                    <p class="timeline-caption">With the introduction of DDT in 1946, malaria morbidity and mortality declined steadily. In 1955, the World Health Organization (WHO) declared the goal of global eradication of malaria with a four-phase program: preparatory, attack, consolidation, and maintenance</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1958" data-title="Malaria eradication programme launched">1958</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1958" data-title="Malaria eradication programme launched">Malaria eradication programme launched</h3>
                    <p class="timeline-caption">With a declining trend in malaria transmission in Sri Lanka in the 1950s, which was in most part due to the use of indoor residual spraying of DDT, the adoption of an eradication programme was seen as a natural continuation of earlier efforts. Following the Eighth WHA resolution, the government accepted a proposal for a five-year programme of eradication in 1956. The programme was inaugurated in 1958 establishing the Anti-Malaria Campaign with its headquarters in Colombo . The preparatory phase of the WHO plan was omitted in Sri Lanka due to a reasonably well-controlled malaria situation and infrastructure facilities that already existed in the country, and the dry zone was placed directly in ‘attack phase’, with the resumption of full coverage spraying. The intermediate and wet zones were placed in the ‘consolidation phase’ since there was no evidence of active transmission of malaria in those areas, and therefore, spraying was not considered as a requirement. Entomological surveillance was intensified and prompt reporting of malaria cases was made a legal requirement. As a result of these efforts, annual parasite incidence (API) declined steadily between 1958 and 1963, even as the annual blood examination rate (ABER) quickly reached and exceeded the WHO recommendation of 5-10%. An island-wide infant parasite survey was conducted in May, 1960 that included coverage of 20% of the infant population and the results confirmed zero prevalence of malaria that was an early indication of the interruption of transmission.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1963" data-title="Near eradication achieved">1963</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1963" data-title="Near eradication achieved">Near eradication achieved</h3>
                    <p class="timeline-caption">In 1963, parasite incidence reached a remarkably low-point with only 17 cases of malaria, which included only six indigenous cases (rest were imported). Given the favorable indicators, in April, 1963, spraying was halted throughout the country except for barrier spraying around jungle areas. Within months however, the appearance of new cases of malaria prompted the resumption of spraying in the affected areas</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1967/68" data-title="Resurgence of malaria leads to a national epidemic">1967/68</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1967/68" data-title="Resurgence of malaria leads to a national epidemic">Resurgence of malaria leads to a national epidemic</h3>
                    <p class="timeline-caption">With elimination around the corner, Sri Lankan government authorities became complacent and made a disastrous mistake. Continuous vigilance was not maintained and control measures were reduced. Many DDT spraying teams were disbanded and a consolidation phase of eradication (as de defined by the WHO) was initiated in 1964. Because of the relaxed malaria control measures, a gradual increase in malaria incidence occurred from 1965 onward, leading to a countrywide epidemic of malaria in 1967–1968 with over 500,000 malaria cases being reported in 1969. The return of malaria led to a resumption of vector control measures, principally the indoor residual spraying of insecticides, by the AMC. Fortunately, and surprisingly, only five deaths were reported as being due to malaria in 1969. This may have been because 90% of the parasite cause of the epidemic was P. vivax, a less fatal parasite species P. falciparum, and for which chloroquine treatment had then become readily available in all parts of the country under the widespread and free government health service. The ensuing years showed many small peaks of malaria incidence.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1969" data-title="DDT resistance in An.culicifacies first detected">1969</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1969" data-title="DDT resistance in An.culicifacies first detected">DDT resistance in An.culicifacies first detected</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1975" data-title="Introduction of malathion">1975</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1975" data-title="Introduction of malathion">Introduction of malathion</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1984" data-title="Chloroquine-resistant P.falciparum first detected">1984</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1984" data-title="Chloroquine-resistant P.falciparum first detected">Chloroquine-resistant P.falciparum first detected</h3>
                </div>
            </div>
             <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1989" data-title="Activities of Antimalaria campaign is decentralized">1989</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1989" data-title="Activities of Antimalaria campaign is decentralized">Activities of Antimalaria campaign is decentralized</h3>
                    <img class="timeline-image" src="asset/image/1989.jpg" alt="First Antimalaria Center in Kurunegala" data-width="90%" data-height="400px">
                    <p class="timeline-caption">The Anti-Malaria Campaign (AMC) Directorate in Colombo guides and coordinates all malaria control activities. Under the purview of the AMC is formulation of national malaria control policy, monitoring national malaria trends, technical guidance to subnational malaria control programmes, inter-district coordination, and coordination of training and research activities. Entomological and parasitological surveillance is also undertaken by the AMC. Decentralization in 1989 shifted the administration of malaria control activities to the districts. Health services are managed by the Regional Director of Health Services (RDHS) and responsibility for malaria control activities rests with the Regional Malaria Officer (RMO) in each district. RMOs work jointly with the Medical Officers of Health (MOHs), whose offices provide varying levels of support for vector control activities.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1992" data-title="Widespread Malathion resistance in An. culicifacies detected">1992</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1992" data-title="Widespread Malathion resistance in An. culicifacies detected">Widespread Malathion resistance in An. culicifacies detected</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1994" data-title="Introduction of Lambda Cyhalothrin">1994</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1994" data-title="Introduction of Lambda Cyhalothrin">Introduction of Lambda Cyhalothrin</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1996-7" data-title="Shift in IRS strategy to targeted spray (High risk areas)">1996-7</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1996-7" data-title="Shift in IRS strategy to targeted spray (High risk areas)">Shift in IRS strategy to targeted spray (High risk areas)</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1998" data-title="World Bank project commenced">1998</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1998" data-title="World Bank project commenced">World Bank project commenced</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="1999" data-title="RBM initiative Launched">1999</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="1999" data-title="RBM initiative Launched">RBM initiative Launched</h3>
                    <p class="timeline-caption">However, in 1999, with the support of the Roll Back Malaria Partnership, the Sri Lankan government began to reinforce control measures, and managed to successfully reduce the occurrence of malaria by 68% in 2000-2001 alone. In 2002, there were only 30 recorded deaths. In the following years up to 2009, malaria-related deaths were confined to single digits, with the last known death recorded in 2009. Cases of malaria also reduced drastically over a decade, from 41,411 confirmed cases in 2002, to just 23 in 2012. From late 2012 to date, there have been no locally acquired cases of malaria. However, around 180 cases of malaria were reported in the past three years, but it was confirmed that these infections were contracted abroad.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="2003" data-title="Global Fund Support begins">2003</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="2003" data-title="Global Fund Support begins">Global Fund Support begins</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="2007" data-title="ACT introduced">2007</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="2007" data-title="ACT introduced">ACT introduced</h3>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="2012" data-title="Last indigenous case of malaria">2012</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="2012" data-title="Last indigenous case of malaria">Last indigenous case of malaria</h3>
                    <p class="timeline-caption">When the armed con ict ended in 2009, the Malaria Elimination Project, aiming for elimination by 2014, was launched the same year. In 2011, only 175 cases were reported, a decrease of 99.9% from the 1999 level. From 2008 onwards, a majority of indigenous cases were among military personnel, and interventions in the military camps were augmented. The last indigenous case of malaria was reported in October 2012.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year clickable" data-year="2016" data-title="Last indigenous case of malaria">2016</div>
                <div class="timeline-entry">
                    <h3 class="clickable" data-year="2016" data-title="Last indigenous case of malaria">WHO Certification for having eliminated Malaria</h3>
                    <p class="timeline-caption">Sri Lanka was declared malaria-free on 5 September 2016 by the World Health Organization. This success was the result of over a century of efforts that combined disease surveillance, vector control and treatment. By 2008, there was zero mortality from indigenous cases, and the country witnessed its last indigenous case in 2012. This process involved long-term, sustained financial support, particularly from the Sri Lankan Government, the World Bank and the Global Fund. Given that malaria is still a global health burden, there is much to be learnt from Sri Lanka's achievement in the ongoing efforts to reach a malaria-free world.</p>
                </div>
            </div>

        </div>
    </div>

    <section class="history-video-section">
        <div class="history-video-wrapper">
            <iframe src="https://www.youtube.com/embed/aXyjfcpUL5I?rel=0" title="Malaria History" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowfullscreen></iframe>
        </div>
    </section>
</section>

<div id="timelineModal" class="modal" aria-hidden="true">
    <div class="modal-content">
        <button class="close-button" aria-label="Close">×</button>
        <h2 id="modalYear"></h2>
        <h3 id="modalTitle"></h3>
        <img id="modalImage" src="" alt="Timeline Event Image">
        <p id="modalCaption"></p>
    </div>
</div>

<script>
    (function(){
        const modal = document.getElementById('timelineModal');
        const modalYear = document.getElementById('modalYear');
        const modalTitle = document.getElementById('modalTitle');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const closeBtn = modal.querySelector('.close-button');

        function openModal(data){
            modalYear.textContent = data.year || '';
            modalTitle.textContent = data.title || '';
            modalCaption.textContent = data.caption || '';
            if(data.img){
                modalImage.src = data.img;
                modalImage.style.display = 'block';
        } else {
                modalImage.src = '';
                modalImage.style.display = 'none';
            }
            modal.classList.add('open');
            modal.setAttribute('aria-hidden','false');
        }

        function closeModal(){
            modal.classList.remove('open');
            modal.setAttribute('aria-hidden','true');
        }

        document.querySelectorAll('.timeline-item').forEach(card => {
            card.addEventListener('click', function(){
                // Collect data from child elements if present
                const yearEl = this.querySelector('.timeline-year');
                const titleEl = this.querySelector('.timeline-entry h3');
                const imgEl = this.querySelector('.timeline-image');
                const captionEl = this.querySelector('.timeline-caption');
                // Support inline size overrides via data-width and data-height on the image
                const imgWidth = imgEl ? (imgEl.getAttribute('data-width') || '') : '';
                const imgHeight = imgEl ? (imgEl.getAttribute('data-height') || '') : '';
                openModal({
                    year: yearEl ? yearEl.textContent.trim() : '',
                    title: titleEl ? titleEl.textContent.trim() : '',
                    img: imgEl ? imgEl.getAttribute('src') : '',
                    caption: captionEl ? captionEl.textContent.trim() : ''
                });
                modalImage.style.width = imgWidth ? imgWidth : '100%';
                modalImage.style.height = imgHeight ? imgHeight : 'auto';
            });
        });

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', function(e){ if(e.target === modal) closeModal(); });
        document.addEventListener('keydown', function onEsc(e){ if(e.key === 'Escape') closeModal(); });
    })();
</script>
<?php include 'include/footer.php'; ?>
</body>
</html>