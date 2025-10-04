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

    <script>
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
    </script>
</x-layouts.Client.Layout>