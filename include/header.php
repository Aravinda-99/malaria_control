<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- Basic CSS Reset --- */
        body, h1, h2, p, ul, li, a, button, input {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f8f9fa;
        }

        /* --- Main Header Container --- */
        .site-header {
            width: 100%;
            background-color: #ffffff;
            border-bottom: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10000;
            transform: translateY(0);
            transition: transform 0.35s ease, box-shadow 0.2s ease;
        }

        .site-header.is-visible {
            transform: translateY(0);
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        }

        /* --- Top Golden Bar --- */
        .header-top-bar {
            height: 5px;
            background-color: #f7b733;
        }

        /* --- Main Content Section (Logos, Search) --- */
        .header-main {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            flex-wrap: wrap; 
            max-height: 500px;
            opacity: 1;
            overflow: visible;
            transition: max-height 0.35s ease, padding 0.35s ease, opacity 0.25s ease;
        }

        /* Condensed state on scroll: hide top bar + logo/search band */
        .site-header.is-condensed .header-top-bar {
            height: 0;
            transition: height 0.25s ease;
        }

        .site-header.is-condensed .header-main {
            max-height: 0;
            padding: 0 2rem;
            opacity: 0;
            overflow: hidden;
        }

        .header-logo-container {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-logo-container img {
            height: 70px;
            width: auto;
            /* ADDED: Smooth transition for resizing */
            transition: height 0.3s ease;
        }

        .header-right-content {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.75rem;
        }

        /* --- Language and Translation Links --- */
        .header-language-links {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 0.8rem;
            color: #555;
            flex-wrap: nowrap; /* ensure items stay on one line */
        }

        .header-language-links a {
            text-decoration: none;
            color: #a00000;
            font-weight: 500;
        }

        /* keep text and flag icon on one line and centered vertically */
        .header-language-links span {
            display: inline-flex;
            align-items: center;
            white-space: nowrap;
        }

        .header-language-links img {
            height: 12px;
            margin-left: 0.25rem;
            display: inline-block;
            vertical-align: middle;
        }

        /* --- Search Bar --- */
        .search-container {
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ccc;
            /* ADDED: Transition for width */
            transition: width 0.3s ease;
        }

        .search-container input {
            border: none;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            outline: none;
            width: 250px;
            /* ADDED: Allow input to shrink/grow */
            min-width: 100px;
            flex-grow: 1;
        }

        .search-container button {
            border: none;
            background-color: #013912;
            color: white;
            padding: 0 1.2rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-container button:hover {
            background-color:rgb(1, 82, 25);
        }

        /* --- Navigation Bar Section --- */
        .header-nav {
            background-color: #013912;
            color: white;
            padding: 0 1rem;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        /* --- Mobile Menu Toggle (hidden on desktop) --- */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            padding: 0.5rem; /* CHANGED: Adjusted padding */
            cursor: pointer;
            z-index: 10; /* ADDED: Ensure it's on top */
        }

        /* ADDED: Hamburger Icon SVG Styles */
        .hamburger-icon {
            fill: #ffffff;
            transition: transform 0.3s ease;
        }
        .hamburger-icon .line {
            transition: transform 0.3s ease, opacity 0.3s ease, y 0.3s ease, x 0.3s ease, width 0.3s ease;
            transform-origin: center;
        }
        /* ADDED: 'X' animation styles */
        .menu-toggle.is-active .hamburger-icon .line.top {
            transform: rotate(45deg) translate(15px, -15px);
            y: 45; 
        }
        .menu-toggle.is-active .hamburger-icon .line.middle {
            opacity: 0;
        }
        .menu-toggle.is-active .hamburger-icon .line.bottom {
            transform: rotate(-45deg) translate(15px, 15px);
            y: 45;
        }

        .nav-links a {
            display: block;
            padding: 1rem 1.25rem;
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: rgb(1, 82, 25);
        }

        /* --- Active/Current Page Styling --- */
        .nav-links a.active {
            background-color: rgb(1, 82, 25);
            position: relative;
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f7b733;
        }

        .nav-links .dropdown-arrow {
            margin-left: 0.3rem;
            font-size: 0.7rem;
            /* ADDED: Transition for mobile rotation */
            transition: transform 0.3s ease;
        }

        /* --- Dropdown Menu Styles --- */
        .nav-links li {
            position: relative;
        }

        .nav-links .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: rgb(1, 82, 25);
            min-width: 200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
            border-radius: 0 0 8px 8px;
        }

        .nav-links li:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu {
            list-style: none;
        }

        .dropdown-menu a {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            display: block;
            white-space: nowrap;
        }

        .dropdown-menu a:last-child {
            border-bottom: none;
        }

        .dropdown-menu a:hover {
            background-color: rgb(0, 53, 16);
        }

        /* --- Services two-column dropdown inside the main dropdown --- */
        .dropdown-menu .services-dropdown {
            display: flex;
            gap: 1rem;
            padding: 0.75rem;
            max-width: 640px;
            flex-wrap: wrap; /* allow stacking on small screens */
            position: relative; /* needed for absolute-positioned sublists */
        }
        .dropdown-menu .services-col {
            flex: 1 1 260px;
            background: transparent;
            padding: 0.25rem 0.75rem;
        }
        .dropdown-menu .services-col h4 {
            color: #f7b733;
            margin: 0 0 0.5rem 0;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
        }
        .dropdown-menu .services-col ul { list-style: none; padding: 0; margin: 0; }
        .dropdown-menu .services-col li { padding: 0.35rem 0; }
        .dropdown-menu .services-col a { color: #fff; text-decoration: none; font-weight: 600; }
        .dropdown-menu .services-col a:hover { color: #f7b733; text-decoration: underline; }

        /* Hide sublists by default and show them on hover/focus positioned at left side */
        .dropdown-menu .services-col ul {
            display: none;
        }
        .dropdown-menu .services-col:focus-within ul,
        .dropdown-menu .services-col:hover ul {
            display: block;
            position: absolute;
            left: 0; /* always show at left of the services-dropdown */
            top: 0.75rem;
            width: 48%;
            background-color: rgba(1,82,25,0.95);
            padding: 0.75rem 0.9rem;
            border-radius: 6px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            z-index: 1200;
        }
        /* Ensure list items inside the floating panel inherit readable styles */
        .dropdown-menu .services-col:focus-within ul a,
        .dropdown-menu .services-col:hover ul a {
            color: #fff;
        }

        /* On small screens keep lists inline/stacked (no absolute positioning) */
        @media (max-width: 768px) {
            .dropdown-menu .services-dropdown {
                position: static;
            }
            .dropdown-menu .services-col ul {
                display: block;
                position: static;
                width: auto;
                background: transparent;
                padding: 0;
                box-shadow: none;
            }
        }

        /* --- Sub-submenu Styles --- */
        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .sub-dropdown {
            position: absolute;
            top: 0;
            left: 100%;
            background-color: rgb(1, 82, 25);
            min-width: 180px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            opacity: 0;
            visibility: hidden;
            transform: translateX(-10px);
            transition: all 0.3s ease;
            z-index: 1001;
            border-radius: 0 8px 8px 0;
        }

        .dropdown-menu li:hover .sub-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        .sub-dropdown a {
            padding: 0.6rem 0.8rem;
            font-size: 0.85rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sub-dropdown a:last-child {
            border-bottom: none;
        }

        .sub-dropdown a:hover {
            background-color: rgb(0, 53, 16);
        }

        .staff-access-btn {
            background-color: #15A800;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s, padding 0.3s ease, margin 0.3s ease;
            margin: 0.5rem 0;
            white-space: nowrap; /* ADDED: Prevent wrapping */
        }

        .staff-access-btn:hover {
            background-color:rgb(14, 124, 0);
        }

        /* --- Language Dropdown --- */
        .lang-dropdown {
            position: relative;
        }
        .lang-trigger {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            cursor: pointer;
            color: #a00000;
            font-weight: 600;
            user-select: none;
        }
        .lang-trigger .caret {
            font-size: 0.7rem;
            color: #555;
        }
        .lang-menu {
            position: absolute;
            top: 140%;
            right: 0;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-radius: 8px;
            min-width: 160px;
            padding: 0.35rem 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-6px);
            transition: all 0.2s ease;
            z-index: 2000;
        }
        .lang-dropdown.open .lang-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .lang-menu a {
            display: block;
            padding: 0.5rem 0.9rem;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            white-space: nowrap;
        }
        .lang-menu a:hover {
            background-color: #f5f5f5;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .header-main {
                flex-direction: column;
                gap: 1.5rem;
                align-items: center;
                padding: 1.5rem 2rem; /* CHANGED: Added more padding when stacked */
            }

            .header-right-content {
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            /* CHANGED: Tweak main header padding */
            .header-main {
                padding: 1rem 1.5rem;
            }

            .nav-container {
                flex-direction: row; /* CHANGED: Ensure this is row */
                flex-wrap: wrap;
                align-items: center;
                /* ADDED: Relative positioning for menu */
                position: relative; 
            }

            /* show hamburger on mobile */
            .menu-toggle {
                display: block;
                order: 2;
                margin-left: auto;
            }

            /* Staff button shares same row with toggle */
            .staff-access-btn {
                order: 1;
                margin: 0.5rem 0.75rem 0.5rem 0;
                padding: 0.6rem 1rem;
                width: auto;
            }

            /* collapse menu by default on mobile */
            .nav-links {
                order: 3;
                /* CHANGED: from display:none to max-height for animation */
                max-height: 0;
                opacity: 0;
                overflow: hidden;
                visibility: hidden;
                flex-direction: column;
                width: 100%;
                text-align: left;
                /* ADDED: Smooth transition for open/close */
                transition: max-height 0.4s ease-in-out, opacity 0.3s ease, visibility 0.3s ease;
                /* ADDED: Ensure it renders correctly */
                background-color: #013912; 
            }

            /* open state toggled by JS */
            .header-nav.open .nav-links {
                /* CHANGED: Use max-height for animation */
                display: flex; /* keep flex for direction */
                max-height: 80vh; /* Use vh for viewport height */
                opacity: 1;
                visibility: visible;
                /* ADDED: Allow scrolling if menu is too long */
                overflow-y: auto;
            }

            /* ADDED: Make dropdown arrows the main toggle on mobile */
            .nav-links li {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                position: relative; /* Keep for sub-dropdowns */
            }

            .nav-links li > a {
                flex-grow: 1; /* Link takes up available space */
            }

            /* ADDED: Style the arrow as a clickable button */
            .nav-links a .dropdown-arrow {
                position: absolute;
                right: 0;
                top: 0;
                padding: 1rem 1.25rem; /* Match link padding */
                z-index: 2; /* On top of link */
                transform-origin: center;
            }
            /* ADDED: Rotate arrow when open */
            .nav-links li.open > a .dropdown-arrow {
                transform: rotate(180deg);
            }
            
            /* ADDED: Make sub-menu arrow rotate */
            .dropdown-menu li.open > a .dropdown-arrow {
                transform: rotate(90deg);
            }


            /* dropdown menus become inline and collapsible */
            .nav-links .dropdown-menu {
                position: static;
                background-color: #002a0e; /* CHANGED: Darker green for contrast */
                box-shadow: none;
                opacity: 1;
                visibility: hidden; /* CHANGED: Hide by default */
                transform: none;
                border-radius: 0;
                max-height: 0; /* CHANGED: Collapse by default */
                overflow: hidden;
                transition: max-height 0.3s ease;
                width: 100%; /* CHANGED: Full width */
                flex-basis: 100%; /* ADDED: Ensure it takes full width */
            }

            .nav-links li.open > .dropdown-menu {
                visibility: visible;
                max-height: 1000px; /* allow to expand */
            }
            
            /* ADDED: Style for sub-sub-menus on mobile */
            .nav-links .sub-dropdown {
                position: static;
                transform: none;
                opacity: 1;
                visibility: hidden;
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                border-radius: 0;
                min-width: 100%;
                background-color: #001f0a; /* Even darker */
                transition: max-height 0.3s ease;
            }
            
            .dropdown-menu li.open > .sub-dropdown {
                visibility: visible;
                max-height: 500px;
            }

            .dropdown-menu a {
                padding-left: 1.5rem; /* CHANGED: Indent first level */
            }
            
            .sub-dropdown a {
                padding-left: 2.5rem; /* CHANGED: Indent second level */
                font-size: 0.8rem;
            }
        }

        /* ADDED: Media query for very small screens */
        @media (max-width: 480px) {
            .header-main {
                padding: 1rem 0.75rem; /* Tighter padding */
                gap: 1rem;
            }
            
            .header-logo-container img {
                height: 50px; /* Smaller logo */
            }
            
            .header-right-content {
                width: 100%; /* Full width for right content */
                gap: 0.5rem;
            }
            
            .search-container {
                width: 100%; /* Full width search */
            }
            
            .search-container input {
                font-size: 0.85rem;
                padding: 0.5rem 0.75rem;
            }
            
            .search-container button {
                padding: 0 1rem;
            }

            .header-language-links {
                font-size: 0.7rem; /* Smaller font */
                gap: 0.5rem;
                justify-content: center; /* Center the links */
                flex-wrap: wrap; /* Allow wrapping */
                width: 100%;
            }

            .staff-access-btn {
                padding: 0.5rem 0.8rem;
                font-size: 0.85rem;
            }
            
            .menu-toggle {
                padding: 0.4rem;
            }
            
            .hamburger-icon {
                width: 22px;
                height: 22px;
            }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <section class="header-top-bar"></section>

        <section class="header-main">
            <div class="header-logo-container">
                <img src="asset/image/AMC_logo_black.png" alt="Malaria Control Campaign Logo">
            </div>

            <div class="header-right-content">
                <div class="header-language-links">
                    <span>Government of Sri Lanka</span> |
                    <span>Translation <img src="https://flagcdn.com/lk.svg" alt="Sri Lanka Flag"></span> |
                    <div class="lang-dropdown" id="langSwitch">
                        <span class="lang-trigger" role="button" aria-haspopup="true" aria-expanded="false" tabindex="0">
                            Language: English <span class="caret">▼</span>
                        </span>
                        <div class="lang-menu" role="menu" aria-label="Language selection">
                            <a href="home.php" role="menuitem">English</a>
                            <a href="./sinhala/home.php" role="menuitem">සිංහල</a>
                            <a href="#" role="menuitem">Tamil</a>
                        </div>
                    </div>
                </div>
                <div class="search-container">
                    <input type="text" placeholder="Looking for...">
                    <button aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="header-nav">
            <nav class="nav-container">
                <button class="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
                    <svg class="hamburger-icon" viewBox="0 0 100 100" width="24" height="24">
                        <rect class="line top" width="80" height="10" x="10" y="25" rx="5"></rect>
                        <rect class="line middle" width="80" height="10" x="10" y="45" rx="5"></rect>
                        <rect class="line bottom" width="80" height="10" x="10" y="65" rx="5"></rect>
                    </svg>
                </button>

                <?php
                // This PHP block will only work if the file is run on a PHP server.
                $current_page = '';
                if (isset($_SERVER['PHP_SELF'])) {
                    $current_page = basename($_SERVER['PHP_SELF']);
                }
                ?>
                <ul class="nav-links">
                    <li><a href="home.php" <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
                    
                    <li>
                        <a href="aboutUs.php" <?php echo ($current_page == 'aboutUs.php' || $current_page == 'ourStaf.php' || $current_page == 'organizationStructure.php' || $current_page == 'regional-malaria-office.php' || $current_page == 'tsg.php' || $current_page == 'crc.php' || $current_page == 'history.php' || $current_page == 'imageGallary.php') ? 'class="active"' : ''; ?>>About Us <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutUs.php#vision-mission">Vision & Mission</a></li>
                            <li><a href="ourStaf.php">Our Staff</a></li>
                            <li><a href="organizationStructure.php">Organizational Structure</a></li>
                            <li><a href="regional-malaria-office.php">Regional Officers</a></li>
                            <li><a href="tsg.php">Technical Support Group</a></li>
                            <li><a href="crc.php">Case Review Community</a></li>
                            <li><a href="history.php">History</a></li>
                            <li>
                                <a href="aboutUs.php#gallery">Gallery <span class="dropdown-arrow">▶</span></a>
                                <ul class="sub-dropdown">
                                    <li><a href="videoGallery.php">Video Gallery</a></li>
                                    <li><a href="imageGallary.php">Photos Gallery</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="service.php" <?php echo ($current_page == 'service.php') ? 'class="active"' : ''; ?>>Our Services <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Malaria <span class="dropdown-arrow">▶</span></a>
                                <ul class="sub-dropdown">
                                    <li><a href="Provisionofprophylaxis.php">Provision of Prophylaxis</a></li>
                                    <li><a href="screeningOfReturnees.php">Screening of Returnees</a></li>
                                    <li><a href="caseDetection.php">Case Detection &amp; Follow-Up</a></li>
                                    <li><a href="caseBased.php">Case-Based Reactive Response</a></li>
                                    <li><a href="mosquitoSurveillance.php">Mosquito Surveillance &amp; Vector Control</a></li>
                                    <li><a href="riskGroup.php">Risk-Group Surveillance</a></li>
                                    <li><a href="communityEngagement.php">Community Engagement</a></li>
                                    <li><a href="hotlineService.php">Hotline Service</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Leishmaniasis <span class="dropdown-arrow">▶</span></a>
                                <ul class="sub-dropdown">
                                    <li><a href="#">Screening</a></li>
                                    <li><a href="#">Risk-group surveillance</a></li>
                                    <li><a href="#">Case detection, diagnosis, treatment &amp; follow-up</a></li>
                                    <li><a href="#">Sandfly surveillance &amp; vector control</a></li>
                                    <li><a href="#">Community engagement</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="travellerN.php" <?php echo ($current_page == 'traveler.php') ? 'class="active"' : ''; ?>>Travelers</a></li>
                    
                    <li>
                        <a href="#" <?php echo ($current_page == 'download.php' || $current_page == 'case-management.php' || $current_page == 'parasitology.php' || $current_page == 'entomology.php' || $current_page == 'vector-control.php' || $current_page == 'human-resource.php' || $current_page == 'rdt-distribution.php') ? 'class="active"' : ''; ?>>Downloads <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="download.php#statistics">Statistics <span class="dropdown-arrow">▶</span></a>
                                <ul class="sub-dropdown">
                                    <li><a href="case-management.php" <?php echo ($current_page == 'case-management.php') ? 'class="active"' : ''; ?>>Case Management</a></li>
                                    <li><a href="parasitology.php" <?php echo ($current_page == 'parasitology.php') ? 'class="active"' : ''; ?>>Parasitology</a></li>
                                    <li><a href="entomology.php" <?php echo ($current_page == 'entomology.php') ? 'class="active"' : ''; ?>>Entomology</a></li>
                                    <li><a href="#">Vector Control</a></li>
                                    <li><a href="human-resource.php" <?php echo ($current_page == 'human-resource.php') ? 'class="active"' : ''; ?>>Human Resources</a></li>
                                    <li><a href="#" <?php echo ($current_page == 'rdt-distribution.php') ? 'class="active"' : ''; ?>>RDT Distribution</a></li>
                                </ul>
                            </li>
                            <li><a href="annual-reports.php" >Annual Reports</a></li>
                            <li><a href="#">Circulars</a></li>
                            <li><a href="guidelines.php">Guidelines</a></li>
                            <li><a href="iec-materials.php">IEC Materials</a></li>
                            <li><a href="strategic-plan.php">Strategic Plan</a></li>
                            <li><a href="e-newsletter.php">E Newsletter</a></li>
                            <li><a href="annual-reports.php">Annual Reports</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" <?php echo ($current_page == 'infromation.php' || $current_page == 'news.php' || $current_page == 'publicNotice.php' || $current_page == 'procument.php') ? 'class="active"' : ''; ?>>Information <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="publicNotice.php">Public Notice</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="procument.php">Procurement</a></li>
                        </ul>
                    </li>
                    <li><a href="contactUs.php" <?php echo ($current_page == 'contactUs.php') ? 'class="active"' : ''; ?>>Contact Us</a></li>
                </ul>
                <a href="#" class="staff-access-btn">Staff Access</a>
            </nav>
        </section>
    </header>

    <div id="header-spacer" aria-hidden="true"></div>


    <script>
        (function(){
            var dd = document.getElementById('langSwitch');
            if(!dd) return;
            var trigger = dd.querySelector('.lang-trigger');
            function closeAll(e){
                if(!dd.contains(e.target)){
                    dd.classList.remove('open');
                    trigger.setAttribute('aria-expanded','false');
                }
            }
            function toggle(){
                var isOpen = dd.classList.toggle('open');
                trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            }
            trigger.addEventListener('click', toggle);
            trigger.addEventListener('keydown', function(e){
                if(e.key === 'Enter' || e.key === ' '){ e.preventDefault(); toggle(); }
                if(e.key === 'Escape'){ dd.classList.remove('open'); trigger.setAttribute('aria-expanded','false'); }
            });
            document.addEventListener('click', closeAll);
            document.addEventListener('keydown', function(e){ if(e.key === 'Escape'){ dd.classList.remove('open'); trigger.setAttribute('aria-expanded','false'); }});
        })();
    </script>

    <script>
        (function(){
            var header = document.querySelector('.site-header');
            var spacer = document.getElementById('header-spacer');
            if(!header || !spacer) return;

            function setSpacerHeight(){
                spacer.style.height = header.offsetHeight + 'px';
            }

            if(document.readyState === 'complete' || document.readyState === 'interactive'){
                setSpacerHeight();
            } else {
                window.addEventListener('DOMContentLoaded', setSpacerHeight);
            }
            window.addEventListener('resize', setSpacerHeight);

            var isShown = true;
            function onScroll(){
                var y = window.scrollY || window.pageYOffset;
                if(y > 10){
                    if(!isShown){ header.classList.add('is-visible'); isShown = true; }
                    header.classList.add('is-condensed');
                } else {
                    header.classList.remove('is-condensed');
                }
            }
            window.addEventListener('scroll', onScroll, { passive: true });
            header.classList.add('is-visible');
        })();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // --- Main Hamburger Toggle ---
            const menuToggle = document.querySelector('.menu-toggle');
            const headerNav = document.querySelector('.header-nav');
            
            if (menuToggle && headerNav) {
                menuToggle.addEventListener('click', () => {
                    // Toggle the 'open' class on the nav section
                    headerNav.classList.toggle('open');
                    
                    // Toggle the 'is-active' class for the 'X' animation
                    menuToggle.classList.toggle('is-active');
                    
                    // Update aria-expanded for accessibility
                    const isOpen = headerNav.classList.contains('open');
                    menuToggle.setAttribute('aria-expanded', isOpen);
                });
            }

            // --- Mobile Submenu Toggles ---

            /* THIS IS THE FIXED SELECTOR:
            It now selects li elements that have .dropdown-menu OR .sub-dropdown
            */
            const dropdownItems = document.querySelectorAll('.nav-links li:has(.dropdown-menu), .nav-links li:has(.sub-dropdown)');

            dropdownItems.forEach(item => {
                // Find the arrow *inside* the main link
                // We use :scope to ensure we only get the direct child arrow
                const arrow = item.querySelector(':scope > a > .dropdown-arrow');

                if (arrow) {
                    // Add a click listener directly to the arrow
                    arrow.addEventListener('click', (e) => {
                        // Only run this logic on mobile view
                        if (window.innerWidth <= 768) {
                            e.preventDefault(); // IMPORTANT: Stops the link from navigating
                            e.stopPropagation(); // Stops the click from bubbling up
                            
                            // Toggle the 'open' class on the parent <li>
                            item.classList.toggle('open');
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>