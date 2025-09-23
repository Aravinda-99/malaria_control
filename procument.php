<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement - Malaria Control</title>
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
            background-image: url('asset/image/news.jpg');
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

        /* --- Procurement Section Styling --- */
        .procurement-section {
            padding: 4rem 2rem;
            background-color: #fff;
        }

        .procurement-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .display-controls {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            align-items: center;
        }

        .display-controls label {
            margin-right: 10px;
            color: #666;
        }

        .display-controls select {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fff;
        }

        .procurement-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #e0e0e0;
        }

        .procurement-table th {
            background-color: #f7f7f7;
            color: #333;
            font-weight: 600;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }

        .procurement-table td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: top;
        }

        .procurement-table tr:hover {
            background-color: #f9f9f9;
        }

        .procurement-table .title-column {
            width: 60%;
        }

        .procurement-table .date-column {
            width: 20%;
            text-align: center;
        }

        .procurement-table .hits-column {
            width: 20%;
            text-align: center;
        }

        .hits-badge {
            display: inline-block;
            padding: 5px 10px;
            background-color: #6c757d;
            color: white;
            border-radius: 15px;
            font-size: 0.85rem;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .procurement-section {
                padding: 2rem 1rem;
            }

            .procurement-table th,
            .procurement-table td {
                padding: 10px;
            }

            .hits-badge {
                padding: 3px 8px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .procurement-table {
                display: block;
                overflow-x: auto;
            }

            .display-controls {
                justify-content: center;
            }
        }

        /* Stacked mobile layout for very small screens */
        @media (max-width: 480px) {
            .procurement-table thead {
                display: none;
            }
            
            .procurement-table tbody,
            .procurement-table tr,
            .procurement-table td {
                display: block;
                width: 100%;
            }
            
            .procurement-table tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            
            .procurement-table td {
                text-align: left;
                padding: 12px 15px;
                position: relative;
                padding-left: 40%;
                border-bottom: 1px solid #eee;
            }
            
            .procurement-table td:last-child {
                border-bottom: none;
            }
            
            .procurement-table td::before {
                position: absolute;
                left: 10px;
                width: 35%;
                padding-right: 10px;
                white-space: nowrap;
                font-weight: bold;
                content: attr(data-label);
            }
            
            .procurement-table .hits-column {
                text-align: left;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Procurement</h1>
            <p>Information on tenders and procurement opportunities for the Anti Malaria Campaign</p>
        </div>
    </section>

    <section class="procurement-section">
        <div class="procurement-container">
            <div class="display-controls">
                <label for="display-count">Display #</label>
                <select id="display-count">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20" selected>20</option>
                    <option value="50">50</option>
                    <option value="all">All</option>
                </select>
            </div>

            <table class="procurement-table">
                <thead>
                    <tr>
                        <th class="title-column">Title</th>
                        <th class="date-column">Published Date</th>
                        <th class="hits-column">Hits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Title">Advertisement for a Consultancy for the Development of the National Monitoring & Evaluation Plan from 2018 to 2022 for the Anti malaria campaign, Sri Lanka</td>
                        <td data-label="Published Date" class="date-column">30 October 2018</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 11209</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Procurement of Vector Control Equipment for Northern and Eastern Provinces</td>
                        <td data-label="Published Date" class="date-column">15 March 2019</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 9845</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Request for Expression of Interest: Technical Support for Community Engagement in Malaria Prevention</td>
                        <td data-label="Published Date" class="date-column">22 May 2019</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 8723</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Tender Notice for Laboratory Equipment and Diagnostic Supplies</td>
                        <td data-label="Published Date" class="date-column">10 August 2019</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 7654</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Procurement of IT Equipment for District Malaria Offices</td>
                        <td data-label="Published Date" class="date-column">05 November 2019</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 6932</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Tender for Educational Materials on Malaria Prevention</td>
                        <td data-label="Published Date" class="date-column">12 January 2020</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 6541</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Call for Proposals: Research on Vector Resistance Patterns</td>
                        <td data-label="Published Date" class="date-column">28 February 2020</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 5870</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Supply and Delivery of Insecticide-Treated Bed Nets</td>
                        <td data-label="Published Date" class="date-column">15 April 2020</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 5432</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Procurement of Field Vehicles for Surveillance Teams</td>
                        <td data-label="Published Date" class="date-column">10 June 2020</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 5129</span></td>
                    </tr>
                    <tr>
                        <td data-label="Title">Technical Support Services for Malaria Information System Upgrade</td>
                        <td data-label="Published Date" class="date-column">25 August 2020</td>
                        <td data-label="Hits" class="hits-column"><span class="hits-badge">Hits: 4875</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script>
        // Add functionality to the display count selector
        document.getElementById('display-count').addEventListener('change', function() {
            // In a real implementation, this would trigger a reload with the new page size
            console.log('Display count changed to:', this.value);
        });
    </script>

</body>
</html>