<!-- Font links for the 'Inter' font -->
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
        background-color: #ffffff; /* Keep white background */
        border-bottom: none; /* Remove the border that was causing the white line */
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    /* --- Top Golden Bar --- */
    .header-top-bar {
        height: 5px;
        background-color: #f7b733; /* A golden yellow color */
    }

    /* --- Main Content Section (Logos, Search) --- */
    .header-main {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        flex-wrap: wrap; /* Allows items to wrap on smaller screens */
    }

    .header-logo-container {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .header-logo-container img {
        height: 70px; /* Adjust height as needed */
        width: auto;
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
        color: #555; /* Back to dark color for white background */
    }

    .header-language-links a {
        text-decoration: none;
        color: #a00000; /* Back to red color for white background */
        font-weight: 500;
    }
    
    .header-language-links img {
        height: 12px;
        margin-left: 0.25rem;
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

    /* --- Search Bar --- */
    .search-container {
        display: flex;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .search-container input {
        border: none;
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
        outline: none;
        width: 250px;
    }

    .search-container button {
        border: none;
        background-color: #013912; /* Dark maroon */
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
        background-color: #013912; /* Dark maroon */
        color: white;
        padding: 0 1rem; /* Padding on the sides */
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1400px; /* Optional: Constrain width */
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
        font-size: 1.6rem;
        padding: 0.75rem 0.5rem;
        cursor: pointer;
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
        background-color: rgb(1, 82, 25); /* Slightly lighter maroon on hover */
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
        background-color: #f7b733; /* Golden yellow */
    }
    
    .nav-links .dropdown-arrow {
        margin-left: 0.3rem;
        font-size: 0.7rem;
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
        background-color: #15A800; /* Brighter red */
        color: white;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        font-weight: 600;
        transition: background-color 0.3s;
        margin: 0.5rem 0;
    }

    .staff-access-btn:hover {
        background-color:rgb(14, 124, 0);
    }

    /* --- Responsive Design --- */
    @media (max-width: 992px) {
        .header-main {
            flex-direction: column;
            gap: 1.5rem;
            align-items: center;
        }

        .header-right-content {
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .nav-container {
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
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
            display: none;
            flex-direction: column;
            width: 100%;
            text-align: left;
        }

        /* open state toggled by JS */
        .header-nav.open .nav-links {
            display: flex;
        }

        /* dropdown menus become inline and collapsible */
        .nav-links .dropdown-menu {
            position: static;
            background-color: #5a0000;
            box-shadow: none;
            opacity: 1;
            visibility: hidden;
            transform: none;
            border-radius: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            width: 100%;
        }

        .nav-links li.open > .dropdown-menu {
            visibility: visible;
            max-height: 1000px; /* allow to expand */
        }

        .dropdown-menu a {
            padding-left: 1.25rem;
        }

        .staff-access-btn {
            width: auto;
            text-align: center;
        }
    }
</style>

<header class="site-header">
    <!-- Section 1: Top Golden Bar -->
    <section class="header-top-bar"></section>

    <!-- Section 2: Main Header with Logos and Search -->
    <section class="header-main">
        <div class="header-logo-container">
            <!-- Using placeholder images for logos -->
            
            <img src="asset/image/AMC_logo2.png" alt="Malaria Control Campaign Logo">
        </div>

        <div class="header-right-content">
            <div class="header-language-links">
                <span>ශ්‍රී ලංකා රජය</span> |
                <span>පරිවර්තනය <img src="https://flagcdn.com/lk.svg" alt="Sri Lanka Flag"></span> |
                <div class="lang-dropdown" id="langSwitch">
                    <span class="lang-trigger" role="button" aria-haspopup="true" aria-expanded="false" tabindex="0">
                        භාෂාව: සිංහල <span class="caret">▼</span>
                    </span>
                    <div class="lang-menu" role="menu" aria-label="Language selection">
                        <a href="../home.php" role="menuitem">English</a>
                        <a href="home.php" role="menuitem">සිංහල</a>
                        <a href="#" role="menuitem">Tamil</a>
                    </div>
                </div>
            </div>
            <div class="search-container">
                <input type="text" placeholder="Looking for...">
                <button aria-label="Search">
                    <!-- Inline SVG for Search Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Section 3: Navigation Bar -->
    <section class="header-nav">
        <nav class="nav-container">
            <button class="menu-toggle" aria-label="Toggle menu" onclick="(function(btn){var nav=btn.closest('.header-nav');nav.classList.toggle('open');})(this)">☰</button>
            <?php
            // Get current page filename
            $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <ul class="nav-links">
                <li><a href="home.php" <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>මුල් පිටුව</a></li>
                <li onclick="if(window.innerWidth<=768){this.classList.toggle('open');}">
                    <a href="aboutUs.php" <?php echo ($current_page == 'aboutUs.php' || $current_page == 'ourStaf.php' || $current_page == 'organizationStructure.php' || $current_page == 'regional-malaria-office.php' || $current_page == 'tsg.php' || $current_page == 'crc.php' || $current_page == 'history.php' || $current_page == 'imageGallary.php') ? 'class="active"' : ''; ?>>අප ගැන<span class="dropdown-arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="aboutUs.php#vision-mission">දැක්ම සහ මෙහෙවර</a></li>
                        <li><a href="ourStaf.php">අපේ කාර්ය මණ්ඩලය</a></li>
                        <li><a href="organizationStructure.php">ආයතනික ව්යුහය</a></li>
                        <li><a href="regional-malaria-office.php">ප්‍රාදේශීය නිලධාරීන්</a></li>
                        <li><a href="tsg.php">තාක්ෂණික සහාය කණ්ඩායම</a></li>
                        <li><a href="crc.php">සිද්ධි සමාලෝචන ප්‍රජාව</a></li>
                        <li><a href="history.php">ඉතිහාසය</a></li>
                        <li>
                            <a href="aboutUs.php#gallery">ගැලරිය <span class="dropdown-arrow">▶</span></a>
                            <ul class="sub-dropdown">
                                <li><a href="videoGallery.php">වීඩියෝ ගැලරිය</a></li>
                                <li><a href="imageGallary.php">ඡායාරූප ගැලරිය</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li onclick="if(window.innerWidth<=768){this.classList.toggle('open');}">
                    <a href="service.php" <?php echo ($current_page == 'service.php') ? 'class="active"' : ''; ?>>සේවාවන්<span class="dropdown-arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="service.php?service=diagnosis">රෝග විනිශ්චය සහ ප්‍රතිකාර</a></li>
                        <li><a href="service.php?service=parasitological">පරපෝෂිත විද්‍යාත්මක නිරීක්ෂණ</a></li>
                        <li><a href="service.php?service=entomological">කීට විද්‍යාත්මක නිරීක්ෂණ</a></li>
                        <li><a href="service.php?service=vector">දෛශික පාලනය</a></li>
                        <li><a href="service.php?service=riskgroup">අවදානම් කණ්ඩායම සහ මහජන දැනුවත්භාවය</a></li>
                    </ul>
                </li>
                <li><a href="traveler.php" <?php echo ($current_page == 'traveler.php') ? 'class="active"' : ''; ?>>සංචාරකයන්</a></li>
                <li onclick="if(window.innerWidth<=768){this.classList.toggle('open');}">
                    <a href="download.php" <?php echo ($current_page == 'download.php' || $current_page == 'case-management.php' || $current_page == 'parasitology.php' || $current_page == 'entomology.php' || $current_page == 'vector-control.php' || $current_page == 'human-resource.php' || $current_page == 'rdt-distribution.php') ? 'class="active"' : ''; ?>>බාගත කිරීම් <span class="dropdown-arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="download.php#statistics">සංඛ්යාලේඛන <span class="dropdown-arrow">▶</span></a>
                            <ul class="sub-dropdown">
                                <li><a href="case-management.php" <?php echo ($current_page == 'case-management.php') ? 'class="active"' : ''; ?>>නඩු කළමනාකරණය</a></li>
                                <li><a href="parasitology.php" <?php echo ($current_page == 'parasitology.php') ? 'class="active"' : ''; ?>>පරපෝෂිත විද්යාව</a></li>
                                <li><a href="entomology.php" <?php echo ($current_page == 'entomology.php') ? 'class="active"' : ''; ?>>කීට විද්යාව</a></li>
                                <li><a href="#">දෛශික පාලනය</a></li>
                                <li><a href="human-resource.php" <?php echo ($current_page == 'human-resource.php') ? 'class="active"' : ''; ?>>මානව සම්පත්</a></li>
                                <li><a href="#" <?php echo ($current_page == 'rdt-distribution.php') ? 'class="active"' : ''; ?>>RDT බෙදා හැරීම</a></li>
                            </ul>
                        </li>
                        <li><a href="annual-reports.php" >වාර්ෂික වාර්තා</a></li>
                        <li><a href="#">චක්රලේඛන</a></li>
                        <li><a href="guidelines.php">මාර්ගෝපදේශ</a></li>
                        <li><a href="iec-materials.php">IEC ද්රව්ය</a></li>
                        <li><a href="strategic-plan.php">උපායමාර්ගික සැලැස්ම</a></li>
                        <li><a href="e-newsletter.php">ඊ පුවත් පත්‍රිකාව</a></li>
                        <li><a href="annual-reports.php">වාර්ෂික වාර්තා</a></li>
                    </ul>
                </li>
                <li onclick="if(window.innerWidth<=768){this.classList.toggle('open');}">
                    <a href="infromation.php" <?php echo ($current_page == 'infromation.php' || $current_page == 'news.php' || $current_page == 'publicNotice.php') ? 'class="active"' : ''; ?>>තොරතුරු<span class="dropdown-arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="publicNotice.php">මහජන නිවේදනය</a></li>
                        <li><a href="news.php">පුවත්</a></li>
                        <li><a href="infromation.php#procurement">ප්රසම්පාදනය</a></li>
                    </ul>
                </li>
                <li><a href="contactUs.php" <?php echo ($current_page == 'contactUs.php') ? 'class="active"' : ''; ?>>අමතන්න</a></li>
            </ul>
            <a href="#" class="staff-access-btn">කාර්ය මණ්ඩල ප්රවේශය</a>
        </nav>
    </section>
</header>


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
