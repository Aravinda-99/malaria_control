<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entomology Statistics</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="asset/image/fav.png">
    <link rel="shortcut icon" type="image/png" href="asset/image/fav.png">
    <style>
        /* Staff Page Specific Styles - Using unique prefixes to avoid conflicts */
        body.staff-page-body {
            font-family: Arial, sans-serif !important;
            background-color: #f4f4f4 !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        /* Hero Section with Background Image */
        .staff-hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('asset/image/Container.png');
            height: 60vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            border-top: none;
            border-bottom: 2px solid #fff;
            margin: 0;
        }

        .staff-hero-section h1 {
            font-size: 3rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .staff-hero-section p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        /* Responsive adjustments for hero section */
        @media (max-width: 768px) {
            .staff-hero-section {
                height: 40vh;
            }
            .staff-hero-section h1 {
                font-size: 2rem;
            }
            .staff-hero-section p {
                font-size: 1rem;
            }
        }

        /* Content Section for cards */
        .content-section {
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .content-container {
            max-width: 1200px; /* Increased max-width for more columns */
            margin: 0 auto;
            line-height: 1.6;
            display: flex;
            flex-wrap: wrap; /* Allows cards to wrap to the next row */
            gap: 20px; /* Space between cards */
            justify-content: center; /* Center cards when not enough to fill a row */
        }
        
        /* Image Card Styling */
        .image-card {
            flex: 1 1 calc(33.333% - 20px); /* Default to 3 cards per row, accounting for gap */
            width: 280px; /* Fixed width for all cards */
            height: 350px; /* Fixed height for all cards */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            overflow: hidden; /* Ensures image corners match card border-radius */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Pushes content and title apart if needed */
            transition: transform 0.2s ease-in-out;
        }

        .image-card:hover {
            transform: translateY(-5px);
        }

        .image-card img {
            width: 100%;
            height: 280px; /* Fixed height to match card image area */
            display: block;
            border-bottom: 1px solid #eee; /* Separator between image and potential text */
            padding: 0; /* Remove padding from image itself */
            border-radius: 8px 8px 0 0; /* Match top corners of the card */
            box-shadow: none; /* Remove individual image shadow */
            object-fit: cover; /* Crop image to fill the container */
            object-position: center; /* Center the cropped image */
        }
        
        .image-card-title {
            padding: 15px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
            border-radius: 0 0 8px 8px; /* Match bottom corners of the card */
        }

        /* Responsive adjustments for cards */
        @media (max-width: 992px) {
            .image-card {
                flex: 1 1 calc(50% - 20px); /* 2 cards per row on medium screens */
                width: 250px; /* Slightly smaller on medium screens */
                height: 320px; /* Proportionally smaller height */
            }
            .image-card img {
                height: 250px; /* Match the smaller card size */
            }
        }

        @media (max-width: 576px) {
            .image-card {
                flex: 1 1 calc(100% - 20px); /* 1 card per row on small screens */
                width: 100%; /* Full width on mobile */
                height: 300px; /* Smaller height for mobile */
            }
            .image-card img {
                height: 250px; /* Smaller image height for mobile */
            }
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
            animation: fadeIn 0.3s ease-in-out;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
            width: 80%;
            max-width: 900px;
            max-height: 80vh;
            object-fit: contain;
            animation: zoomIn 0.3s ease-in-out;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 1001;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
        }

        #caption {
            position: absolute;
            top: calc(50% + 45vh);
            left: 50%;
            transform: translateX(-50%);
            display: block;
            width: 80%;
            max-width: 900px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            font-size: 1.1rem;
            line-height: 1.4;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Responsive modal */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 95%;
                max-height: 70vh;
            }
            .close {
                top: 10px;
                right: 20px;
                font-size: 30px;
            }
            #caption {
                width: 95%;
                font-size: 1rem;
                top: calc(50% + 40vh);
            }
        }

    </style>
</head>
<body class="staff-page-body">
<?php include 'include/header.php'; ?>

<section class="staff-hero-section">
    <h1>Entomology Statistics</h1>
    <p>Anti Malaria Campaign - Sri Lanka</p>
</section>

<section class="content-section">
    <div class="content-container">
        <div class="image-card">
            <img src="asset/image/entomology/e1.png" alt="Entomological surveillance data 2016">
            <div class="image-card-title">Entomological Surveillance Data - 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e2.png" alt="Malaria vector larval surveys and trap collections 2016">
            <div class="image-card-title">Malaria Vector Larval Surveys - 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e3.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Human Landing Catches & Species - 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e4.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Relative density of major malaria vector larvae and secondary vector larvae in different breeding habitats</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e5.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Mean density of malaria vector larvae in Larval surveys in different districts 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e6.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Map showing mean densities of Anopheles culicifacies caught in CBHC in different MOH areas in 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e7.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Total work output of cattle baited trap collections in 2016</div>
        </div>


        <div class="image-card">
            <img src="asset/image/entomology/e8.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Mean density of malaria vector females caught in cattle baited trap collections in different districts 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e9.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Work output of indoor hand collection technique in different RMO regions</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e10.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Mean density of An. culicifacies and An. subpictus indoor resting densities</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e11.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Total man hours spent in different regions in human landing catches in 2016</div>
        </div>

        <div class="image-card">
            <img src="asset/image/entomology/e12.png" alt="Human landing catches and species preferences 2016">
            <div class="image-card-title">Percentage of human biting preferences of Anopheles species caught during partial night human landing catches</div>
        </div>

        </div>
</section>

<?php include 'include/footer.php'; ?>

<!-- Image Modal -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImage">
    <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("imageModal");

// Get the image and insert it inside the modal
var modalImg = document.getElementById("modalImage");
var captionText = document.getElementById("caption");

// Get all images with the class 'image-card img'
var images = document.querySelectorAll('.image-card img');

// Add click event to each image
images.forEach(function(img) {
    img.style.cursor = 'pointer';
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        modal.style.display = "none";
    }
});
</script>

</body>
</html>