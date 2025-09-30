<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenmesh - Premium Jute Fashion Bags</title>
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

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Products Section */
        .products {
            background-color: white;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-img {
            height: 250px;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            font-size: 3rem;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .product-info p {
            color: #666;
            margin-bottom: 15px;
        }

        /* Reviews Section */
        .reviews {
            background-color: #f5f5f5;
        }

        .review-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .review-card {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            max-width: 350px;
            flex: 1 1 300px;
        }

        .review-text {
            font-style: italic;
            margin-bottom: 20px;
            color: #555;
        }

        .reviewer {
            display: flex;
            align-items: center;
        }

        .reviewer-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ddd;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
        }

        .reviewer-info h4 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .reviewer-info p {
            color: #777;
            font-size: 0.9rem;
        }

        /* Contact Section */
        .contact {
            background-color: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info h3 {
            margin-bottom: 20px;
            color: var(--primary);
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            margin-bottom: 15px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
        }

        .contact-form {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
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
            min-height: 150px;
            resize: vertical;
        }

        .form-options {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-option {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: white;
            border: 2px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-option.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .form-option i {
            font-size: 1.5rem;
            margin-bottom: 10px;
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
            .hero h1 {
                font-size: 2.8rem;
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

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .form-options {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
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
                <a href="#" class="logo">Xen<span>mesh</span></a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Eco-Friendly Jute Fashion Bags for Global Markets</h1>
                <p>Premium quality jute bags crafted with sustainability in mind. Exporting to EU, Japan, USA, Canada and beyond.</p>
                <a href="#contact" class="btn">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Our Products</h2>
                <p>Explore our range of sustainable jute fashion bags</p>
            </div>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-img">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="product-info">
                        <h3>Classic Tote Bag</h3>
                        <p>Spacious and durable tote bag perfect for everyday use. Available in multiple colors and custom prints.</p>
                        <a href="#contact" class="btn">Request Sample</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="product-info">
                        <h3>Jute Laptop Bag</h3>
                        <p>Stylish and protective laptop bag with padded interior. Ideal for professionals who value sustainability.</p>
                        <a href="#contact" class="btn">Request Sample</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="product-info">
                        <h3>Promotional Gift Bag</h3>
                        <p>Customizable gift bags perfect for corporate events, weddings, and special occasions with your branding.</p>
                        <a href="#contact" class="btn">Request Sample</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="product-info">
                        <h3>Fashion Shoulder Bag</h3>
                        <p>Trendy shoulder bags with modern designs. Perfect for fashion retailers looking for eco-friendly options.</p>
                        <a href="#contact" class="btn">Request Sample</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="section-title">
                <h2>Client Reviews</h2>
                <p>What our international clients say about us</p>
            </div>
            <div class="review-container">
                <div class="review-card">
                    <p class="review-text">"Xenmesh provided excellent quality jute bags for our retail chain in Germany. Their attention to detail and timely delivery was impressive."</p>
                    <div class="reviewer">
                        <div class="reviewer-img">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="reviewer-info">
                            <h4>Klaus Müller</h4>
                            <p>Retail Manager, Germany</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <p class="review-text">"We've been working with Xenmesh for over two years now. Their custom design capabilities and consistent quality make them our preferred supplier."</p>
                    <div class="reviewer">
                        <div class="reviewer-img">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="reviewer-info">
                            <h4>Sarah Johnson</h4>
                            <p>Fashion Buyer, USA</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <p class="review-text">"The sample process was smooth, and the final bulk order exceeded our expectations. Highly recommended for Japanese market requirements."</p>
                    <div class="reviewer">
                        <div class="reviewer-img">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="reviewer-info">
                            <h4>Yuki Tanaka</h4>
                            <p>Import Manager, Japan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Connect with us for samples, custom designs, or bulk orders</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Let's Work Together</h3>
                    <p>We specialize in supplying high-quality jute fashion bags to international markets. Whether you need samples, custom designs, or bulk orders, we're here to help.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Our Location</h4>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Email Us</h4>
                                <p>info@xenmesh.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4>Call Us</h4>
                                <p>+880 1234 567890</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us Your Requirements</h3>
                    <p>Select your preferred option below:</p>
                    
                    <div class="form-options">
                        <div class="form-option active" data-option="sample">
                            <i class="fas fa-box-open"></i>
                            <p>Purchase Sample</p>
                        </div>
                        <div class="form-option" data-option="custom">
                            <i class="fas fa-pencil-alt"></i>
                            <p>Custom Design</p>
                        </div>
                        <div class="form-option" data-option="bulk">
                            <i class="fas fa-shipping-fast"></i>
                            <p>Bulk Order</p>
                        </div>
                    </div>
                    
                    <form id="inquiryForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Requirements</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Submit Inquiry</button>
                    </form>
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
                    <a href="#home">Home</a>
                    <a href="#products">Products</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <a href="#contact">Sample Orders</a>
                    <a href="#contact">Custom Designs</a>
                    <a href="#contact">Bulk Export</a>
                    <a href="#contact">Private Labeling</a>
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
        
        // Form Option Selection
        const formOptions = document.querySelectorAll('.form-option');
        
        formOptions.forEach(option => {
            option.addEventListener('click', () => {
                // Remove active class from all options
                formOptions.forEach(opt => opt.classList.remove('active'));
                // Add active class to clicked option
                option.classList.add('active');
                
                // Update form message placeholder based on selection
                const messageField = document.getElementById('message');
                const selectedOption = option.getAttribute('data-option');
                
                if (selectedOption === 'sample') {
                    messageField.placeholder = "Please specify which sample(s) you're interested in and any specific requirements...";
                } else if (selectedOption === 'custom') {
                    messageField.placeholder = "Please describe your custom design requirements, including size, color, printing, and any other details...";
                } else if (selectedOption === 'bulk') {
                    messageField.placeholder = "Please provide details about your bulk order requirements including quantity, timeline, and any specific product details...";
                }
            });
        });
        
        // Form Submission
        const inquiryForm = document.getElementById('inquiryForm');
        
        inquiryForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get selected option
            const selectedOption = document.querySelector('.form-option.active').getAttribute('data-option');
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                company: document.getElementById('company').value,
                country: document.getElementById('country').value,
                message: document.getElementById('message').value,
                option: selectedOption
            };
            
            // In a real application, you would send this data to your server
            // For this demo, we'll just show an alert
            alert(`Thank you for your ${selectedOption} inquiry, ${formData.name}! We will contact you at ${formData.email} shortly.`);
            
            // Reset form
            inquiryForm.reset();
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>