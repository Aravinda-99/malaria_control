<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Malaria Control</title>
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    <style>
        /* --- Basic Reset & Body Styling --- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            box-sizing: border-box;
        }
        *, *:before, *:after {
            box-sizing: inherit;
        }

        /* --- Hero Section Styling (Existing) --- */
        .hero-section {
            height: 60vh;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            background-image: url('asset/image/contactBanner.png');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
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
        .hero-content h1 { font-size: 4rem; margin: 0; font-weight: 600; }
        .hero-content p { font-size: 1.25rem; margin-top: 0.5rem; font-weight: 300; max-width: 600px; }

        
        /* --- Contact Section General Styling --- */
        .contact-section {
            padding: 2rem 2rem;
            background: #f9f9f9;
        }
        .contact-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }


        /* --- NEW: Interactive Map Section Styles --- */
        .interactive-map-section {
            margin-bottom: 4rem; /* Space between map and form */
            margin-top: 4rem;
        }
        .interactive-map-section h2 {
            font-size: 2rem;
            color: rgb(5, 44, 0);
            margin-bottom: 2rem;
            text-align: center;
        }
        .map-and-details-container {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
        }
        .map-container-leaflet {
            flex: 1.5;
            height: 550px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        #map {
            width: 100%;
            height: 110%;
            border-radius: 10px;
        }
        .details-container {
            flex: 1;
        }
        .location-details-card {
            width: 100%;
            height: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .location-details-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }
        .card-content { padding: 1.5rem; }
        .card-content h3 {
            font-size: 1.5rem;
            color: rgb(5, 44, 0);
            margin-top: 0;
            margin-bottom: 1.5rem;
        }
        .card-content .detail-item { margin-bottom: 1rem; display: flex; }
        .card-content .detail-item strong { flex-basis: 120px; color: #333; }
        .card-content .detail-item span { flex: 1; color: #555; }
        .contact-button {
            display: inline-block;
            margin-top: 1rem;
            width: 100%;
            text-align: center;
            background-color: rgb(5, 44, 0);
            color: #fff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .contact-button:hover { background-color: rgb(14, 117, 0); }


        /* --- EXISTING: Contact Form Section Styles (ported from index.php) --- */
        .contact-container {
            display: flex;
            gap: 3rem;
            align-items: flex-start;
        }
        .contact-form-container { flex: 1; }
        .contact-form-container h2 {
            font-size: 2rem;
            color: rgb(5, 44, 0);
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
            height: 48px;
            box-sizing: border-box;
        }
        .contact-form .full-width { grid-column: 1 / -1; }
        .contact-form textarea {
            resize: vertical;
            min-height: 110px;
        }
        .contact-form button {
            background-color: rgb(5, 44, 0);
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
        .contact-form button:hover { background-color: rgb(14, 117, 0); }
        .map-container { flex: 1; }
        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .map-and-details-container { flex-direction: column; }
            .contact-container { flex-direction: column; }
            .map-container-leaflet { height: 400px; }
        }
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .hero-content p { font-size: 1rem; }
            .contact-section { padding: 2rem 1rem; }
            .contact-form { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include 'include/header.php'; ?>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>Protecting Communities Through Prevention and Awareness</p>
        </div>
    </section>

    <br>
    <section class="contact-section">
        <div class="contact-wrapper">

        <div class="contact-container">

                <div class="contact-form-container">
                    <h2>Get Touch With Us</h2>
                    <p>For general inquiries, please use the form below. We will get back to you as soon as possible.</p>
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

            <div class="interactive-map-section">
                <h2>Find Our Campaign Offices</h2>
                <div class="map-and-details-container">
                    <div class="map-container-leaflet">
                        <div id="map"></div>
                    </div>
                    <div class="details-container">
                        <div class="location-details-card">
                            <img id="location-image" src="" alt="Campaign Office Image">
                            <div class="card-content">
                                <h3 id="location-title"></h3>
                                <div class="detail-item"><strong>Address</strong>: <span id="location-address"></span></div>
                                <div class="detail-item"><strong>Contact Number</strong>: <span id="location-contact"></span></div>
                                <div class="detail-item"><strong>Email</strong>: <span id="location-email"></span></div>
                                <a id="location-contact-btn" href="#" class="contact-button">Contact This Office</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        const locations = [
            {
                name: 'Anuradhapura Anti Malaria Campaign',
                address: 'No.689/A, Anagarika Darmapala Mawatha, Nochchiyagama, Anuradhapura',
                contact: '+94 11 58 96 985',
                email: 'antimalariacampaign@gmail.com',
                image: 'asset/image/office/anuradhapura.jpg', // Replace with your image path
                coords: [8.3114, 80.4037]
            },
            {
                name: 'Colombo Central Malaria Unit',
                address: 'No. 123, Galle Road, Colombo 03',
                contact: '+94 11 22 33 445',
                email: 'colombo.malaria@gov.lk',
                image: 'asset/image/office/anuradhapura.jpg', // Replace with your image path
                coords: [6.9271, 79.8612]
            },
            {
                name: 'Galle District Health Office',
                address: 'No. 45, Wackwella Road, Galle',
                contact: '+94 91 45 67 890',
                email: 'galle.malaria@gov.lk',
                image: 'asset/image/galle-office.png', // Replace with your image path
                coords: [6.0535, 80.2210]
            },
            {
                name: 'Kandy Regional Malaria Center',
                address: 'No. 78, Peradeniya Road, Kandy',
                contact: '+94 81 12 34 567',
                email: 'kandy.malaria@gov.lk',
                image: 'asset/image/kandy-office.png', // Replace with your image path
                coords: [7.2906, 80.6337]
            }
        ];

        const map = L.map('map').setView([7.8731, 80.7718], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        function updateDetailsCard(location) {
            document.getElementById('location-image').src = location.image;
            document.getElementById('location-title').innerText = location.name;
            document.getElementById('location-address').innerText = location.address;
            document.getElementById('location-contact').innerText = location.contact;
            document.getElementById('location-email').innerText = location.email;
            document.getElementById('location-contact-btn').href = 'mailto:' + location.email;
        }

        locations.forEach(location => {
            const marker = L.marker(location.coords).addTo(map);
            marker.on('click', () => {
                updateDetailsCard(location);
                map.setView(location.coords, 12);
            });
        });

        if (locations.length > 0) {
            updateDetailsCard(locations[0]);
        }
    </script>

</body>
</html>