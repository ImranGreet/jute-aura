<x-layouts.Client.Layout>


     <x-layouts.Header/>

    <x-layouts.Hero/>

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
    <x-card.Review/>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Connect with us for samples, custom designs, or bulk orders</p>
            </div>
            <div class="contact-container">
                <x-Contact.Contact-info/>
                
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
                    
                   <x-Contact.Contact-form/>
                </div>
            </div>
        </div>
    </section>

</x-layouts.Client.Layout>