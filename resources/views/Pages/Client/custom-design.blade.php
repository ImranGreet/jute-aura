<x-layouts.Client.Layout>
    <!-- Page Header -->
    <x-layouts.Custom-design-hero />
    <!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Design Process</h2>
                <p>Simple steps from concept to delivery</p>
            </div>
            <x-card.Design-process />
        </div>
    </section>

     <!-- Design Portal -->
    <section class="design-portal" id="design-form" style="width: 100%;">
        <div class="container">
            <div class="section-title">
                <h2>Design Your Bag</h2>
                <p>Customize every aspect of your jute bag</p>
            </div>
            <div class="portal-container">
                <div class="design-form-container">
                    <form id="designForm">
                        <div class="form-group">
                            <label for="bagType">Bag Type</label>
                            <select class="form-control" id="bagType">
                                <option value="tote">Tote Bag</option>
                                <option value="shopper">Shopper Bag</option>
                                <option value="laptop">Laptop Bag</option>
                                <option value="backpack">Backpack</option>
                                <option value="promo">Promotional Bag</option>
                                <option value="drawstring">Drawstring Bag</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bagSize">Bag Size</label>
                            <select class="form-control" id="bagSize">
                                <option value="small">Small (10" x 12")</option>
                                <option value="medium" selected>Medium (12" x 14")</option>
                                <option value="large">Large (14" x 16")</option>
                                <option value="xlarge">Extra Large (16" x 18")</option>
                                <option value="custom">Custom Size</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jute Color</label>
                            <div class="color-options">
                                <div class="color-option color-natural active" data-color="natural" title="Natural Jute"></div>
                                <div class="color-option color-bleached" data-color="bleached" title="Bleached Jute"></div>
                                <div class="color-option color-dyed" data-color="dyed" title="Dyed Jute"></div>
                                <div class="color-option color-custom" data-color="custom" title="Custom Color"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="handleType">Handle Type</label>
                            <select class="form-control" id="handleType">
                                <option value="standard">Standard Jute Handles</option>
                                <option value="reinforced">Reinforced Handles</option>
                                <option value="cotton">Cotton Webbing Handles</option>
                                <option value="leather">Leather Handles</option>
                                <option value="adjustable">Adjustable Shoulder Strap</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="printingType">Printing Type</label>
                            <select class="form-control" id="printingType">
                                <option value="silkscreen">Silkscreen Printing</option>
                                <option value="digital">Digital Printing</option>
                                <option value="embroidery">Embroidery</option>
                                <option value="patch">Leather/Patch</option>
                                <option value="none">No Printing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="designText">Design Text/Logo</label>
                            <textarea class="form-control" id="designText" placeholder="Enter text for your design or describe your logo..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Upload Design Files</label>
                            <div class="upload-area" id="uploadArea">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Click to upload your design files</p>
                                <p class="small">Supported formats: JPG, PNG, PDF, AI, PSD (Max 10MB)</p>
                                <input type="file" class="file-input" id="designFile" accept=".jpg,.jpeg,.png,.pdf,.ai,.psd">
                            </div>
                            <div id="fileList"></div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="quantity">Order Quantity</label>
                                <input type="number" class="form-control" id="quantity" min="100" value="1000">
                            </div>
                            <div class="form-group">
                                <label for="timeline">Required Timeline</label>
                                <select class="form-control" id="timeline">
                                    <option value="standard">Standard (4-6 weeks)</option>
                                    <option value="express">Express (2-3 weeks)</option>
                                    <option value="urgent">Urgent (1-2 weeks)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="additionalNotes">Additional Notes/Special Requirements</label>
                            <textarea class="form-control" id="additionalNotes" placeholder="Any special requirements, lining, pockets, closures, etc."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="contactInfo">Your Contact Information</label>
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Company Name">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                            <input type="text" class="form-control" placeholder="Country" required>
                        </div>

                        <button type="submit" class="btn" style="width: 100%;">Submit Design Request</button>
                    </form>
                </div>

                
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <x-card.Customization-capacities/>
</x-layouts.Client.Layout>