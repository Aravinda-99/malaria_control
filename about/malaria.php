<?php
// Malaria Section
// This file contains the malaria section extracted from aboutUs.php
?>

<style>
    /* =============================================== */
    /* Styles for the Malaria Info Section            */
    /* =============================================== */
    .malaria-wrapper {
        background-color: #e9eef2;
        padding: 2rem;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
    }
    
    .infographic-section {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        width: 100%;
        max-width: 1400px;
        font-family: 'Roboto', sans-serif;
    }

    .left-column {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        min-width: 300px;
    }

    /* .left-column img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    } */

    .right-column {
        flex: 3;
        background-color: #f8f9fa;
        border-radius: 20px;
        padding: 4rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        min-width: 1000px;
    }

    .right-column h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #d9534f;
        margin-top: 0;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 3px solid #d9534f;
        display: inline-block;
    }

    .right-column-text h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #d9534f;
        margin-top: 0;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 3px solid #d9534f;
        display: inline-block;
    }

    .objective-text {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .strategies-list {
        padding-left: 1.5rem;
        margin: 0;
        font-size: 0.95rem;
    }

    .strategies-list li {
        margin-bottom: 1rem;
        line-height: 1.7;
        color: #555;
    }

    .right-column-content {
        display: flex;
        gap: 3rem;
        align-items: flex-start;
    }

    .right-column-images {
        flex: 0 0 600px;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .right-column-text {
        flex: 1;
        padding-left: 1rem;
    }

    .strategy-img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #e0e0e0;
    }

    @media (max-width: 992px) {
        .malaria-wrapper {
             padding: 1rem;
        }
        .infographic-section {
            flex-direction: column;
        }
        .right-column {
            padding: 2rem;
        }
        .right-column-content {
            flex-direction: column;
        }
        .right-column-images {
            flex: none;
            width: 100%;
            margin-bottom: 1rem;
        }
    }
</style>

<!-- Added Malaria Section -->
<section id="malaria-info" class="malaria-wrapper">
     <div class="infographic-section">
        
        <div class="right-column">
            <div class="right-column-content">
                <div class="right-column-images">
                    <img src="asset/image/mosq.png" alt="Mosquito Prevention" class="strategy-img">
                    <img src="asset/image/s1.png" alt="Malaria Control Strategy" class="strategy-img">
                </div>
                <div class="right-column-text">
                    <h2>Strategies</h2>
                    <p class="objective-text">
                        Objective 1: To prevent re-establishment of malaria in Sri Lanka.
                    </p>
                    
                    <ol class="strategies-list">
                 <li>Maintain intensified case and entomological surveillance.</li>
                 <li>Ensure universal access to quality assured malaria diagnostic and treatment services free of charge.</li>
                 <li>Liaise with the private sector to provide regulated quality diagnostic and treatment services.</li>
                 <li>Detect all infections early and treat all patients with quality assured antimalarial medicines based on national treatment guidelines to ensure radical cure and to prevent secondary transmission.</li>
                 <li>Ensure all suspected cases are tested for malaria (microscopy/RDT).</li>
                 <li>Establish web based real time surveillance system.</li>
                 <li>Provide regular information to health care providers on early detection of imported malaria cases.</li>
                 <li>Provide notification of all patients strongly suspected of having malaria.</li>
                 <li>Commence investigation of all cases and foci (including reactive parasitological surveillance and entomological surveillance) within 48 hours of notification.</li>
                 <li>Respond to all cases within 7 days of notification according to the approved scope of work.</li>
                 <li>Conduct entomological surveillance in accordance with the new national guidelines.</li>
                 <li>Implement vector control measures as required.</li>
                 <li>Ensure quality assurance in malaria diagnostic services.</li>
                 <li>Re-orient public and private health sector staff towards PoR.</li>
                 <li>Maintain functional rapid response teams for quick and effective response to a secondary case or focus.</li>
                 <li>Maintain adequate buffer stocks of quality LLINs, insecticides, diagnostics and antimalarial medicines.</li>
                 <li>Monitor receptivity and vulnerability</li>
                 <li>ACD among vulnerable populations.</li>
                 <li>Protect vulnerable populations/risk groups.</li>
                 <li>Foster and maintain relevant partnerships (private sector, other sectors, international agencies, etc).</li>
                 <li>Harness political and financial support for PoR.</li>
                 <li>Formulate a communications strategy for PoR to increase awareness among stakeholders (community, travelers, health care providers, migrant populations).</li>
                 <li>Educate the community, especially travelers, on the importance of sustaining malaria-free status.</li>
                 <li>Provide chemoprophylaxis to travelers.</li>
                 <li>Regular review and re-orientation of the national malaria programme for PoR.</li>
                 <li>Review and update national guidelines and SOPs for PoR.</li>
                 <li>Develop manuals and guidelines for RMOs and other staff.</li>
                 <li>Maintain a well-trained and competent human resources at the centre and the district level.</li>
                 <li>Provide guidelines on PoR for inclusion in all medical and relevant allied health sciences undergraduate and appropriate postgraduate training programmes.</li>
                 <li>Follow up of malaria cases.</li>
                 <li>Review all cases and inform policy changes.</li>
                                           <li>Establish real time supply chain management system for malaria commodities.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
