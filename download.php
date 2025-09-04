<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - Malaria Control</title>
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa; /* Light grey background for the whole page */
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling (Existing) --- */
        .hero-section {
            height: 60vh;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/down.png');d1.png
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

        /* --- NEW: Reports Download Section --- */
        .reports-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
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

        /* Make search wider */
        .filter-bar input[type="text"] {
            flex: 3 1 520px; /* grow more, preferred width larger */
        }

        /* Make Type select narrower */
        .filter-bar select:nth-of-type(1) {
            flex: 0 0 180px; /* fixed-ish narrower width */
        }

        /* Make Language select narrower */
        .filter-bar select:nth-of-type(2) {
            flex: 0 0 160px;
        }

        .filter-bar .search-btn {
            padding: 0.75rem 2rem;
            border: none;
            background-color: #981b1b; /* Dark Red */
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

        /* --- Reports Grid --- */
        .reports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
        }

        /* --- Report Card --- */
        .report-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
            display: flex;
            gap: 1.5rem;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .report-cover img {
            width: 130px;
            height: 180px;
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .report-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .report-details h3 {
            font-size: 0.9rem;
            color: #666;
            margin: 0 0 0.25rem;
            font-weight: 500;
        }

        .report-details h2 {
            font-size: 1.25rem;
            color: #333;
            margin: 0;
            font-weight: 600;
        }

        .report-details p {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.6;
            margin-top: 0.75rem;
        }

        .report-actions {
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .btn {
            padding: 0.6rem 1.5rem;
            border-radius: 50px; /* Pill-shaped buttons */
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn-view {
            background-color: #981b1b;
            color: #fff;
        }
        .btn-view:hover {
            background-color: #7a1515;
            box-shadow: 0 2px 5px rgba(152, 27, 27, 0.3);
        }

        .btn-download {
            background-color: #fff;
            color: #555;
            border: 1px solid #ccc;
        }
        .btn-download:hover {
            background-color: #f2f2f2;
            border-color: #aaa;
        }

        /* --- Pagination --- */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 3rem;
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
            background-color: #981b1b;
            color: white;
            font-weight: 600;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .reports-grid {
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
            .reports-container {
                padding: 3rem 1rem;
            }
             .filter-bar {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
             .report-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
             }
             .report-actions {
                justify-content: center;
             }
             .report-details p {
                margin-bottom: 1rem;
             }
        }

    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Download</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <!-- NEW CONTENT STARTS HERE -->
    <main class="reports-container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" placeholder="Search">
            <select>
                <option value="">Type</option>
                <option value="annual">Annual Report</option>
                <option value="quarterly">Quarterly Report</option>
            </select>
            <select>
                <option value="">English</option>
                <option value="sinhala">Sinhala</option>
                <option value="tamil">Tamil</option>
            </select>
            <button class="search-btn">Search</button>
        </div>

        <!-- Reports Grid -->
        <div class="reports-grid">
            <!-- Card 1 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d1.png" alt="Annual Report 2018 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2018</h3>
                        <h2>Annual Report</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d2.png" alt="Annual Report 2017 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2014</h3>
                        <h2>Annual Report</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d3.png" alt="Annual Report 2016 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2013</h3>
                        <h2>Annual Report</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d4.png" alt="Annual Report 2011 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2011</h3>
                        <h2>Annual Report</h2>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>

             <!-- Card 5 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d5.png" alt="Annual Report 2008 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2008</h3>
                        <h2>Annual Report</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d6.png" alt="Annual Report 2007 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2007</h3>
                        <h2>Annual Report</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d7.png" alt="Annual Report 2007 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2006</h3>
                        <h2>Annual Report</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
             <!-- Card 6 -->
            <div class="report-card">
                <div class="report-cover">
                    <img src="asset/image/d8.png" alt="Annual Report 2007 Cover">
                </div>
                <div class="report-details">
                    <div>
                        <h3>Anti Malaria Campaign 2005</h3>
                        <h2>Annual Report</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="report-actions">
                        <a href="#" class="btn btn-view">View</a>
                        <a href="#" class="btn btn-download">Download PDF</a>
                    </div>
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

    <?php include 'include/footer.php'; ?>

</body>
</html>
