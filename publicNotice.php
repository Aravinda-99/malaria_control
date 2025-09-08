<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Notice - Malaria Control</title>
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

        /* --- Public Notice Section Styling --- */
        .notice-section {
            padding: 4rem 2rem;
            background-color: #fff;
        }

        .notice-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .notice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .notice-table th {
            background-color:rgb(105, 0, 0);
            color: #fff;
            font-weight: 700;
            padding: 1rem;
            text-align: left;
            border-bottom: 2px solid #ddd;
            border-right: 1px solid #ddd;
            font-size: 1.1rem;
        }

        .notice-table th:last-child {
            border-right: none;
        }

        .notice-table th:nth-child(2),
        .notice-table th:nth-child(3),
        .notice-table th:nth-child(4) {
            text-align: center;
            width: 120px;
        }

        .notice-table th:nth-child(4) {
            width: 150px;
        }

        .notice-table td {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            border-right: 1px solid #ddd;
            vertical-align: top;
        }

        .notice-table td:last-child {
            border-right: none;
        }

        .notice-table tr:nth-child(even) {
            background-color: #F9F9F9;
        }

        .notice-table tr:nth-child(odd) {
            background-color: #fff;
        }

        .notice-table tr:hover {
            background-color: #f0f8ff;
        }

        .notice-description {
            font-size: 1rem;
            line-height: 1.5;
            color: #333;
        }

        .notice-date {
            font-size: 0.95rem;
            color: #666;
            text-align: center;
        }

        .notice-download {
            text-align: center;
        }

        .download-icon {
            color: #A00000;
            font-size: 32px;
            cursor: pointer;
            transition: color 0.3s;
            text-decoration: none;
        }

        .download-icon:hover {
            color: #800000;
        }

        .download-icon.multiple {
            margin-right: 4px;
        }

        .download-icon.multiple:last-child {
            margin-right: 0;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .notice-section {
                padding: 2rem 1rem;
            }

            .notice-table {
                font-size: 0.8rem;
            }

            .notice-table th,
            .notice-table td {
                padding: 0.75rem 0.5rem;
            }

            .notice-table th:nth-child(2),
            .notice-table th:nth-child(3),
            .notice-table th:nth-child(4) {
                width: 100px;
            }

            .notice-table th:nth-child(4) {
                width: 120px;
            }
        }

        @media (max-width: 480px) {
            .notice-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .notice-table th,
            .notice-table td {
                min-width: 120px;
            }

            .notice-description {
                white-space: normal;
                min-width: 200px;
            }
        }

        /* Stacked mobile layout for very small screens */
        @media (max-width: 600px) {
            .notice-table thead {
                display: none;
            }
            .notice-table {
                display: block;
                overflow: visible;
                white-space: normal;
            }
            .notice-table tbody,
            .notice-table tr,
            .notice-table td {
                display: block;
                width: 100%;
            }
            .notice-table tr {
                background: #fff;
                border: 1px solid #e9ecef;
                border-radius: 8px;
                margin-bottom: 12px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.03);
            }
            .notice-table td {
                padding: 12px 16px 12px 46%;
                position: relative;
                border-right: none;
                text-align: left;
            }
            .notice-table td:last-child {
                border-bottom: none;
            }
            .notice-table td::before {
                position: absolute;
                left: 12px;
                top: 12px;
                width: 32%;
                color: #6c757d;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.3px;
                font-size: 0.72rem;
                content: attr(data-label);
            }
            /* Labels for each column */
            .notice-table tbody tr td:nth-child(1) { --label: 'Description'; }
            .notice-table tbody tr td:nth-child(2) { --label: 'Date of Published'; }
            .notice-table tbody tr td:nth-child(3) { --label: 'Closing Date'; }
            .notice-table tbody tr td:nth-child(4) { --label: 'Notice'; }
            .notice-table tbody tr td:nth-child(n)::before { content: var(--label); }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Public Notice</h1>
            <p>Stay informed with the latest public notices and procurement information</p>
        </div>
    </section>

    <section class="notice-section">
        <div class="notice-container">
            <table class="notice-table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Date of Published</th>
                        <th>Closing Date</th>
                        <th>Notice</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="notice-description">Invitation for Bids - Climate Smart Irrigated Agriculture Project (CSIAP)</td>
                        <td class="notice-date">30th Sep 2020</td>
                        <td class="notice-date">15th Oct 2020</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Procurement of 27 Laptops and 27 Multi Media Projectors with Screens</td>
                        <td class="notice-date">10th Feb 2021</td>
                        <td class="notice-date">25th Feb 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">National Competitive Bidding - CSIAP (Uva Province)</td>
                        <td class="notice-date">15th Mar 2021</td>
                        <td class="notice-date">30th Mar 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Malaria Control Equipment Procurement - Northern Province</td>
                        <td class="notice-date">22nd Apr 2021</td>
                        <td class="notice-date">07th May 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Vector Control Supplies - Eastern Province</td>
                        <td class="notice-date">05th May 2021</td>
                        <td class="notice-date">20th May 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Healthcare Worker Training Program Equipment</td>
                        <td class="notice-date">18th Jun 2021</td>
                        <td class="notice-date">03rd Jul 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Malaria Surveillance System Upgrade</td>
                        <td class="notice-date">12th Jul 2021</td>
                        <td class="notice-date">27th Jul 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Community Outreach Program Materials</td>
                        <td class="notice-date">28th Aug 2021</td>
                        <td class="notice-date">12th Sep 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Research Laboratory Equipment Procurement</td>
                        <td class="notice-date">14th Sep 2021</td>
                        <td class="notice-date">29th Sep 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="notice-description">Emergency Response Team Supplies</td>
                        <td class="notice-date">03rd Oct 2021</td>
                        <td class="notice-date">18th Oct 2021</td>
                        <td class="notice-download">
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                            <i class="fas fa-file-pdf download-icon multiple"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>
</html>
