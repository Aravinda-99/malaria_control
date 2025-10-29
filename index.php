<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaria Control Campaign</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            color: #f0f0f0;
            /* The user specified a background image path */
            background-image: url('asset/image/welcome1.png');
            /* Fallback color in case the image doesn't load */
            background-color:rgba(0, 44, 2, 0.99);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Main Container Section */
        .main-section {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            padding: 2rem 2rem 0 2rem;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.1); /* Light overlay to make background image more visible */
        }

        /* Header Styles */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
            flex-wrap: wrap; /* Allows header to wrap on smaller screens */
            text-align: center;
        }

        .header .logos {
            margin-top: 4rem;
            display: flex;
            gap: 1rem;
        }

        .header .logos img {
            height: 100px;
            width: auto;
        }

        .header .title p {
            margin: 0.25rem 0;
            font-weight: 500;
        }

        .header .title .english-title {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Language Selection Cards Container */
        .language-selector {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap; /* Allows cards to wrap on smaller screens */
            width: 100%;
            max-width: 900px;
        }

        /* Individual Language Card Styles */
        .lang-card {
            width: 250px;
            height: 150px;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .lang-card:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: #ffffff;
            transform: translateY(-5px);
        }

        .lang-card h2 {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .lang-card p {
            margin: 0.5rem 0 0;
            font-size: 0.9rem;
            color: #cccccc;
        }

        /* Footer Styles */
        .footer {
            margin-top: 3rem;
            font-size: 0.7rem;
            color: #ffffff;
            text-align: center;
            background-color: rgba(2, 24, 0, 0.55);
            padding: 0.05rem 2rem;
            border-radius: 0;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            margin-left: -2rem;
            margin-right: -2rem;
            margin-bottom: 1rem;
        }

        /* Responsive Design for smaller screens */
        @media (max-width: 920px) {
            .language-selector {
                flex-direction: column;
            }
            .lang-card {
                width: 80%;
                max-width: 300px;
            }
        }
         @media (max-width: 600px) {
            .header {
                flex-direction: column;
                gap: 1rem;
            }
            .main-section {
                 padding: 1rem;
            }
        }

    </style>
</head>
<body>

    <section class="main-section">
        
        <!-- Header with logos and campaign title -->
        <header class="header">
            <div class="logos">
                <!-- Placeholder for the second logo -->
                <img src="asset/image/AMC_logo_white.png" alt="Campaign Logo 2">
            </div>
            <!-- <div class="title">
                <p>මැලේරියා මර්දන ව්‍යාපාරය</p>
                <p>மலேரியா கட்டுப்பாட்டு பிரச்சாரம்</p>
                <p class="english-title">MALARIA CONTROL CAMPAIGN</p>
            </div> -->
        </header>

        <!-- Main content area with language selection cards -->
        <main class="language-selector">
            <!-- Sinhala Language Card -->
            <div class="lang-card" onclick="location.href='#sinhala'">
                <h2>ආයුබෝවන්</h2>
                <p>සිංහලෙන් බලන්න</p>
            </div>
            
            <!-- Tamil Language Card -->
            <div class="lang-card" onclick="location.href='#tamil'">
                <h2>வணக்கம்</h2>
                <p>சிங்களத்தில் பாருங்கள்</p>
            </div>

            <!-- English Language Card -->
            <div class="lang-card" onclick="location.href='home.php'">
                <h2>WELCOME</h2>
                <p>VIEW IN ENGLISH</p>
            </div>
        </main>
        
        <!-- Footer with copyright information -->
        <footer class="footer">
            <p>© 2025 Copyright: Anti-Malaria Campaign - Sri Lanka</p>
        </footer>

    </section>

</body>
</html>
