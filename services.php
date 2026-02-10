<?php
// services.php - Services Page for Hilltop Welding and Maintenance LLC
$page_title = 'Plumbing & Pipe Welding Services | OH & WV';
$meta_description = 'Explore expert plumbing, hot water tank installation, sewer repair, gas line services, and specialized pipe welding & fabrication by Master Plumber Brian Lesnansky in Steubenville, OH & WV.';
require_once 'header.php';
?>

<section class="bg-slate-700 text-white py-12 md:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold">Our Specialized Services</h1>
    </div>
</section>

<section class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- CHANGE: Font size increased from text-lg to text-xl per notes -->
        <p class="text-xl text-gray-700 max-w-3xl mx-auto mb-4">
             Our team provides a full spectrum of services to meet your needs.
        </p>
        <!-- CHANGE: Font size increased and text rephrased to be team-focused per notes -->
        <p class="text-xl text-gray-700 max-w-2xl mx-auto mb-8">
            At Hilltop Welding and Maintenance LLC, our fully certified, licensed, and insured team offers a focused range of expert services. We are committed to delivering high-quality workmanship for residential, commercial, and industrial clients throughout Ohio and West Virginia.
        </p>
        <!-- CHANGE: Simplified this section and added "Emergency" per notes -->
        <div class="inline-flex items-center bg-amber-100 text-amber-700 p-3 rounded-lg">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            <span class="font-semibold">On-Site & Emergency Services Available!</span>
        </div>
    </div>
</section>

<section id="plumbing" class="py-12 md:py-16 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-3xl font-bold text-slate-800 mb-3">Full Plumbing Services</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">Comprehensive solutions from a Master Plumber.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="images/master-plumbing.jpg" alt="Professional plumbing tools and installation" class="w-full object-cover rounded-lg shadow-lg mb-4 md:mb-0" onerror="this.onerror=null;this.src='https://placehold.co/700x500/CCCCCC/FFFFFF?text=Image+Not+Found';">
            </div>
            <div>
                <!-- CHANGE: Rephrased to be team-focused per notes -->
                <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                    As industry leaders, we provide a full spectrum of plumbing services. Whether you're dealing with leaks, blockages, new installations, or complex repairs, our expert team has the skills to handle your needs efficiently and effectively.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4 pl-4">
                    <li>Residential and Commercial Plumbing</li>
                    <li>Leak Detection and Repair</li>
                    <li>Fixture Installation and Repair (sinks, toilets, faucets)</li>
                    <li>Pipe Repair and Replacement</li>
                    <li>Drain Cleaning and Unclogging</li>
                    <li>Sump Pump Services</li>
                    <li>24/7 Emergency Plumbing Services (please call for immediate assistance)</li>
                </ul>
                <p class="text-gray-700 font-semibold">
                    Trust your plumbing to an experienced and certified professional team.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ... (rest of the services sections remain largely the same, but I'll check for wording) ... -->

<section id="sewer" class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-3xl font-bold text-slate-800 mb-3">Sewer Location & Repairs</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">Advanced solutions for underground sewer lines.</p>
        </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="md:order-2">
                <img src="images/sewer-work-repairs.png" alt="Sewer line location and repair equipment" class="w-full object-cover rounded-lg shadow-lg mb-4 md:mb-0" onerror="this.onerror=null;this.src='https://placehold.co/700x500/CCCCCC/FFFFFF?text=Sewer+Image+Not+Found';">
            </div>
            <div class="md:order-1">
                <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                    Facing sewer line issues? We offer sewer line location services to accurately diagnose problems and provide effective repairs. From blockages to breaks, we can restore your sewer system's functionality.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4 pl-4">
                    <li>Video Camera Sewer Inspection</li>
                    <li>Sewer Line Locating</li>
                    <li>Sewer Line Cleaning and Unclogging</li>
                    <li>Sewer Line Repair and Replacement</li>
                    <li>Trenchless Repair Options (where applicable)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="pipewelding" class="py-12 md:py-16 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-3xl font-bold text-slate-800 mb-3">Pipe Welding & Fabrication</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">Certified pipe welding for all types of piping systems.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
             <div>
                <img src="images/certified-pipe-welding.png" alt="Custom pipe welding and fabrication" class="w-full object-cover rounded-lg shadow-lg mb-4 md:mb-0" onerror="this.onerror=null;this.src='https://placehold.co/700x500/CCCCCC/FFFFFF?text=Welding+Image+Not+Found';">
            </div>
            <div>
                <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                    Our expertise extends to specialized pipe welding and fabrication. We handle various materials and complex configurations for industrial, commercial, and residential applications.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 pl-4">
                    <li>Certified Pipe Welding (various processes and materials)</li>
                    <li>Custom Pipe System Fabrication</li>
                    <li>Process Piping</li>
                    <li>High-Pressure Pipe Welding</li>
                    <li>Repairs and Modifications to Existing Pipe Systems</li>
                </ul>
                 <p class="text-gray-700 mt-4 font-semibold">
                    Delivering strong, leak-free welds for critical applications.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ... (other sections) ... -->

<section class="py-16 md:py-20 bg-amber-500 text-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">Need a Master Plumber or Certified Welder?</h2>
        <p class="text-lg text-slate-800 mb-10 max-w-xl mx-auto">
            <!-- CHANGE: Rephrased to be team-focused per notes -->
            Discuss your project requirements with our expert team. We provide reliable solutions and free, no-obligation quotes for all our services in Ohio and West Virginia.
        </p>
        <a href="contact.php#get-a-quote" class="bg-slate-800 text-white hover:bg-slate-700 font-bold py-4 px-10 rounded-lg text-lg transition-colors shadow-lg transform hover:scale-105">
            Contact Us for Your Project Needs
        </a>
    </div>
</section>

<?php
require_once 'footer.php';
?>
