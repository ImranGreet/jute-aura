<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Markets - Xenmesh Jute Bags</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        /* Global Reach */
        .global-reach {
            background-color: white;
        }

        .reach-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .stat-card {
            text-align: center;
            padding: 30px 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--dark);
        }

        .world-map {
            text-align: center;
            margin-top: 50px;
        }

        .map-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .map-image {
            width: 100%;
            opacity: 0.8;
        }

        .map-point {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--accent);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            animation: pulse 2s infinite;
        }

        .map-point:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border: 2px solid var(--accent);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: ripple 2s infinite;
        }

        .map-point.europe { top: 35%; left: 48%; }
        .map-point.usa { top: 40%; left: 20%; }
        .map-point.japan { top: 40%; left: 78%; }
        .map-point.canada { top: 30%; left: 18%; }

        @keyframes pulse {
            0% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.1); }
            100% { transform: translate(-50%, -50%) scale(1); }
        }

        @keyframes ripple {
            0% { width: 20px; height: 20px; opacity: 1; }
            100% { width: 60px; height: 60px; opacity: 0; }
        }

        /* Markets Grid */
        .markets-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .market-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .market-card:hover {
            transform: translateY(-10px);
        }

        .market-header {
            padding: 25px;
            color: white;
            text-align: center;
        }

        .market-header.europe { background-color: #003399; }
        .market-header.usa { background-color: #BF0A30; }
        .market-header.japan { background-color: #BC002D; }
        .market-header.canada { background-color: #FF0000; }

        .market-flag {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .market-header h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .market-content {
            padding: 25px;
        }

        .market-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-label {
            font-size: 0.8rem;
            color: #777;
        }

        .market-features {
            list-style: none;
            margin-bottom: 20px;
        }

        .market-features li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .market-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Export Process */
        .export-process {
            background-color: #f5f5f5;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .process-step {
            text-align: center;
            padding: 30px 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .step-icon {
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

        .step-number {
            width: 30px;
            height: 30px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 15px;
        }

        .process-step h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Documentation */
        .documentation {
            background-color: white;
        }

        .docs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .doc-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .doc-card:hover {
            transform: translateY(-5px);
        }

        .doc-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .doc-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Success Stories */
        .success-stories {
            background-color: #f5f5f5;
        }

        .stories-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .story-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .story-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .story-flag {
            font-size: 2rem;
            margin-right: 15px;
        }

        .story-info h3 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .story-info p {
            color: #777;
            font-size: 0.9rem;
        }

        .story-content {
            color: #555;
            font-style: italic;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(45, 80, 22, 0.9), rgba(45, 80, 22, 0.9)), url('https://images.unsplash.com/photo-1556655848-f3a7049761e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        .footer-col p, .footer-col a {
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

            .map-point {
                width: 15px;
                height: 15px;
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

            .reach-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo">Xen<span>mesh</span></a>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="custom-design.html">Custom Design</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="quality.html">Quality</a></li>
                    <li><a href="markets.html" class="active">Markets</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Global Export Markets</h1>
            <p>Connecting sustainable jute fashion with international buyers across EU, USA, Japan, and Canada</p>
            <a href="#markets" class="btn">Explore Our Markets</a>
        </div>
    </section>

    <!-- Global Reach -->
    <section class="global-reach">
        <div class="container">
            <div class="section-title">
                <h2>Our Global Presence</h2>
                <p>Trusted by clients across four continents</p>
            </div>
            
            <div class="reach-stats">
                <div class="stat-card">
                    <div class="stat-number">4</div>
                    <div class="stat-label">Continents Served</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">28</div>
                    <div class="stat-label">Countries</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">International Clients</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Client Retention</div>
                </div>
            </div>
            
            <div class="world-map">
                <div class="map-container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Equirectangular_projection_SW.jpg" alt="World Map" class="map-image">
                    <div class="map-point europe" title="European Union"></div>
                    <div class="map-point usa" title="United States"></div>
                    <div class="map-point japan" title="Japan"></div>
                    <div class="map-point canada" title="Canada"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Markets Grid -->
    <section class="markets" id="markets">
        <div class="container">
            <div class="section-title">
                <h2>Our Key Markets</h2>
                <p>Specialized solutions for each region's unique requirements</p>
            </div>
            
            <div class="markets-grid">
                <!-- European Union -->
                <div class="market-card">
                    <div class="market-header europe">
                        <div class="market-flag">🇪🇺</div>
                        <h3>European Union</h3>
                        <p>28 Member Countries</p>
                    </div>
                    <div class="market-content">
                        <div class="market-stats">
                            <div class="stat">
                                <div class="stat-value">45%</div>
                                <div class="stat-label">of Exports</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">12</div>
                                <div class="stat-label">Years</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">200+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                        </div>
                        <ul class="market-features">
                            <li>REACH Compliance Certified</li>
                            <li>EU Packaging Standards</li>
                            <li>Eco-Label Ready</li>
                            <li>Multilingual Documentation</li>
                            <li>CE Marking Support</li>
                        </ul>
                        <a href="index.html#contact" class="btn" style="width: 100%;">Contact EU Team</a>
                    </div>
                </div>
                
                <!-- United States -->
                <div class="market-card">
                    <div class="market-header usa">
                        <div class="market-flag">🇺🇸</div>
                        <h3>United States</h3>
                        <p>All 50 States</p>
                    </div>
                    <div class="market-content">
                        <div class="market-stats">
                            <div class="stat">
                                <div class="stat-value">30%</div>
                                <div class="stat-label">of Exports</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">8</div>
                                <div class="stat-label">Years</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">150+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                        </div>
                        <ul class="market-features">
                            <li>CPSIA Compliance</li>
                            <li>Customs Broker Partnerships</li>
                            <li>FDA Regulations (if applicable)</li>
                            <li>West & East Coast Ports</li>
                            <li>Quick Turnaround Times</li>
                        </ul>
                        <a href="index.html#contact" class="btn" style="width: 100%;">Contact US Team</a>
                    </div>
                </div>
                
                <!-- Japan -->
                <div class="market-card">
                    <div class="market-header japan">
                        <div class="market-flag">🇯🇵</div>
                        <h3>Japan</h3>
                        <p>Premium Quality Focus</p>
                    </div>
                    <div class="market-content">
                        <div class="market-stats">
                            <div class="stat">
                                <div class="stat-value">15%</div>
                                <div class="stat-label">of Exports</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">6</div>
                                <div class="stat-label">Years</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">80+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                        </div>
                        <ul class="market-features">
                            <li>JIS Standards Compliance</li>
                            <li>Premium Quality Focus</li>
                            <li>Minimalist Design Expertise</li>
                            <li>Quick Shipping to Tokyo/Osaka</li>
                            <li>Japanese Documentation</li>
                        </ul>
                        <a href="index.html#contact" class="btn" style="width: 100%;">Contact Japan Team</a>
                    </div>
                </div>
                
                <!-- Canada -->
                <div class="market-card">
                    <div class="market-header canada">
                        <div class="market-flag">🇨🇦</div>
                        <h3>Canada</h3>
                        <p>Growing Market Presence</p>
                    </div>
                    <div class="market-content">
                        <div class="market-stats">
                            <div class="stat">
                                <div class="stat-value">10%</div>
                                <div class="stat-label">of Exports</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">5</div>
                                <div class="stat-label">Years</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">70+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                        </div>
                        <ul class="market-features">
                            <li>Bilingual Documentation</li>
                            <li>Health Canada Compliance</li>
                            <li>Customs Clearance Support</li>
                            <li>Major Port Access</li>
                            <li>Seasonal Collection Support</li>
                        </ul>
                        <a href="index.html#contact" class="btn" style="width: 100%;">Contact Canada Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Export Process -->
    <section class="export-process">
        <div class="container">
            <div class="section-title">
                <h2>Seamless Export Process</h2>
                <p>From inquiry to delivery - we handle everything</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Inquiry & Quotation</h3>
                    <p>Submit your requirements and receive a detailed quote within 24 hours with pricing, timeline, and compliance details.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Sample Approval</h3>
                    <p>We create and ship physical samples for your approval. Custom designs and modifications available.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Production</h3>
                    <p>Bulk manufacturing begins with regular quality checks and progress updates throughout the process.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Shipping & Delivery</h3>
                    <p>We handle all export documentation, customs clearance, and logistics for door-to-door delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation -->
    <section class="documentation">
        <div class="container">
            <div class="section-title">
                <h2>Export Documentation</h2>
                <p>Comprehensive paperwork handled by our experts</p>
            </div>
            
            <div class="docs-grid">
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Commercial Invoice</h3>
                    <p>Detailed invoice with product description, value, and terms of sale for customs clearance.</p>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <h3>Certificate of Origin</h3>
                    <p>Official document certifying the country of manufacture for your jute bags.</p>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Packing List</h3>
                    <p>Comprehensive list of package contents, weights, and dimensions for shipping.</p>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h3>Bill of Lading</h3>
                    <p>Shipping document that serves as a receipt and contract for transportation.</p>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Insurance Certificate</h3>
                    <p>Comprehensive insurance coverage for your shipment against loss or damage.</p>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Compliance Certificates</h3>
                    <p>Region-specific compliance documents (REACH, CPSIA, JIS) as required.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories">
        <div class="container">
            <div class="section-title">
                <h2>International Success Stories</h2>
                <p>How we've helped businesses across the globe</p>
            </div>
            
            <div class="stories-container">
                <div class="story-card">
                    <div class="story-header">
                        <div class="story-flag">🇩🇪</div>
                        <div class="story-info">
                            <h3>EcoStyle Germany</h3>
                            <p>Fashion Retailer, Berlin</p>
                        </div>
                    </div>
                    <div class="story-content">
                        "Xenmesh provided us with custom jute bags that perfectly matched our brand aesthetic. Their understanding of EU regulations made the import process seamless. We've been partners for 3 years now."
                    </div>
                </div>
                
                <div class="story-card">
                    <div class="story-header">
                        <div class="story-flag">🇺🇸</div>
                        <div class="story-info">
                            <h3>GreenLife NYC</h3>
                            <p>Lifestyle Brand, New York</p>
                        </div>
                    </div>
                    <div class="story-content">
                        "The quality of Xenmesh jute bags exceeded our expectations. Their team handled all customs documentation, and our shipment arrived ahead of schedule. Highly recommended for US imports."
                    </div>
                </div>
                
                <div class="story-card">
                    <div class="story-header">
                        <div class="story-flag">🇯🇵</div>
                        <div class="story-info">
                            <h3>Tokyo Natural Co.</h3>
                            <p>Retail Chain, Japan</p>
                        </div>
                    </div>
                    <div class="story-content">
                        "We were impressed by Xenmesh's attention to detail and their ability to meet Japan's strict quality standards. Their jute bags have become a customer favorite in our stores."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Expand Your Business with Xenmesh?</h2>
            <p>Join hundreds of international businesses that trust us for quality jute bags and seamless export experience.</p>
            <a href="index.html#contact" class="btn btn-light">Start Your Export Order</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>Xenmesh</h3>
                    <p>Leading exporter of premium jute fashion bags to global markets including EU, Japan, USA, and Canada.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <a href="index.html">Home</a>
                    <a href="products.html">Products</a>
                    <a href="custom-design.html">Custom Design</a>
                    <a href="blog.html">Blog</a>
                    <a href="quality.html">Quality</a>
                    <a href="markets.html">Markets</a>
                    <a href="index.html#contact">Contact</a>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <a href="index.html#contact">Sample Orders</a>
                    <a href="custom-design.html">Custom Designs</a>
                    <a href="index.html#contact">Bulk Export</a>
                    <a href="index.html#contact">Private Labeling</a>
                </div>
                <div class="footer-col">
                    <h3>Markets</h3>
                    <a href="#">European Union</a>
                    <a href="#">Japan</a>
                    <a href="#">United States</a>
                    <a href="#">Canada</a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Xenmesh. All rights reserved.</p>
            </div>
        </div>
    </footer>

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

        // Map point interactions
        const mapPoints = document.querySelectorAll('.map-point');
        mapPoints.forEach(point => {
            point.addEventListener('click', function() {
                const region = this.classList[1];
                const regionNames = {
                    'europe': 'European Union',
                    'usa': 'United States',
                    'japan': 'Japan',
                    'canada': 'Canada'
                };
                
                alert(`Learn more about our exports to ${regionNames[region]}`);
            });
        });
    </script>
</body>
</html>