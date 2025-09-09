<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelers - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f9f9f9; /* A light background for the whole page */
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            /* Sizing and Display */
            height: 60vh;
            min-height: 400px;
            display: flex;
            flex-direction: column; /* Stack text content on top of the nav bar */
            justify-content: center;
            align-items: center;
            text-align: center;

            /* Background Image & Overlay */
            position: relative;
            background-image: url('asset/image/travelbanner.png');
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
        
        /* --- Registration Form Section --- */
        .registration-section {
            padding: 4rem 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            max-width: 1000px; /* increased width */
            width: 100%;
        }
        
        .form-container h2 {
            color: rgb(107, 0, 0); /* A brown color similar to the image */
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }
        
        .form-container .subtitle {
            font-size: 1.1rem;
            color: #333;
            margin-top: 0.5rem;
        }

        .form-container .instructions {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.25rem;
            margin-bottom: 1.5rem;
        }
        
        .form-container .terms {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .form-container .terms input[type="checkbox"] {
             width: 18px;
             height: 18px;
             margin-right: 10px;
        }

        .form-container .terms label {
            font-size: 1rem;
            color: #333;
        }

        .personal-data {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 2rem;
            background-color: #ffffff;
            margin-bottom: 1.5rem;
        }
        
        .personal-data h3 {
            font-size: 1rem;
            font-weight: bold;
            margin: 0 0 0.25rem 0;
            color: #333;
        }
        
        .personal-data p {
            font-size: 0.9rem;
            color: #666;
            margin: 0 0 2rem 0;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            flex: 1;
            min-width: 250px;
            display: flex;
            flex-direction: column;
        }
        
        .form-group label {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            border: none;
            border-bottom: 1px solid #e0e0e0;
            padding: 0.5rem 0;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        /* Match select styling to inputs */
        .form-group select {
            border: none;
            border-bottom: 1px solid #e0e0e0;
            padding: 0.5rem 0;
            font-size: 1rem;
            outline: none;
            background: transparent;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-bottom-color: #8B4513;
        }
        
        .pin-group {
             border: 1px solid #e0e0e0;
             border-radius: 8px;
             padding: 1rem;
             background-color: #ffffff;
        }
        
        .pin-group label {
            font-size: 0.8rem;
            color: #666;
            display: block;
        }
        
        .pin-group input {
            border: none;
            outline: none;
            font-size: 1rem;
            width: 100%;
            padding: 0.5rem 0 0 0;
        }

        .submit-btn {
            background-color:rgb(117, 0, 0); /* Darker brown for the button */
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 2rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #4a2511;
        }


        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
            .registration-section {
                padding: 2rem 1rem;
            }
            .form-row {
                flex-direction: column;
                gap: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <!-- This section is from your original code -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Travelers</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <!-- This is the new registration form section -->
    <section class="registration-section">
        <div class="form-container">
            <h2>REGISTER HERE</h2>
            <p class="subtitle">to obtain Malaria prevention tablets free from Antimalaria Campaign, Narahenpita</p>
            <p class="instructions">Fill in the data for profile. It will take a couple of minutes. You only need a passport.</p>
            
            <div class="terms">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">I agree with <a href="#">Terms of use</a></label>
            </div>

            <form>
                <div class="personal-data">
                    <h3>Personal data</h3>
                    <p>Specify exactly as in your passport</p>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First name</label>
                            <input type="text" id="first-name" name="first-name" value="Alexander">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="second-name">Second name</label>
                            <input type="text" id="second-name" name="second-name" value="Smith">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="pob">Place of Birth</label>
                            <select id="pob" name="pob">
                                <option value="">Select place...</option>
                                <option value="colombo">Colombo</option>
                                <option value="kandy">Kandy</option>
                                <option value="galle">Galle</option>
                                <option value="jaffna">Jaffna</option>
                                <option value="matara">Matara</option>
                                <option value="kurunegala">Kurunegala</option>
                                <option value="new_york">New York, USA</option>
                                <option value="london">London, UK</option>
                                <option value="dubai">Dubai, UAE</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="pin-group">
                    <label for="pin">123-45-678</label>
                    <input type="text" id="pin" name="pin" placeholder="✓ Your PIN">
                </div>

                <button type="submit" class="submit-btn">Go Next</button>
            </form>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>
</html>
