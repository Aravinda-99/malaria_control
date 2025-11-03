<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Reports - Malaria Control</title>
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

        /* --- Reports Container --- */
        .reports-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        /* --- Filter Bar --- */
        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
            background-color: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
            flex: 3 1 300px;
        }

        .filter-bar select {
            flex: 1 1 150px;
        }

        .filter-bar .search-btn {
            padding: 0.75rem 2rem;
            border: none;
            background-color: rgb(12, 99, 0);
            color: white;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-bar .search-btn:hover {
            background-color: rgb(15, 129, 0);
        }

        /* --- Reports Grid --- */
        .reports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        /* --- Report Card --- */
        .report-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .report-thumbnail {
            margin-bottom: 1rem;
            position: relative;
            width: 100%;
            height: 260px;
            overflow: hidden;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
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

        .report-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin: 1rem 0;
            line-height: 1.4;
        }

        .report-date {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .report-actions {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-view {
            background-color: rgb(10, 87, 0);
            color: white;
            flex: 1;
        }

        .btn-view:hover {
            background-color: rgb(5, 44, 0);
            box-shadow: 0 3px 8px rgba(152, 27, 27, 0.3);
        }

        .btn-download {
            background-color: #f8f9fa;
            color: #555;
            border: 1px solid #ddd;
            flex: 1;
        }

        .btn-download:hover {
            background-color: #e9ecef;
            border-color: #aaa;
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

        /* --- Pagination --- */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 4rem;
        }

        .pagination a {
            color: #555;
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            min-width: 45px;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #e9ecef;
        }

        .pagination a.active {
            background-color: rgb(13, 112, 0);
            color: white;
            font-weight: 600;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .reports-container {
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
            
            .reports-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 1.5rem;
            }
            
            .report-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .reports-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Annual Reports</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <main class="reports-container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" id="searchInput" placeholder="Search reports..." onkeyup="filterReports()">
            <select id="yearSelect" onchange="filterReports()">
                <option value="">Select Year</option>
                <option value="2023">2023</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
            </select>
            <button class="search-btn" onclick="filterReports()">Search</button>
        </div>

        <!-- Reports Grid -->
        <div class="reports-grid" id="reportsGrid">
            <!-- Report 1 - 2023 -->
            <div class="report-card" data-year="2023">
                <div class="report-thumbnail" id="pdfThumbnailContainer1">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail1" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2023</h3>
                <p class="report-date">01 January 2023</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual-Report-2023.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual-Report-2023.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 2 - 2019 -->
            <div class="report-card" data-year="2019">
                <div class="report-thumbnail" id="pdfThumbnailContainer2">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail2" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2019</h3>
                <p class="report-date">01 January 2019</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual-Report-2019.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual-Report-2019.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 3 - 2018 -->
            <div class="report-card" data-year="2018">
                <div class="report-thumbnail" id="pdfThumbnailContainer3">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail3" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2018</h3>
                <p class="report-date">01 January 2018</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual-Report-2018.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual-Report-2018.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 4 - 2016 -->
            <div class="report-card" data-year="2016">
                <div class="report-thumbnail" id="pdfThumbnailContainer4">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail4" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2016</h3>
                <p class="report-date">01 January 2016</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual_Report_2016.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual_Report_2016.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 5 - 2015 -->
            <div class="report-card" data-year="2015">
                <div class="report-thumbnail" id="pdfThumbnailContainer5">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail5" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2015</h3>
                <p class="report-date">01 January 2015</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2015.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2015.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 6 - 2014 -->
            <div class="report-card" data-year="2014">
                <div class="report-thumbnail" id="pdfThumbnailContainer6">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail6" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2014</h3>
                <p class="report-date">01 January 2014</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2014.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2014.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 7 - 2013 -->
            <div class="report-card" data-year="2013">
                <div class="report-thumbnail" id="pdfThumbnailContainer7">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail7" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2013</h3>
                <p class="report-date">01 January 2013</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2013.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2013.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 8 - 2012 -->
            <div class="report-card" data-year="2012">
                <div class="report-thumbnail" id="pdfThumbnailContainer8">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail8" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2012</h3>
                <p class="report-date">01 January 2012</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2012.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2012.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 9 - 2011 -->
            <div class="report-card" data-year="2011">
                <div class="report-thumbnail" id="pdfThumbnailContainer9">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail9" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2011</h3>
                <p class="report-date">01 January 2011</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2011.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2011.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 10 - 2009 -->
            <div class="report-card" data-year="2009">
                <div class="report-thumbnail" id="pdfThumbnailContainer10">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail10" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2009</h3>
                <p class="report-date">01 January 2009</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2009.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2009.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 11 - 2008 -->
            <div class="report-card" data-year="2008">
                <div class="report-thumbnail" id="pdfThumbnailContainer11">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail11" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2008</h3>
                <p class="report-date">01 January 2008</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2008.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2008.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 12 - 2007 -->
            <div class="report-card" data-year="2007">
                <div class="report-thumbnail" id="pdfThumbnailContainer12">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail12" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2007</h3>
                <p class="report-date">01 January 2007</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2007.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2007.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>

            <!-- Report 13 - 2006 -->
            <div class="report-card" data-year="2006">
                <div class="report-thumbnail" id="pdfThumbnailContainer13">
                    <div class="thumbnail-loading">Loading thumbnail...</div>
                    <canvas id="pdfThumbnail13" class="pdf-thumbnail-canvas"></canvas>
                </div>
                <h3 class="report-title">Annual Report 2006</h3>
                <p class="report-date">01 January 2006</p>
                <div class="report-actions">
                    <a href="#" class="btn btn-view" onclick="openPdfViewer('asset/docs/annual_reports/Annual Report 2006.pdf')">View</a>
                    <a href="asset/docs/annual_reports/Annual Report 2006.pdf" class="btn btn-download" download>Download</a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav class="pagination">
            <a href="#">&lt;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&gt;</a>
        </nav>
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

        // Filter Reports Function
        function filterReports() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const yearSelect = document.getElementById('yearSelect').value;
            const reportCards = document.querySelectorAll('.report-card');
            
            reportCards.forEach(function(card) {
                const reportTitle = card.querySelector('.report-title').textContent.toLowerCase();
                const reportYear = card.getAttribute('data-year');
                
                // Check if report matches search text
                const matchesSearch = searchInput === '' || reportTitle.includes(searchInput);
                
                // Check if report matches year filter
                const matchesYear = yearSelect === '' || reportYear === yearSelect;
                
                // Show or hide card based on filters
                if (matchesSearch && matchesYear) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

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
            // Generate thumbnails for each PDF based on the file names from the image
            const pdfFiles = [
                'asset/docs/annual_reports/Annual-Report-2023.pdf',
                'asset/docs/annual_reports/Annual-Report-2019.pdf',
                'asset/docs/annual_reports/Annual-Report-2018.pdf',
                'asset/docs/annual_reports/Annual_Report_2016.pdf',
                'asset/docs/annual_reports/Annual Report 2015.pdf',
                'asset/docs/annual_reports/Annual Report 2014.pdf',
                'asset/docs/annual_reports/Annual Report 2013.pdf',
                'asset/docs/annual_reports/Annual Report 2012.pdf',
                'asset/docs/annual_reports/Annual Report 2011.pdf',
                'asset/docs/annual_reports/Annual Report 2009.pdf',
                'asset/docs/annual_reports/Annual Report 2008.pdf',
                'asset/docs/annual_reports/Annual Report 2007.pdf',
                'asset/docs/annual_reports/Annual Report 2006.pdf'
            ];

            pdfFiles.forEach((pdfFile, index) => {
                const canvasId = `pdfThumbnail${index + 1}`;
                const loadingSelector = `#pdfThumbnailContainer${index + 1} .thumbnail-loading`;
                generatePdfThumbnail(pdfFile, canvasId, loadingSelector);
            });
        });
    </script>

    <?php include 'include/footer.php'; ?>

</body>
</html>