<?php
// index.php - Home Page for Hilltop Welding and Maintenance LLC
$page_title = 'Master Plumber & Welding Services | Steubenville, OH & WV';
$meta_description = 'Hilltop Welding and Maintenance LLC offers expert plumbing, hot water tank installation, sewer repair, gas line work, and certified pipe welding in Steubenville, Ohio, and West Virginia.';
require_once 'header.php';
?>

<section class="bg-slate-700 text-white py-14 md:py-28 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="images/pipes.jpg" alt="Abstract background with pipe and welding imagery" class="w-full h-full object-cover opacity-30" onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/1E293B/FFFFFF?text=Background+Image+Not+Found';">
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Your Master Plumber & Certified Pipe Welding <span class="block sm:inline text-amber-500">Specialists in OH & WV</span>
        </h1>
        <p class="text-lg sm:text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                At Hilltop Welding and Maintenance, our roots in the Ohio Valley run deep, fueling our promise to you: unwavering dedication to exceptional workmanship and steadfast local commitment. We proudly serve Steubenville and communities across Ohio and West Virginia, delivering reliable plumbing and certified welding services you can trust. Your satisfaction and safety are our top priorities.
        </p>
        <a href="contact.php#get-a-quote" class="bg-amber-500 text-slate-900 hover:bg-amber-600 font-bold py-4 px-10 rounded-lg text-lg transition-colors shadow-lg transform hover:scale-105">
            Get a Free Quote
        </a>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-4">Our Specialized Services</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">Expert solutions for all your plumbing, pipe welding, and maintenance needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-slate-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                
                <img src="images/plumbing-services.png" alt="A clean and professional plumbing installation with copper pipes." class="w-full rounded-md mb-6" onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/FFFFFF?text=Image+Not+Found';">
                <div class="flex flex-col grow">
                    <h3 class="text-2xl font-semibold text-slate-800 mb-3">Full Plumbing Services</h3>
                    <p class="text-gray-600 mb-4 grow">
                        Comprehensive plumbing solutions by a Master Plumber. From repairs to installations, we handle it all with expertise.
                    </p>
                    <a href="services.php#plumbing" class="text-amber-600 hover:text-amber-700 font-semibold transition-colors mt-auto">Learn More →</a>
                </div>
            </div>
            
            <div class="bg-slate-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                 <img src="images/certified-pipe-welding2.png" alt="Certified pipe welding project" class="w-full rounded-md mb-6" onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/FFFFFF?text=Pipe+Welding+Image+Not+Found';">
                <div class="flex flex-col grow">
                    <h3 class="text-2xl font-semibold text-slate-800 mb-3">Certified Pipe Welding & Fabrication</h3>
                    <p class="text-gray-600 mb-4 grow">
                        Expert pipe welding and custom fabrication services. Precision and durability for all your piping needs.
                    </p>
                    <a href="services.php#pipewelding" class="text-amber-600 hover:text-amber-700 font-semibold transition-colors mt-auto">Learn More →</a>
                </div>
            </div>

            <div class="bg-slate-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow flex flex-col">
                <a href="https://hilltopwaterheater.com/" target="_blank" rel="noopener noreferrer" class="block mb-6">
                    <img src="images/New-Hilltop-WH-Logo-NoBG-Small.png" alt="Hot water tank installation by Hilltop Water Heaters" class="w-full rounded-md" onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/FFFFFF?text=Water+Heater+Image+Not+Found';">
                </a>
                <div class="flex flex-col grow">
                    <h3 class="text-2xl font-semibold text-slate-800 mb-3">Hot Water Tanks & Gas Lines</h3>
                    <p class="text-gray-600 mb-4 grow">
                        Specializing in hot water tank installation and repair, plus safe and reliable gas line installation and servicing. Visit <a href="https://hilltopwaterheater.com/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:text-amber-700 underline">HilltopWaterHeater.com</a> for more details.
                    </p>
                    <a href="services.php#hot_water_tank_services" class="text-amber-600 hover:text-amber-700 font-semibold transition-colors mt-auto">Learn More on This Site →</a>
                </div>
            </div>
        </div>
         <div class="text-center mt-12">
            <a href="services.php" class="bg-slate-800 text-white hover:bg-slate-700 font-semibold py-3 px-8 rounded-lg text-md transition-colors shadow-md">
                View All Services
            </a>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-slate-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                <img src="images/dedicated-craftsmanship.jpg" alt="A view of our quality craftsmanship" class="rounded-lg shadow-xl w-full" onerror="this.onerror=null;this.src='https://placehold.co/800x600/CCCCCC/FFFFFF?text=Image+Not+Found';">
            </div>
            <div class="md:w-1/2">
                <span class="text-amber-600 font-semibold uppercase tracking-wider text-sm">Our Promise</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mt-2 mb-5">Dedicated Craftsmanship &amp; Local Commitment</h2>
                <p class="text-gray-700 text-lg mb-4">
                    Hilltop Welding and Maintenance LLC is born from deep community roots in Steubenville and the Ohio Valley. We stand as a testament to hard work and local commitment, offering services you can trust in both Ohio and West Virginia.
                </p>
                <p class="text-gray-700 text-lg mb-6">
                    Our reputation is built on quality craftsmanship, transparent communication, and delivering results that last. Your satisfaction and safety are our top priorities.
                </p>
                <a href="about.php" class="text-amber-600 hover:text-amber-700 font-semibold text-lg transition-colors">Learn More About Us →</a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-amber-500 text-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready for Certified Plumbing & Welding?</h2>
        <p class="text-lg text-slate-800 mb-10 max-w-xl mx-auto">
            Whether it's a complex plumbing issue, a new hot water tank, gas line work, or specialized pipe welding, we're here to help. Contact us today for a no-obligation consultation and quote.
        </p>
        <a href="contact.php#get-a-quote" class="bg-slate-800 text-white hover:bg-slate-700 font-bold py-4 px-10 rounded-lg text-lg transition-colors shadow-lg transform hover:scale-105">
            Request Your Free Quote
        </a>
        <p class="mt-6 text-slate-800">Or call us directly at: <a href="tel:+17403179570" class="font-semibold hover:underline">(740) 317-9570</a></p>
    </div>
</section>

<?php
require_once 'footer.php';
?>

