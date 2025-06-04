<?php include 'header.php'; ?>

    <!-- Blueprints Hero Section -->
    <section class="relative bg-gray-800 text-white py-24 px-4 overflow-hidden">
        <img src="https://placehold.co/1920x1080/374151/ffffff?text=Blueprint+Catalog" alt="Blueprint Catalog" class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="relative max-w-7xl mx-auto text-center z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">
                Architectural Blueprints
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90 animate-fade-in">
                Explore our collection of ready-to-use architectural designs.
            </p>
        </div>
    </section>

    <!-- Blueprints Grid Section -->
    <section id="blueprint-grid" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-gray-800 mb-12 text-center">Available Designs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blueprint 1 -->
                <div class="card bg-gray-100 overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/a3e635/ffffff?text=Modern+House" alt="Modern House" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-blue-700">Modern House Plan</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Sleek lines and open spaces perfect for urban living.
                        </p>
                        <span class="font-semibold text-gray-800">$299</span>
                    </div>
                </div>
                <!-- Blueprint 2 -->
                <div class="card bg-gray-100 overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/67e8f9/ffffff?text=Office+Complex" alt="Office Complex" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-blue-700">Office Complex</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            A functional workspace design ready for customization.
                        </p>
                        <span class="font-semibold text-gray-800">$499</span>
                    </div>
                </div>
                <!-- Blueprint 3 -->
                <div class="card bg-gray-100 overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/fcd34d/ffffff?text=Retail+Space" alt="Retail Space" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-blue-700">Retail Space Layout</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Flexible layout ideal for small businesses and shops.
                        </p>
                        <span class="font-semibold text-gray-800">$199</span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="contact_upload.php" class="btn-primary bg-yellow-500 text-white hover:bg-yellow-600">
                    CONTACT US TO PURCHASE
                </a>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
