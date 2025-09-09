<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling --- */
        .hero-section {
            height: 60vh;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/news.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 600;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
            font-weight: 300;
            max-width: 600px;
        }

        /* --- News Section Styling --- */
        .news-section {
            padding: 4rem 2rem;
            background-color: #fff;
        }

        .news-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .news-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .news-image {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-date-tag {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: #A00000;
            color: white;
            padding: 0.5rem 0.8rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-title {
            font-size: 1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            text-transform: uppercase;
        }

        .news-meta {
            font-size: 0.8rem;
            color: #888;
            margin-bottom: 1rem;
        }

        .news-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .news-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
        }

        .news-views {
            color: #888;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .news-read-more {
            color: #A00000;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .news-read-more:hover {
            color: #800000;
        }

        /* --- Load More Button --- */
        .load-more-container {
            text-align: center;
            margin-top: 2rem;
        }

        .load-more-btn {
            background-color: #fff;
            color: #A00000;
            border: 2px solid #A00000;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .load-more-btn:hover {
            background-color: #A00000;
            color: #fff;
        }

        .load-more-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #A00000;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }

        .load-more-btn:hover .load-more-icon {
            background-color: #fff;
            color: #A00000;
        }

        /* --- Responsive Design --- */
        @media (max-width: 1200px) {
            .news-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            .news-section {
                padding: 2rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>News</h1>
            <p>Stay updated with the latest malaria control news and updates</p>
        </div>
    </section>

    <section class="news-section">
        <div class="news-container">
            <div class="news-grid">
                <!-- News Card 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/new4.jpg" alt="Consultative Meeting">
                        <div class="news-date-tag">Nov - 21 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Consultative Meeting to Review the National Action Plan for Health Security (NAPHS) 2024-2028 - 19th December 2024</h3>
                        <div class="news-meta">News & Events | Leave a comment</div>
                        <p class="news-description">A comprehensive review of the National Action Plan for Health Security covering malaria control strategies...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>109 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/new5.jpg" alt="Microscopic Analysis">
                        <div class="news-date-tag">Nov - 18 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Advanced Microscopic Analysis for Malaria Detection</h3>
                        <div class="news-meta">Research | Leave a comment</div>
                        <p class="news-description">New techniques in microscopic analysis are improving malaria detection accuracy in rural areas...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>234 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/new1.jpg" alt="Community Outreach">
                        <div class="news-date-tag">Nov - 15 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Community Outreach Program Launched in Northern Province</h3>
                        <div class="news-meta">Community | Leave a comment</div>
                        <p class="news-description">A new community outreach program aims to educate residents about malaria prevention...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>156 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 4 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/sramadana.jpg" alt="Vector Control">
                        <div class="news-date-tag">Nov - 12 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Enhanced Vector Control Measures Implemented</h3>
                        <div class="news-meta">Vector Control | Leave a comment</div>
                        <p class="news-description">New vector control measures are being implemented across high-risk malaria areas...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>189 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 5 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/training.jpg" alt="Training Program">
                        <div class="news-date-tag">Nov - 10 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Healthcare Worker Training Program Completed</h3>
                        <div class="news-meta">Training | Leave a comment</div>
                        <p class="news-description">Over 200 healthcare workers completed advanced malaria diagnosis and treatment training...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>312 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 6 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=200&fit=crop" alt="Research Study">
                        <div class="news-date-tag">Nov - 8 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">New Research Study on Malaria Resistance Patterns</h3>
                        <div class="news-meta">Research | Leave a comment</div>
                        <p class="news-description">A comprehensive study reveals new patterns in malaria resistance across different regions...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>278 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 7 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="asset/image/international.jpg
                        
                        
                        " alt="International Collaboration">
                        <div class="news-date-tag">Nov - 5 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">International Collaboration Strengthens Malaria Control</h3>
                        <div class="news-meta">International | Leave a comment</div>
                        <p class="news-description">New international partnerships are enhancing malaria control efforts in Sri Lanka...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>145 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>

                <!-- News Card 8 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=200&fit=crop" alt="Technology Innovation">
                        <div class="news-date-tag">Nov - 3 - 2024</div>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Technology Innovation in Malaria Surveillance</h3>
                        <div class="news-meta">Technology | Leave a comment</div>
                        <p class="news-description">New technology solutions are revolutionizing malaria surveillance and monitoring systems...</p>
                        <div class="news-footer">
                            <div class="news-views">
                                <span>👁</span>
                                <span>201 total views</span>
                            </div>
                            <a href="#" class="news-read-more">Read more ▶</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load-more-container">
                <button class="load-more-btn">
                    <div class="load-more-icon">+</div>
                    Load more
                </button>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>
</html>
