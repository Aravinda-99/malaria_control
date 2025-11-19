<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Plans - Malaria Control</title>
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

        /* --- Strategic Plan Section --- */
        .strategy-container {
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
            background-color: rgb(11, 92, 0);
            color: white;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-bar .search-btn:hover {
            background-color: rgb(16, 134, 0);
        }

        /* --- Strategies Grid --- */
        .strategies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
        }

        /* --- Strategy Card --- */
        .strategy-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            display: flex;
            flex-direction: row;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 200px;
        }

        .strategy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .strategy-cover {
            position: relative;
            width: 150px;
            min-width: 150px;
            height: 200px;
            overflow: hidden;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
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

        .strategy-date {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background-color: rgb(16, 139, 0);
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .strategy-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
        }

        .strategy-details {
            flex: 1;
        }

        .strategy-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .strategy-description {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .strategy-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: auto;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-align: center;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-view {
            background-color: rgb(14, 119, 0);
            color: #fff;
            flex: 1;
        }
        .btn-view:hover {
            background-color: rgb(17, 150, 0);
        }

        .btn-download {
            background-color: #fff;
            color: #555;
            border: 1px solid #ddd;
            flex: 1;
        }
        .btn-download:hover {
            background-color: #f2f2f2;
            border-color: #aaa;
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
            .strategies-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .strategy-container {
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
            .strategy-card {
                flex-direction: column;
                min-height: auto;
            }
            .strategy-cover {
                width: 100%;
                height: 200px;
            }
            .strategy-actions {
                flex-direction: column;
                gap: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }
            .strategy-cover {
                width: 120px;
                min-width: 120px;
                height: 160px;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Strategic Plans</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <main class="strategy-container">
        <h2 class="section-title">National Malaria Strategic Plans</h2>
        
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" placeholder="Search strategic plans">
            <select>
                <option value="">Year</option>
                <option value="2024-2028">2024-2028</option>
                <option value="2023-2027">2023-2027</option>
            </select>
            <select>
                <option value="">Language</option>
                <option value="english" selected>English</option>
                <option value="sinhala">Sinhala</option>
                <option value="tamil">Tamil</option>
            </select>
            <button class="search-btn">Search</button>
        </div>

        <!-- Strategic Plans Grid -->
        <div class="strategies-grid">
            <!-- Strategic Plan 1 -->
            <div class="strategy-card">
                <div class="strategy-cover" id="pdfThumbnailContainer1">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail1" class="pdf-thumbnail-canvas"></canvas>
                    <div class="strategy-date">2024-2028</div>
                </div>
                <div class="strategy-content">
                    <div class="strategy-details">
                        <h3 class="strategy-title">National Strategic Plan - Leishmaniasis</h3>
                        <p class="strategy-description">National Strategic Plan for Leishmaniasis 2024-2028. Comprehensive strategies and action plans for leishmaniasis control and prevention in Sri Lanka.</p>
                    </div>
                    <div class="strategy-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/National Strategic Plan_Leishmaniasis_2024-2028.pdf')">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="asset/docs/guidelines/National Strategic Plan_Leishmaniasis_2024-2028.pdf" download class="btn btn-download">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Strategic Plan 2 -->
            <div class="strategy-card">
                <div class="strategy-cover" id="pdfThumbnailContainer2">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail2" class="pdf-thumbnail-canvas"></canvas>
                    <div class="strategy-date">2023-2027</div>
                </div>
                <div class="strategy-content">
                    <div class="strategy-details">
                        <h3 class="strategy-title">National Strategic Plan - Malaria</h3>
                        <p class="strategy-description">National Strategic Plan for Malaria 2023-2027. Comprehensive strategies and action plans to maintain malaria-free status in Sri Lanka.</p>
                    </div>
                    <div class="strategy-actions">
                        <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/guidelines/National Strategic Plan_Malaria_2023-2027.pdf')">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="asset/docs/guidelines/National Strategic Plan_Malaria_2023-2027.pdf" download class="btn btn-download">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </div>
                </div>
            </div>

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

        // Close viewer when clicking outside the PDF container
        document.getElementById('pdfViewer').addEventListener('click', function(e) {
            if (e.target === this) {
                closePdfViewer();
            }
        });

        // Set up PDF.js to generate thumbnails
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';

        // Function to generate PDF thumbnail
        function generatePdfThumbnail(pdfUrl, canvasId, loadingSelector) {
            const canvas = document.getElementById(canvasId);
            const loadingDiv = document.querySelector(loadingSelector);
            
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
            generatePdfThumbnail(
                'asset/docs/guidelines/National Strategic Plan_Leishmaniasis_2024-2028.pdf',
                'pdfThumbnail1',
                '#pdfThumbnailContainer1 .thumbnail-loading'
            );
            
            generatePdfThumbnail(
                'asset/docs/guidelines/National Strategic Plan_Malaria_2023-2027.pdf',
                'pdfThumbnail2',
                '#pdfThumbnailContainer2 .thumbnail-loading'
            );
        });
    </script>

    <?php include 'include/footer.php'; ?>
</body>
</html>