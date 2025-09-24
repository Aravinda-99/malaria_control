<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaria Control Campaign</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    
    <!-- Font Awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* --- Basic CSS Reset --- */
        body, h1, h2, h3, h4, h5, p, ul, li, a, button, input {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f8f9fa;
        }

        /* --- Welcome Section --- */
        .welcome-section {
            padding: 4rem 2rem;
            background-color: #fff;
        }

        .welcome-intro {
            display: flex;
            align-items: flex-start;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto 4rem auto;
        }

        .welcome-logo {
            width: 100px;
            height: auto;
        }

        .welcome-text {
            flex: 1;
        }

        .welcome-text span {
            color: #007bff;
            font-weight: 600;
        }

        .welcome-text h2 {
            font-size: 2rem;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .welcome-text p {
            line-height: 1.6;
            color: #555;
        }

        .read-more-btn {
            background-color:rgb(1, 59, 18);
            color: #fff;
            text-decoration: none;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            align-self: center;
            transition: background-color 0.3s;
            white-space: nowrap;
        }

        .read-more-btn:hover {
            background-color:rgb(1, 97, 30);
        }

        /* --- Info Cards --- */
        .info-cards-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .info-card {
            background-color: rgb(1, 59, 18);
            color: #fff;
            padding: 2rem;
            border-radius: 10px;
        }

        .vision-card {
            text-align: center;
        }

        .mission-card {
            text-align: center;
        }

        .info-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .info-card p {
            line-height: 1.6;
            color: #f0f0f0;
        }

        .doctor-card {
            background-color: rgb(1, 59, 18);
            color: #fff;
            border: none;
            box-shadow: none;
            text-align: center;
        }

        .doctor-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 3px solid #fff;
            object-fit: cover;
        }

        .doctor-card h4 {
            color: #fff;
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .doctor-card h5 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 0.75rem;
            font-weight: 700;
        }
        
        .doctor-card p {
            color: #f0f0f0;
            line-height: 1.4;
        }

        .slider-dots {
            margin-top: 1.5rem;
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .slider-dots span {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
            border: 2px solid #ffffff;
            background-color: transparent;
        }

        .slider-dots span.active {
            background-color: rgb(1, 109, 33);
            border-color: #fff;
        }

        /* --- Protect Family Section --- */
        .protect-family-section {
            position: relative;
            padding: 5rem;
            color: #fff;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            background: url('asset/image/24.png') no-repeat left center/cover;
            border-radius: 15px;
            margin: 1rem 4.5rem;
            overflow: hidden;
            min-height: 490px;
        }

        .protect-family-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .protect-family-content, .surveillance-card {
            position: relative;
            z-index: 1;
        }

        .protect-family-content {
            max-width: 60%;
        }

        .protect-family-content h2 {
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1.1;
            color: #f7b733;
            margin-bottom: 0.5rem;
        }

        .protect-family-content-title{
            padding-bottom: 10px;
        }

        .protect-family-content p {
            font-size: 1.1rem;
            margin-top: 0.5rem;
            color: #fff;
            font-weight: 400;
        }

        .surveillance-card {
            background-color: rgba(245, 245, 245, 0.9);
            color: #333;
            padding: 2rem;
            border-radius: 10px;
            min-width: 270px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .surveillance-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .surveillance-header > div {
            text-align: center;
        }

        .surveillance-icon {
            background-color: transparent;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 0.25rem;
        }

        .surveillance-icon img {
            width: 98px;
            height: 98px;
            object-fit: contain;
            display: block;
        }

        .surveillance-header h3 {
            font-size: 1.3rem;
        }
        
        .surveillance-stats ul {
            list-style: none;
        }

        .surveillance-stats li {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #ddd;
            font-weight: 500;
        }
        
        .surveillance-stats li:last-child {
            border-bottom: none;
        }
        
        .surveillance-stats .stat-number {
            font-weight: 700;
            color: #d9534f;
            font-size: 1.2rem;
        }
        
        .surveillance-footer {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #555;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* --- Generic Section Styling --- */
       /* General Section Styles (Mostly Unchanged) */
.content-section {
    padding: 4rem 2rem;
    background-color: #f9f9f9; /* Added a light background for contrast */
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto 2rem auto;
}

.section-header h2 {
    font-size: 2rem;
    color: #333;
}

.section-header .read-more-link {
    border: 1px solid rgb(1, 59, 18); /* Darker red for better visibility */
    color: rgb(1, 59, 18);
    padding: 0.6rem 1.2rem;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s;
}

.section-header .read-more-link:hover {
    background-color: rgb(1, 59, 18);
    color: #fff;
}

/* Mobile-only read more placement */
.read-more-mobile {
    display: none;
}

/* Style mobile read more as pill button */
.read-more-mobile {
    border: 2px solid #8b0000;
    color: #8b0000;
    padding: 0.75rem 1.5rem;
    border-radius: 9999px;
    text-decoration: none;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.read-more-mobile:hover {
    background-color: #8b0000;
    color: #fff;
}

/* Card Grid Layout (Unchanged) */
.cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* --- MODIFIED CARD STYLES --- */
.news-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-decoration: none;
    color: inherit;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 3px solid transparent; /* ADDED: Base for active state transition */
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

/* ADDED: Style for the active card's blue border */
/* .news-card.active {
    border: 3px solid #007bff;
    box-shadow: 0 8px 16px rgba(0, 123, 255, 0.2);
} */

/* Remove underline and purple link color from service cards */
.service-card,
.service-card:link,
.service-card:visited,
.service-card:hover,
.service-card:active {
    text-decoration: none;
    color: inherit;
}

.card-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.news-card-content {
    /* CHANGED: Replaced border with a background color */
    background-color: rgb(1, 59, 18);
    color: #fff; /* CHANGED: Set text color to white */
    padding: 1.5rem;
    position: relative; /* ADDED: For positioning the arrow */
    flex-grow: 1; /* ADDED: Ensures all content boxes are the same height */
    display: flex;
    flex-direction: column;
}

.news-card-content .date {
    font-size: 0.8rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 0.5rem;
    display: block;
}

/* ADDED: Styles for a structured title and description */
.news-card-content h3 {
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.4;
    margin: 0 0 0.5rem 0;
}

.news-card-content p {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.5;
    margin: 0;
    padding-right: 20px; /* Space for the arrow */
}

.news-card-content .arrow {
    position: absolute;
    right: 1.5rem;
    bottom: 1.5rem;
    font-size: 1.5rem;
    font-weight: bold;
}


/* --- ADDED SLIDER DOTS STYLES --- */
.slider-dots {
    text-align: center;
    margin-top: 2rem;
}

.slider-dots span {
    display: inline-block;
    height: 10px;
    width: 10px;
    margin: 0 3px;
    background-color: #ccc;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
}

.slider-dots span.active {
    background-color: rgb(0, 219, 66);
}
        
        .service-card-content {
            padding: 1rem;
            text-align: center;
            font-weight: 600;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            gap: 0.5rem;
        }

        /* --- Event Calendar Section --- */
        .event-calendar-section {
            background-color: #fff8f8; /* Light pink background */
            padding: 3rem 1rem;
        }
        .event-calendar-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 2rem;
            align-items: flex-start;
        }
        .event-calendar-info {
            flex: 1;
        }
        .event-calendar-info h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .event-calendar-info p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .calendar {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            flex-basis: 400px;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 0.5rem;
            text-align: center;
        }
        .calendar-grid span {
            padding: 0.5rem;
            color: #888;
        }
        .calendar-grid .day {
            color: #333;
            cursor: pointer;
            border-radius: 50%;
            transition: all 0.2s;
            line-height: 2;
        }
        .calendar-grid .day:hover {
            background-color: #ffe0e0;
        }
        .calendar-grid .day.today {
            background-color: #d9edf7;
            color: #31708f;
        }
        .calendar-grid .day.selected-start, .calendar-grid .day.selected-end {
            background-color: rgb(1, 59, 18);
            color: #fff;
        }
        .calendar-grid .day.in-range {
            background-color: #ffe0e0;
            border-radius: 0;
        }
        .event-list {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .event-item {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        .event-item.active {
            background-color: rgb(1, 59, 18);
            color: #fff;
        }
        .event-item .date {
            font-size: 2rem;
            font-weight: 600;
            margin-right: 1.5rem;
            color: #888;
        }
        .event-item.active .date {
            color: #f0f0f0;
        }
        .event-item .details p {
            font-weight: 500;
            margin: 0;
        }
        .event-item.active .details p {
            color: #fff;
        }
        .event-item .details span {
            font-size: 0.9rem;
            color: #aaa;
        }
        .event-item.active .details span {
            color: #ddd;
        }
        .event-item .count {
            margin-left: auto;
            background-color:rgb(14, 122, 0);
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        .event-item.active .count {
            background-color: #fff;
            color:rgb(4, 106, 0);
        }

        /* --- Contact Section --- */
        .contact-section {
            padding: 4rem 2rem;
            background: #fff;
        }
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 3rem;
            align-items: flex-start;
        }
        .contact-form-container {
            flex: 1;
        }
        .contact-form-container h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .contact-form-container p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            height: 48px; /* ensure consistent control height */
            box-sizing: border-box; /* keep borders inside width */
        }
        .contact-form .full-width {
            grid-column: 1 / -1;
        }
        .contact-form textarea {
            resize: vertical;
            min-height: 110px; /* align baseline height with inputs */
            box-sizing: border-box; /* align width end with inputs */
        }
        .contact-form button {
            background-color: rgb(1, 59, 18);
            color: #fff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            grid-column: 1 / -1;
            justify-self: start;
        }
        .contact-form button:hover {
            background-color: rgb(0, 117, 35);
        }
        .map-container {
            flex: 1;
        }
        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .info-cards-container, .cards-grid {
                grid-template-columns: 1fr;
            }
            .welcome-intro {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .protect-family-section {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
                padding: 2rem 1.25rem;
                margin: 1rem;
                min-height: auto;
                background-position: center top;
            }
            .protect-family-content {
                max-width: 100%;
            }
            .surveillance-card {
                width: 100%;
                max-width: 520px;
                margin: 0 auto;
            }
            .event-calendar-container, .contact-container {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .read-more-btn {
                margin-top: 1rem;
            }
            .section-header {
                flex-direction: column;
                gap: 1rem;
            }
            /* Hide top button and show bottom one on mobile */
            .news-section .section-header .read-more-link {
                display: none;
            }
            .news-section .read-more-mobile {
                display: inline-block;
                margin: 1rem auto 0 auto;
            }
            .services-section .section-header .read-more-link {
                display: none;
            }
            .services-section .read-more-mobile {
                display: inline-block;
                margin: 1rem auto 0 auto;
            }
            .contact-form {
                grid-template-columns: 1fr;
            }
            .protect-family-content h2 {
                font-size: 2.2rem;
                line-height: 1.15;
            }
            .protect-family-content p {
                font-size: 1rem;
            }
            .surveillance-card {
                padding: 1.25rem;
            }
            /* Hide slider dots on mobile for news and services */
            .news-section .slider-dots,
            .services-section .slider-dots {
                display: none;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <main>
        <?php include 'home/hero.php'; ?>
        <section class="welcome-section">
            <div class="welcome-intro">
                <img src="asset/image/gov-logo.png" alt="Campaign Logo" class="welcome-logo">
                <div class="welcome-text">
                    <span>සාදරයෙන් පිළිගනිමු</span>
                    <h2>මැලේරියා මර්දන ව්‍යාපාරය</h2>
                    <p>අපි ශ්‍රී ලංකාවේ මැලේරියාව තුරන් කිරීමට සහ සෑම පුරවැසියෙකුම මදුරුවන්ගෙන් බෝවන රෝගවලින් ආරක්ෂා කිරීමට කැපවී සිටින මහජන සෞඛ්‍ය මුලපිරීමකි. ප්‍රජා අධ්‍යාපනය, මදුරු පාලනය සහ ප්‍රතිකාර කළ ඇඳ දැල් වැනි වැළැක්වීමේ මෙවලම් වෙත ප්‍රවේශය හරහා, සෞඛ්‍ය සම්පන්න ජාතියක් ගොඩනැගීම සඳහා අපි පවුල්, සෞඛ්‍ය සේවකයින් සහ පළාත් පාලන ආයතන සමඟ අත්වැල් බැඳගෙන කටයුතු කරන්නෙමු.</p>
                </div>
                <a href="#" class="read-more-btn">තවත් කියවන්න ❯</a>
            </div>
            <div class="info-cards-container">
                <div class="info-card vision-card">
                    <h3>අපගේ දැක්ම</h3>
                    <p>සෑම පුද්ගලයෙකුටම දයානුකම්පිත, විශ්වාසදායක සහ වැළැක්වීමේ සෞඛ්‍ය සේවාවක් ලබා ගත හැකි, රෝගවලින් තොර ප්‍රජාවන් සවිබල ගන්වන සෞඛ්‍ය සම්පන්න ශ්‍රී ලංකාවක් නිර්මාණය කිරීම.</p>
                </div>
                <div class="info-card doctor-card">
                    <img src="asset/image/drpic1.png" alt="Dr. M. P. P. U Chulasiri">
                    <h4>උපදේශක ප්‍රජා වෛද්‍ය</h4>
                    <h5>එම්. පී. පී. යූ. චුලසිරි</h5>
                    <p>MBBS Colombo, MSc,<br>MD (Community Medicine)</p>
                    <div class="slider-dots"><span class="active"></span><span></span><span></span><span></span></div>
                </div>
                <div class="info-card mission-card">
                    <h3>අපගේ මෙහෙවර</h3>
                    <p>විශේෂයෙන් අවදානමට ලක්විය හැකි ග්‍රාමීය ප්‍රදේශවල රෝග වැළැක්වීම, කල්තියා හඳුනා ගැනීම සහ අධ්‍යාපනය කෙරෙහි අවධානය යොමු කරමින් - කැපවූ සේවාව, නවීන වෛද්‍ය පිළිවෙත් සහ ප්‍රජා සම්බන්ධතා තුළින් රෝගීන් කේන්ද්‍ර කරගත් සෞඛ්‍ය සේවාවක් ලබා දීම.</p>
                </div>
            </div>
        </section>
        <section class="protect-family-section">
            <div class="protect-family-content">
                <h2> 
                    <div class="protect-family-content-title">ඔබේ පවුල</div>
                <div class="protect-family-content-title">ආරක්ෂා කරගන්න  </div>මැලේරියාවට එරෙහිව සටන් කරන්න.</h2>
                <p>මදුරු දැලක් යට නිදාගන්න. ආරක්ෂිතව සිටින්න. නිරෝගීව සිටින්න.</p>
            </div>
            
            <div class="surveillance-card">
                <div class="surveillance-header">
                    <div class="surveillance-icon"><img src="asset/image/mosq.png" alt="Mosquito"></div>
                    <div>
                        <h3>මැලේරියා නිරීක්ෂණ</h3>
                        <p>ස්ථාපන අවධිය වැළැක්වීම</p>
                    </div>
                </div>
                <div class="surveillance-stats">
                    <ul>
                        <li><span>දේශීය නඩු</span> <span class="stat-number">0</span></li>
                        <li><span>වැදගත් නඩු</span> <span class="stat-number">29</span></li>
                        <li><span>නැවත ඇතිවීම</span> <span class="stat-number">0</span></li>
                        <li><span>මරණ</span> <span class="stat-number">1</span></li>
                    </ul>
                </div>
                <div class="surveillance-footer">
                    <i class="fas fa-clock"></i>
                    <span>අවසන් යාවත්කාලීන කිරීම: 19/09/2024</span>
                </div>
            </div>
        </section>
        <section class="content-section news-section">
    <div class="section-header">
        <h2>නවතම ප්‍රවෘත්ති</h2>
        <a href="#" class="read-more-link">තවත් පුවත් කියවන්න &raquo;</a>
    </div>

    <div class="cards-grid">
        <a href="#" class="news-card">
            <img src="asset/image/n1.png" alt="Man cleaning outdoors" class="card-image">
            <div class="news-card-content">
                <span class="date">21st Jul 2025</span>
                <h3>ලෝක මැලේරියා දිනය 2021</h3>
                <p>වාර්ෂිකව අප්‍රේල් 25 වන දිනට යෙදෙන ලෝක මැලේරියා දිනය දැනුවත් කිරීම සඳහා කැපවී සිටී.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>

        <a href="#" class="news-card">
            <img src="asset/image/n2.png" alt="Mosquito close-up" class="card-image">
            <div class="news-card-content">
                <span class="date">23rd Jul 2025</span>
                <h3>ප්‍රජාව විසින් මෙහෙයවනු ලබන පිරිසිදු කිරීම</h3>
                <p>මදුරුවන් බෝවන ස්ථාන තුරන් කිරීම සඳහා දැවැන්ත පිරිසිදු කිරීමේ ව්‍යාපාරයක් සඳහා ප්‍රාදේශීය ප්‍රජාවන් එක්වෙති.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>

        <a href="#" class="news-card active">
            <img src="asset/image/n3.png" alt="Children under mosquito net" class="card-image">
            <div class="news-card-content">
                <span class="date">23rd Jul 2025</span>
                <h3>ශ්‍රී ලංකාව මැලේරියා මර්දනය වේගවත් කරයි</h3>
                <p>රට පුරා මැලේරියා මර්දන ප්‍රයත්නයන් ශක්තිමත් කිරීම සඳහා සෞඛ්‍ය අමාත්‍යාංශය නව මුලපිරීම් දියත් කරයි.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>
    </div>

    <!-- Mobile-only read more button (appears below cards) -->
    <div style="text-align:center;">
        <a href="#" class="read-more-link read-more-mobile">තවත් පුවත් කියවන්න &raquo;</a>
    </div>

    <div class="slider-dots">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>
        <section class="content-section services-section" style="background-color: #f0f0f0;">
             <div class="section-header">
                <h2>අපගේ සේවාවන්</h2>
                <a href="#" class="read-more-link">තවත් සේවාවන් බලන්න ❯</a>
            </div>
            <div class="cards-grid">
                 <a href="#" class="service-card">
                    <img src="asset/image/s1.png" alt="Doctors consulting" class="card-image">
                    <div class="service-card-content">
                        <span>රෝග විනිශ්චය සහ ප්‍රතිකාර</span>
                        <span>❯</span>
                    </div>
                </a>
                 <a href="#" class="service-card">
                    <img src="asset/image/s2.png" alt="Scientist with petri dish" class="card-image">
                    <div class="service-card-content">
                        <span>පරපෝෂිත විද්‍යාත්මක නිරීක්ෂණ</span>
                        <span>❯</span>
                    </div>
                </a>
                 <a href="#" class="service-card">
                    <img src="asset/image/s3.png" alt="Scientist with microscope" class="card-image">
                    <div class="service-card-content">
                        <span>කීට විද්‍යාත්මක නිරීක්ෂණ</span>
                        <span>❯</span>
                    </div>
                </a>
            </div>
            <!-- Mobile-only read more button for Services -->
            <div style="text-align:center;">
                <a href="#" class="read-more-link read-more-mobile">තවත් සේවාවන් බලන්න ❯</a>
            </div>
             <div class="slider-dots">
                <span class="active"></span><span></span><span></span><span></span>
            </div>
        </section>

        <!-- Section 9: Event Calendar -->
        <section class="event-calendar-section">
            <div class="event-calendar-container">
                <div class="event-calendar-info">
                    <h2>Event Calendar</h2>
                    <p>මැලේරියාවට එරෙහි අපගේ සටන ශක්තිමත් කිරීම සඳහා නිර්මාණය කර ඇති දැනුවත් කිරීමේ ව්‍යාපාර, වෛද්‍ය කඳවුරු සහ අධ්‍යාපනික සැසි සඳහා වැදගත් දිනයන් පිළිබඳව යාවත්කාලීනව සිටින්න.</p>
                    <div class="calendar">
                        <div class="calendar-header">
                            <span>❮</span>
                            <span>April 2021</span>
                            <span>❯</span>
                        </div>
                        <div class="calendar-grid">
                            <span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span><span>Su</span>
                            <!-- Placeholder days -->
                            <span></span><span></span><span></span><span>1</span><span class="day today">2</span><span>3</span><span>4</span>
                            <span>5</span><span>6</span><span>7</span><span>8</span><span>9</span><span>10</span><span>11</span>
                            <span>12</span><span>13</span><span>14</span><span>15</span><span>16</span><span>17</span><span>18</span>
                            <span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span>
                            <span class="day selected-start">26</span><span class="day in-range">27</span><span class="day in-range">28</span><span class="day selected-end">29</span><span>30</span><span></span><span></span>
                        </div>
                    </div>
                </div>
                <div class="event-list">
                    <div class="event-item"><div class="date">14</div><div class="details"><p>December 2016</p><span>Monday</span></div><div class="count">13</div></div>
                    <div class="event-item"><div class="date">15</div><div class="details"><p>December 2016</p><span>Tuesday</span></div><div class="count">22</div></div>
                    <div class="event-item"><div class="date">16</div><div class="details"><p>December 2016</p><span>Wednesday</span></div><div class="count">14</div></div>
                    <div class="event-item"><div class="date">17</div><div class="details"><p>December 2016</p><span>Thursday</span></div><div class="count">11</div></div>
                    <div class="event-item active"><div class="date">18</div><div class="details"><p>December 2016</p><span>Wednesday</span></div><div class="count">14</div></div>
                    <div class="event-item active"><div class="date">19</div><div class="details"><p>December 2016</p><span>Thursday</span></div><div class="count">11</div></div>
                </div>
            </div>
        </section>

        <!-- Section 10: Contact Us -->
        <section class="contact-section">
            <div class="contact-container">
                <div class="contact-form-container">
                    <h2>Get Touch With Us</h2>
                    <p>Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <form class="contact-form">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="email" placeholder="Email" class="full-width">
                        <input type="tel" placeholder="Contact Number" class="full-width">
                        <textarea placeholder="Description" class="full-width"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.99788079931!2d79.87483977413454!3d6.8908555187871725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2daad00001%3A0x1f19fdaa8ff1bf2b!2sAnti%20Malaria%20Campaign%20HQ!5e0!3m2!1sen!2slk!4v1756896063776!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>

</body>
</html>

