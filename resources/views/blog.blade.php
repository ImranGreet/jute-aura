<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Xenmesh Jute Bags</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1491147334573-44cbb4602074?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        /* Blog Content */
        .blog-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 50px;
        }

        /* Blog Posts */
        .blog-posts {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .blog-post {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .post-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .post-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .post-content {
            padding: 30px;
        }

        .post-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #777;
        }

        .post-meta i {
            margin-right: 5px;
            color: var(--primary);
        }

        .post-content h2 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .post-content p {
            margin-bottom: 20px;
            color: #555;
        }

        .read-more {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-widget {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .widget-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light);
            color: var(--primary);
        }

        .categories-list {
            list-style: none;
        }

        .categories-list li {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .categories-list a {
            text-decoration: none;
            color: #555;
            display: flex;
            justify-content: space-between;
            transition: color 0.3s ease;
        }

        .categories-list a:hover {
            color: var(--primary);
        }

        .categories-list span {
            background-color: var(--light);
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.8rem;
        }

        .recent-posts {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .recent-post {
            display: flex;
            gap: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .recent-post:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .recent-post-img {
            width: 80px;
            height: 60px;
            background-size: cover;
            background-position: center;
            border-radius: 4px;
            flex-shrink: 0;
        }

        .recent-post-content h4 {
            font-size: 0.95rem;
            margin-bottom: 5px;
        }

        .recent-post-content a {
            text-decoration: none;
            color: var(--dark);
            transition: color 0.3s ease;
        }

        .recent-post-content a:hover {
            color: var(--primary);
        }

        .recent-post-content .post-date {
            font-size: 0.8rem;
            color: #777;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            background-color: var(--light);
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.85rem;
            text-decoration: none;
            color: #555;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background-color: var(--primary);
            color: white;
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .newsletter-form input {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .newsletter-form button {
            padding: 12px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .newsletter-form button:hover {
            background-color: var(--secondary);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
        }

        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .pagination a.active, .pagination a:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
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
            
            .blog-content {
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

            .post-image {
                height: 200px;
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
                    <li><a href="blog.html" class="active">Blog</a></li>
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
            <h1>Xenmesh Blog</h1>
            <p>Industry insights, sustainability tips, and export guidance for jute bag businesses</p>
            <a href="#blog-posts" class="btn">Explore Articles</a>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog" id="blog-posts">
        <div class="container">
            <div class="blog-content">
                <!-- Main Blog Posts -->
                <div class="blog-posts">
                    <!-- Blog Post 1 -->
                    <article class="blog-post">
                        <div class="post-image" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                            <span class="post-category">Sustainability</span>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> October 15, 2023</span>
                                <span><i class="far fa-user"></i> Admin</span>
                                <span><i class="far fa-comment"></i> 12 Comments</span>
                            </div>
                            <h2>Why Jute Bags Are the Future of Sustainable Packaging</h2>
                            <p>Jute bags are not just an eco-friendly alternative to plastic; they represent a shift towards sustainable consumerism. With growing environmental concerns worldwide, jute offers a biodegradable, renewable, and durable solution for packaging needs...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 2 -->
                    <article class="blog-post">
                        <div class="post-image" style="background-image: url('https://images.unsplash.com/photo-1556655848-f3a7049761e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                            <span class="post-category">Export Guide</span>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> October 8, 2023</span>
                                <span><i class="far fa-user"></i> Export Manager</span>
                                <span><i class="far fa-comment"></i> 8 Comments</span>
                            </div>
                            <h2>Understanding EU Regulations for Jute Product Imports</h2>
                            <p>Exporting jute bags to European markets requires compliance with specific regulations. From REACH compliance to packaging waste directives, understanding these requirements is crucial for successful market entry. This guide covers the essential regulations you need to know...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 3 -->
                    <article class="blog-post">
                        <div class="post-image" style="background-image: url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                            <span class="post-category">Design Trends</span>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> October 1, 2023</span>
                                <span><i class="far fa-user"></i> Design Team</span>
                                <span><i class="far fa-comment"></i> 15 Comments</span>
                            </div>
                            <h2>Top 5 Jute Bag Design Trends for 2024</h2>
                            <p>As consumer preferences evolve, jute bag designs are becoming more sophisticated and versatile. From minimalist aesthetics to bold patterns, discover the top trends that will dominate the market in 2024. Learn how to incorporate these trends into your product lines...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 4 -->
                    <article class="blog-post">
                        <div class="post-image" style="background-image: url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                            <span class="post-category">Manufacturing</span>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> September 24, 2023</span>
                                <span><i class="far fa-user"></i> Production Head</span>
                                <span><i class="far fa-comment"></i> 6 Comments</span>
                            </div>
                            <h2>Quality Control Standards for Export-Grade Jute Bags</h2>
                            <p>Maintaining consistent quality is essential for international buyers. This article outlines our rigorous quality control processes, from raw material selection to final inspection. Learn how we ensure every jute bag meets international standards for durability and craftsmanship...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Categories Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="categories-list">
                            <li><a href="#">Sustainability <span>12</span></a></li>
                            <li><a href="#">Export Guide <span>8</span></a></li>
                            <li><a href="#">Design Trends <span>15</span></a></li>
                            <li><a href="#">Manufacturing <span>7</span></a></li>
                            <li><a href="#">Market Insights <span>10</span></a></li>
                            <li><a href="#">Product Care <span>5</span></a></li>
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="recent-posts">
                            <div class="recent-post">
                                <div class="recent-post-img" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80');"></div>
                                <div class="recent-post-content">
                                    <h4><a href="#">Why Jute Bags Are the Future of Sustainable Packaging</a></h4>
                                    <span class="post-date">Oct 15, 2023</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img" style="background-image: url('https://images.unsplash.com/photo-1556655848-f3a7049761e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80');"></div>
                                <div class="recent-post-content">
                                    <h4><a href="#">Understanding EU Regulations for Jute Product Imports</a></h4>
                                    <span class="post-date">Oct 8, 2023</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img" style="background-image: url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80');"></div>
                                <div class="recent-post-content">
                                    <h4><a href="#">Top 5 Jute Bag Design Trends for 2024</a></h4>
                                    <span class="post-date">Oct 1, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tags">
                            <a href="#" class="tag">Jute Bags</a>
                            <a href="#" class="tag">Eco-Friendly</a>
                            <a href="#" class="tag">Export</a>
                            <a href="#" class="tag">Sustainability</a>
                            <a href="#" class="tag">Manufacturing</a>
                            <a href="#" class="tag">Design</a>
                            <a href="#" class="tag">Quality Control</a>
                            <a href="#" class="tag">Market Trends</a>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Subscribe to our newsletter for industry updates and exclusive insights.</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
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
                    <a href="blog.html">Blog</a>
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

        // Newsletter Form Submission
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert(`Thank you for subscribing with ${email}! You'll receive our latest updates soon.`);
            this.reset();
        });
    </script>
</body>
</html>