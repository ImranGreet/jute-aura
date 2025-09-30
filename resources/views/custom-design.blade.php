<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Design Portal - Xenmesh Jute Bags</title>
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

        /* Design Process */
        .design-process {
            background-color: white;
        }

        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .process-step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 0 20px;
            margin-bottom: 30px;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .process-step h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .process-step p {
            color: #666;
        }

        /* Design Portal */
        .design-portal {
            background-color: #f5f5f5;
        }

        .portal-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .design-form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .design-preview {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .preview-area {
            width: 100%;
            height: 300px;
            background-color: #f9f9f9;
            border: 2px dashed #ddd;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .preview-bag {
            width: 200px;
            height: 250px;
            background-color: #d2b48c;
            border-radius: 5px;
            position: relative;
            transition: all 0.3s ease;
        }

        .preview-handle {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 30px;
            background-color: #d2b48c;
            border-radius: 15px;
        }

        .preview-design {
            width: 80%;
            height: 60%;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 20% auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            text-align: center;
            padding: 10px;
            word-break: break-word;
        }

        .preview-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .preview-btn {
            padding: 8px 15px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .preview-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 4px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .upload-area:hover {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .upload-area i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .file-input {
            display: none;
        }

        .color-options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .color-option.active {
            border-color: var(--dark);
            transform: scale(1.1);
        }

        .color-natural {
            background-color: #d2b48c;
        }

        .color-bleached {
            background-color: #f5f5dc;
        }

        .color-dyed {
            background-color: #8a9a5b;
        }

        .color-custom {
            background: linear-gradient(45deg, #d2b48c 50%, #8a9a5b 50%);
        }

        .spec-summary {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .spec-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .spec-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .spec-value {
            font-weight: 600;
            color: var(--primary);
        }

        /* Capabilities */
        .capabilities {
            background-color: white;
        }

        .capabilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .capability-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .capability-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .capability-icon {
            width: 70px;
            height: 70px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 20px;
        }

        .capability-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
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
            
            .portal-container {
                grid-template-columns: 1fr;
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

            .process-steps {
                flex-direction: column;
            }

            .process-step {
                margin-bottom: 40px;
            }

            .form-row {
                grid-template-columns: 1fr;
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
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo">Xen<span>mesh</span></a>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="custom-design.html" class="active">Custom Design</a></li>
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
            <h1>Custom Design Portal</h1>
            <p>Create your unique jute bag designs with our easy-to-use design portal. Perfect for brands, retailers, and promotional events.</p>
            <a href="#design-form" class="btn">Start Designing</a>
        </div>
    </section>

    <!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Design Process</h2>
                <p>Simple steps from concept to delivery</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Submit Your Design</h3>
                    <p>Use our design portal or upload your own design files with specifications.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Review & Quote</h3>
                    <p>We'll review your design and provide a detailed quote within 24-48 hours.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Sample Production</h3>
                    <p>We create a physical sample for your approval before mass production.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Bulk Manufacturing</h3>
                    <p>Once approved, we manufacture your order with strict quality control.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Portal -->
    <section class="design-portal" id="design-form">
        <div class="container">
            <div class="section-title">
                <h2>Design Your Bag</h2>
                <p>Customize every aspect of your jute bag</p>
            </div>
            <div class="portal-container">
                <div class="design-form-container">
                    <form id="designForm">
                        <div class="form-group">
                            <label for="bagType">Bag Type</label>
                            <select class="form-control" id="bagType">
                                <option value="tote">Tote Bag</option>
                                <option value="shopper">Shopper Bag</option>
                                <option value="laptop">Laptop Bag</option>
                                <option value="backpack">Backpack</option>
                                <option value="promo">Promotional Bag</option>
                                <option value="drawstring">Drawstring Bag</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bagSize">Bag Size</label>
                            <select class="form-control" id="bagSize">
                                <option value="small">Small (10" x 12")</option>
                                <option value="medium" selected>Medium (12" x 14")</option>
                                <option value="large">Large (14" x 16")</option>
                                <option value="xlarge">Extra Large (16" x 18")</option>
                                <option value="custom">Custom Size</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jute Color</label>
                            <div class="color-options">
                                <div class="color-option color-natural active" data-color="natural" title="Natural Jute"></div>
                                <div class="color-option color-bleached" data-color="bleached" title="Bleached Jute"></div>
                                <div class="color-option color-dyed" data-color="dyed" title="Dyed Jute"></div>
                                <div class="color-option color-custom" data-color="custom" title="Custom Color"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="handleType">Handle Type</label>
                            <select class="form-control" id="handleType">
                                <option value="standard">Standard Jute Handles</option>
                                <option value="reinforced">Reinforced Handles</option>
                                <option value="cotton">Cotton Webbing Handles</option>
                                <option value="leather">Leather Handles</option>
                                <option value="adjustable">Adjustable Shoulder Strap</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="printingType">Printing Type</label>
                            <select class="form-control" id="printingType">
                                <option value="silkscreen">Silkscreen Printing</option>
                                <option value="digital">Digital Printing</option>
                                <option value="embroidery">Embroidery</option>
                                <option value="patch">Leather/Patch</option>
                                <option value="none">No Printing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="designText">Design Text/Logo</label>
                            <textarea class="form-control" id="designText" placeholder="Enter text for your design or describe your logo..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Upload Design Files</label>
                            <div class="upload-area" id="uploadArea">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Click to upload your design files</p>
                                <p class="small">Supported formats: JPG, PNG, PDF, AI, PSD (Max 10MB)</p>
                                <input type="file" class="file-input" id="designFile" accept=".jpg,.jpeg,.png,.pdf,.ai,.psd">
                            </div>
                            <div id="fileList"></div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="quantity">Order Quantity</label>
                                <input type="number" class="form-control" id="quantity" min="100" value="1000">
                            </div>
                            <div class="form-group">
                                <label for="timeline">Required Timeline</label>
                                <select class="form-control" id="timeline">
                                    <option value="standard">Standard (4-6 weeks)</option>
                                    <option value="express">Express (2-3 weeks)</option>
                                    <option value="urgent">Urgent (1-2 weeks)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="additionalNotes">Additional Notes/Special Requirements</label>
                            <textarea class="form-control" id="additionalNotes" placeholder="Any special requirements, lining, pockets, closures, etc."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="contactInfo">Your Contact Information</label>
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Company Name">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                            <input type="text" class="form-control" placeholder="Country" required>
                        </div>

                        <button type="submit" class="btn" style="width: 100%;">Submit Design Request</button>
                    </form>
                </div>

                <div class="design-preview">
                    <h3>Design Preview</h3>
                    <div class="preview-controls">
                        <button class="preview-btn active" data-view="front">Front</button>
                        <button class="preview-btn" data-view="back">Back</button>
                        <button class="preview-btn" data-view="side">Side</button>
                    </div>
                    <div class="preview-area">
                        <div class="preview-bag" id="previewBag">
                            <div class="preview-handle"></div>
                            <div class="preview-design" id="previewDesign">
                                Your Design Will Appear Here
                            </div>
                        </div>
                    </div>
                    <div class="spec-summary">
                        <h4>Specification Summary</h4>
                        <div class="spec-item">
                            <span>Bag Type:</span>
                            <span class="spec-value" id="specType">Tote Bag</span>
                        </div>
                        <div class="spec-item">
                            <span>Size:</span>
                            <span class="spec-value" id="specSize">Medium (12" x 14")</span>
                        </div>
                        <div class="spec-item">
                            <span>Color:</span>
                            <span class="spec-value" id="specColor">Natural Jute</span>
                        </div>
                        <div class="spec-item">
                            <span>Handles:</span>
                            <span class="spec-value" id="specHandles">Standard Jute</span>
                        </div>
                        <div class="spec-item">
                            <span>Printing:</span>
                            <span class="spec-value" id="specPrinting">Silkscreen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="capabilities">
        <div class="container">
            <div class="section-title">
                <h2>Our Customization Capabilities</h2>
                <p>We can bring almost any design to life</p>
            </div>
            <div class="capabilities-grid">
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-print"></i>
                    </div>
                    <h3>Printing Techniques</h3>
                    <p>Silkscreen, digital printing, heat transfer, and foil stamping on jute fabric.</p>
                </div>
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Color Options</h3>
                    <p>Natural, bleached, or custom-dyed jute in various color combinations.</p>
                </div>
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Size Variations</h3>
                    <p>Custom sizes and dimensions to meet your specific requirements.</p>
                </div>
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Material Mix</h3>
                    <p>Combine jute with cotton, linen, or other fabrics for unique designs.</p>
                </div>
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-vest"></i>
                    </div>
                    <h3>Accessories</h3>
                    <p>Add pockets, zippers, buttons, linings, and other functional elements.</p>
                </div>
                <div class="capability-card">
                    <div class="capability-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Rigorous quality checks at every stage of the production process.</p>
                </div>
            </div>
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

        // Design Form Functionality
        const designForm = document.getElementById('designForm');
        const previewBag = document.getElementById('previewBag');
        const previewDesign = document.getElementById('previewDesign');
        const uploadArea = document.getElementById('uploadArea');
        const designFile = document.getElementById('designFile');
        const fileList = document.getElementById('fileList');
        const colorOptions = document.querySelectorAll('.color-option');
        const previewBtns = document.querySelectorAll('.preview-btn');

        // Update preview based on form changes
        document.getElementById('bagType').addEventListener('change', updatePreview);
        document.getElementById('bagSize').addEventListener('change', updatePreview);
        document.getElementById('handleType').addEventListener('change', updatePreview);
        document.getElementById('printingType').addEventListener('change', updatePreview);
        document.getElementById('designText').addEventListener('input', updatePreview);

        // Color selection
        colorOptions.forEach(option => {
            option.addEventListener('click', function() {
                colorOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                updatePreview();
            });
        });

        // Preview view buttons
        previewBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                previewBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                // In a real implementation, this would change the preview view
            });
        });

        // File upload
        uploadArea.addEventListener('click', () => {
            designFile.click();
        });

        designFile.addEventListener('change', function() {
            if (this.files.length > 0) {
                const fileName = this.files[0].name;
                fileList.innerHTML = `<p><i class="fas fa-file"></i> ${fileName}</p>`;
                
                // In a real implementation, you would preview the image
                // For this demo, we'll just update the design text
                previewDesign.innerHTML = `Your Design: ${fileName}`;
                previewDesign.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
            }
        });

        // Update preview function
        function updatePreview() {
            const bagType = document.getElementById('bagType').value;
            const bagSize = document.getElementById('bagSize').value;
            const handleType = document.getElementById('handleType').value;
            const printingType = document.getElementById('printingType').value;
            const designText = document.getElementById('designText').value;
            const selectedColor = document.querySelector('.color-option.active').getAttribute('data-color');
            
            // Update preview bag appearance based on selections
            let bagColor = '#d2b48c'; // natural jute
            if (selectedColor === 'bleached') bagColor = '#f5f5dc';
            if (selectedColor === 'dyed') bagColor = '#8a9a5b';
            if (selectedColor === 'custom') bagColor = 'linear-gradient(45deg, #d2b48c, #8a9a5b)';
            
            previewBag.style.backgroundColor = bagColor;
            previewBag.querySelector('.preview-handle').style.backgroundColor = bagColor;
            
            // Update design text
            if (designText) {
                previewDesign.innerHTML = designText;
                previewDesign.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
            } else {
                previewDesign.innerHTML = 'Your Design Will Appear Here';
                previewDesign.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
            }
            
            // Update specification summary
            document.getElementById('specType').textContent = formatText(bagType) + ' Bag';
            document.getElementById('specSize').textContent = document.getElementById('bagSize').options[document.getElementById('bagSize').selectedIndex].text;
            document.getElementById('specColor').textContent = formatText(selectedColor) + ' Jute';
            document.getElementById('specHandles').textContent = formatText(handleType);
            document.getElementById('specPrinting').textContent = formatText(printingType);
        }

        // Format text for display (capitalize, etc.)
        function formatText(text) {
            return text.charAt(0).toUpperCase() + text.slice(1);
        }

        // Form submission
        designForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Collect form data
            const formData = {
                bagType: document.getElementById('bagType').value,
                bagSize: document.getElementById('bagSize').value,
                juteColor: document.querySelector('.color-option.active').getAttribute('data-color'),
                handleType: document.getElementById('handleType').value,
                printingType: document.getElementById('printingType').value,
                designText: document.getElementById('designText').value,
                quantity: document.getElementById('quantity').value,
                timeline: document.getElementById('timeline').value,
                additionalNotes: document.getElementById('additionalNotes').value
            };
            
            // In a real implementation, you would send this data to your server
            // For this demo, we'll just show an alert
            alert('Thank you for your custom design request! We will review your design and contact you within 24-48 hours with a quote.');
            
            // Reset form
            designForm.reset();
            updatePreview();
            fileList.innerHTML = '';
        });

        // Initialize preview
        updatePreview();
    </script>
</body>
</html>