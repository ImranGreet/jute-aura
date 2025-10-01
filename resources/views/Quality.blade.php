<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality & Materials - Xenmesh Jute Bags</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2d5016;
            --secondary: #8a9a5b;
            --accent: #d4af37;
            --light: #f5f5f5;
            --dark: #333;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f9f9f9;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            padding: 150px 0 80px;
            color: white;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* Quality Standards */
        .quality-standards {
            background-color: white;
        }

        .standards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .standard-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
        }

        .standard-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .standard-icon {
            width: 80px;
            height: 80px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 20px;
        }

        .standard-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Materials Section */
        .materials {
            background-color: #f5f5f5;
        }

        .materials-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .materials-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .materials-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .materials-info h3 {
            margin-bottom: 20px;
            color: var(--primary);
            font-size: 1.8rem;
        }

        .materials-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .materials-list li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }

        .materials-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Quality Process */
        .quality-process {
            background-color: white;
        }

        .process-timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .process-timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background-color: var(--primary);
            transform: translateX(-50%);
        }

        .process-step {
            display: flex;
            margin-bottom: 50px;
            position: relative;
        }

        .process-step:nth-child(odd) {
            flex-direction: row;
        }

        .process-step:nth-child(even) {
            flex-direction: row-reverse;
        }

        .step-content {
            flex: 1;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .step-marker {
            width: 30px;
            height: 30px;
            background-color: var(--primary);
            border-radius: 50%;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        /* Testing Section */
        .testing {
            background-color: #f5f5f5;
        }

        .testing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .test-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .test-card:hover {
            transform: translateY(-5px);
        }

        .test-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .test-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Certifications */
        .certifications {
            background-color: white;
        }

        .cert-slider {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 40px;
        }

        .cert-item {
            text-align: center;
            max-width: 200px;
        }

        .cert-logo {
            width: 120px;
            height: 120px;
            background-color: #f9f9f9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 2rem;
            color: var(--primary);
            border: 2px solid var(--light);
        }

        .cert-item h4 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* Compliance */
        .compliance {
            background-color: #f5f5f5;
        }

        .compliance-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .compliance-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .compliance-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .compliance-card h3 i {
            color: var(--accent);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(45, 80, 22, 0.9), rgba(45, 80, 22, 0.9)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn-light {
            background-color: white;
            color: var(--primary);
        }

        .btn-light:hover {
            background-color: var(--light);
        }

        /* Footer */
        footer {
            background-color: var(--primary);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-col p,
        .footer-col a {
            color: #ddd;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
        }

        .footer-col a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .materials-content {
                grid-template-columns: 1fr;
            }

            .process-timeline:before {
                left: 30px;
            }

            .process-step {
                flex-direction: row !important;
                padding-left: 60px;
            }

            .step-marker,
            .step-number {
                left: 30px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 0;
            }

            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                flex-direction: column;
                background-color: white;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
                padding: 20px 0;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .cta-section h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .page-header h1 {
                font-size: 1.8rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            section {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <x-layouts.Header />

    <!-- Page Header -->
    <x-layouts.Quality-hero />

    <!-- Quality Standards -->
    <x-card.Quality-standards />

    <!-- Materials Section -->
    <section class="materials">
        <div class="container">
            <div class="materials-content">
                <div class="materials-image">
                    <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Jute Materials">
                </div>
                <div class="materials-info">
                    <h3>Superior Jute Materials</h3>
                    <p>We use only the finest quality jute fibers, carefully selected for strength, texture, and sustainability. Our materials are:</p>
                    <ul class="materials-list">
                        <li>100% natural and biodegradable</li>
                        <li>Sourced from certified sustainable farms</li>
                        <li>Free from harmful chemicals and dyes</li>
                        <li>Reinforced for extra durability</li>
                        <li>Available in natural, bleached, and custom colors</li>
                        <li>Tested for colorfastness and strength</li>
                    </ul>
                    <a href="index.html#contact" class="btn">Request Material Samples</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Process -->
    <section class="quality-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Quality Assurance Process</h2>
                <p>Rigorous checks at every stage of production</p>
            </div>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-marker"></div>
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Raw Material Inspection</h3>
                        <p>Every batch of jute fibers undergoes thorough testing for strength, color consistency, and quality before production begins.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-marker"></div>
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>In-Process Quality Control</h3>
                        <p>During manufacturing, our quality team conducts regular checks on stitching, dimensions, printing, and assembly.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-marker"></div>
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Final Product Inspection</h3>
                        <p>Each finished bag is individually inspected for defects, ensuring only perfect products are packaged for shipment.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-marker"></div>
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Batch Testing & Certification</h3>
                        <p>Random samples from each production batch undergo additional testing for durability and compliance with international standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testing Section -->
    <section class="testing">
        <div class="container">
            <div class="section-title">
                <h2>Product Testing & Durability</h2>
                <p>Ensuring your jute bags withstand the test of time and use</p>
            </div>
            <div class="testing-grid">
                <div class="test-card">
                    <div class="test-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h3>Load Capacity Testing</h3>
                    <p>Each bag design is tested for weight capacity, ensuring it can handle intended loads without strain.</p>
                </div>
                <div class="test-card">
                    <div class="test-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Handle Strength Testing</h3>
                    <p>Repeated stress tests on handles and straps to guarantee longevity and durability.</p>
                </div>
                <div class="test-card">
                    <div class="test-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Colorfastness Testing</h3>
                    <p>Printed and dyed bags undergo rigorous testing to ensure colors remain vibrant and don't bleed.</p>
                </div>
                <div class="test-card">
                    <div class="test-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Weather Resistance</h3>
                    <p>Testing for performance in various weather conditions to ensure product integrity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications">
        <div class="container">
            <div class="section-title">
                <h2>Certifications & Compliance</h2>
                <p>Meeting international standards for quality and sustainability</p>
            </div>
            <div class="cert-slider">
                <div class="cert-item">
                    <div class="cert-logo">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h4>Eco-Certified</h4>
                    <p>100% Biodegradable & Compostable</p>
                </div>
                <div class="cert-item">
                    <div class="cert-logo">
                        <i class="fas fa-globe-europe"></i>
                    </div>
                    <h4>EU Compliant</h4>
                    <p>Meets European Union Standards</p>
                </div>
                <div class="cert-item">
                    <div class="cert-logo">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h4>ISO 9001:2015</h4>
                    <p>Quality Management System</p>
                </div>
                <div class="cert-item">
                    <div class="cert-logo">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Organic Content</h4>
                    <p>100% Natural Jute Fibers</p>
                </div>
            </div>
        </div>
    </section>





    <!-- Footer -->
    <x-layouts.Footer />

    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>

</html>