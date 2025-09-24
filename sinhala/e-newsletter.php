<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Newsletter - Malaria Control</title>
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

        /* --- E-Newsletter Section --- */
        .newsletter-container {
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
            background-color: rgb(12, 100, 0);
            color: white;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-bar .search-btn:hover {
            background-color: rgb(13, 114, 0);
        }

        /* --- Newsletter Card --- */
        .newsletter-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            display: flex;
            flex-direction: row;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 200px;
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .newsletter-cover {
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

        .newsletter-date {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background-color: rgb(15, 126, 0);
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .newsletter-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
        }

        .newsletter-details {
            flex: 1;
        }

        .newsletter-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .newsletter-description {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .newsletter-actions {
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
            background-color: rgb(16, 139, 0);
            color: #fff;
            flex: 1;
        }
        .btn-view:hover {
            background-color: rgb(13, 109, 0);
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
            .newsletter-card {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .newsletter-container {
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
            .newsletter-card {
                flex-direction: column;
                min-height: auto;
            }
            .newsletter-cover {
                width: 100%;
                height: 200px;
            }
            .newsletter-actions {
                flex-direction: column;
                gap: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }
            .newsletter-cover {
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
            <h1>E-Newsletter</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <main class="newsletter-container">
        <h2 class="section-title">Malaria E-Newsletter</h2>
        
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" placeholder="Search newsletters">
            <select>
                <option value="">Year</option>
                <option value="2021" selected>2021</option>
                <option value="2020">2020</option>
            </select>
            <select>
                <option value="">Language</option>
                <option value="english" selected>English</option>
                <option value="sinhala">Sinhala</option>
                <option value="tamil">Tamil</option>
            </select>
            <button class="search-btn">Search</button>
        </div>

        <!-- Single Newsletter Card -->
        <div class="newsletter-card">
            <div class="newsletter-cover" id="pdfThumbnailContainer">
                <div class="thumbnail-loading">Loading thumbnail...</div>
                <canvas id="pdfThumbnail" class="pdf-thumbnail-canvas"></canvas>
                <div class="newsletter-date">October 2021</div>
            </div>
            <div class="newsletter-content">
                <div class="newsletter-details">
                    <h3 class="newsletter-title">Malaria e-Newsletter</h3>
                    <p class="newsletter-description">Quarterly update on malaria prevention activities, research findings, and community outreach programs across Sri Lanka.</p>
                </div>
                <div class="newsletter-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/Enews/Malaria-News-October-2021---Final.pdf')">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="asset/docs/Enews/Malaria-News-October-2021---Final.pdf" download class="btn btn-download">
                        <i class="fas fa-download"></i> Download
                    </a>
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

        // Set up PDF.js to generate thumbnail
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';

        // Generate PDF thumbnail on page load
        document.addEventListener('DOMContentLoaded', function() {
            const pdfUrl = 'asset/docs/Enews/Malaria-News-October-2021---Final.pdf';
            const canvas = document.getElementById('pdfThumbnail');
            const loadingDiv = document.querySelector('.thumbnail-loading');
            
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
        });
    </script>

    <?php include 'include/footer.php'; ?>
    

</body>
</html>