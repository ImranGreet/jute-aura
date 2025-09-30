<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order & Samples - Xenmesh Jute Bags</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1607082349566-187342175e2f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        /* Order Options */
        .order-options {
            background-color: white;
        }

        .options-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
        }

        .option-card {
            background-color: #f9f9f9;
            padding: 40px 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .option-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .option-card.featured {
            border-color: var(--accent);
            transform: scale(1.05);
        }

        .option-card.featured:before {
            content: 'Most Popular';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .option-icon {
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

        .option-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .option-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .option-features {
            list-style: none;
            margin-bottom: 30px;
            text-align: left;
        }

        .option-features li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .option-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Order Process */
        .order-process {
            background-color: #f5f5f5;
        }

        .process-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            border-bottom: 1px solid #ddd;
        }

        .process-tab {
            padding: 15px 30px;
            background: none;
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            color: #777;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .process-tab.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .process-content {
            display: none;
        }

        .process-content.active {
            display: block;
        }

        /* Sample Order Form */
        .sample-order {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h3 {
            color: var(--primary);
            margin-bottom: 10px;
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

        .product-selection {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
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

        /* Bulk Order Form */
        .bulk-order {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .bulk-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .bulk-option {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .bulk-option.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .bulk-option i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .bulk-option h4 {
            margin-bottom: 5px;
            color: var(--primary);
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

        /* Shipping Calculator */
        .shipping-calculator {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .calculator-header {
            margin-bottom: 15px;
        }

        .calculator-header h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .shipping-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }

        .shipping-option {
            padding: 15px;
            background-color: white;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #ddd;
            text-align: center;
        }

        .shipping-option.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .shipping-option h5 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .shipping-option .price {
            font-weight: 600;
            color: var(--dark);
        }

        .shipping-option .time {
            font-size: 0.8rem;
            color: #777;
        }

        /* Payment Options */
        .payment-options {
            margin-top: 30px;
        }

        .payment-methods {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .payment-method {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #ddd;
        }

        .payment-method.active {
            border-color: var(--primary);
            background-color: rgba(45, 80, 22, 0.05);
        }

        .payment-method i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* FAQ Section */
        .faq-section {
            background-color: white;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            background-color: #f9f9f9;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--primary);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-item.active .faq-answer {
            padding: 20px;
            max-height: 500px;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(45, 80, 22, 0.9), rgba(45, 80, 22, 0.9)), url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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
            
            .options-container {
                grid-template-columns: 1fr;
            }
            
            .option-card.featured {
                transform: scale(1);
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

            .section-title h2 {
                font-size: 2rem;
            }

            .cta-section h2 {
                font-size: 2rem;
            }

            .process-tabs {
                flex-direction: column;
            }

            .process-tab {
                text-align: center;
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

            .sample-order, .bulk-order {
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
                    <li><a href="products.html">Products</a></li>
                    <li><a href="custom-design.html">Custom Design</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="quality.html">Quality</a></li>
                    <li><a href="markets.html">Markets</a></li>
                    <li><a href="order.html" class="active">Order</a></li>
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
            <h1>Order & Samples</h1>
            <p>Start your journey with Xenmesh - from samples to bulk orders, we make it simple and efficient</p>
            <a href="#order-options" class="btn">View Order Options</a>
        </div>
    </section>

    <!-- Order Options -->
    <section class="order-options" id="order-options">
        <div class="container">
            <div class="section-title">
                <h2>Choose Your Order Type</h2>
                <p>Flexible options to meet your business needs</p>
            </div>
            
            <div class="options-container">
                <div class="option-card">
                    <div class="option-icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3>Sample Order</h3>
                    <div class="option-price">From $15</div>
                    <ul class="option-features">
                        <li>1-5 product samples</li>
                        <li>Physical quality inspection</li>
                        <li>Customization options available</li>
                        <li>Fast worldwide shipping</li>
                        <li>Credit applied to future bulk orders</li>
                        <li>Design consultation included</li>
                    </ul>
                    <a href="#sample-order" class="btn" style="width: 100%;">Order Samples</a>
                </div>
                
                <div class="option-card featured">
                    <div class="option-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Custom Sample Kit</h3>
                    <div class="option-price">$49</div>
                    <ul class="option-features">
                        <li>Complete material swatch kit</li>
                        <li>5 different bag styles</li>
                        <li>Color & printing options</li>
                        <li>Handle & accessory variations</li>
                        <li>Priority shipping included</li>
                        <li>Dedicated account manager</li>
                    </ul>
                    <a href="#sample-order" class="btn" style="width: 100%;">Get Sample Kit</a>
                </div>
                
                <div class="option-card">
                    <div class="option-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Bulk Order</h3>
                    <div class="option-price">MOQ: 500 units</div>
                    <ul class="option-features">
                        <li>Custom designs welcome</li>
                        <li>Volume-based pricing</li>
                        <li>Private labeling available</li>
                        <li>Quality assurance guarantee</li>
                        <li>Door-to-door shipping</li>
                        <li>Flexible payment terms</li>
                    </ul>
                    <a href="#bulk-order" class="btn" style="width: 100%;">Request Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Process -->
    <section class="order-process" id="order-process">
        <div class="container">
            <div class="section-title">
                <h2>Ordering Process</h2>
                <p>Simple steps from inquiry to delivery</p>
            </div>
            
            <div class="process-tabs">
                <button class="process-tab active" data-tab="sample-order">Sample Orders</button>
                <button class="process-tab" data-tab="bulk-order">Bulk Orders</button>
            </div>
            
            <div class="process-content active" id="sample-order-content">
                <div class="sample-order">
                    <div class="form-header">
                        <h3>Sample Order Request</h3>
                        <p>Select products you'd like to sample. Sample cost will be credited toward your first bulk order.</p>
                    </div>
                    
                    <div class="product-selection">
                        <h4>Select Products to Sample</h4>
                        
                        <div class="product-item">
                            <div class="product-info">
                                <div class="product-image">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="product-details">
                                    <h4>Classic Jute Tote Bag</h4>
                                    <p>Medium size, natural jute, standard handles</p>
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
                                    <i class="fas fa-backpack"></i>
                                </div>
                                <div class="product-details">
                                    <h4>Jute Backpack</h4>
                                    <p>Multi-compartment, adjustable straps</p>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <button class="quantity-btn minus" data-product="backpack">-</button>
                                <input type="number" class="quantity-input" id="backpack-qty" value="0" min="0" max="3">
                                <button class="quantity-btn plus" data-product="backpack">+</button>
                            </div>
                        </div>
                    </div>
                    
                    <form id="sampleOrderForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="sample-name">Full Name *</label>
                                <input type="text" id="sample-name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sample-email">Email Address *</label>
                                <input type="email" id="sample-email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sample-company">Company Name</label>
                                <input type="text" id="sample-company" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sample-phone">Phone Number</label>
                                <input type="tel" id="sample-phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sample-country">Country *</label>
                                <select id="sample-country" class="form-control" required>
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
                                <label for="sample-shipping">Shipping Method</label>
                                <select id="sample-shipping" class="form-control">
                                    <option value="standard">Standard (7-14 days) - $15</option>
                                    <option value="express">Express (3-5 days) - $35</option>
                                    <option value="priority">Priority (1-2 days) - $65</option>
                                </select>
                            </div>
                            <div class="form-group full-width">
                                <label for="sample-notes">Special Requests or Customization Notes</label>
                                <textarea id="sample-notes" class="form-control" placeholder="Any specific colors, prints, or modifications you'd like?"></textarea>
                            </div>
                        </div>
                        
                        <div class="order-summary">
                            <div class="summary-header">
                                <h3>Order Summary</h3>
                                <span id="sample-items-count">0 items</span>
                            </div>
                            <div class="summary-items">
                                <div class="summary-item">
                                    <span>Products</span>
                                    <span id="sample-products-total">$0.00</span>
                                </div>
                                <div class="summary-item">
                                    <span>Shipping</span>
                                    <span id="sample-shipping-cost">$15.00</span>
                                </div>
                            </div>
                            <div class="summary-total">
                                <span>Total</span>
                                <span id="sample-total-cost">$15.00</span>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%; margin-top: 20px;">Place Sample Order</button>
                    </form>
                </div>
            </div>
            
            <div class="process-content" id="bulk-order-content">
                <div class="bulk-order">
                    <div class="form-header">
                        <h3>Bulk Order Quote Request</h3>
                        <p>Provide details about your bulk order requirements for a customized quote.</p>
                    </div>
                    
                    <div class="bulk-options">
                        <div class="bulk-option active" data-type="existing">
                            <i class="fas fa-shopping-bag"></i>
                            <h4>Existing Products</h4>
                            <p>Order from our catalog</p>
                        </div>
                        <div class="bulk-option" data-type="custom">
                            <i class="fas fa-pencil-alt"></i>
                            <h4>Custom Design</h4>
                            <p>Create unique products</p>
                        </div>
                        <div class="bulk-option" data-type="private">
                            <i class="fas fa-tag"></i>
                            <h4>Private Label</h4>
                            <p>Your brand, our quality</p>
                        </div>
                    </div>
                    
                    <form id="bulkOrderForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="bulk-name">Full Name *</label>
                                <input type="text" id="bulk-name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="bulk-email">Email Address *</label>
                                <input type="email" id="bulk-email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="bulk-company">Company Name *</label>
                                <input type="text" id="bulk-company" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="bulk-phone">Phone Number *</label>
                                <input type="tel" id="bulk-phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="bulk-country">Country *</label>
                                <select id="bulk-country" class="form-control" required>
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
                                <label for="bulk-quantity">Estimated Quantity *</label>
                                <select id="bulk-quantity" class="form-control" required>
                                    <option value="">Select Quantity</option>
                                    <option value="500-1000">500 - 1,000 units</option>
                                    <option value="1000-5000">1,000 - 5,000 units</option>
                                    <option value="5000-10000">5,000 - 10,000 units</option>
                                    <option value="10000-25000">10,000 - 25,000 units</option>
                                    <option value="25000+">25,000+ units</option>
                                </select>
                            </div>
                            <div class="form-group full-width">
                                <label for="bulk-description">Product Description *</label>
                                <textarea id="bulk-description" class="form-control" required placeholder="Please describe the products you need, including type, size, color, printing requirements, etc."></textarea>
                            </div>
                            <div class="form-group full-width">
                                <label for="bulk-timeline">Required Timeline</label>
                                <select id="bulk-timeline" class="form-control">
                                    <option value="flexible">Flexible (8-10 weeks)</option>
                                    <option value="standard">Standard (6-8 weeks)</option>
                                    <option value="urgent">Urgent (4-6 weeks)</option>
                                    <option value="custom">Custom timeline (specify in notes)</option>
                                </select>
                            </div>
                            <div class="form-group full-width">
                                <label for="bulk-notes">Additional Notes or Requirements</label>
                                <textarea id="bulk-notes" class="form-control" placeholder="Any special packaging, labeling, or other requirements?"></textarea>
                            </div>
                        </div>
                        
                        <div class="shipping-calculator">
                            <div class="calculator-header">
                                <h4>Preferred Shipping Method</h4>
                                <p>We'll provide exact shipping costs with your quote</p>
                            </div>
                            <div class="shipping-options">
                                <div class="shipping-option active" data-method="sea">
                                    <h5>Sea Freight</h5>
                                    <div class="price">Most Economical</div>
                                    <div class="time">4-6 weeks</div>
                                </div>
                                <div class="shipping-option" data-method="air">
                                    <h5>Air Freight</h5>
                                    <div class="price">Faster Delivery</div>
                                    <div class="time">1-2 weeks</div>
                                </div>
                                <div class="shipping-option" data-method="express">
                                    <h5>Express</h5>
                                    <div class="price">Fastest Option</div>
                                    <div class="time">3-7 days</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="payment-options">
                            <h4>Preferred Payment Terms</h4>
                            <div class="payment-methods">
                                <div class="payment-method active" data-payment="tt">
                                    <i class="fas fa-university"></i>
                                    <div>Bank Transfer</div>
                                </div>
                                <div class="payment-method" data-payment="lc">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                    <div>Letter of Credit</div>
                                </div>
                                <div class="payment-method" data-payment="paypal">
                                    <i class="fab fa-paypal"></i>
                                    <div>PayPal</div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%; margin-top: 30px;">Request Bulk Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common ordering questions</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What is the minimum order quantity for bulk orders?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our minimum order quantity for bulk orders is 500 units per design. For custom or private label orders, we can sometimes accommodate smaller quantities with a setup fee. Contact us to discuss your specific needs.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does sample shipping take?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sample shipping times vary by destination:
                        <ul>
                            <li>Standard shipping: 7-14 business days</li>
                            <li>Express shipping: 3-5 business days</li>
                            <li>Priority shipping: 1-2 business days</li>
                        </ul>
                        Exact delivery times will be provided when you place your sample order.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I get my sample cost credited toward a bulk order?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! 100% of your sample order cost (excluding shipping) will be credited toward your first bulk order of 1,000 units or more. The credit is valid for 6 months from your sample order date.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What payment methods do you accept?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For sample orders, we accept PayPal, credit cards, and bank transfers. For bulk orders, we primarily work with bank transfers and letters of credit. We can discuss alternative payment methods for established business relationships.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer custom design services?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We specialize in custom jute bag designs. You can provide your own designs or work with our design team to create unique products. Custom design services include material selection, printing options, size customization, and accessory additions.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What is your production timeline for bulk orders?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Production timelines depend on order quantity and complexity:
                        <ul>
                            <li>Standard orders (up to 5,000 units): 6-8 weeks</li>
                            <li>Large orders (5,000-25,000 units): 8-10 weeks</li>
                            <li>Custom/complex orders: 10-12 weeks</li>
                            <li>Rush production: Available with expedited fees</li>
                        </ul>
                        We provide detailed timelines with each quote.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Place Your Order?</h2>
            <p>Contact our sales team for personalized assistance with your sample or bulk order requirements.</p>
            <a href="index.html#contact" class="btn btn-light">Contact Sales Team</a>
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

        // Process Tabs
        const processTabs = document.querySelectorAll('.process-tab');
        const processContents = document.querySelectorAll('.process-content');
        
        processTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');
                
                // Update active tab
                processTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Show target content
                processContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === `${target}-content`) {
                        content.classList.add('active');
                    }
                });
            });
        });

        // Sample Order Quantity Controls
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
                
                updateSampleOrderSummary();
            });
        });
        
        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                let value = parseInt(this.value);
                if (value < 0) this.value = 0;
                if (value > 3) this.value = 3;
                updateSampleOrderSummary();
            });
        });

        // Update Sample Order Summary
        function updateSampleOrderSummary() {
            const toteQty = parseInt(document.getElementById('tote-qty').value) || 0;
            const laptopQty = parseInt(document.getElementById('laptop-qty').value) || 0;
            const backpackQty = parseInt(document.getElementById('backpack-qty').value) || 0;
            
            const totalItems = toteQty + laptopQty + backpackQty;
            const productsTotal = totalItems * 5; // $5 per sample
            
            const shippingSelect = document.getElementById('sample-shipping');
            let shippingCost = 15; // Default standard shipping
            
            if (shippingSelect.value === 'express') {
                shippingCost = 35;
            } else if (shippingSelect.value === 'priority') {
                shippingCost = 65;
            }
            
            const totalCost = productsTotal + shippingCost;
            
            // Update summary
            document.getElementById('sample-items-count').textContent = `${totalItems} items`;
            document.getElementById('sample-products-total').textContent = `$${productsTotal.toFixed(2)}`;
            document.getElementById('sample-shipping-cost').textContent = `$${shippingCost.toFixed(2)}`;
            document.getElementById('sample-total-cost').textContent = `$${totalCost.toFixed(2)}`;
        }
        
        // Update summary when shipping method changes
        document.getElementById('sample-shipping').addEventListener('change', updateSampleOrderSummary);

        // Bulk Order Options
        const bulkOptions = document.querySelectorAll('.bulk-option');
        bulkOptions.forEach(option => {
            option.addEventListener('click', function() {
                bulkOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Shipping Options
        const shippingOptions = document.querySelectorAll('.shipping-option');
        shippingOptions.forEach(option => {
            option.addEventListener('click', function() {
                shippingOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Payment Options
        const paymentMethods = document.querySelectorAll('.payment-method');
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                paymentMethods.forEach(m => m.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });

        // Form Submissions
        document.getElementById('sampleOrderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your sample order! We will contact you within 24 hours to confirm details and provide tracking information.');
            this.reset();
            // Reset quantities
            quantityInputs.forEach(input => input.value = 0);
            updateSampleOrderSummary();
        });

        document.getElementById('bulkOrderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your bulk order inquiry! Our sales team will contact you within 24 hours with a detailed quote and production timeline.');
            this.reset();
            // Reset options
            bulkOptions[0].click();
            shippingOptions[0].click();
            paymentMethods[0].click();
        });

        // Initialize
        updateSampleOrderSummary();
    </script>
</body>
</html>