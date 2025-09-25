<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us & Malaria Info</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Basic Resets and Font Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Main Header Container */
        .about-header-container {
            width: 100%;
            border-bottom: none;
            margin: 0;
        }

        /* Top decorative red bar */
        .about-top-bar {
            height: 5px;
            background-color:rgb(0, 73, 0); /* Dark red */
        }

        /* Hero Section with Background Image */
        .about-hero-section {
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

        .about-hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .about-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* Navigation Bar */
        .about-nav {
            background-color: rgb(209, 209, 209);
            display: flex;
            justify-content: center;
            padding: 0 2rem;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .about-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            width: 100%;
            flex-wrap: nowrap;
            align-items: center;
        }

        .about-nav ul li {
            display: inline-block;
            white-space: nowrap;
            margin: 0;
        }

        .about-nav ul li a {
            display: block;
            padding: 1rem 1.5rem;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        .about-nav ul li a:hover {
            background-color:rgb(153, 153, 153);
        }

        /* Special style for the first navigation item */
        .about-nav ul li:first-child a {
            background-color:rgb(0, 95, 8);
            color: #ffffff;
        }

        .about-nav ul li:first-child a:hover {
            background-color: rgb(0, 59, 5);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-hero-section {
                height: 40vh;
            }
            .about-hero-section h1 {
                font-size: 2rem;
            }
            .about-hero-section p {
                font-size: 1rem;
            }
            .about-nav {
                padding: 0.5rem 0;
            }
            .about-nav ul {
                flex-direction: column;
                align-items: center;
                flex-wrap: wrap;
            }
            .about-nav ul li a {
                padding: 0.75rem 1rem;
                width: 100vw;
                text-align: center;
            }
        }

        /* Vision and Mission Section Styles */
        .about-vision-mission-container {
            width: 100%;
            display: flex;
            color: #333;
        }

        .about-vision-mission-container .text-content,
        .about-vision-mission-container .image-content {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-vision-mission-container .text-content {
            background-color: rgb(0, 82, 7);
            color: white;
            padding: 2rem;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .about-vision-mission-container .text-content h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .about-vision-mission-container .text-content p {
            font-size: 1rem;
            line-height: 1.4;
        }

        .about-vision-mission-container .image-content img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }
        
        /* Reverse order for the mission section */
        #mission {
            flex-direction: row-reverse;
        }

        /* Responsive adjustments for vision and mission */
        @media (max-width: 992px) {
            .about-vision-mission-container {
                flex-direction: column;
            }
            #mission {
                flex-direction: column;
            }
            .about-vision-mission-container .text-content,
            .about-vision-mission-container .image-content {
                width: 100%;
            }
            .about-vision-mission-container .text-content {
                padding: 2rem;
            }
            .about-vision-mission-container .text-content h2 {
                font-size: 2rem;
            }
        }
        
        /* =============================================== */
        /* Styles for the Guiding Principles Section      */
        /* =============================================== */
        .guiding-principles-container {
            width: 100%;
            display: flex;
            padding: 4rem 0;
            background-color: #ffffff;
            color: #333;
        }

        .guiding-principles-container .principles-text,
        .guiding-principles-container .principles-image {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .guiding-principles-container .principles-text {
            flex-direction: column;
            align-items: flex-start;
            padding: 2rem 4rem;
        }

        .guiding-principles-container .principles-text h2 {
            font-size: 2.5rem;
            color: #800000;
            margin-bottom: 1.5rem;
        }

        .guiding-principles-container .principles-text p {
            font-style: italic;
            color: #6c757d;
            margin-bottom: 1.5rem;
            border-left: 3px solid #f0f0f0;
            padding-left: 1rem;
        }

        .guiding-principles-container .principles-text ul {
            list-style-position: outside;
            padding-left: 1.5rem;
        }

        .guiding-principles-container .principles-text ul li {
            margin-bottom: 1rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .guiding-principles-container .principles-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 992px) {
            .guiding-principles-container {
                flex-direction: column-reverse;
                padding: 2rem 0;
            }
            .guiding-principles-container .principles-text,
            .guiding-principles-container .principles-image {
                width: 100%;
            }
            .guiding-principles-container .principles-text {
                padding: 2rem;
            }
            .guiding-principles-container .principles-image {
                padding: 1rem;
            }
            .guiding-principles-container .principles-text h2 {
                font-size: 2rem;
            }
        }

        /* New styles for the principles section */
        .principles-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 0;
            background-color: #ffffff;
        }

        .principles-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
        }

        .principles-content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .principles-text-content {
            flex: 1;
            padding-right: 2rem;
        }

        .principles-text-content h2 {
            font-size: 2rem;
            color: rgb(0, 51, 4);
            margin-bottom: 1.5rem;
            border-bottom: 3px solid rgb(0, 51, 4);
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .principles-text-content p {
            
            color:rgb(5, 5, 5);
            font-weight: 400;
            margin-bottom: 1.5rem;
            padding-left: 1rem;
        }

        .principles-text-content ul {
            list-style-position: outside;
            padding-left: 1.5rem;
        }

        .principles-text-content ul li {
            margin-bottom: 0.5rem;
            font-size: 1rem;
            line-height: 1.6;
            color:rgb(80, 79, 79);
        }

        .principles-image-content {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .principles-image {
            margin-top: 3rem;
            margin-left: 3rem;
            width: 110%;
            height: 110%;
            object-fit: cover;
            display: block;
            border-radius: 5px;
        }

        @media (max-width: 992px) {
            .principles-section {
                flex-direction: column;
                align-items: flex-start;
            }
            .principles-content-wrapper {
                flex-direction: column;
                align-items: flex-start;
            }
            .principles-text-content {
                padding-right: 0;
                padding-bottom: 2rem;
                width: 100%;
            }
            .principles-text-content h2 {
                font-size: 2rem;
            }
            .principles-image-content {
                width: 100%;
                padding: 1rem;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .principles-image {
                margin: 0;
                width: 100%;
                height: auto;
                max-width: 700px;
                border-radius: 5px;
            }
        }


    </style>
</head>
<body>

<?php include 'include/header.php'; ?>
    <header class="about-header-container">
        <div class="about-top-bar"></div>
        <section class="about-hero-section">
            <h1>අපි ගැන</h1>
            <p>වැළැක්වීම සහ දැනුවත් කිරීම තුළින් ප්‍රජාවන් ආරක්ෂා කිරීම</p>
        </section>
        <nav class="about-nav">
            <ul>
                <li><a href="aboutUs.php">දැක්ම සහ මෙහෙවර</a></li>
                <li><a href="ourStaf.php">අපගේ කාර්ය මණ්ඩලය</a></li>
                <li><a href="organizationStructure.php">සංවිධාන ව්‍යුහය</a></li>
                <li><a href="regional-malaria-office.php">ප්‍රාදේශීය නිලධාරීන්</a></li>
                <li><a href="tsg.php">තාක්ෂණික සහාය කණ්ඩායම</a></li>
                <li><a href="crc.php">නඩු සමාලෝචන ප්‍රජාව</a></li>
                <li><a href="history.php">ඉතිහාසය</a></li>
                <li><a href="imageGallary.php">ගැලරිය</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="vision" class="about-vision-mission-container">
            <div class="text-content">
                <h2>අපගේ දැක්ම</h2>
                <p>සෑම පුද්ගලයෙකුටම දයානුකම්පිත, විශ්වාසදායක සහ රෝග නිවාරණ සෞඛ්‍ය සේවා සඳහා ප්‍රවේශය ඇති, රෝගවලින් තොර ප්‍රජාවන් සවිබල ගන්වන සෞඛ්‍ය සම්පන්න ශ්‍රී ලංකාවක් නිර්මාණය කිරීම.</p>
            </div>
            <div class="image-content">
                <img src="asset/image/v1.png" alt="Eye representing vision">
            </div>
        </section>

        <section id="mission" class="about-vision-mission-container">
            <div class="text-content">
                <h2>අපගේ මෙහෙවර</h2>
                <p>විශේෂයෙන් අවදානමට ලක්විය හැකි ග්‍රාමීය ප්‍රදේශවල රෝග වැළැක්වීම, කලින් හඳුනා ගැනීම සහ අධ්‍යාපනය කෙරෙහි අවධානය යොමු කරමින් - කැපවූ සේවාව, නවීන වෛද්‍ය පිළිවෙත් සහ ප්‍රජා සම්බන්ධතා තුළින් රෝගී කේන්ද්‍රීය සෞඛ්‍ය සේවාවක් ලබා දීම.</p>
            </div>
            <div class="image-content">
                <img src="asset/image/v2.png" alt="Target representing mission">
            </div>
        </section>

        <section id="principles" class="principles-container">
            <div class="principles-section">
                <div class="principles-content-wrapper">
                        <div class="principles-text-content">
                         <h2>මාර්ගෝපදේශක මූලධර්ම</h2>
                         <p>ජාතික මැලේරියා උපායමාර්ගය පහත සඳහන් මාර්ගෝපදේශක මූලධර්ම මත පදනම් වේ:</p>
                         <ul>
                             <li>WHO හි ගෝලීය මැලේරියා වැඩසටහනේ නිර්දේශයන්ට සහ මැලේරියාව නැවත ස්ථාපිත කිරීම වැළැක්වීම සඳහා SEA කලාපීය උපාය මාර්ගයට අනුකූල වන දේශීය වශයෙන් සුදුසු, සාක්ෂි මත පදනම් වූ, පරිසර හිතකාමී ප්‍රතිපත්ති සහ උපාය මාර්ග භාවිතා කිරීම.</li>
                             <li>කොටස්</li>
                             <li>ගුණාත්මක මැලේරියා රෝග විනිශ්චය, ප්‍රතිකාර සහ වැළැක්වීම සඳහා විශ්වීය ප්‍රවේශය</li>
                             <li>අවදානමට ලක්විය හැකි ජනගහනය ආවරණය කිරීම කෙරෙහි අවධාරණය කිරීම</li>
                             <li>මුදල් සඳහා වටිනාකම</li>
                             <li>යහපාලනය</li>
                             <li>ජනතාවගේ අයිතිවාසිකම් කෙරෙහි සංවේදී වීම</li>
                             <li>ස්ත්‍රී පුරුෂ භාවයට ප්‍රතිචාර දැක්වීම</li>
                         </ul>
                     </div>
                    <div class="principles-image-content">
                        <img src="asset/image/p1.png" alt="Team looking over a map with a magnifying glass" class="principles-image">
                    </div>
                </div>
            </div>
        </section>

        <?php include 'about/malaria.php'; ?>
        <?php include 'about/strategies.php'; ?>
        

    </main>
    <?php include 'include/footer.php'; ?>

</body>
</html>

