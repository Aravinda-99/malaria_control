<style>
    /* --- Footer --- */
    .site-footer {
        background-color: #3a0f0f; /* Dark maroon from image */
        color: #ccc;
        padding: 4rem 2rem 0; /* Remove bottom padding */
    }
    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 2fr 1.5fr 1fr 1.5fr; /* Four column layout */
        gap: 2.5rem;
    }
    .footer-logo-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }
    .footer-logo-container img {
        height: 70px;
    }
    .footer-col h4 {
        color: #fff;
        margin-bottom: 1.5rem;
        font-size: 1rem;
    }
    .footer-col p {
        font-size: 0.8rem;
        line-height: 1.6;
        color: #aaa;
    }
    .footer-col ul {
        list-style: none;
    }
    .footer-col ul li {
        margin-bottom: 0.8rem;
        font-size: 0.8rem;
    }
    .footer-col ul li a {
        color: #ccc;
        text-decoration: none;
        transition: color 0.3s;
    }
    .footer-col ul li a:hover {
        color: #fff;
    }
    .footer-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 0.8rem;
        font-size: 0.8rem;
    }
    .footer-contact-item i {
        margin-top: 4px;
        color: #f7b733;
    }
    .footer-search form {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .footer-search input {
        padding: 0.7rem;
        border: 1px solid #555;
        background-color: #fff;
        border-radius: 5px;
        color: #333;
    }
    .footer-search button {
        background-color: #f7b733;
        color: #333;
        border: none;
        padding: 0.7rem;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .footer-search button:hover {
        background-color: #f8c35a;
    }

    .footer-bottom {
        margin: 3rem -2rem 0 -2rem; /* extend beyond parent side padding */
        padding: 1.5rem 2rem;
        background-color: rgba(0,0,0,0.2);
        background-image: url("asset/image/fdesing.png");
        background-repeat: repeat-x;
        background-position: center;
        background-size: auto 100%;
    }
    .footer-bottom-container {
         max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9rem;
    }
    .footer-bottom-links a {
        color: #ccc;
        text-decoration: none;
        margin-left: 1.5rem;
        transition: color 0.3s;
    }
    .footer-bottom-links a:hover {
        color: #fff;
    }

    /* --- Footer Responsive Design --- */
    @media (max-width: 992px) {
        .footer-container {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
        }
        .footer-bottom-container {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-col">
            <div class="footer-logo-container">
                
                <img src="asset/image/AMC_logo1.png" alt="Malaria Control Campaign Logo">
            </div>
            <p>The need for an effective response to malaria was recognized prior to independence in 1948. Organized malaria control activities commenced in 1911 with the establishment of the Anti Malaria Campaign in Kurunegala when Sri Lanka was still a British colony.</p>
        </div>
        <div class="footer-col">
            <h4>Contact Us</h4>
             <ul>
                <li class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Public Health Complex, 555/5, Elvitigala Mawatha, Colombo 05.</span>
                </li>
                <li class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>antimalariacampaign@gmail.com</span>
                </li>
                 <li class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>+94 (112) 588947 | Director</span>
                </li>
                <li class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>+94(112)369873 | Medical Officers</span>
                </li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Travelers</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
         <div class="footer-col footer-search">
            <h4>Search</h4>
            <form>
                <input type="search" placeholder="Search here">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p>&copy; 2025 All Rights Reserved</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Legal</a>
                <a href="#">Site Map</a>
            </div>
        </div>
    </div>
</footer>
