<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

/* Specific styles for strategies section only - no global body styling */
.strategies-container {
    font-family: 'Inter', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0; /* Removed side padding */
    display: flex;
    justify-content: center;
    align-items: stretch; /* Changed from center to stretch */
    min-height: auto; /* Changed from 100vh to auto */
    color: #333;
    width: 100%; /* Ensure full width */
}

.strategies-section {
    background-color: #ffffff;
    border-radius: 0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 2.5rem 2.5rem 2.5rem 2.5rem; /* Keep horizontal padding, remove vertical if needed */
    max-width: 100%; /* Changed from 1100px to 100% */
    width: 100%;
    margin: 0; /* Remove any margins */
}

.strategies-content-wrapper {
    display: flex;
    align-items: center;
    gap: 3rem; 
}

.strategies-text-content {
    flex: 1; 
    min-width: 50%;
    margin-left: 3rem; /* Added left margin */
}

.strategies-image-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.strategies-section h2 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #8B4513; 
    margin: 0 0 1rem 0;
    display: inline-block; 
    padding-bottom: 0.5rem;
    border-bottom: 3px solid #8B4513;
}

.strategies-section h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1a202c;
    margin-top: 1rem;
    margin-bottom: 1.5rem;
}

/* Styling for the ordered list */
.strategies-section ol {
    padding-left: 1.5rem; 
    margin: 0;
}

.strategies-section li {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #4a5568;
    margin-bottom: 0.75rem; 
}

.strategies-section li:last-child {
    margin-bottom: 0;
}

.strategy-image {
    max-width: 100%;
    height: auto;
    border-radius: 10px; 
}

@media (max-width: 900px) {
    .strategies-content-wrapper {
        flex-direction: column; 
        gap: 2.5rem;
    }

    .strategies-container {
        padding: 1rem;
    }

    .strategies-section {
        padding: 2rem;
    }
}

</style>

<!-- Using a section tag as requested for the main component -->
<div class="strategies-container">
    <section class="strategies-section">
        <!-- This wrapper will hold the two-column layout -->
        <div class="strategies-content-wrapper">
            <!-- Left Column: Text Content -->
            <div class="strategies-text-content">
                <h2>Strategies</h2>
                <h3>Objective 2: To maintain zero mortality due to malaria.</h3>
                <ol>
                    <li>Provide universal access to malaria diagnostic and treatment services free of charge.</li>
                    <li>Detect all infections early and to treat all patients with quality assured antimalarials based on national treatment guidelines to prevent complications in both public and private health sectors.</li>
                    <li>Ensure all suspected cases are tested for malaria (microscopy or RDT).</li>
                    <li>Ensure all malaria cases are admitted to hospitals and managed.</li>
                    <li>Make available antimalarial medicines (including second line and injectable medicines) to diagnostic and treatment facilities when needed in a timely manner.</li>
                    <li>Inform clinicians on management of malaria (both uncomplicated and severe).</li>
                    <li>Carry out a medical audit of cases when recommended by the Case Review Committee.</li>
                </ol>
            </div>
            
            <!-- Right Column: Image -->
            <div class="strategies-image-content">
                <!-- Using a placeholder image that captures the essence of the original -->
                <img src="asset/image/ss3.png" 
                     alt="Hands holding a no mosquito sign" 
                     class="strategy-image">
            </div>
        </div>
    </section>
</div>
