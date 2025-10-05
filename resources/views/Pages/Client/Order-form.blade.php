<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Product Samples - Xenmesh</title>
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
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* Sample Request Form */
        .sample-request {
            background-color: white;
            padding: 60px 0;
        }

        .form-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-header {
            background-color: var(--primary);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .form-header h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .form-progress {
            display: flex;
            justify-content: space-between;
            padding: 20px 30px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eee;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            position: relative;
        }

        .progress-step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 20px;
            right: -50%;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            color: #777;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-bottom: 10px;
            z-index: 2;
        }

        .progress-step.active .step-number {
            background-color: var(--primary);
            color: white;
        }

        .progress-step.completed .step-number {
            background-color: var(--accent);
            color: white;
        }

        .progress-step.completed:after {
            background-color: var(--accent);
        }

        .step-label {
            font-size: 0.9rem;
            color: #777;
            text-align: center;
        }

        .progress-step.active .step-label {
            color: var(--primary);
            font-weight: 600;
        }

        .form-body {
            padding: 40px;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .section-title {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            color: var(--primary);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-help {
            font-size: 0.85rem;
            color: #777;
            margin-top: 5px;
        }

        /* Product Selection */
        .product-selection {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-image {
            width: 60px;
            height: 60px;
            background-color: #ddd;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .product-details h4 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .product-details p {
            color: #777;
            font-size: 0.9rem;
        }

        .product-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            background-color: #eee;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Customization Options */
        .customization-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .custom-option {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-option.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .custom-option h4 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* Shipping Options */
        .shipping-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .shipping-option {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .shipping-option.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .shipping-option h4 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .shipping-price {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .shipping-time {
            font-size: 0.9rem;
            color: #777;
        }

        /* Order Summary */
        .order-summary {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            margin-top: 30px;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .summary-header h3 {
            color: var(--primary);
        }

        .summary-items {
            margin-bottom: 20px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 1.1rem;
            padding-top: 15px;
            border-top: 1px solid #ddd;
            color: var(--primary);
        }

        /* Form Navigation */
        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Success Message */
        .success-message {
            text-align: center;
            padding: 60px 40px;
            display: none;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 20px;
        }

        .success-message h2 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .success-message p {
            margin-bottom: 30px;
            color: #555;
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
                font-size: 2.2rem;
            }
            
            .form-grid {
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

            .form-progress {
                flex-direction: column;
                gap: 20px;
            }

            .progress-step:not(:last-child):after {
                display: none;
            }

            .product-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .product-quantity {
                align-self: flex-end;
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

            .form-body {
                padding: 20px;
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
                    <li><a href="products.html">Bags</a></li>
                    <li><a href="gift-boxes.html">Gift Boxes</a></li>
                    <li><a href="custom-design.html">Custom Design</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="order.html">Order</a></li>
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
            <h1>Request Product Samples</h1>
            <p>Experience the quality of our jute and bamboo products firsthand before placing your bulk order</p>
        </div>
    </section>

    <!-- Sample Request Form -->
    <section class="sample-request">
        <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h2>Sample Request Form</h2>
                    <p>Complete this form to receive product samples. Sample costs will be credited to your first bulk order.</p>
                </div>

                <div class="form-progress">
                    <div class="progress-step completed" id="step1">
                        <div class="step-number">1</div>
                        <div class="step-label">Products</div>
                    </div>
                    <div class="progress-step active" id="step2">
                        <div class="step-number">2</div>
                        <div class="step-label">Details</div>
                    </div>
                    <div class="progress-step" id="step3">
                        <div class="step-number">3</div>
                        <div class="step-label">Shipping</div>
                    </div>
                    <div class="progress-step" id="step4">
                        <div class="step-number">4</div>
                        <div class="step-label">Review</div>
                    </div>
                </div>

                <div class="form-body">
                    <!-- Step 1: Product Selection -->
                    <div class="form-section active" id="section1">
                        <h3 class="section-title">Select Products to Sample</h3>
                        
                        <div class="product-selection">
                            <div class="product-item">
                                <div class="product-info">
                                    <div class="product-image">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <div class="product-details">
                                        <h4>Classic Jute Tote Bag</h4>
                                        <p>Medium size, natural jute, standard handles</p>
                                        <div class="product-price">$5 per sample</div>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <button class="quantity-btn minus" data-product="tote">-</button>
                                    <input type="number" class="quantity-input" id="tote-qty" value="0" min="0" max="3">
                                    <button class="quantity-btn plus" data-product="tote">+</button>
                                </div>
                            </div>
                            
                            <div class="product-item">
                                <div class="product-info">
                                    <div class="product-image">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <div class="product-details">
                                        <h4>Jute Laptop Bag</h4>
                                        <p>13-15" laptop compartment, padded interior</p>
                                        <div class="product-price">$8 per sample</div>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <button class="quantity-btn minus" data-product="laptop">-</button>
                                    <input type="number" class="quantity-input" id="laptop-qty" value="0" min="0" max="3">
                                    <button class="quantity-btn plus" data-product="laptop">+</button>
                                </div>
                            </div>
                            
                            <div class="product-item">
                                <div class="product-info">
                                    <div class="product-image">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                    <div class="product-details">
                                        <h4>Jute Gift Box</h4>
                                        <p>12" × 9" × 4", magnetic closure</p>
                                        <div class="product-price">$7 per sample</div>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <button class="quantity-btn minus" data-product="giftbox">-</button>
                                    <input type="number" class="quantity-input" id="giftbox-qty" value="0" min="0" max="3">
                                    <button class="quantity-btn plus" data-product="giftbox">+</button>
                                </div>
                            </div>
                            
                            <div class="product-item">
                                <div class="product-info">
                                    <div class="product-image">
                                        <i class="fas fa-box-open"></i>
                                    </div>
                                    <div class="product-details">
                                        <h4>Bamboo Storage Box</h4>
                                        <p>10" × 10" × 6", slide-top lid</p>
                                        <div class="product-price">$9 per sample</div>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <button class="quantity-btn minus" data-product="bamboo">-</button>
                                    <input type="number" class="quantity-input" id="bamboo-qty" value="0" min="0" max="3">
                                    <button class="quantity-btn plus" data-product="bamboo">+</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-navigation">
                            <div></div> <!-- Empty div for spacing -->
                            <button class="btn" id="nextToStep2">Continue to Details</button>
                        </div>
                    </div>

                    <!-- Step 2: Customer Details -->
                    <div class="form-section" id="section2">
                        <h3 class="section-title">Your Information</h3>
                        
                        <form id="customerDetails">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="fullName">Full Name *</label>
                                    <input type="text" id="fullName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input type="text" id="company" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country *</label>
                                    <select id="country" class="form-control" required>
                                        <option value="">Select Country</option>
                                        <option value="us">United States</option>
                                        <option value="ca">Canada</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="de">Germany</option>
                                        <option value="fr">France</option>
                                        <option value="jp">Japan</option>
                                        <option value="au">Australia</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Street Address *</label>
                                    <input type="text" id="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="city">City *</label>
                                    <input type="text" id="city" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="state">State/Province</label>
                                    <input type="text" id="state" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="zip">ZIP/Postal Code *</label>
                                    <input type="text" id="zip" class="form-control" required>
                                </div>
                                <div class="form-group full-width">
                                    <label for="businessType">Type of Business</label>
                                    <select id="businessType" class="form-control">
                                        <option value="">Select Business Type</option>
                                        <option value="retail">Retail Store</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="wholesale">Wholesaler/Distributor</option>
                                        <option value="corporate">Corporate Gifting</option>
                                        <option value="event">Event Planning</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group full-width">
                                    <label for="purpose">Intended Use for Samples</label>
                                    <textarea id="purpose" class="form-control" placeholder="Please describe how you plan to use our products..."></textarea>
                                </div>
                            </div>
                            
                            <div class="form-navigation">
                                <button type="button" class="btn btn-outline" id="backToStep1">Back to Products</button>
                                <button type="button" class="btn" id="nextToStep3">Continue to Shipping</button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3: Shipping & Customization -->
                    <div class="form-section" id="section3">
                        <h3 class="section-title">Shipping & Customization</h3>
                        
                        <div class="form-group">
                            <label>Shipping Method *</label>
                            <div class="shipping-options">
                                <div class="shipping-option active" data-shipping="standard">
                                    <h4>Standard Shipping</h4>
                                    <div class="shipping-price">$15</div>
                                    <div class="shipping-time">7-14 business days</div>
                                </div>
                                <div class="shipping-option" data-shipping="express">
                                    <h4>Express Shipping</h4>
                                    <div class="shipping-price">$35</div>
                                    <div class="shipping-time">3-5 business days</div>
                                </div>
                                <div class="shipping-option" data-shipping="priority">
                                    <h4>Priority Shipping</h4>
                                    <div class="shipping-price">$65</div>
                                    <div class="shipping-time">1-2 business days</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Customization Options</label>
                            <div class="customization-options">
                                <div class="custom-option" data-custom="none">
                                    <h4>Standard Samples</h4>
                                    <p>Receive our standard product samples as-is</p>
                                </div>
                                <div class="custom-option" data-custom="color">
                                    <h4>Color Variations</h4>
                                    <p>Request specific color options (additional $2 per sample)</p>
                                </div>
                                <div class="custom-option" data-custom="print">
                                    <h4>Logo Printing</h4>
                                    <p>Add your logo to samples (additional $5 per sample)</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="specialRequests">Special Requests or Notes</label>
                            <textarea id="specialRequests" class="form-control" placeholder="Any specific requirements, color preferences, or additional information..."></textarea>
                        </div>
                        
                        <div class="order-summary">
                            <div class="summary-header">
                                <h3>Order Summary</h3>
                                <span id="items-count">0 items</span>
                            </div>
                            <div class="summary-items" id="summary-items">
                                <!-- Items will be dynamically added here -->
                            </div>
                            <div class="summary-item">
                                <span>Shipping</span>
                                <span id="shipping-cost">$15.00</span>
                            </div>
                            <div class="summary-item" id="customization-cost-container" style="display: none;">
                                <span>Customization</span>
                                <span id="customization-cost">$0.00</span>
                            </div>
                            <div class="summary-total">
                                <span>Total</span>
                                <span id="total-cost">$15.00</span>
                            </div>
                        </div>
                        
                        <div class="form-navigation">
                            <button type="button" class="btn btn-outline" id="backToStep2">Back to Details</button>
                            <button type="button" class="btn" id="nextToStep4">Review & Submit</button>
                        </div>
                    </div>

                    <!-- Step 4: Review & Submit -->
                    <div class="form-section" id="section4">
                        <h3 class="section-title">Review Your Sample Request</h3>
                        
                        <div class="form-group">
                            <h4>Selected Products</h4>
                            <div id="review-products">
                                <!-- Products will be dynamically added here -->
                            </div>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <h4>Contact Information</h4>
                                <div id="review-contact">
                                    <!-- Contact info will be dynamically added here -->
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Shipping Details</h4>
                                <div id="review-shipping">
                                    <!-- Shipping info will be dynamically added here -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <h4>Special Requests</h4>
                            <div id="review-requests">
                                <!-- Special requests will be displayed here -->
                            </div>
                        </div>
                        
                        <div class="order-summary">
                            <div class="summary-header">
                                <h3>Final Cost</h3>
                            </div>
                            <div class="summary-items" id="final-summary-items">
                                <!-- Final items will be dynamically added here -->
                            </div>
                            <div class="summary-total">
                                <span>Total</span>
                                <span id="final-total-cost">$0.00</span>
                            </div>
                            <p class="form-help" style="margin-top: 15px;">
                                * Sample costs (excluding shipping) will be credited toward your first bulk order of 1,000+ units.
                            </p>
                        </div>
                        
                        <div class="form-navigation">
                            <button type="button" class="btn btn-outline" id="backToStep3">Back to Shipping</button>
                            <button type="button" class="btn" id="submitRequest">Submit Sample Request</button>
                        </div>
                    </div>

                    <!-- Success Message -->
                    <div class="success-message" id="successMessage">
                        <div class="success-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <h2>Sample Request Submitted!</h2>
                        <p>Thank you for your sample request. We have received your information and will contact you within 24 hours to confirm your order and provide tracking details.</p>
                        <p>Your sample cost (excluding shipping) will be credited to your first bulk order of 1,000+ units.</p>
                        <div style="margin-top: 30px;">
                            <a href="index.html" class="btn">Return to Homepage</a>
                            <a href="products.html" class="btn btn-outline" style="margin-left: 15px;">Browse More Products</a>
                        </div>
                    </div>
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
                    <p>Leading exporter of premium jute and bamboo products to global markets including EU, Japan, USA, and Canada.</p>
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
                    <a href="products.html">Bags</a>
                    <a href="gift-boxes.html">Gift Boxes</a>
                    <a href="custom-design.html">Custom Design</a>
                    <a href="blog.html">Blog</a>
                    <a href="order.html">Order</a>
                    <a href="index.html#contact">Contact</a>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <a href="order.html">Sample Orders</a>
                    <a href="custom-design.html">Custom Designs</a>
                    <a href="order.html">Bulk Export</a>
                    <a href="order.html">Private Labeling</a>
                </div>
                <div class="footer-col">
                    <h3>Markets</h3>
                    <a href="markets.html">European Union</a>
                    <a href="markets.html">Japan</a>
                    <a href="markets.html">United States</a>
                    <a href="markets.html">Canada</a>
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

        // Form Navigation Variables
        const progressSteps = document.querySelectorAll('.progress-step');
        const formSections = document.querySelectorAll('.form-section');
        let currentStep = 1;

        // Product Quantity Controls
        const quantityButtons = document.querySelectorAll('.quantity-btn');
        const quantityInputs = document.querySelectorAll('.quantity-input');
        
        quantityButtons.forEach(button => {
            button.addEventListener('click', function() {
                const product = this.getAttribute('data-product');
                const input = document.getElementById(`${product}-qty`);
                let value = parseInt(input.value);
                
                if (this.classList.contains('plus')) {
                    if (value < 3) {
                        input.value = value + 1;
                    }
                } else if (this.classList.contains('minus')) {
                    if (value > 0) {
                        input.value = value - 1;
                    }
                }
                
                updateOrderSummary();
            });
        });
        
        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                let value = parseInt(this.value);
                if (value < 0) this.value = 0;
                if (value > 3) this.value = 3;
                updateOrderSummary();
            });
        });

        // Shipping Options
        const shippingOptions = document.querySelectorAll('.shipping-option');
        shippingOptions.forEach(option => {
            option.addEventListener('click', function() {
                shippingOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                updateOrderSummary();
            });
        });

        // Customization Options
        const customizationOptions = document.querySelectorAll('.custom-option');
        customizationOptions.forEach(option => {
            option.addEventListener('click', function() {
                customizationOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                updateOrderSummary();
            });
        });

        // Update Order Summary
        function updateOrderSummary() {
            // Calculate product costs
            const toteQty = parseInt(document.getElementById('tote-qty').value) || 0;
            const laptopQty = parseInt(document.getElementById('laptop-qty').value) || 0;
            const giftboxQty = parseInt(document.getElementById('giftbox-qty').value) || 0;
            const bambooQty = parseInt(document.getElementById('bamboo-qty').value) || 0;
            
            const totalItems = toteQty + laptopQty + giftboxQty + bambooQty;
            const productsCost = (toteQty * 5) + (laptopQty * 8) + (giftboxQty * 7) + (bambooQty * 9);
            
            // Get shipping cost
            const activeShipping = document.querySelector('.shipping-option.active');
            let shippingCost = 15; // Default standard shipping
            
            if (activeShipping) {
                const shippingType = activeShipping.getAttribute('data-shipping');
                if (shippingType === 'express') shippingCost = 35;
                if (shippingType === 'priority') shippingCost = 65;
            }
            
            // Get customization cost
            const activeCustomization = document.querySelector('.custom-option.active');
            let customizationCost = 0;
            
            if (activeCustomization) {
                const customType = activeCustomization.getAttribute('data-custom');
                if (customType === 'color') customizationCost = totalItems * 2;
                if (customType === 'print') customizationCost = totalItems * 5;
            }
            
            const totalCost = productsCost + shippingCost + customizationCost;
            
            // Update summary
            document.getElementById('items-count').textContent = `${totalItems} items`;
            
            // Update summary items
            const summaryItems = document.getElementById('summary-items');
            summaryItems.innerHTML = '';
            
            if (toteQty > 0) {
                summaryItems.innerHTML += `<div class="summary-item"><span>Jute Tote Bag × ${toteQty}</span><span>$${(toteQty * 5).toFixed(2)}</span></div>`;
            }
            if (laptopQty > 0) {
                summaryItems.innerHTML += `<div class="summary-item"><span>Laptop Bag × ${laptopQty}</span><span>$${(laptopQty * 8).toFixed(2)}</span></div>`;
            }
            if (giftboxQty > 0) {
                summaryItems.innerHTML += `<div class="summary-item"><span>Gift Box × ${giftboxQty}</span><span>$${(giftboxQty * 7).toFixed(2)}</span></div>`;
            }
            if (bambooQty > 0) {
                summaryItems.innerHTML += `<div class="summary-item"><span>Bamboo Box × ${bambooQty}</span><span>$${(bambooQty * 9).toFixed(2)}</span></div>`;
            }
            
            document.getElementById('shipping-cost').textContent = `$${shippingCost.toFixed(2)}`;
            
            if (customizationCost > 0) {
                document.getElementById('customization-cost-container').style.display = 'flex';
                document.getElementById('customization-cost').textContent = `$${customizationCost.toFixed(2)}`;
            } else {
                document.getElementById('customization-cost-container').style.display = 'none';
            }
            
            document.getElementById('total-cost').textContent = `$${totalCost.toFixed(2)}`;
        }

        // Form Navigation Functions
        function showStep(step) {
            // Hide all sections
            formSections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show current section
            document.getElementById(`section${step}`).classList.add('active');
            
            // Update progress steps
            progressSteps.forEach((progressStep, index) => {
                if (index + 1 < step) {
                    progressStep.classList.remove('active');
                    progressStep.classList.add('completed');
                } else if (index + 1 === step) {
                    progressStep.classList.add('active');
                    progressStep.classList.remove('completed');
                } else {
                    progressStep.classList.remove('active');
                    progressStep.classList.remove('completed');
                }
            });
            
            currentStep = step;
        }

        // Navigation Event Listeners
        document.getElementById('nextToStep2').addEventListener('click', () => {
            const totalItems = getTotalItems();
            if (totalItems === 0) {
                alert('Please select at least one product to sample.');
                return;
            }
            showStep(2);
        });

        document.getElementById('backToStep1').addEventListener('click', () => showStep(1));
        document.getElementById('nextToStep3').addEventListener('click', () => {
            // Validate required fields
            const requiredFields = ['fullName', 'email', 'phone', 'country', 'address', 'city', 'zip'];
            let isValid = true;
            
            requiredFields.forEach(field => {
                const element = document.getElementById(field);
                if (!element.value.trim()) {
                    element.style.borderColor = 'red';
                    isValid = false;
                } else {
                    element.style.borderColor = '#ddd';
                }
            });
            
            if (!isValid) {
                alert('Please fill in all required fields.');
                return;
            }
            
            showStep(3);
            updateOrderSummary();
        });

        document.getElementById('backToStep2').addEventListener('click', () => showStep(2));
        document.getElementById('nextToStep4').addEventListener('click', () => {
            showStep(4);
            updateReviewSection();
        });

        document.getElementById('backToStep3').addEventListener('click', () => showStep(3));

        // Submit Request
        document.getElementById('submitRequest').addEventListener('click', () => {
            // In a real application, you would submit the form data to your server
            // For this demo, we'll just show the success message
            
            document.getElementById('section4').style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';
        });

        // Helper Functions
        function getTotalItems() {
            const toteQty = parseInt(document.getElementById('tote-qty').value) || 0;
            const laptopQty = parseInt(document.getElementById('laptop-qty').value) || 0;
            const giftboxQty = parseInt(document.getElementById('giftbox-qty').value) || 0;
            const bambooQty = parseInt(document.getElementById('bamboo-qty').value) || 0;
            
            return toteQty + laptopQty + giftboxQty + bambooQty;
        }

        function updateReviewSection() {
            // Update products review
            const reviewProducts = document.getElementById('review-products');
            reviewProducts.innerHTML = '';
            
            const products = [
                { id: 'tote', name: 'Jute Tote Bag', price: 5 },
                { id: 'laptop', name: 'Laptop Bag', price: 8 },
                { id: 'giftbox', name: 'Jute Gift Box', price: 7 },
                { id: 'bamboo', name: 'Bamboo Storage Box', price: 9 }
            ];
            
            let totalCost = 0;
            let itemsCount = 0;
            
            products.forEach(product => {
                const qty = parseInt(document.getElementById(`${product.id}-qty`).value) || 0;
                if (qty > 0) {
                    const cost = qty * product.price;
                    totalCost += cost;
                    itemsCount += qty;
                    
                    reviewProducts.innerHTML += `
                        <div class="summary-item">
                            <span>${product.name} × ${qty}</span>
                            <span>$${cost.toFixed(2)}</span>
                        </div>
                    `;
                }
            });
            
            // Update contact information
            const reviewContact = document.getElementById('review-contact');
            reviewContact.innerHTML = `
                <p><strong>Name:</strong> ${document.getElementById('fullName').value}</p>
                <p><strong>Email:</strong> ${document.getElementById('email').value}</p>
                <p><strong>Phone:</strong> ${document.getElementById('phone').value}</p>
                <p><strong>Company:</strong> ${document.getElementById('company').value || 'Not provided'}</p>
                <p><strong>Business Type:</strong> ${document.getElementById('businessType').options[document.getElementById('businessType').selectedIndex].text || 'Not specified'}</p>
            `;
            
            // Update shipping information
            const reviewShipping = document.getElementById('review-shipping');
            const activeShipping = document.querySelector('.shipping-option.active');
            let shippingText = 'Standard Shipping (7-14 days) - $15';
            
            if (activeShipping) {
                const shippingType = activeShipping.getAttribute('data-shipping');
                if (shippingType === 'express') shippingText = 'Express Shipping (3-5 days) - $35';
                if (shippingType === 'priority') shippingText = 'Priority Shipping (1-2 days) - $65';
            }
            
            reviewShipping.innerHTML = `
                <p><strong>Method:</strong> ${shippingText}</p>
                <p><strong>Address:</strong> ${document.getElementById('address').value}, ${document.getElementById('city').value}</p>
                <p><strong>State/Province:</strong> ${document.getElementById('state').value || 'Not provided'}</p>
                <p><strong>ZIP/Postal Code:</strong> ${document.getElementById('zip').value}</p>
                <p><strong>Country:</strong> ${document.getElementById('country').options[document.getElementById('country').selectedIndex].text}</p>
            `;
            
            // Update special requests
            const reviewRequests = document.getElementById('review-requests');
            const specialRequests = document.getElementById('specialRequests').value;
            const purpose = document.getElementById('purpose').value;
            
            reviewRequests.innerHTML = `
                <p>${specialRequests || 'No special requests provided.'}</p>
                <p><strong>Intended Use:</strong> ${purpose || 'Not specified'}</p>
            `;
            
            // Update final summary
            const finalSummaryItems = document.getElementById('final-summary-items');
            finalSummaryItems.innerHTML = reviewProducts.innerHTML;
            
            // Add shipping and customization to final summary
            const shippingCost = activeShipping ? 
                (activeShipping.getAttribute('data-shipping') === 'express' ? 35 : 
                 activeShipping.getAttribute('data-shipping') === 'priority' ? 65 : 15) : 15;
            
            const activeCustomization = document.querySelector('.custom-option.active');
            let customizationCost = 0;
            let customizationText = 'None';
            
            if (activeCustomization) {
                const customType = activeCustomization.getAttribute('data-custom');
                if (customType === 'color') {
                    customizationCost = itemsCount * 2;
                    customizationText = 'Color Variations';
                } else if (customType === 'print') {
                    customizationCost = itemsCount * 5;
                    customizationText = 'Logo Printing';
                }
            }
            
            finalSummaryItems.innerHTML += `
                <div class="summary-item"><span>Shipping</span><span>$${shippingCost.toFixed(2)}</span></div>
            `;
            
            if (customizationCost > 0) {
                finalSummaryItems.innerHTML += `
                    <div class="summary-item"><span>${customizationText}</span><span>$${customizationCost.toFixed(2)}</span></div>
                `;
            }
            
            const finalTotal = totalCost + shippingCost + customizationCost;
            document.getElementById('final-total-cost').textContent = `$${finalTotal.toFixed(2)}`;
        }

        // Initialize
        updateOrderSummary();
    </script>
</body>
</html>