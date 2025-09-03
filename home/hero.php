<style>
    /* --- Hero Section --- */
    .hero-section {
        display: flex;
        background: url('asset/image/banner3.png') no-repeat center center/cover;
        color: #fff;
        min-height: 450px;
        align-items: center;
        padding: 2rem 4rem;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.2); /* Reduced opacity to make image more visible */
        z-index: 0;
    }

    .hero-content {
        flex: 1;
        padding-right: 2rem;
        z-index: 1;
        position: relative;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
        color: #ccc;
    }

    .hero-cta-btn {
        background-color: transparent;
        color: #fff;
        border: 1px solid #fff;
        padding: 0.8rem 2rem;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
    }

    .hero-cta-btn:hover {
        background-color: #fff;
        color: #000;
    }

    .hero-contact-info {
        margin-top: 3rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        color: #ccc;
    }

    .hero-contact-info div {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    /* --- Hero Responsive Design --- */
    @media (max-width: 992px) {
        .hero-section {
            flex-direction: column;
            text-align: center;
            padding: 3rem 2rem;
        }
        .hero-content {
            padding-right: 0;
            margin-bottom: 2rem;
        }
        .hero-contact-info {
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2rem;
        }
    }
</style>

<section class="hero-section">
    <div class="hero-content">
        <h1>Protect Your Family. Fight Malaria.</h1>
        <p>Sleep under a mosquito net. Stay safe. Stay healthy.</p>
        <a href="#" class="hero-cta-btn">Contact Us</a>
        <div class="hero-contact-info">
            <div><i class="fas fa-phone-alt"></i><span>+94 11 7 626 626</span></div>
            <div><i class="fas fa-envelope"></i><span>antimalariacampaign@gmail.com</span></div>
        </div>
    </div>
</section>
