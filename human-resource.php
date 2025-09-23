<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Resources Profile</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* Staff Page Specific Styles - Using unique prefixes to avoid conflicts */
        body.staff-page-body {
            font-family: Arial, sans-serif !important;
            background-color: #f4f4f4 !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        /* Hero Section with Background Image */
        .staff-hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('asset/image/Container.png');
            height: 60vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            border-top: none;
            border-bottom: 2px solid #fff;
            margin: 0;
        }

        .staff-hero-section h1 {
            font-size: 3rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .staff-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* Responsive adjustments for hero section */
        @media (max-width: 768px) {
            .staff-hero-section {
                height: 40vh;
            }
            .staff-hero-section h1 {
                font-size: 2rem;
            }
            .staff-hero-section p {
                font-size: 1rem;
            }
        }

        /* Content Section */
        .content-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .content-container {
            max-width: 1000px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Styling for images within the container */
        .content-container img {
            width: 100%;
            height: auto;
            display: block;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Add space between consecutive images */
        .content-container img + img {
            margin-top: 30px;
        }

        /* Table Styling */
        .table-container {
            margin-top: 40px;
            overflow-x: auto;
        }

        .table-container h2 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .carder-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .carder-table thead {
            background-color: #007bff;
            color: white;
        }

        .carder-table th {
            padding: 15px 12px;
            text-align: left;
            font-weight: 600;
            font-size: 0.9rem;
            border: 1px solid #ddd;
        }

        .carder-table td {
            padding: 12px;
            border: 1px solid #ddd;
            font-size: 0.85rem;
            vertical-align: top;
        }

        .carder-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .carder-table tbody tr:hover {
            background-color: #e3f2fd;
        }

        .carder-table .total-row {
            background-color: #e8f5e8 !important;
            font-weight: bold;
            border-top: 2px solid #28a745;
        }

        .carder-table .total-row:hover {
            background-color: #d4edda !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content-section {
                padding: 20px 15px;
            }
            
            .table-container {
                margin-top: 30px;
            }
            
            .table-container h2 {
                font-size: 1.3rem;
            }
            
            .carder-table th,
            .carder-table td {
                padding: 8px 6px;
                font-size: 0.8rem;
            }
            
            .carder-table th:first-child,
            .carder-table td:first-child {
                min-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .carder-table th,
            .carder-table td {
                padding: 6px 4px;
                font-size: 0.75rem;
            }
            
            .table-container h2 {
                font-size: 1.2rem;
            }
        }

    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Human Resources Profile</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>

<section class="content-section">
    <div class="content-container">
        <img src="asset/image/human-resource/h1.png" alt="Charts and maps showing entomological surveillance data for 2016.">
        
        <!-- Approved Carder Table -->
        <div class="table-container">
            <h2>Approved Carder : AMC_Cardre</h2>
            <table class="carder-table">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Approved at 31.12.2016</th>
                        <th>In position 2013.03.16</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Director</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Deputy Director</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Consultant Community Physician (Medical Consultant)</td>
                        <td>3</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Medical Officer - Permanent</td>
                        <td>8</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Medical Officer - Temporary Attachment</td>
                        <td>-</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Entomologist</td>
                        <td>4</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Parasitologist</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>RMO / AMO (Registered/Assistant Medical Officer)</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Special Grade Entomological Assistant</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Special Grade PHLT</td>
                        <td>2</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Health Entomological Officer</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Medical Laboratory Technologist</td>
                        <td>3</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Public Health Inspector</td>
                        <td>2</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Public Health Laboratory Technician</td>
                        <td>22</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Information & Communication Technology Assistant</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Health Education Officer</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Information Communication Technology Officer</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Development Assistant</td>
                        <td>4</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Medical Record Assistant</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Planning and Programme Assistant</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Public Health Field Officer</td>
                        <td>10</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Public Management Assistant</td>
                        <td>17</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Medical Supplies Assistant</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Telephone Operator</td>
                        <td>0</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Cinema Operator</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Health Driver</td>
                        <td>19</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Health Laboratory Aide</td>
                        <td>3</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>KKS</td>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Lift Operator</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Saukya Karya Sahayaka (Junior)</td>
                        <td>20</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>Saukya Karya Sahayaka (Ordinary) -A'pura</td>
                        <td>-</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Saukya Karya Sahayaka (Ordinary)</td>
                        <td>25</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Spray Machine Operator</td>
                        <td>19</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Development Officer</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Saukya Karya Sahayaka (Junior) Casual</td>
                        <td>0</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Pharmacist</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Technical Officer (Civil)</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Generator Operator</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Pumber/ Pumb Machine Operator</td>
                        <td>1</td>
                        <td>0</td>
                    </tr>
                    <tr class="total-row">
                        <td><strong>Total Approved</strong></td>
                        <td><strong>196</strong></td>
                        <td><strong>123</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'include/footer.php'; ?>
</body>
</html>