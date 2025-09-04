<section class="diagnosis-section">
  <h2 class="section-title">Early Diagnosis & Case Management</h2>
  <ul class="info-list">
    <li>All the patients with fever and a recent travel history to a malaria endemic country should be tested for malaria.</li>
    <li>Any patient suspected/ diagnosed of having malaria should be immediately notified via telephone to the Regional Malaria Officer (RMO) and the AMC HQ and the relevant Medical Officer of Health (MOH).</li>
  </ul>
  <div class="image-gallery">
    <img src="asset/image/serv1.png" alt="Doctor taking a blood sample from a patient's finger.">
    <img src="asset/image/serv2.png" alt="Two nurses checking a patient's chart in a hospital room.">
    <img src="asset/image/serv3.png" alt="Doctor explaining medication to a patient.">
  </div>
</section>

<style>
  .diagnosis-section {
    font-family: 'Inter', sans-serif; /* A clean, modern font similar to the image */
    width: 100%;
    max-width: none;
    margin: 0; /* Remove side margins */
    padding: 20px 0; /* No horizontal padding; keep vertical space */
    background-color: #ffffff;
    border-radius: 0; /* Flush edges */
    
  }

  .section-title {
    text-align: center;
    font-size: 28px;
    font-weight: 600;
    color: #8B4513; /* A brown color similar to the image */
    padding-bottom: 15px;
    margin-bottom: 25px;
    border-bottom: 3px solid #8B4513;
    display: inline-block; /* Allows the border to fit the text width */
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }

  .info-list {
    list-style-type: disc;
    padding-left: 20px;
    margin: 0 0 30px 20px;
    color: #333;
    font-size: 16px;
    line-height: 1.7;
  }

  .info-list li {
    margin-bottom: 12px;
  }

  .image-gallery {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Creates space between the images */
    flex-wrap: wrap; /* Allows images to wrap on smaller screens */
  }

  .image-gallery img {
    width: 100%;
    max-width: calc(33.333% - 14px); /* Adjusts width considering the gap */
    height: auto;
    border-radius: 8px;
    object-fit: cover; /* Ensures images maintain aspect ratio */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  /* Responsive adjustments for smaller screens */
  @media (max-width: 768px) {
    .image-gallery img {
      max-width: 100%; /* Images stack vertically on mobile */
    }

    .section-title {
        font-size: 24px;
    }

    .info-list {
        font-size: 15px;
    }
  }

  /* Adding Inter font from Google Fonts for better visual match */
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
</style>
