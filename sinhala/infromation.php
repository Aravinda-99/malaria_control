<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa; /* A light background for the whole page */
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            /* Sizing and Display */
            height: 60vh; /* Reduced from 80vh to 60vh */
            min-height: 400px;
            display: flex;
            flex-direction: column; /* Stack text content on top of the nav bar */
            justify-content: center;
            align-items: center;
            text-align: center;
            /* Background Image & Overlay */
            position: relative;
            background-image: url('asset/image/infro.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* This pseudo-element creates the dark overlay */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            z-index: 1; /* Sits above the background image */
        }

        /* --- Hero Content Styling --- */
        .hero-content {
            position: relative; /* Ensure it's on top of the overlay */
            z-index: 2;
            flex-grow: 1; /* Pushes the nav to the bottom */
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

        /* --- NEW CSS FOR DATA TABLE SECTION --- */

        .data-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .controls-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            flex-wrap: wrap; /* Allow controls to wrap on smaller screens */
            gap: 16px;
        }

        .search-input-container {
            flex-grow: 1;
        }
        
        .search-input-container input {
            width: 100%;
            max-width: 400px;
            padding: 12px 16px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #e9ecef;
        }

        .actions-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .actions-container select {
            padding: 12px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #fff;
        }

        .actions-container .search-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            background-color: rgb(12, 100, 0); /* Maroon color */
            color: white;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .actions-container .search-btn:hover {
            background-color: #660000; /* Darker maroon on hover */
        }

        .table-wrapper {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            overflow-x: auto; /* Ensures table is responsive */
        }

        table.data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }

        .data-table th {
            font-weight: 600;
            color: #495057;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .data-table th.sortable {
            cursor: pointer;
        }

        .data-table th.sortable:hover {
            background-color: #f8f9fa;
        }

        .data-table th svg {
            width: 12px;
            height: 12px;
            margin-left: 8px;
            vertical-align: middle;
            fill: #6c757d;
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }

        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .pagination-nav button {
            background-color: #fff;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 8px 14px;
            margin: 0 2px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .pagination-nav button.active, .pagination-nav button:hover {
            background-color: #e9ecef;
            border-color: #ced4da;
        }
        
        .pagination-nav button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .pagination-per-page {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6c757d;
        }

        .pagination-per-page select {
            padding: 8px;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            background-color: #fff;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .controls-container {
                flex-direction: column;
                align-items: stretch;
            }
            .search-input-container input {
                max-width: 100%;
            }

            .pagination-container {
                flex-direction: column;
                align-items: center;
            }
        }

        /* --- Mobile-friendly table layout (stacked rows) --- */
        @media (max-width: 600px) {
            .table-wrapper {
                overflow: visible;
            }
            .data-table thead {
                display: none;
            }
            .data-table,
            .data-table tbody,
            .data-table tr,
            .data-table td {
                display: block;
                width: 100%;
            }
            .data-table tr {
                background: #fff;
                border: 1px solid #e9ecef;
                border-radius: 8px;
                margin-bottom: 12px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.03);
            }
            .data-table td {
                border-bottom: 1px solid #f1f3f5;
                padding: 12px 16px 12px 46%;
                position: relative;
                text-align: left;
            }
            .data-table td:last-child {
                border-bottom: none;
            }
            .data-table td::before {
                position: absolute;
                left: 12px;
                top: 12px;
                width: 32%;
                color: #6c757d;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.3px;
                font-size: 0.75rem;
                content: attr(data-label);
            }
            /* Provide labels for each column */
            .data-table tbody tr td:nth-child(1) { --label: '#'; }
            .data-table tbody tr td:nth-child(2) { --label: 'Issued Date'; }
            .data-table tbody tr td:nth-child(3) { --label: 'Circular No'; }
            .data-table tbody tr td:nth-child(4) { --label: 'Circular Topic'; }
            .data-table tbody tr td:nth-child(n) { position: relative; }
            .data-table tbody tr td:nth-child(n)::before { content: var(--label); }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <!-- This container holds the main heading and subheading -->
        <div class="hero-content">
            <h1>Information</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <!-- START: NEW DATA TABLE SECTION -->
    <section class="data-section">
        <div class="controls-container">
            <div class="search-input-container">
                <input type="text" placeholder="Search">
            </div>
            <div class="actions-container">
                <select name="language" id="language-select">
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <option value="french">French</option>
                </select>
                <button class="search-btn">Search</button>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Issued Date</th>
                        <th class="sortable">
                            Circular No
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                        </th>
                        <th class="sortable">
                            Circular Topic
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repeat this block for each row of data -->
                    <tr>
                        <td>1</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Guidelines on malaria chemotherapy and management of patients with malaria</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Risk of malaria resurgence in Sri Lanka due to high number of cases being reported</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Guidelines on malaria chemotherapy and management of patients with malaria</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Risk of malaria resurgence in Sri Lanka due to high number of cases being reported</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Guidelines on malaria chemotherapy and management of patients with malaria</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Guidelines on malaria chemotherapy and management of patients with malaria</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Risk of malaria resurgence in Sri Lanka due to high number of cases being reported</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Risk of malaria resurgence in Sri Lanka due to high number of cases being reported</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Risk of malaria resurgence in Sri Lanka due to high number of cases being reported</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>2014-08-15</td>
                        <td>2014-08-15</td>
                        <td>Guidelines on malaria chemotherapy and management of patients with malaria</td>
                    </tr>
                    <!-- End of data rows -->
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            <div class="pagination-nav">
                <button disabled>&lt;</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>&gt;</button>
            </div>
            <div class="pagination-per-page">
                <select name="items-per-page" id="items-per-page-select">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
                <span>/Page</span>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>

</body>
</html>
