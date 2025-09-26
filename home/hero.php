<style>
    /* --- Hero Section --- */
    .hero-section {
        display: flex;
        background: url('asset/hero/hero1.png') no-repeat center center/cover;
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
        background-color: rgba(0, 0, 0, 0.03); /* Reduced opacity to make image more visible */
        z-index: 0;
    }

    /* --- Hero dots --- */
    .hero-dots {
        position: absolute;
        bottom: 1.25rem;
        left: 0;
        right: 0;
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        z-index: 1;
    }

    .hero-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.9);
        cursor: pointer;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .hero-dot:hover {
        transform: scale(1.1);
    }

    .hero-dot.active {
        background-color: #ffffff;
    }

    .hero-content {
        flex: 1;
        padding-right: 2rem;
        z-index: 1;
        position: relative;
    }

    /* --- Hero side arrows --- */
    .hero-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.8);
        background-color: rgba(0, 0, 0, 0.25);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1;
        user-select: none;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .hero-arrow:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-50%) scale(1.05);
    }

    .hero-arrow:focus {
        outline: 2px solid #ffffff;
        outline-offset: 2px;
    }

    .hero-arrow.left { left: 0.75rem; }
    .hero-arrow.right { right: 0.75rem; }

    .hero-arrow svg {
        width: 18px;
        height: 18px;
    }

    .hero-content h1 {
        color:rgb(255, 255, 255);
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
        color:rgb(235, 235, 235);
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
        <a href="contactUs.php" class="hero-cta-btn">Contact Us</a>
        <div class="hero-contact-info">
            <div><i class="fas fa-phone-alt"></i><span>+94 11 7 626 626</span></div>
            <div><i class="fas fa-envelope"></i><span>antimalariacampaign@gmail.com</span></div>
        </div>
    </div>
    <button class="hero-arrow left" aria-label="Previous slide" tabindex="0">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M15 6L9 12L15 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    <button class="hero-arrow right" aria-label="Next slide" tabindex="0">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M9 6L15 12L9 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    <div class="hero-dots" aria-label="Hero image navigation">
        <span class="hero-dot active" data-index="0" aria-label="Slide 1"></span>
        <span class="hero-dot" data-index="1" aria-label="Slide 2"></span>
        <span class="hero-dot" data-index="2" aria-label="Slide 3"></span>
    </div>
</section>

<script>
    (function () {
        var heroSection = document.querySelector('.hero-section');
        var dots = Array.prototype.slice.call(document.querySelectorAll('.hero-dot'));
        var images = [
            'asset/hero/hero1.png',
            'asset/hero/hero2.png',
            'asset/hero/hero3.png'
        ];
        var titles = [
            'Protect Your Family. Fight Malaria.',
            'Malaria Distribution by Districts',
            'Malaria Distribution by Region.'
        ];
        var subtitles = [
            'Sleep under a mosquito net. Stay safe. Stay healthy.',
            'Percentage of Cases, 2025 WHO Report',
            'Percentage of Cases, 2025 WHO Report.'
        ];
        var current = 0;
        var intervalMs = 5000;
        var timerId;

        function setBackground(index) {
            heroSection.style.background = "url('" + images[index] + "') no-repeat center center/cover";
        }

        function setTexts(index) {
            var h1El = document.querySelector('.hero-content h1');
            var pEl = document.querySelector('.hero-content p');
            if (h1El && titles[index] !== undefined) {
                h1El.textContent = titles[index];
            }
            if (pEl && subtitles[index] !== undefined) {
                pEl.textContent = subtitles[index];
            }
        }

        function setActiveDot(index) {
            dots.forEach(function (d) { d.classList.remove('active'); });
            if (dots[index]) {
                dots[index].classList.add('active');
            }
        }

        function show(index) {
            current = (index + images.length) % images.length;
            setBackground(current);
            setTexts(current);
            setActiveDot(current);
        }

        function next() {
            show(current + 1);
        }

        function prev() {
            show(current - 1);
        }

        function start() {
            stop();
            timerId = setInterval(next, intervalMs);
        }

        function stop() {
            if (timerId) {
                clearInterval(timerId);
                timerId = undefined;
            }
        }

        dots.forEach(function (dot) {
            dot.addEventListener('click', function (e) {
                var idx = parseInt(dot.getAttribute('data-index')) || 0;
                show(idx);
                start();
            });
        });

        var leftArrow = document.querySelector('.hero-arrow.left');
        var rightArrow = document.querySelector('.hero-arrow.right');
        if (leftArrow) {
            leftArrow.addEventListener('click', function () {
                prev();
                start();
            });
            leftArrow.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); prev(); start(); }
            });
        }
        if (rightArrow) {
            rightArrow.addEventListener('click', function () {
                next();
                start();
            });
            rightArrow.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); next(); start(); }
            });
        }

        // Initialize explicitly in case initial CSS background changes later
        show(0);
        start();

        // Optional: pause on hover for desktop
        heroSection.addEventListener('mouseenter', stop);
        heroSection.addEventListener('mouseleave', start);
    })();
</script>
