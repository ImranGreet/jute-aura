<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog - Xenmesh Jute Bags</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
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

        /* Catalog Controls */
        .catalog-controls {
            background-color: white;
            padding: 30px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 80px;
            z-index: 100;
        }

        .controls-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            flex: 1;
            max-width: 400px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 30px;
            font-size: 1rem;
            padding-left: 45px;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .filter-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
        }

        .view-options {
            display: flex;
            gap: 10px;
        }

        .view-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .view-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .products-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 50px;
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
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #777;
        }

        .product-price {
            font-weight: 600;
            color: var(--primary);
            font-size: 1.1rem;
        }

        .product-info p {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .product-actions {
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

        /* List View */
        .product-list-item {
            display: flex;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-list-item:hover {
            transform: translateY(-5px);
        }

        .list-img {
            width: 200px;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            font-size: 2.5rem;
            position: relative;
        }

        .list-info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .list-details {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
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
            
            .list-img {
                width: 150px;
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

            .controls-container {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                max-width: 100%;
            }

            .filter-options {
                justify-content: center;
            }

            .product-list-item {
                flex-direction: column;
            }

            .list-img {
                width: 100%;
                height: 200px;
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
    <x-layouts.Header/>

    <!-- Page Hero -->
    <x-layouts.Collection-Hero/>

    <!-- Catalog Controls -->
    <section class="catalog-controls">
        <div class="container">
            <div class="controls-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search products...">
                </div>
                
                <div class="filter-options">
                    <select class="filter-select" id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="tote">Tote Bags</option>
                        <option value="shopper">Shopper Bags</option>
                        <option value="laptop">Laptop Bags</option>
                        <option value="promo">Promotional Bags</option>
                        <option value="fashion">Fashion Bags</option>
                    </select>
                    
                    <select class="filter-select" id="sizeFilter">
                        <option value="all">All Sizes</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                    
                    <select class="filter-select" id="priceFilter">
                        <option value="all">All Prices</option>
                        <option value="low">Under $10</option>
                        <option value="medium">$10 - $25</option>
                        <option value="high">Over $25</option>
                    </select>
                </div>
                
                <div class="view-options">
                    <div class="view-btn active" id="gridView">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="view-btn" id="listView">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products">
        <div class="container">
            <div class="products-grid" id="productsContainer">
                <!-- Products will be dynamically inserted here -->
            </div>
            
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-layouts.Footer/>
    

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

        // Product Data
        const products = [
            {
                id: 1,
                name: "Classic Jute Tote Bag",
                category: "tote",
                size: "medium",
                price: "$8.50",
                description: "Versatile and spacious tote bag perfect for everyday use. Features reinforced handles and a sturdy base.",
                badge: "Bestseller",
                icon: "fas fa-shopping-bag"
            },
            {
                id: 2,
                name: "Eco Shopper Bag",
                category: "shopper",
                size: "large",
                price: "$12.00",
                description: "Large shopper bag with side gussets for extra capacity. Ideal for grocery shopping or beach trips.",
                badge: "New",
                icon: "fas fa-shopping-cart"
            },
            {
                id: 3,
                name: "Jute Laptop Bag",
                category: "laptop",
                size: "medium",
                price: "$24.99",
                description: "Professional laptop bag with padded interior compartment. Perfect for work or travel.",
                badge: "",
                icon: "fas fa-laptop"
            },
            {
                id: 4,
                name: "Promotional Gift Bag",
                category: "promo",
                size: "small",
                price: "$5.75",
                description: "Customizable gift bags perfect for corporate events and special occasions with your branding.",
                badge: "Customizable",
                icon: "fas fa-gift"
            },
            {
                id: 5,
                name: "Fashion Shoulder Bag",
                category: "fashion",
                size: "small",
                price: "$18.50",
                description: "Trendy shoulder bag with adjustable strap and multiple pockets. Available in various colors.",
                badge: "Trending",
                icon: "fas fa-tshirt"
            },
            {
                id: 6,
                name: "Jute Backpack",
                category: "fashion",
                size: "medium",
                price: "$22.00",
                description: "Stylish and functional backpack with multiple compartments. Perfect for students and travelers.",
                badge: "",
                icon: "fas fa-backpack"
            },
            {
                id: 7,
                name: "Mini Drawstring Bag",
                category: "promo",
                size: "small",
                price: "$4.25",
                description: "Compact drawstring bag ideal for promotional events, gym, or as a gift pouch.",
                badge: "Eco Choice",
                icon: "fas fa-pencil-alt"
            },
            {
                id: 8,
                name: "Market Tote with Pockets",
                category: "tote",
                size: "large",
                price: "$14.75",
                description: "Extra large tote bag with interior and exterior pockets for organized carrying.",
                badge: "Popular",
                icon: "fas fa-shopping-bag"
            },
            {
                id: 9,
                name: "Jute Wine Bag",
                category: "promo",
                size: "small",
                price: "$6.50",
                description: "Elegant wine bottle bag perfect for gifts or special events. Custom printing available.",
                badge: "New",
                icon: "fas fa-wine-bottle"
            },
            {
                id: 10,
                name: "Beach Tote Bag",
                category: "tote",
                size: "large",
                price: "$16.00",
                description: "Spacious beach tote with waterproof lining. Features a separate pocket for wet items.",
                badge: "Seasonal",
                icon: "fas fa-umbrella-beach"
            },
            {
                id: 11,
                name: "Jute Messenger Bag",
                category: "laptop",
                size: "medium",
                price: "$26.50",
                description: "Classic messenger bag with adjustable strap and multiple organizational compartments.",
                badge: "Professional",
                icon: "fas fa-briefcase"
            },
            {
                id: 12,
                name: "Eco-Friendly Grocery Bag",
                category: "shopper",
                size: "large",
                price: "$9.99",
                description: "Durable grocery bag with reinforced handles and foldable design for easy storage.",
                badge: "Eco Choice",
                icon: "fas fa-leaf"
            }
        ];

        // DOM Elements
        const productsContainer = document.getElementById('productsContainer');
        const gridViewBtn = document.getElementById('gridView');
        const listViewBtn = document.getElementById('listView');
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const sizeFilter = document.getElementById('sizeFilter');
        const priceFilter = document.getElementById('priceFilter');

        // Initialize
        let currentView = 'grid';
        displayProducts(products);

        // View Toggle
        gridViewBtn.addEventListener('click', () => {
            currentView = 'grid';
            gridViewBtn.classList.add('active');
            listViewBtn.classList.remove('active');
            displayProducts(products);
        });

        listViewBtn.addEventListener('click', () => {
            currentView = 'list';
            listViewBtn.classList.add('active');
            gridViewBtn.classList.remove('active');
            displayProducts(products);
        });

        // Filter Products
        function filterProducts() {
            const searchTerm = searchInput.value.toLowerCase();
            const categoryValue = categoryFilter.value;
            const sizeValue = sizeFilter.value;
            const priceValue = priceFilter.value;
            
            const filteredProducts = products.filter(product => {
                // Search filter
                const matchesSearch = product.name.toLowerCase().includes(searchTerm) || 
                                    product.description.toLowerCase().includes(searchTerm);
                
                // Category filter
                const matchesCategory = categoryValue === 'all' || product.category === categoryValue;
                
                // Size filter
                const matchesSize = sizeValue === 'all' || product.size === sizeValue;
                
                // Price filter
                let matchesPrice = true;
                if (priceValue !== 'all') {
                    const priceNum = parseFloat(product.price.replace('$', ''));
                    if (priceValue === 'low') matchesPrice = priceNum < 10;
                    if (priceValue === 'medium') matchesPrice = priceNum >= 10 && priceNum <= 25;
                    if (priceValue === 'high') matchesPrice = priceNum > 25;
                }
                
                return matchesSearch && matchesCategory && matchesSize && matchesPrice;
            });
            
            displayProducts(filteredProducts);
        }

        // Event listeners for filters
        searchInput.addEventListener('input', filterProducts);
        categoryFilter.addEventListener('change', filterProducts);
        sizeFilter.addEventListener('change', filterProducts);
        priceFilter.addEventListener('change', filterProducts);

        // Display Products
        function displayProducts(productsToDisplay) {
            productsContainer.innerHTML = '';
            
            if (productsToDisplay.length === 0) {
                productsContainer.innerHTML = '<p class="no-results">No products match your search criteria. Please try different filters.</p>';
                return;
            }
            
            if (currentView === 'grid') {
                productsToDisplay.forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className = 'product-card';
                    productCard.innerHTML = `
                        <div class="product-img">
                            <i class="${product.icon}"></i>
                            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                        </div>
                        <div class="product-info">
                            <h3>${product.name}</h3>
                            <div class="product-meta">
                                <span>${product.size.charAt(0).toUpperCase() + product.size.slice(1)}</span>
                                <span class="product-price">${product.price}</span>
                            </div>
                            <p>${product.description}</p>
                            <div class="product-actions">
                                <a href="index.html#contact" class="btn btn-outline">Request Sample</a>
                                <a href="index.html#contact" class="btn">Bulk Order</a>
                            </div>
                        </div>
                    `;
                    productsContainer.appendChild(productCard);
                });
            } else {
                productsToDisplay.forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className = 'product-list-item';
                    productCard.innerHTML = `
                        <div class="list-img">
                            <i class="${product.icon}"></i>
                            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                        </div>
                        <div class="list-info">
                            <div>
                                <h3>${product.name}</h3>
                                <p>${product.description}</p>
                            </div>
                            <div class="list-details">
                                <div>
                                    <div class="product-meta">
                                        <span>Size: ${product.size.charAt(0).toUpperCase() + product.size.slice(1)}</span>
                                        <span class="product-price">${product.price}</span>
                                    </div>
                                </div>
                                <div class="product-actions">
                                    <a href="index.html#contact" class="btn btn-outline">Sample</a>
                                    <a href="index.html#contact" class="btn">Bulk Order</a>
                                </div>
                            </div>
                        </div>
                    `;
                    productsContainer.appendChild(productCard);
                });
            }
        }
    </script>
</body>
</html>