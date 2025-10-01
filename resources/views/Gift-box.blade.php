<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Box Collection - Xenmesh Jute & Bamboo</title>
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
            --bamboo: #d9c8a9;
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1519669556878-63bdad8a1a49?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        /* Materials Showcase */
        .materials-showcase {
            background-color: white;
        }

        .materials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .material-card {
            text-align: center;
            padding: 40px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .material-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
        }

        .material-card.jute:before {
            background-color: var(--primary);
        }

        .material-card.bamboo:before {
            background-color: var(--bamboo);
        }

        .material-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .material-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 20px;
            color: white;
        }

        .material-card.jute .material-icon {
            background-color: var(--primary);
        }

        .material-card.bamboo .material-icon {
            background-color: var(--bamboo);
            color: var(--dark);
        }

        .material-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .material-features {
            list-style: none;
            text-align: left;
            margin-top: 20px;
        }

        .material-features li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .material-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        /* Gift Box Collection */
        .gift-collection {
            background-color: #f5f5f5;
        }

        .collection-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 10px 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .gift-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .gift-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            position: relative;
        }

        .gift-card:hover {
            transform: translateY(-10px);
        }

        .gift-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .gift-image {
            height: 250px;
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .gift-image.jute {
            background: linear-gradient(135deg, #d2b48c, #8a9a5b);
        }

        .gift-image.bamboo {
            background: linear-gradient(135deg, #d9c8a9, #b8a27a);
        }

        .gift-image.mixed {
            background: linear-gradient(135deg, #d2b48c, #d9c8a9);
        }

        .gift-info {
            padding: 25px;
        }

        .gift-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #777;
        }

        .gift-material {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .material-tag {
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        .material-tag.jute {
            background-color: rgba(45, 80, 22, 0.1);
            color: var(--primary);
        }

        .material-tag.bamboo {
            background-color: rgba(217, 200, 169, 0.3);
            color: #8a6d3b;
        }

        .gift-info h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .gift-dimensions {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
        }

        .gift-features {
            list-style: none;
            margin-bottom: 20px;
        }

        .gift-features li {
            margin-bottom: 5px;
            padding-left: 20px;
            position: relative;
            font-size: 0.9rem;
        }

        .gift-features li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        .gift-actions {
            display: flex;
            gap: 10px;
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

        /* Customization Options */
        .customization {
            background-color: white;
        }

        .custom-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            align-items: center;
        }

        .custom-options {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .custom-option {
            display: flex;
            gap: 20px;
        }

        .option-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(45, 80, 22, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary);
            flex-shrink: 0;
        }

        .option-content h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .custom-preview {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .preview-box {
            width: 200px;
            height: 150px;
            margin: 0 auto 30px;
            position: relative;
            perspective: 1000px;
        }

        .box-3d {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }

        .box-face {
            position: absolute;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }

        .box-front,
        .box-back {
            width: 200px;
            height: 150px;
        }

        .box-front {
            background: linear-gradient(135deg, #d2b48c, #8a9a5b);
            transform: translateZ(25px);
        }

        .box-back {
            background: linear-gradient(135deg, #d9c8a9, #b8a27a);
            transform: rotateY(180deg) translateZ(25px);
        }

        .box-right,
        .box-left {
            width: 50px;
            height: 150px;
            top: 0;
        }

        .box-right {
            background: linear-gradient(135deg, #8a9a5b, #6b7c4a);
            left: 200px;
            transform: rotateY(90deg) translateZ(25px);
        }

        .box-left {
            background: linear-gradient(135deg, #b8a27a, #9c8a65);
            left: -50px;
            transform: rotateY(-90deg) translateZ(25px);
        }

        .box-top,
        .box-bottom {
            width: 200px;
            height: 50px;
        }

        .box-top {
            background: linear-gradient(135deg, #d2b48c, #b8a27a);
            top: -50px;
            transform: rotateX(90deg) translateZ(25px);
        }

        .box-bottom {
            background: linear-gradient(135deg, #6b7c4a, #9c8a65);
            top: 150px;
            transform: rotateX(-90deg) translateZ(25px);
        }

        .preview-controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
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

        /* Applications */
        .applications {
            background-color: #f5f5f5;
        }

        .applications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .application-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .application-card:hover {
            transform: translateY(-5px);
        }

        .application-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(45, 80, 22, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--primary);
            margin: 0 auto 20px;
        }

        .application-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Packaging Solutions */
        .packaging-solutions {
            background-color: white;
        }

        .solutions-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .solution-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .solution-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .solution-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(rgba(45, 80, 22, 0.9), rgba(45, 80, 22, 0.9)), url('https://images.unsplash.com/photo-1549465227-3d16b7dfc9bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

            .custom-grid {
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

            .gift-actions {
                flex-direction: column;
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

            .gift-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <x-layouts.Header />

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Eco-Friendly Gift Boxes</h1>
            <p>Premium jute and bamboo gift packaging solutions for sustainable brands</p>
            <a href="#collection" class="btn">Explore Collection</a>
        </div>
    </section>

    <!-- Materials Showcase -->
    <section class="materials-showcase">
        <div class="container">
            <div class="section-title">
                <h2>Natural Materials</h2>
                <p>Crafted from sustainable, biodegradable materials</p>
            </div>

            <div class="materials-grid">
                <div class="material-card jute">
                    <div class="material-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Jute Fabric</h3>
                    <p>Strong, durable, and completely biodegradable. Jute is one of the most sustainable natural fibers available.</p>
                    <ul class="material-features">
                        <li>100% biodegradable and compostable</li>
                        <li>High tensile strength</li>
                        <li>Breathable natural fiber</li>
                        <li>Eco-friendly production process</li>
                        <li>Natural golden color or custom dyed</li>
                    </ul>
                </div>

                <div class="material-card bamboo">
                    <div class="material-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>Bamboo Accents</h3>
                    <p>Fast-growing and renewable, bamboo adds structural integrity and natural elegance to our gift boxes.</p>
                    <ul class="material-features">
                        <li>Rapidly renewable resource</li>
                        <li>Natural antibacterial properties</li>
                        <li>Lightweight yet strong</li>
                        <li>Beautiful natural grain</li>
                        <li>Easily customizable</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Gift Box Collection -->
    <section class="gift-collection" id="collection">
        <div class="container">
            <div class="section-title">
                <h2>Gift Box Collection</h2>
                <p>Beautiful packaging solutions for every occasion</p>
            </div>

            <div class="collection-filters">
                <button class="filter-btn active" data-filter="all">All Boxes</button>
                <button class="filter-btn" data-filter="jute">Jute Boxes</button>
                <button class="filter-btn" data-filter="bamboo">Bamboo Boxes</button>
                <button class="filter-btn" data-filter="mixed">Mixed Material</button>
                <button class="filter-btn" data-filter="luxury">Luxury Edition</button>
            </div>

            <div class="gift-grid">
                <!-- Gift Box 1 -->
                <div class="gift-card" data-category="jute luxury">
                    <div class="gift-badge">Premium</div>
                    <div class="gift-image jute">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag jute">Jute</span>
                            </span>
                            <span>#GB-JT01</span>
                        </div>
                        <h3>Classic Jute Gift Box</h3>
                        <div class="gift-dimensions">12" × 9" × 4"</div>
                        <ul class="gift-features">
                            <li>Reinforced corners</li>
                            <li>Magnetic closure</li>
                            <li>Custom printing available</li>
                            <li>Natural jute fabric</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>

                <!-- Gift Box 2 -->
                <div class="gift-card" data-category="bamboo">
                    <div class="gift-image bamboo">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag bamboo">Bamboo</span>
                            </span>
                            <span>#GB-BM01</span>
                        </div>
                        <h3>Bamboo Storage Box</h3>
                        <div class="gift-dimensions">10" × 10" × 6"</div>
                        <ul class="gift-features">
                            <li>Slide-top lid</li>
                            <li>Natural bamboo finish</li>
                            <li>Dovetail joints</li>
                            <li>Lightweight construction</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>

                <!-- Gift Box 3 -->
                <div class="gift-card" data-category="mixed luxury">
                    <div class="gift-badge">Luxury</div>
                    <div class="gift-image mixed">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag jute">Jute</span>
                                <span class="material-tag bamboo">Bamboo</span>
                            </span>
                            <span>#GB-MX01</span>
                        </div>
                        <h3>Jute & Bamboo Luxury Box</h3>
                        <div class="gift-dimensions">14" × 10" × 5"</div>
                        <ul class="gift-features">
                            <li>Combined materials</li>
                            <li>Brass hardware</li>
                            <li>Felt-lined interior</li>
                            <li>Reusable design</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>

                <!-- Gift Box 4 -->
                <div class="gift-card" data-category="jute">
                    <div class="gift-image jute">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag jute">Jute</span>
                            </span>
                            <span>#GB-JT02</span>
                        </div>
                        <h3>Eco Wedding Favor Box</h3>
                        <div class="gift-dimensions">6" × 6" × 3"</div>
                        <ul class="gift-features">
                            <li>Perfect for weddings</li>
                            <li>Ribbon tie closure</li>
                            <li>Bulk pricing available</li>
                            <li>Custom printing</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>

                <!-- Gift Box 5 -->
                <div class="gift-card" data-category="bamboo">
                    <div class="gift-image bamboo">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag bamboo">Bamboo</span>
                            </span>
                            <span>#GB-BM02</span>
                        </div>
                        <h3>Bamboo Wine Box</h3>
                        <div class="gift-dimensions">15" × 5" × 5"</div>
                        <ul class="gift-features">
                            <li>Fits standard wine bottles</li>
                            <li>Magnetic latch</li>
                            <li>Carry handle</li>
                            <li>Divided interior</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>

                <!-- Gift Box 6 -->
                <div class="gift-card" data-category="mixed">
                    <div class="gift-image mixed">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="gift-info">
                        <div class="gift-meta">
                            <span class="gift-material">
                                <span class="material-tag jute">Jute</span>
                                <span class="material-tag bamboo">Bamboo</span>
                            </span>
                            <span>#GB-MX02</span>
                        </div>
                        <h3>Apparel Gift Box</h3>
                        <div class="gift-dimensions">18" × 12" × 4"</div>
                        <ul class="gift-features">
                            <li>Perfect for clothing</li>
                            <li>Reinforced base</li>
                            <li>Lid with bamboo frame</li>
                            <li>Custom sizes available</li>
                        </ul>
                        <div class="gift-actions">
                            <a href="order.html" class="btn">Order Sample</a>
                            <a href="custom-design.html" class="btn btn-outline">Customize</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customization Options -->
    <section class="customization">
        <div class="container">
            <div class="section-title">
                <h2>Customization Options</h2>
                <p>Make our gift boxes uniquely yours</p>
            </div>

            <div class="custom-grid">
                <div class="custom-options">
                    <div class="custom-option">
                        <div class="option-icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <div class="option-content">
                            <h3>Custom Printing</h3>
                            <p>Add your logo, brand name, or custom designs with our high-quality printing services. Choose from screen printing, digital printing, or embossing.</p>
                        </div>
                    </div>

                    <div class="custom-option">
                        <div class="option-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="option-content">
                            <h3>Color Variations</h3>
                            <p>Select from natural jute tones or choose custom-dyed colors to match your brand identity. Bamboo elements can be stained in various wood tones.</p>
                        </div>
                    </div>

                    <div class="custom-option">
                        <div class="option-icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <div class="option-content">
                            <h3>Size Customization</h3>
                            <p>Need a specific size? We can create custom dimensions to perfectly fit your products, from small jewelry boxes to large apparel packaging.</p>
                        </div>
                    </div>

                    <div class="custom-option">
                        <div class="option-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <div class="option-content">
                            <h3>Private Labeling</h3>
                            <p>Complete private labeling services including custom tags, labels, and packaging inserts to create a fully branded unboxing experience.</p>
                        </div>
                    </div>
                </div>

                <div class="custom-preview">
                    <h3>Customization Preview</h3>
                    <div class="preview-box">
                        <div class="box-3d" id="box3d">
                            <div class="box-face box-front">Your Logo Here</div>
                            <div class="box-face box-back"></div>
                            <div class="box-face box-right"></div>
                            <div class="box-face box-left"></div>
                            <div class="box-face box-top"></div>
                            <div class="box-face box-bottom"></div>
                        </div>
                    </div>
                    <div class="preview-controls">
                        <button class="preview-btn active" data-view="front">Front</button>
                        <button class="preview-btn" data-view="back">Back</button>
                        <button class="preview-btn" data-view="top">Top</button>
                        <button class="preview-btn" data-view="rotate">3D View</button>
                    </div>
                    <p style="margin-top: 20px; color: #777;">Rotate and examine the box from all angles to visualize your custom design.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications -->
    <section class="applications">
        <div class="container">
            <div class="section-title">
                <h2>Perfect For</h2>
                <p>Ideal applications for our gift boxes</p>
            </div>

            <div class="applications-grid">
                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <h3>Wedding Favors</h3>
                    <p>Elegant packaging for wedding favors, bridal party gifts, and special occasion mementos.</p>
                </div>

                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Apparel Brands</h3>
                    <p>Sustainable packaging solution for clothing, accessories, and fashion items.</p>
                </div>

                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Beauty Products</h3>
                    <p>Natural packaging for cosmetics, skincare, and wellness products.</p>
                </div>

                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <h3>Food & Beverage</h3>
                    <p>Perfect for specialty foods, wines, teas, and gourmet gift sets.</p>
                </div>

                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Jewelry</h3>
                    <p>Luxurious yet sustainable packaging for fine jewelry and accessories.</p>
                </div>

                <div class="application-card">
                    <div class="application-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Corporate Gifting</h3>
                    <p>Professional yet eco-friendly packaging for corporate gifts and client appreciation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Solutions -->
    <section class="packaging-solutions">
        <div class="container">
            <div class="section-title">
                <h2>Complete Packaging Solutions</h2>
                <p>Beyond the box - complete your packaging with our accessories</p>
            </div>

            <div class="solutions-container">
                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-ribbon"></i>
                    </div>
                    <h3>Jute Ribbons</h3>
                    <p>Complement your gift boxes with our natural jute ribbons in various widths and colors.</p>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Custom Tags</h3>
                    <p>Eco-friendly tags made from recycled paper or jute with your custom printing.</p>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Filler Material</h3>
                    <p>Shredded jute or natural paper filler to protect contents and enhance presentation.</p>
                </div>

                <div class="solution-card">
                    <div class="solution-icon">
                        <i class="fas fa-sticky-note"></i>
                    </div>
                    <h3>Inserts & Cards</h3>
                    <p>Custom printed inserts, thank you cards, or care instruction cards.</p>
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

        // Gift Box Filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const giftCards = document.querySelectorAll('.gift-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter gift cards
                giftCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category').includes(filter)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // 3D Box Preview
        const previewButtons = document.querySelectorAll('.preview-btn');
        const box3d = document.getElementById('box3d');
        let rotationInterval;

        previewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const view = this.getAttribute('data-view');

                // Update active button
                previewButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Clear any existing rotation
                clearInterval(rotationInterval);
                box3d.style.transition = 'transform 0.5s ease';

                // Set view
                switch (view) {
                    case 'front':
                        box3d.style.transform = 'rotateX(0deg) rotateY(0deg)';
                        break;
                    case 'back':
                        box3d.style.transform = 'rotateX(0deg) rotateY(180deg)';
                        break;
                    case 'top':
                        box3d.style.transform = 'rotateX(-90deg) rotateY(0deg)';
                        break;
                    case 'rotate':
                        box3d.style.transition = 'transform 10s linear';
                        let rotation = 0;
                        rotationInterval = setInterval(() => {
                            rotation += 1;
                            box3d.style.transform = `rotateX(${rotation/4}deg) rotateY(${rotation}deg)`;
                        }, 50);
                        break;
                }
            });
        });

        // Initialize with front view
        previewButtons[0].click();
    </script>
</body>

</html>