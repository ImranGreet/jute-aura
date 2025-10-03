<x-layouts.Client.Layout>
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
</x-layouts.Client.Layout>