<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hero Section</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* --- Hero Section --- */
        .hero-section {
            display: flex;
            background: url('asset/hero/hero11.png') no-repeat center center/cover;
            color: #fff;
            min-height: 450px;
            align-items: center;
            padding: 2rem 4rem;
            position: relative;
            overflow: hidden;
            transition: background 0.5s ease-in-out;
        }
        
        /* Mobile initial background */
        @media (max-width: 768px) {
            .hero-section {
                background-image: url('asset/mobile/mhero11.jpg');
            }
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.03); 
            z-index: 0;
            transition: background-color 0.3s ease;
        }
        
        /* Darker overlay for mobile view */
        @media (max-width: 768px) {
            .hero-section::before {
                background-color: rgba(0, 0, 0, 0.5); /* Dark overlay for better text readability */
            }
        }
        
        /* Even darker overlay for very small mobile screens */
        @media (max-width: 480px) {
            .hero-section::before {
                background-color: rgba(0, 0, 0, 0.6); /* Darker overlay for small screens */
            }
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
            transition: transform 0.2s ease, background-color 0.2s ease, width 0.2s ease, height 0.2s ease;
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
            transition: background-color 0.2s ease, transform 0.2s ease, width 0.2s ease, height 0.2s ease, left 0.2s ease, right 0.2s ease;
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
            font-size: 2.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            transition: font-size 0.3s ease;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #ccc;
            transition: font-size 0.3s ease, margin 0.3s ease;
        }

        .hero-cta-btn {
            background-color: transparent;
            color: #fff;
            border: 1px solid #fff;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, color 0.3s, padding 0.3s ease, font-size 0.3s ease;
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
            transition: margin 0.3s ease, gap 0.3s ease, font-size 0.3s ease;
        }

        .hero-contact-info div {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        /* ============================================================
        HERO RESPONSIVE DESIGN - උස අඩු කිරීමේ වෙනස්කම්
        ============================================================
        */

        @media (max-width: 992px) {
            .hero-section {
                flex-direction: column;
                text-align: center;
                /* CHANGED: උස අඩු කිරීම සඳහා padding අඩු කලා */
                padding: 3.5rem 2rem;
                /* CHANGED: උස අඩු කිරීම සඳහා min-height අඩු කලා */
                min-height: 420px; 
                justify-content: center;
            }
            .hero-content {
                padding-right: 0;
                margin-bottom: 0;
            }
            .hero-contact-info {
                align-items: center;
                margin-top: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                /* CHANGED: උස අඩු කිරීම සඳහා padding අඩු කලා */
                padding: 4rem 1.5rem;
                /* CHANGED: උස අඩු කිරීම සඳහා min-height අඩු කලා */
                min-height: 400px;
            }
            .hero-content h1 {
                font-size: 2rem; 
                line-height: 1.3;
            }
            
            .hero-content p {
                font-size: 1rem;
                margin-bottom: 1.5rem;
            }
            
            .hero-contact-info {
                font-size: 0.9rem;
                gap: 0.75rem;
            }
            
            .hero-arrow {
                width: 34px;
                height: 34px;
                left: 0.5rem; 
            }
            .hero-arrow.right {
                right: 0.5rem; 
                left: auto;
            }
            
            .hero-dot {
                width: 8px;
                height: 8px;
            }
        }

        /* ADDED: New breakpoint for small mobile (320px+) */
        @media (max-width: 480px) {
            .hero-section {
                /* CHANGED: උස අඩු කිරීම සඳහා padding අඩු කලා */
                padding: 4rem 1rem; 
                /* CHANGED: උස අඩු කිරීම සඳහා min-height අඩු කලා */
                min-height: 350px;
            }
            .hero-content h1 {
                font-size: 1.5rem; 
            }
            .hero-content p {
                font-size: 0.95rem;
            }
            .hero-cta-btn {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }
            .hero-contact-info {
                margin-top: 1.5rem;
                gap: 0.5rem;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Protect our country.<br>Prevent re-introduction of malaria.</h1>
            <p>Travel Smart. Stay Safe.</p>
            <a href="contactUs.php" class="hero-cta-btn">Contact Us</a>
            <div class="hero-contact-info">
                <div><i class="fas fa-phone-alt"></i><span>+94 712841767</span></div>
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
                <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="hero-dots" aria-label="Hero image navigation">
            <span class="hero-dot active" data-index="0" aria-label="Slide 1"></span>
            <span class="hero-dot" data-index="1" aria-label="Slide 2"></span>
            <span class="hero-dot" data-index="2" aria-label="Slide 3"></span>
            <span class="hero-dot" data-index="3" aria-label="Slide 4"></span>
        </div>
    </section>

    <script>
        (function () {
            var heroSection = document.querySelector('.hero-section');
            var dots = Array.prototype.slice.call(document.querySelectorAll('.hero-dot'));
            
            // Check if mobile view (768px and below)
            function isMobileView() {
                return window.innerWidth <= 768;
            }
            
            // Desktop images
            var desktopImages = [
                'asset/hero/hero11.jpg',
                'asset/hero/Frame3.png',
                'asset/hero/Frame4.png',
                'asset/hero/hero4.jpg'
            ];
            
            // Mobile images
            var mobileImages = [
                'asset/mobile/mhero11.jpg',
                'asset/mobile/mhero2.png',
                'asset/mobile/mFrame4.png',
                'asset/mobile/mhero4.jpg'
            ];
            
            // Get images based on screen size
            function getImages() {
                return isMobileView() ? mobileImages : desktopImages;
            }
            
            var images = getImages();
            var titles = [
                'Protect our country.<br>Prevent re-introduction of Malaria',
                'District-wise distribution of <br>Imported malaria cases 2013-2024',
                'Countries with malaria in 2024.',
                'Early detection of malaria cases save life <br>and prevent spread.'
            ];
            var subtitles = [
                'Travel smart. Stay safe.',
                'Every case counts. Stop Malaria at the Border',
                'Malaria still exists. Know before you go..'
            ];
            var current = 0;
            var intervalMs = 5000;
            var timerId;

            function setBackground(index) {
                // Update images array if screen size changed
                images = getImages();
                
                // Ensure index is within bounds
                if (index >= images.length) {
                    index = 0;
                }
                
                // Preload image to prevent flicker
                var img = new Image();
                img.src = images[index];
                img.onload = function() {
                    heroSection.style.backgroundImage = "url('" + images[index] + "')";
                }
            }

            function setTexts(index) {
                var h1El = document.querySelector('.hero-content h1');
                var pEl = document.querySelector('.hero-content p');
                if (h1El && titles[index] !== undefined) {
                    h1El.innerHTML = titles[index];
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

            // Initialize explicitly
            show(0);
            start();

            // Optional: pause on hover for desktop
            heroSection.addEventListener('mouseenter', stop);
            heroSection.addEventListener('mouseleave', start);
            
            // Update images when window is resized
            var resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(function() {
                    var wasMobile = images === mobileImages;
                    var nowMobile = isMobileView();
                    
                    // Only update if switching between mobile/desktop
                    if (wasMobile !== nowMobile) {
                        images = getImages();
                        // Reset to first image when switching
                        show(0);
                    }
                }, 250);
            });
        })();
    </script>
</body>
</html>