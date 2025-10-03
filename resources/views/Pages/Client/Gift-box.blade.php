<x-layouts.Client.Layout>
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
</x-layouts.Client.Layout>