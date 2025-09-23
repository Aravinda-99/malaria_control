<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEC Materials - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <!-- Font Awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

        /* --- IEC Materials Container --- */
        .materials-container {
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

        /* --- Category Title --- */
        .category-title {
            margin-top: 2rem;
            font-size: 1.5rem;
            color: #555;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #ddd;
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
            background-color: #981b1b;
            color: white;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-bar .search-btn:hover {
            background-color: #7a1515;
        }

        /* --- Materials List --- */
        .files-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .material-item {
            display: flex;
            margin-bottom: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .pdf-icon {
            flex: 0 0 80px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 20px;
        }

        .pdf-icon img {
            width: 48px;
            height: 48px;
        }

        .material-content {
            flex: 1;
            padding: 20px 0;
        }

        .material-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
            display: flex;
            align-items: center;
        }

        .hot-tag {
            display: inline-block;
            background-color: #981b1b;
            color: white;
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 4px;
            margin-left: 10px;
            font-weight: bold;
        }

        .material-specs {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #666;
        }

        .material-specs li {
            margin-bottom: 4px;
            font-size: 0.95rem;
        }

        .material-rating {
            flex: 0 0 150px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: center;
            padding: 20px;
        }

        .stars {
            color: #ffc107;
            font-size: 1.1rem;
            letter-spacing: -2px;
        }

        .votes {
            color: #777;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .material-download {
            flex: 0 0 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .download-btn {
            background-color: #981b1b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .download-btn:hover {
            background-color: #7a1515;
        }

        /* --- Material Preview Gallery --- */
        .material-preview {
            flex: 0 0 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .preview-images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            width: 100%;
        }

        .preview-image-container {
            position: relative;
            border: 1px solid #ddd;
            cursor: pointer;
            overflow: hidden;
            height: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            transition: transform 0.2s;
        }

        .preview-image-container:hover {
            transform: scale(1.03);
        }

        .preview-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* --- Information Table --- */
        .info-table-container {
            margin-top: 1px;
            margin-bottom: 2rem;
            background-color: #f8f9fa;
            border-radius: 0 0 8px 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .info-header {
            background-color: #f0f0f0;
            padding: 10px 15px;
            font-weight: 600;
            color: #555;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table tr {
            border-bottom: 1px solid #eee;
        }

        .info-table tr:last-child {
            border-bottom: none;
        }

        .info-table td {
            padding: 10px 15px;
            color: #666;
        }

        .info-table td:first-child {
            font-weight: 500;
            width: 30%;
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

        /* --- Image Viewer Overlay --- */
        .image-viewer-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .image-viewer-container {
            position: relative;
            width: 90%;
            height: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-viewer-img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }

        .image-viewer-close {
            position: absolute;
            top: -40px;
            right: 0;
            background-color: #981b1b;
            color: white;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .image-viewer-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 1.5rem;
            transition: background-color 0.3s;
        }

        .image-viewer-nav:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .image-viewer-prev {
            left: 20px;
        }

        .image-viewer-next {
            right: 20px;
        }

        .image-counter {
            position: absolute;
            bottom: -40px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
            font-size: 1rem;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .material-item {
                flex-wrap: wrap;
            }
            .pdf-icon {
                flex: 0 0 60px;
            }
            .material-content {
                flex: 1 1 calc(100% - 60px);
            }
            .material-rating {
                flex: 1 1 50%;
                align-items: flex-start;
                padding-left: 80px;
            }
            .material-download {
                flex: 1 1 50%;
                justify-content: flex-end;
            }
            .material-preview {
                flex: 0 0 100%;
                padding: 15px;
            }
            .preview-images {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .materials-container {
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
            .material-rating, 
            .material-download {
                flex: 1 1 100%;
                justify-content: center;
                align-items: center;
                padding: 10px 20px;
            }
            .material-rating {
                padding-top: 0;
            }
            .preview-images {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }
            .material-title {
                font-size: 1.1rem;
            }
            .info-table td {
                padding: 8px 10px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>IEC Materials</h1>
            <p>Educational Resources for Malaria Prevention and Control</p>
        </div>
    </section>

    <main class="materials-container">
        <h2 class="section-title">Information, Education & Communication Materials</h2>
        
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" placeholder="Search IEC materials">
            <select>
                <option value="">Category</option>
                <option value="posters">Posters</option>
                <option value="flyers">Flyers</option>
                <option value="brochures">Brochures</option>
                <option value="guides">Guides</option>
            </select>
            <select>
                <option value="">Language</option>
                <option value="english">English</option>
                <option value="sinhala">Sinhala</option>
                <option value="tamil">Tamil</option>
            </select>
            <button class="search-btn">Search</button>
        </div>

        <!-- Category: IEC Material -->
        <div class="category-title">Category: IEC Material</div>
        
        <!-- Materials List -->
        <div class="files-label">Files:</div>
        
        <!-- Material Item 1 - Public Awareness on Malariology -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">Public Awareness on Malariology <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Dimensions: A4 Tri-fold Double Sided</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Landscape</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="votes">(8 votes)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/malaria_awareness_brochure.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/AMC Flyer.png', 0, 'brochure1')">
                        <img src="asset/image/AMC Flyer.png" alt="Brochure Preview 1" class="preview-image">
                    </div>
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/AMC Flyer-2.png', 1, 'brochure1')">
                        <img src="asset/image/AMC Flyer2.png" alt="Brochure Preview 2" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 1 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-07</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-07</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>7.64 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>11,016</td>
                </tr>
            </table>
        </div>
        
        <!-- Material Item 2 - Flyer for Travelers/Pilgrims Trifold -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">Flyer for Travelers/Pilgrims Trifold flyer <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Dimensions: A4 Double Sided - Trifold</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Landscape</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/travelers_trifold.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/travelers-trifold-preview.png', 0, 'trifold')">
                        <img src="asset/image/Flyer for Travellers_Philgrims.png" alt="Travelers Trifold Preview 1" class="preview-image">
                    </div>
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/travelers-trifold-preview-2.png', 1, 'trifold')">
                        <img src="asset/image/Flyer for Travellers_Philgrims2.png" alt="Travelers Trifold Preview 2" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 2 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>14.37 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>5,379</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 3 - World Malaria Day 2019 Leaflet -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">World Malaria Day 2019 | Leaflet <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Dimensions: A3</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Landscape</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/malaria_day_2019.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/malaria-day-2019-preview.png', 0, 'malaria-day')">
                        <img src="asset/image/malaria-day-2019-preview.png" alt="World Malaria Day 2019 Preview 1" class="preview-image">
                    </div>
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/malaria-day-2019-preview-2.png', 1, 'malaria-day')">
                        <img src="asset/image/malaria-day-2019-preview-2.png" alt="World Malaria Day 2019 Preview 2" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 3 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2019-05-30</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2019-05-30</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>3.99 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>5,860</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 4 - Public Health Awareness Day 2018 -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">Public Health Awareness Day 2018 - Standing Banner <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Languages: Sinhala, Tamil, English</li>
                    <li>Dimensions: 5.5ft(H) x 3ft(W)</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Portrait</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/public_health_banner_2018.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/Public Awareness Day 2018 UHC Trilingual10.png', 0, 'health-banner')">
                        <img src="asset/image/Public Awareness Day 2018 UHC Trilingual10.png" alt="Public Health Banner Preview 1" class="preview-image">
                    </div>
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/Public Awareness Day 2018 UHC Trilingual2.png', 1, 'health-banner')">
                        <img src="asset/image/Public Awareness Day 2018 UHC Trilingual2.png" alt="Public Health Banner Preview 2" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 4 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>28.57 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>5,768</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 5 - World Health Day 2018 -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">World Health Day - 2018 - Standing banner <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Dimensions: 5.5ft(H) x 3ft(W)</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Portrait</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/world_health_day_2018.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/WHD2018 Poster.png', 0, 'world-health')">
                        <img src="asset/image/WHD2018 Poster.png" alt="World Health Day Banner Preview" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 5 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>21.39 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>5,302</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 6 - Flyer for Travelers/Pilgrims -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">Flyer for Travelers/Pilgrims <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Dimensions: A5 Double Sided</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Portrait</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(2 votes)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/travelers_flyer.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/Immi_Sampath1.png', 0, 'flyer')">
                        <img src="asset/image/Immi_Sampath1.png" alt="Flyer Preview 1" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 6 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-07</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-07</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>3.88 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>8,463</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 7 - AMC Leaflet | Immigration -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">AMC Leaflet | Immigration <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Languages: Sinhala, Tamil, English</li>
                    <li>Dimensions: A5</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Portrait</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/amc_immigration_leaflet.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/immigration-leaflet-1.png', 0, 'immigration1')">
                        <img src="asset/image/Sampath_Bloodtest.png" alt="Immigration Leaflet Preview" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 7 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-28</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>19.51 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>7,321</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 8 - AMC Poster | Blood Test -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">AMC Poster | Blood Test <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Languages: Sinhala, Tamil, English</li>
                    <li>Dimensions: A3</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Portrait</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/amc_blood_test_poster.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/blood-test-poster.png', 0, 'blood-test')">
                        <img src="asset/image/Sampath_Bloodtest.png" alt="Blood Test Poster Preview" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 8 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>23.83 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>7,121</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 9 - World Malaria Day 2018 | Press Advertisement -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">World Malaria Day 2018 | Press Advertisement <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Languages: Sinhala, Tamil, English</li>
                    <li>Dimensions: 33cm x 27cm</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Landscape</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/world_malaria_day_2018_press_ad.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/press-ad-2018.png', 0, 'press-ad')">
                        <img src="asset/image/Sampath_malariaday.png" alt="Press Advertisement Preview" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 9 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>9.11 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>5,145</td>
                </tr>
            </table>
        </div>

        <!-- Material Item 10 - Facts on Malaria | Leaflet -->
        <div class="material-item">
            <div class="pdf-icon">
                <img src="asset/image/pdf-icon.png" alt="PDF">
            </div>
            <div class="material-content">
                <h3 class="material-title">Facts on Malaria | Leaflet <span class="hot-tag">HOT</span></h3>
                <ul class="material-specs">
                    <li>Languages: Sinhala, English</li>
                    <li>Dimensions: A4, Double Sided</li>
                    <li>Resolution: 300 dpi</li>
                    <li>Color: CMYK</li>
                    <li>Orientation: Landscape</li>
                </ul>
            </div>
            <div class="material-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="votes">(1 vote)</div>
            </div>
            <div class="material-download">
                <a href="asset/docs/iec/facts_on_malaria.pdf" download>
                    <button class="download-btn">Download</button>
                </a>
            </div>
            <div class="material-preview">
                <div class="preview-images">
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/facts-leaflet-1.png', 0, 'facts-leaflet')">
                        <img src="asset/image/purnima_Item1_front.png" alt="Facts Leaflet Preview 1" class="preview-image">
                    </div>
                    <div class="preview-image-container" onclick="openImageViewer('asset/image/facts-leaflet-2.png', 1, 'facts-leaflet')">
                        <img src="asset/image/purnima_Item1_back.png" alt="Facts Leaflet Preview 2" class="preview-image">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Information Table for Item 10 -->
        <div class="info-table-container">
            <div class="info-header">Information</div>
            <table class="info-table">
                <tr>
                    <td>Created</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Changed</td>
                    <td>2018-05-29</td>
                </tr>
                <tr>
                    <td>Version</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>14.23 MB</td>
                </tr>
                <tr>
                    <td>System</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Downloads</td>
                    <td>7,077</td>
                </tr>
            </table>
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

    <!-- Image Viewer Overlay -->
    <div class="image-viewer-overlay" id="imageViewer">
        <div class="image-viewer-container">
            <div class="image-viewer-close" onclick="closeImageViewer()">
                <i class="fas fa-times"></i>
            </div>
            <div class="image-viewer-nav image-viewer-prev" onclick="navigateImage(-1)">
                <i class="fas fa-chevron-left"></i>
            </div>
            <img src="" alt="Enlarged preview" class="image-viewer-img" id="enlargedImage">
            <div class="image-viewer-nav image-viewer-next" onclick="navigateImage(1)">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="image-counter" id="imageCounter">1/2</div>
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

        // Close PDF viewer when clicking outside the PDF container
        document.getElementById('pdfViewer').addEventListener('click', function(e) {
            if (e.target === this) {
                closePdfViewer();
            }
        });

        // Image Gallery Variables
        let currentImageSet = [];
        let currentImageIndex = 0;
        let currentGalleryId = '';

        // Image Gallery Functions
        function openImageViewer(imageSrc, index, galleryId) {
            const viewer = document.getElementById('imageViewer');
            const image = document.getElementById('enlargedImage');
            const counter = document.getElementById('imageCounter');
            
            // Set up the image set based on gallery ID
            setupImageSet(galleryId);
            
            // Set the current index
            currentImageIndex = index;
            
            // Update the image and counter
            image.src = imageSrc;
            updateImageCounter();
            
            // Show the viewer
            viewer.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function setupImageSet(galleryId) {
            currentGalleryId = galleryId;
            
            // Define image sets for each gallery
            const imageSets = {
                'brochure1': [
                    'asset/image/AMC Flyer.png',
                    'asset/image/AMC Flyer-2.png'
                ],
                'trifold': [
                    'asset/image/Flyer for Travellers_Philgrims.png',
                    'asset/image/Flyer for Travellers_Philgrims2.png'
                ],
                'malaria-day': [
                    'asset/image/malaria-day-2019-preview.png',
                    'asset/image/malaria-day-2019-preview-2.png'
                ],
                'health-banner': [
                    'asset/image/Public Awareness Day 2018 UHC Trilingual10.png',
                    'asset/image/Public Awareness Day 2018 UHC Trilingual2.png'
                ],
                'world-health': [
                    'asset/image/WHD2018 Poster.png'
                ],
                'flyer': [
                    'asset/image/Immi_Sampath1.png'
                ],
                'immigration1': [
                    'asset/image/immigration-leaflet-1.png'
                ],
                'blood-test': [
                    'asset/image/blood-test-poster.png'
                ],
                'press-ad': [
                    'asset/image/press-ad-2018.png'
                ],
                'facts-leaflet': [
                    'asset/image/facts-leaflet-1.png',
                    'asset/image/facts-leaflet-2.png'
                ]
            };
            
            // Set the current image set
            currentImageSet = imageSets[galleryId] || [];
        }

        function closeImageViewer() {
            document.getElementById('imageViewer').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function navigateImage(direction) {
            if (currentImageSet.length <= 1) return;
            
            // Calculate new index with wrapping
            currentImageIndex = (currentImageIndex + direction + currentImageSet.length) % currentImageSet.length;
            
            // Update the displayed image
            document.getElementById('enlargedImage').src = currentImageSet[currentImageIndex];
            updateImageCounter();
        }

        function updateImageCounter() {
            if (currentImageSet.length === 0) return;
            
            const counter = document.getElementById('imageCounter');
            counter.textContent = `${currentImageIndex + 1}/${currentImageSet.length}`;
            
            // Show/hide navigation buttons based on the number of images
            const prevBtn = document.querySelector('.image-viewer-prev');
            const nextBtn = document.querySelector('.image-viewer-next');
            
            if (currentImageSet.length <= 1) {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
                counter.style.display = 'none';
            } else {
                prevBtn.style.display = 'flex';
                nextBtn.style.display = 'flex';
                counter.style.display = 'block';
            }
        }

        // Close image viewer when clicking outside the image container
        document.getElementById('imageViewer').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageViewer();
            }
        });

        // Keyboard navigation for image viewer
        document.addEventListener('keydown', function(e) {
            if (document.getElementById('imageViewer').style.display !== 'flex') return;
            
            if (e.key === 'ArrowLeft') {
                navigateImage(-1);
            } else if (e.key === 'ArrowRight') {
                navigateImage(1);
            } else if (e.key === 'Escape') {
                closeImageViewer();
            }
        });
    </script>

    <?php include 'include/footer.php'; ?>
</body>
</html>