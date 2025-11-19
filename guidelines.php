<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidelines & Standard Operating Procedures - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <!-- Font Awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- PDF.js library for rendering PDF thumbnails -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            height: 60vh;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/down.png');
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
            font-size: 4rem;
            margin: 0;
            font-weight: 600;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 600px;
        }

        /* --- Guidelines Section --- */
        .guidelines-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            font-size: 2.2rem;
            color: #333;
            text-align: center;
            margin-bottom: 2.5rem;
            font-weight: 600;
        }

        /* --- Filter Bar --- */
        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2rem;
            background-color: transparent;
            padding: 0.5rem;
            border-radius: 12px;
        }

        .filter-bar input[type="text"],
        .filter-bar select {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            min-width: 120px;
        }

        .filter-bar input[type="text"] {
            flex: 3 1 520px;
        }

        .filter-bar select {
            flex: 0 0 160px;
        }

        .filter-bar .search-btn {
            padding: 0.75rem 2rem;
            border: none;
            background-color: rgb(12, 107, 0);
            color: white;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-bar .search-btn:hover {
            background-color: rgb(17, 145, 0);
        }

        /* --- Guidelines Grid --- */
        .guidelines-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            align-items: stretch;
        }

        /* --- Guideline Card --- */
        .guideline-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 500px;
        }

        .guideline-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .guideline-cover {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .pdf-thumbnail-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .thumbnail-loading {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #f8f9fa;
            color: #666;
            font-size: 0.9rem;
            text-align: center;
            padding: 0.5rem;
        }

        .guideline-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
            min-height: 250px;
        }

        .guideline-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .guideline-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
            line-height: 1.4;
            text-align: center;
            min-height: 3.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .guideline-date {
            font-size: 0.9rem;
            color: #666;
            text-align: center;
            margin-bottom: 1.5rem;
            flex-shrink: 0;
        }

        .guideline-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: auto;
            flex-shrink: 0;
        }

        .btn {
            padding: 0.75rem 1rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-align: center;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            flex: 1;
            height: 45px;
            min-width: 0;
        }

        .btn-view {
            background-color: rgb(12, 104, 0);
            color: #fff;
            border: none;
        }
        .btn-view:hover {
            background-color: rgb(16, 134, 0);
            color: #fff;
        }

        .btn-download {
            background-color: #fff;
            color: #555;
            border: 1px solid #ddd;
        }
        .btn-download:hover {
            background-color: #f2f2f2;
            border-color: #aaa;
            color: #555;
        }

        .btn i {
            font-size: 1rem;
        }

        /* --- PDF Viewer Overlay --- */
        .pdf-viewer-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.85);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .pdf-viewer-container {
            width: 90%;
            height: 90%;
            background-color: #fff;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        .pdf-viewer-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: #981b1b;
            color: white;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 1001;
            font-size: 1.2rem;
        }

        .pdf-viewer-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .guidelines-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .guidelines-container {
                padding: 3rem 1rem;
            }
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            .filter-bar input[type="text"],
            .filter-bar select,
            .filter-bar .search-btn {
                width: 100%;
                flex: 1 1 100%;
            }
            .guidelines-grid {
                grid-template-columns: 1fr;
            }
            .guideline-card {
                min-height: 450px;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }
            .guideline-card {
                min-height: 400px;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Guidelines</h1>
            <p>Standard Operating Procedures for Malaria Control and Prevention</p>
        </div>
    </section>

    <main class="guidelines-container">
        <h2 class="section-title">Malaria Guidelines & SOPs</h2>
        
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" placeholder="Search guidelines">
            <select>
                <option value="">Year</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <
            </select>
            <button class="search-btn">Search</button>
        </div>

        <!-- Guidelines Grid -->
        <div class="guidelines-grid">
            <!-- Guideline 1 -->
            <div class="guideline-card" data-year="2024" data-category="procedures">
                <div class="guideline-cover" id="pdfThumbnailContainer1">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail1" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">SCOPE OF WORK TO BE PERFORMED WHEN A MALARIA PATIENT IS REPORTED_2024.pdf</h3>
                        <!-- <div class="guideline-date">09 October 2020</div> -->
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/SCOPE OF WORK TO BE PERFORMED WHEN A MALARIA PATIENT IS REPORTED_2024.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/SCOPE OF WORK TO BE PERFORMED WHEN A MALARIA PATIENT IS REPORTED_2024.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 2 -->
            <div class="guideline-card" data-year="2024" data-category="entomological">
                <div class="guideline-cover" id="pdfThumbnailContainer2">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail2" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Guidlines for Leismaniasis vector surveillance-2024_AMC</h3>
                        <!-- <div class="guideline-date">02 June 2020</div> -->
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Guidlines for Leismaniasis vector surveillance-2024_AMC.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Guidlines for Leismaniasis vector surveillance-2024_AMC.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 5 -->
            <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer5">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail5" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Ento Surveillance Guide 2023 Edition</h3>
                        <div class="guideline-date">28 May 2020</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Ento Surveillance Guide 2023 Ed.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Ento Surveillance Guide 2023 Ed.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 6 -->
            <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer6">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail6" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Vector Control Guidelines 2020</h3>
                        <div class="guideline-date">14 May 2020</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Vector Control Guidelines 2020.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Vector Control Guidelines 2020.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 7 -->
            <div class="guideline-card" data-year="2018" data-category="strategic">
                <div class="guideline-cover" id="pdfThumbnailContainer7">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail7" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">National Strategic Plan for POR</h3>
                        <div class="guideline-date">2018-2022</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/strategies/National_Strategic_Plan_for_Por___AMC_Sri_lanka_2018-2022.pdf')">
                            View
                        </a>
                        <a href="asset/docs/strategies/National_Strategic_Plan_for_Por___AMC_Sri_lanka_2018-2022.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 8 -->
            <div class="guideline-card" data-year="2014" data-category="strategic">
                <div class="guideline-cover" id="pdfThumbnailContainer8">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail8" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">AMC National Strategic Plan</h3>
                        <div class="guideline-date">2014-2018</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/strategies/AMC NSP.pdf')">
                            View
                        </a>
                        <a href="asset/docs/strategies/AMC NSP.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guideline 9 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer7">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail7" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Instructions on Sample Collection for Laboratory Diagnosis of Malaria During Covid 19 Pandemic</h3>
                        <div class="guideline-date">26 March 2020</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Instructions_on_sample_collection_for_laboratory_diagnosis_of_malaria_during_Covid_19_pandemic.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Instructions_on_sample_collection_for_laboratory_diagnosis_of_malaria_during_Covid_19_pandemic.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 8 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer8">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail8" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Entomological Surveillance Guide 2019</h3>
                        <div class="guideline-date">31 December 2019</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Ento_surveillance_guide_2019.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Ento_surveillance_guide_2019.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 9 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer9">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail9" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">PROCEDURE FOR THE PROCUREMENT OF ESSENTIAL ANTI MALARIAL DRUG, COMMODITIES AND SERVICES FOR ANTI MALARIA CAMPAIGN OF SRI LANKA IN PREVENTION OF RE-INTRODUCTION PHASE OF MALARIA</h3>
                        <div class="guideline-date">20 December 2019</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/PROCEDURE_FOR_THE_PROCUREMENT_OF_ESSENTIAL_ANTI_MALARIAL_DRUGS_COMMODITIES_AND_SERVICES_FOR_ANTI_MALARIA_CAMPAIGN_OF_SRI_LANKA_IN_PREVENTION_OF_RE_INTRODUCTION_PHASE_OF_MALARIA.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/PROCEDURE_FOR_THE_PROCUREMENT_OF_ESSENTIAL_ANTI_MALARIAL_DRUGS_COMMODITIES_AND_SERVICES_FOR_ANTI_MALARIA_CAMPAIGN_OF_SRI_LANKA_IN_PREVENTION_OF_RE_INTRODUCTION_PHASE_OF_MALARIA.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 10 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer10">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail10" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Manual for Parasitological Surveillance in Prevention of Reintroduction or Reestablishment of Malaria in Sri Lanka</h3>
                        <div class="guideline-date">15 December 2019</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Manual-for-Parasitological-Surveillance-in-prevention-of-reintroduction--or-reestablishment-of-malaria-in-Sri-Lanka.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Manual-for-Parasitological-Surveillance-in-prevention-of-reintroduction--or-reestablishment-of-malaria-in-Sri-Lanka.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 11 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer11">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail11" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Malaria Prophylaxis for Travellers Guideline for Healthcare Workers 2019</h3>
                        <div class="guideline-date">26 November 2019</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Malaria-Prophylaxis-for-Travellers-Guideline-for-Healthcare-Workers--AMC-2019.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Malaria-Prophylaxis-for-Travellers-Guideline-for-Healthcare-Workers--AMC-2019.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 12 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer12">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail12" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Revised Guidelines for Malaria Entomological Surveillance in PoR Phase 2017</h3>
                        <div class="guideline-date">05 August 2019</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 13 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer13">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail13" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">When a Malaria Patient is Reported | Scope of Work | Antimalaria Campaign of Sri Lanka | 2016</h3>
                        <div class="guideline-date">10 January 2016</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/SCOPE_OF_WORK_TO_BE.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/SCOPE_OF_WORK_TO_BE.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 14 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer14">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail14" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">RDT | Standard Operating Procedures | Antimalaria Campaign of Sri Lanka</h3>
                        <div class="guideline-date">10 March 2015</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/SOP RDT.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/SOP RDT.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 15 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer15">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail15" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Microscopy | Standard Operating Procedures | Antimalaria Campaign of Sri Lanka</h3>
                        <div class="guideline-date">20 December 2014</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/SOPMM.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/SOPMM.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 16 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer16">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail16" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">WHO Guidelines for the Treatment of Malaria | Second Edition</h3>
                        <div class="guideline-date">20 December 2010</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/TreatmentGuidLine.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/TreatmentGuidLine.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 17 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer17">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail17" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Standard Operating Procedures 1-17 Final</h3>
                        <div class="guideline-date">15 March 2020</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/SOP_1-17_final.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/SOP_1-17_final.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- Guideline 18 -->
            <!-- <div class="guideline-card">
                <div class="guideline-cover" id="pdfThumbnailContainer18">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail18" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <div class="guideline-content">
                    <div class="guideline-details">
                        <h3 class="guideline-title">Guidelines for entomological surveillance of malaria vectors in Sri Lanka</h3>
                        <div class="guideline-date">20 December 2010</div>
                    </div>
                    <div class="guideline-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf')">
                            View
                        </a>
                        <a href="asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf" download class="btn btn-download">
                            Download
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </main>

    <!-- PDF Viewer Overlay -->
    <div class="pdf-viewer-overlay" id="pdfViewer">
        <div class="pdf-viewer-container">
            <div class="pdf-viewer-close" onclick="closePdfViewer()">
                <i class="fas fa-times"></i>
            </div>
            <iframe class="pdf-viewer-iframe" id="pdfViewerFrame" src=""></iframe>
        </div>
    </div>

    <script>
        // PDF Viewer Functions
        function openPdfViewer(pdfUrl) {
            document.getElementById('pdfViewerFrame').src = pdfUrl;
            document.getElementById('pdfViewer').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closePdfViewer() {
            document.getElementById('pdfViewer').style.display = 'none';
            document.getElementById('pdfViewerFrame').src = '';
            document.body.style.overflow = 'auto';
        }

        // Filtering logic for search, year, and category
        function setupGuidelineFilters() {
            const filterBar = document.querySelector('.filter-bar');
            if (!filterBar) return;

            const searchInput = filterBar.querySelector('input[type="text"]');
            const yearSelect = filterBar.querySelector('select');
            const searchButton = filterBar.querySelector('.search-btn');

            const cards = Array.from(document.querySelectorAll('.guideline-card'));

            const applyFilters = () => {
                const query = (searchInput?.value || '').toLowerCase().trim();
                const selectedYear = yearSelect?.value || '';

                cards.forEach(card => {
                    const titleEl = card.querySelector('.guideline-title');
                    const titleText = (titleEl?.textContent || '').toLowerCase();
                    const cardYear = card.getAttribute('data-year') || '';

                    const matchesText = query === '' || titleText.includes(query);
                    const matchesYear = selectedYear === '' || cardYear === selectedYear;
                    const show = matchesText && matchesYear;
                    card.style.display = show ? '' : 'none';
                });
            };

            searchInput?.addEventListener('input', applyFilters);
            yearSelect?.addEventListener('change', applyFilters);
            searchButton?.addEventListener('click', (e) => {
                e.preventDefault();
                applyFilters();
            });

            // initial filter to normalize state
            applyFilters();
        }

        // Close viewer when clicking outside the PDF container
        document.getElementById('pdfViewer').addEventListener('click', function(e) {
            if (e.target === this) {
                closePdfViewer();
            }
        });

        // Set up PDF.js to generate thumbnails
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';

        // Function to generate PDF thumbnail
        function generatePdfThumbnail(pdfUrl, canvasId, loadingDivSelector) {
            const canvas = document.getElementById(canvasId);
            const loadingDiv = document.querySelector(loadingDivSelector);
            
            // Load the PDF
            pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
                // Get the first page
                pdf.getPage(1).then(function(page) {
                    const viewport = page.getViewport({ scale: 1.5 });
                    
                    // Set canvas dimensions to match the PDF page
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    
                    const renderContext = {
                        canvasContext: canvas.getContext('2d'),
                        viewport: viewport
                    };
                    
                    // Render the page
                    page.render(renderContext).promise.then(function() {
                        // Hide loading message when done
                        loadingDiv.style.display = 'none';
                    });
                });
            }).catch(function(error) {
                console.error('Error loading PDF for thumbnail:', error);
                loadingDiv.textContent = 'Error loading PDF thumbnail';
            });
        }

        // Generate PDF thumbnails on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Generate thumbnails for each PDF
            const pdfFiles = [
                'asset/docs/guidelines/SCOPE OF WORK TO BE PERFORMED WHEN A MALARIA PATIENT IS REPORTED_2024.pdf',
                'asset/docs/guidelines/Guidlines for Leismaniasis vector surveillance-2024_AMC.pdf',
                'asset/docs/guidelines/Ento Surveillance Guide 2023 Ed.pdf',
                'asset/docs/guidelines/Vector Control Guidelines 2020.pdf',
                'asset/docs/strategies/National_Strategic_Plan_for_Por___AMC_Sri_lanka_2018-2022.pdf',
                'asset/docs/strategies/AMC NSP.pdf',
                'asset/docs/guidelines/Instructions_on_sample_collection_for_laboratory_diagnosis_of_malaria_during_Covid_19_pandemic.pdf',
                'asset/docs/guidelines/Ento_surveillance_guide_2019.pdf',
                'asset/docs/guidelines/PROCEDURE_FOR_THE_PROCUREMENT_OF_ESSENTIAL_ANTI_MALARIAL_DRUGS_COMMODITIES_AND_SERVICES_FOR_ANTI_MALARIA_CAMPAIGN_OF_SRI_LANKA_IN_PREVENTION_OF_RE_INTRODUCTION_PHASE_OF_MALARIA.pdf',
                'asset/docs/guidelines/Manual-for-Parasitological-Surveillance-in-prevention-of-reintroduction--or-reestablishment-of-malaria-in-Sri-Lanka.pdf',
                'asset/docs/guidelines/Malaria-Prophylaxis-for-Travellers-Guideline-for-Healthcare-Workers--AMC-2019.pdf',
                'asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf',
                'asset/docs/guidelines/SCOPE_OF_WORK_TO_BE.pdf',
                'asset/docs/guidelines/SOP RDT.pdf',
                'asset/docs/guidelines/SOPMM.pdf',
                'asset/docs/guidelines/TreatmentGuidLine.pdf',
                'asset/docs/guidelines/SOP_1-17_final.pdf',
                'asset/docs/guidelines/Revised_Guidelines_for_Entomological_surveillance.pdf'
            ];

            pdfFiles.forEach((pdfFile, index) => {
                const canvasId = `pdfThumbnail${index + 1}`;
                const loadingSelector = `#pdfThumbnailContainer${index + 1} .thumbnail-loading`;
                generatePdfThumbnail(pdfFile, canvasId, loadingSelector);
            });

            // Initialize filters
            setupGuidelineFilters();
        });
    </script>

    <?php include 'include/footer.php'; ?>
</body>
</html>