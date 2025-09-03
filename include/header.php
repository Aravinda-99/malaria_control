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
        background-color: #6a0000; /* Dark maroon */
        color: white;
        padding: 0 1.2rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .search-container button:hover {
        background-color: #800000;
    }

    /* --- Navigation Bar Section --- */
    .header-nav {
        background-color: #6a0000; /* Dark maroon */
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
        background-color: #800000; /* Slightly lighter maroon on hover */
    }
    
    .nav-links .dropdown-arrow {
        margin-left: 0.3rem;
        font-size: 0.7rem;
    }

    .staff-access-btn {
        background-color: #a00000; /* Brighter red */
        color: white;
        text-decoration: none;
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        font-weight: 600;
        transition: background-color 0.3s;
        margin: 0.5rem 0;
    }

    .staff-access-btn:hover {
        background-color: #c00000;
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
            flex-direction: column;
        }

        .nav-links {
            flex-direction: column;
            width: 100%;
            text-align: center;
        }

        .staff-access-btn {
            width: 90%;
            text-align: center;
            margin-bottom: 1rem;
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
                <span>Government of Sri Lanka</span> |
                <span>Translation <img src="https://flagcdn.com/lk.svg" alt="Sri Lanka Flag"></span> |
                <a href="#">English</a>
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
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us<span class="dropdown-arrow">▼</span></a></li>
                <li><a href="#">Our Services<span class="dropdown-arrow">▼</span></a></li>
                <li><a href="#">Travelers</a></li>
                <li><a href="#">Downloads<span class="dropdown-arrow">▼</span></a></li>
                <li><a href="#">Information<span class="dropdown-arrow">▼</span></a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <a href="#" class="staff-access-btn">Staff Access</a>
        </nav>
    </section>
</header>

