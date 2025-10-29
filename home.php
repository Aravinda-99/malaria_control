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
            margin: 0 auto 0rem auto;
        }

        .welcome-logo {
            width: 200px;
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

        /* --- Objectives Section --- */
        .objectives-section {
            padding: 2rem 2rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            margin-bottom: 2rem;
        }

        .objectives-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23000" opacity="0.02"/><circle cx="75" cy="75" r="1" fill="%23000" opacity="0.02"/><circle cx="50" cy="10" r="1" fill="%23000" opacity="0.02"/><circle cx="10" cy="60" r="1" fill="%23000" opacity="0.02"/><circle cx="90" cy="40" r="1" fill="%23000" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .objectives-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .objectives-container h2 {
            font-size: 2.5rem;
            color: rgb(1, 59, 18);
            margin-bottom: 1rem;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .objectives-container h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, rgb(1, 59, 18), rgb(0, 117, 35));
            margin: 1rem auto;
            border-radius: 2px;
        }

        .objectives-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .objective-item {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border-left: 5px solid rgb(1, 59, 18);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .objective-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, rgb(1, 59, 18), rgb(0, 117, 35));
        }

        .objective-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .objective-number {
            background: linear-gradient(135deg, rgb(1, 59, 18), rgb(0, 117, 35));
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.4rem;
            margin: 0 auto 1rem auto;
            box-shadow: 0 4px 15px rgba(1, 59, 18, 0.3);
        }

        .objective-text {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
            text-align: center;
            font-weight: 500;
        }

        /* --- Info Cards --- */
        .info-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto 0rem auto; /* centers the container */
            margin-top: 2rem;
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
            max-width: 50%;
        }

        .protect-family-content h2 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.1;
            color: #f7b733;
            margin-bottom: 0.5rem;
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
            width: 70px;
            height: 70px;
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
        /* --- Services slider overrides --- */
        .services-section .services-slider { position: relative; max-width: 1200px; margin: 0 auto; overflow: hidden; }
        .services-section .cards-grid { display: flex; gap: 2rem; grid-template-columns: none; transition: transform 0.3s ease; will-change: transform; }
        .services-section .service-card { flex: 0 0 calc(33.333% - 1.333rem); }
        /* arrows removed */
        .services-slider .slider-dots { text-align: center; margin-top: 1rem; }
        .services-slider .slider-dots span { display: inline-block; height: 10px; width: 10px; margin: 0 3px; background-color: #ccc; border-radius: 50%; cursor: pointer; transition: background-color 0.3s; }
        .services-slider .slider-dots span.active { background-color: rgb(0, 219, 66); }
        /* Secondary slider dots in red */
        .services-secondary-slider .slider-dots span.active { background-color: rgb(95, 20, 20); }

        /* Secondary services list under slider dots */
        .services-secondary-grid { margin-top: 1.5rem; }
        .services-secondary-grid .service-card { background: transparent; box-shadow: none; border: none; }
        .services-secondary-grid .service-card-content { background-color:rgb(95, 20, 20); /* red */ }
        .services-secondary-grid .service-card.meroon .service-card-content { background-color: rgb(95, 20, 20); /* maroon */ }

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

/* Match services to news card look */
.service-card {
    background: transparent; /* remove white card background around image */
    border-radius: 10px;
    overflow: hidden;
    box-shadow: none; /* remove outer glow that can look like a border */
    border: none;
    text-decoration: none;
    color: inherit;
    display: block; /* let image define height; content overlays */
    position: relative;
    transition: transform 0.3s;
}

.service-card:hover {
    transform: translateY(-5px);
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
    display: block;
}

/* Service specific image sizing (isolated from news cards) */
.service-card-image {
    width: 100%;
    height: 260px; /* image now fills the whole card area */
    object-fit: cover;
    display: block;
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
    background-color: rgb(1, 59, 18);
    color: #fff;
    padding: 1rem 1.4rem;
    position: static; /* place below image so full image is visible */
    display: flex;
    align-items: center;
    min-height: 72px;
    margin-top: -24px; /* pull up to remove any sub-pixel gap under image */
}

.service-card-content h3 {
    margin: 0;
}

.service-card-content span:first-child {
    font-weight: 600;
    line-height: 1.4;
}

.service-card-content span:last-child {
    position: absolute;
    right: 1.5rem;
    bottom: 1.2rem;
    font-size: 1.5rem;
    font-weight: bold;
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
            .objectives-list {
                grid-template-columns: 1fr;
                gap: 1.5rem;
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
                <img src="asset/image/mal_logo.png" alt="Campaign Logo" class="welcome-logo">
                <div class="welcome-text">
                    <span>Welcome to</span>
                    <h2>Anti Malaria Campaign</h2>
                    <p>We are a national public health government organization in Sri Lanka responsible for preventing the re-establishment of malaria and control of leishmaniasis. We are committed to sustain the country’s malaria-free status, which was certified by the World Health Organization in 2016. We provide leadership, technical guidance, and coordination for surveillance, vector control, diagnosis, treatment, and health education across all regions of the country.</p>
                </div>
                <a href="aboutUs.php" class="read-more-btn">READ MORE ❯</a>
            </div>
            <div class="info-cards-container">
                <div class="info-card vision-card">
                    <h3>Our Vision</h3>
                    <p>A malaria-free Sri Lanka </p>
                </div>
                <!-- <div class="info-card doctor-card">
                    <img src="asset/image/drpic1.png" alt="Dr. M. P. P. U Chulasiri">
                    <h4>Consultant Community Physician</h4>
                    <h5>DR. M. P. P. U CHULASIRI</h5>
                    <p>MBBS Colombo, MSc,<br>MD (Community Medicine)</p>
                    <div class="slider-dots"><span class="active"></span><span></span><span></span><span></span></div>
                </div> -->
                <div class="info-card mission-card">
                    <h3>Our Mission</h3>
                    <p>Plan and implement a comprehensive programme to sustain intensive surveillance,
                        comprehensive case management, outbreak preparedness, providing information to
                        travellers and high-risk groups, and rapid response for prevention of re-establishment of
                        malaria in Sri Lanka. </p>
                </div>
            </div>
        </section>

        <!-- Objectives Section -->
        <section class="objectives-section">
            <div class="objectives-container">
                <h2>Our Objectives</h2>
                <div class="objectives-list">
                    <div class="objective-item">
                        <div class="objective-number">1</div>
                        <div class="objective-text">To prevent re-establishment of malaria in Sri Lanka.</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-number">2</div>
                        <div class="objective-text">To maintain zero mortality due to malaria in Sri Lanka</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="protect-family-section">
            <div class="protect-family-content">
                <h2>PROTECT <br>YOUR FAMILY <br>FIGHT MALARIA.</h2>
                <p>sleep under a mosquito net. stay safe. stay healthy</p>
                <p class="protect-family-content-p" style="color: #fff; font-size: 1rem; font-weight: 300;">Early detection of malaria cases save life, and prevent spread.</p>
            </div>
            <div class="surveillance-card">
                <div class="surveillance-header">
                    <div class="surveillance-icon"><img src="asset/image/logoMos.png" alt="Mosquito"></div>
                    <div>
                        <h3>Malaria Surveillance 2025</h3>
                        <p>Prevention of reestablishment phase</p>
                    </div>
                </div>
                <div class="surveillance-stats">
                    <ul>
                        <li><span>Indigenous Cases</span> <span class="stat-number">0</span></li>
                        <li><span>Imported Cases</span> <span class="stat-number">29</span></li>
                        <li><span>Relapses</span> <span class="stat-number">0</span></li>
                        <li><span>Deaths (Imported)</span> <span class="stat-number">1</span></li>
                    </ul>
                </div>
                <div class="surveillance-footer">
                    <i class="fas fa-clock"></i>
                    <span>Last Updated: 19/09/2024</span>
                </div>
            </div>
        </section>
        <section class="content-section news-section">
    <div class="section-header">
        <h2>Latest News</h2>
        <a href="news.php" class="read-more-link">READ MORE NEWS &raquo;</a>
    </div>

    <div class="cards-grid">
        <a href="#" class="news-card">
            <img src="asset/image/n1.png" alt="Man cleaning outdoors" class="card-image">
            <div class="news-card-content">
                <span class="date">21st Jul 2025</span>
                <h3>World Malaria Day 2021</h3>
                <p>World Malaria Day which falls annually on April 25th raises awareness.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>

        <a href="#" class="news-card">
            <img src="asset/image/n2.png" alt="Mosquito close-up" class="card-image">
            <div class="news-card-content">
                <span class="date">23rd Jul 2025</span>
                <h3>Community-Driven Clean-Up</h3>
                <p>Local communities join forces for a massive clean-up campaign to eradicate mosquito breeding grounds.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>

        <a href="#" class="news-card active">
            <img src="asset/image/n3.png" alt="Children under mosquito net" class="card-image">
            <div class="news-card-content">
                <span class="date">23rd Jul 2025</span>
                <h3>SL Steps Up Malaria Prevention</h3>
                <p>The Ministry of Health launches new initiatives to bolster malaria prevention efforts nationwide.</p>
                <span class="arrow">&rsaquo;</span>
            </div>
        </a>
    </div>

    <!-- Mobile-only read more button (appears below cards) -->
    <div style="text-align:center;">
        <a href="#" class="read-more-link read-more-mobile">SEE MORE Services &raquo;</a>
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
                <h2>Our Services</h2>
                <a href="service.php" class="read-more-link">SEE MORE SERVICES ❯</a>
            </div>
            <div class="services-slider">
                <div class="cards-grid" id="servicesTrack">
                 <a href="#" class="service-card">
                    <img src="asset/image/s1.png" alt="Doctors consulting" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Provision of prophylaxis</h4>   
                    </div>
                </a>
                 <a href="#" class="service-card">
                    <img src="asset/image/s2.png" alt="Scientist with petri dish" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Screening of returnees from endemic countries</h4>   
                    </div>
                </a>
                 <a href="#" class="service-card">
                    <img src="asset/image/s3.png" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>24/ 365 hotline service</h4>   
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Case detection, treatment and follow-up</h4>   
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Case-based reactive response</h4>   
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Risk-group surveillance</h4>   
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Mosquito surveillance and vector control</h4>   
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Scientist with microscope" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Community engagement</h4>   
                    </div>
                </a>
                </div>
                <div class="slider-dots" id="servicesDots"></div>
            </div>

            <!-- Secondary list below dots (with its own slider) -->
            <div class="services-slider services-secondary-slider">
                <div class="cards-grid services-secondary-grid">
                <a href="#" class="service-card meroon">
                    <img src="asset/image/noimages2.jpg" alt="Leishmaniasis" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Leishmaniasis</h4>
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Screening" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Screening</h4>
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Risk group surveillance" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Risk group surveillance</h4>
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Case detection, diagnosis, treatment and follow-up" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Case detection, diagnosis, treatment and follow-up</h4>
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Sandfly surveillance and vector control" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Sandfly surveillance and vector control</h4>
                    </div>
                </a>
                <a href="#" class="service-card">
                    <img src="asset/image/noimages2.jpg" alt="Community engagement" class="card-image service-card-image">
                    <div class="service-card-content">
                        <h4>Community engagement</h4>
                    </div>
                </a>
                </div>
                <div class="slider-dots"></div>
            </div>
            </div>
            
        </section>

        <script>
            (function(){
                var track = document.getElementById('servicesTrack');
                if(!track) return;
                var container = track.parentElement;
                var dotsEl = document.getElementById('servicesDots');
                var leftBtn = container.querySelector('.services-arrow.left');
                var rightBtn = container.querySelector('.services-arrow.right');
                var currentIndex = 0;
                var timerId;
                var intervalMs = 4000;

                function cardWidth(){
                    var card = track.querySelector('.service-card');
                    if(!card) return 0;
                    var style = getComputedStyle(card);
                    var gap = 32; // equals 2rem gap in CSS
                    return card.getBoundingClientRect().width + gap;
                }
                function maxIndex(){
                    var total = track.children.length;
                    return Math.max(0, total - 3);
                }
                function update(){
                    var w = cardWidth();
                    track.style.transform = 'translateX(' + (-currentIndex * w) + 'px)';
                    updateDots();
                }
                function next(){
                    if (currentIndex >= maxIndex()) {
                        currentIndex = 0;
                    } else {
                        currentIndex += 1;
                    }
                    update();
                }
                function prev(){
                    if (currentIndex <= 0) {
                        currentIndex = maxIndex();
                    } else {
                        currentIndex -= 1;
                    }
                    update();
                }
                function start(){
                    stop();
                    timerId = setInterval(next, intervalMs);
                }
                function stop(){
                    if (timerId) { clearInterval(timerId); timerId = undefined; }
                }

                // arrows removed; only dots and auto-slide control navigation

                // Pause on hover of the slider area
                container.addEventListener('mouseenter', stop);
                container.addEventListener('mouseleave', start);

                function buildDots(){
                    if(!dotsEl) return;
                    dotsEl.innerHTML = '';
                    var total = Math.max(1, track.children.length - 2); // number of positions (3 visible)
                    for (var i = 0; i < total; i++) {
                        var s = document.createElement('span');
                        (function(i){ s.addEventListener('click', function(){ currentIndex = i; update(); start(); }); })(i);
                        dotsEl.appendChild(s);
                    }
                }
                function updateDots(){
                    if(!dotsEl) return;
                    var spans = dotsEl.querySelectorAll('span');
                    spans.forEach(function(el, idx){ el.classList.toggle('active', idx === currentIndex); });
                }

                window.addEventListener('resize', update);
                buildDots();
                update();
                start();
            })();

            // Initialize secondary slider (below dots)
            (function(){
                var slider = document.querySelector('.services-secondary-slider');
                if(!slider) return;
                var track = slider.querySelector('.services-secondary-grid');
                var dotsEl = slider.querySelector('.slider-dots');
                var currentIndex = 0;
                var timerId;
                var intervalMs = 4000;

                function cardWidth(){
                    var card = track.querySelector('.service-card');
                    if(!card) return 0;
                    var gap = 32; // 2rem
                    return card.getBoundingClientRect().width + gap;
                }
                function maxIndex(){
                    var total = track.children.length;
                    return Math.max(0, total - 3);
                }
                function update(){
                    var w = cardWidth();
                    track.style.transform = 'translateX(' + (-currentIndex * w) + 'px)';
                    updateDots();
                }
                function next(){ currentIndex = (currentIndex >= maxIndex()) ? 0 : currentIndex + 1; update(); }
                function start(){ stop(); timerId = setInterval(next, intervalMs); }
                function stop(){ if (timerId) { clearInterval(timerId); timerId = undefined; } }

                function buildDots(){
                    if(!dotsEl) return;
                    dotsEl.innerHTML = '';
                    var total = Math.max(1, track.children.length - 2);
                    for (var i = 0; i < total; i++) {
                        var s = document.createElement('span');
                        (function(i){ s.addEventListener('click', function(){ currentIndex = i; update(); start(); }); })(i);
                        dotsEl.appendChild(s);
                    }
                }
                function updateDots(){
                    if(!dotsEl) return;
                    var spans = dotsEl.querySelectorAll('span');
                    spans.forEach(function(el, idx){ el.classList.toggle('active', idx === currentIndex); });
                }

                slider.addEventListener('mouseenter', stop);
                slider.addEventListener('mouseleave', start);
                window.addEventListener('resize', update);
                buildDots();
                update();
                start();
            })();
        </script>

        <!-- Section 9: Event Calendar -->
        <section class="event-calendar-section">
            <div class="event-calendar-container">
                <div class="event-calendar-info">
                    <h2>Event Calendar</h2>
                    <p>Stay updated on key dates for reviews, in-service training, awareness programmes and special events designed to strengthen our fight against malaria and leishmaniasis.</p>
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
                    <p>For all general inquiries, please complete the following form. A member of our team will review your message and get back to you shortly. Your engagement is important to us.</p>
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

