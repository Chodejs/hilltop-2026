<?php
// about.php - About Us Page for Hilltop Welding and Maintenance LLC
$page_title = 'About Hilltop Welding & Maintenance | Master Plumber Brian Lesnansky';
$meta_description = 'Learn about Hilltop Welding and Maintenance LLC. Serving Steubenville, OH & WV with expert plumbing, pipe welding, and dedication to community.';
require_once 'header.php';
?>

<section class="bg-slate-700 text-white py-12 md:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold">About Hilltop Welding & Maintenance LLC</h1>
        <p class="text-lg text-slate-300 mt-2">Your Local Experts in Plumbing & Welding</p>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="md:w-1/2">
                <img src="images/team-photo.JPG" alt="The team at Hilltop Welding and Maintenance LLC" class="rounded-lg shadow-xl w-full">
                <p class="text-center text-sm text-gray-500 mt-2">Meet Our Team (OH & WV)</p>
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-slate-800 mb-4">Our Story: Deep Roots, Unyielding Dedication</h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Hilltop Welding and Maintenance LLC, is born from deep community roots and built with unyielding dedication. This company stands as a testament to hard work and local commitment in Steubenville and the surrounding Ohio Valley, serving both Ohio and West Virginia.
                </p>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    As a certified, licensed, and insured company with a Master Plumber leading our team, we have a vision of providing reliable, high-quality plumbing, specialized pipe welding, and essential maintenance services. It's a business built on a foundation of quality craftsmanship and earning the trust of every client, one project at a time.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    We believe that strong relationships are as important as strong pipes and welds. That's why we focus on skilled service, transparent communication, and upholding the highest standards of integrity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- New Section for the Bridge Image -->
<section class="py-16 md:py-24 bg-slate-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-4">Committed to Our Community</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
                We are proud to be a local business serving the Ohio Valley. The Veterans Memorial Bridge isn't just a landmark; it's a symbol of the strength, resilience, and connection that defines our community—qualities we strive to reflect in our work every day.
            </p>
            <img src="images/Vet-Mem-Bridge-Large.png" 
                 alt="A scenic view of the Veterans Memorial Bridge connecting Steubenville, Ohio and Weirton, West Virginia." 
                 class="rounded-lg shadow-xl w-full max-w-5xl mx-auto h-64 md:h-96 object-cover object-center" 
                 onerror="this.onerror=null;this.src='https://placehold.co/1200x400/CCCCCC/FFFFFF?text=Bridge+Image';">
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-4">Our Core Values</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">These principles guide every project we undertake and every interaction we have.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-amber-500 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-slate-800 mb-3">Expert Craftsmanship</h3>
                <p class="text-gray-600">
                    With a Master Plumber and certified welders on our team, we ensure precision, durability, and adherence to the highest industry standards in every job.
                </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-amber-500 mb-4">
                     <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-slate-800 mb-3">Unwavering Reliability & Trust</h3>
                <p class="text-gray-600">
                    You can count on us to be there when we say we will, providing honest assessments and dependable service. Your trust is our most valued asset.
                </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-amber-500 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-slate-800 mb-3">Community & Customer Focus</h3>
                <p class="text-gray-600">
                    We are dedicated to serving our local community. We listen to your needs, provide clear communication, and strive to exceed your expectations.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-4">More About Brian</h2>
            <p class="text-lg text-gray-600 max-w-xl mx-auto">The expertise and dedication behind Hilltop Welding and Maintenance LLC.</p>
        </div>
        <div class="max-w-md mx-auto bg-slate-50 p-8 rounded-lg shadow-xl text-center">
            <img src="images/brian.JPG" alt="Brian Lesnansky - Master Plumber & Certified Pipe Welder" class="w-48 h-48 mx-auto rounded-full shadow-lg mb-6 object-cover" onerror="this.onerror=null;this.src='https://placehold.co/400x400/1E293B/F1F5F9?text=Brian+L.';">
            <h3 class="text-2xl font-semibold text-slate-800">Brian Lesnansky</h3>
            <p class="text-amber-600 text-lg font-medium">Master Plumber &amp; Certified Pipe Welder (OH &amp; WV)</p>
            <p class="text-gray-700 mt-4">
                "With 30 years of experience, I strive to provide our community with a reliable source for high-quality workmanship. My commitment is to solve your problems effectively and ensure your complete satisfaction."
            </p>
            <p class="text-sm text-gray-500 mt-4">Certified, Licensed & Insured</p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 bg-amber-500 text-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Need a Master Plumber or Expert Welder?</h2>
        <p class="text-lg text-slate-800 mb-8 max-w-xl mx-auto">
            Let's discuss how Hilltop Welding and Maintenance can bring our expertise to your plumbing, pipe welding, or maintenance needs.
        </p>
        <a href="contact.php" class="bg-slate-800 text-white hover:bg-slate-700 font-bold py-3 px-8 rounded-lg text-lg transition-colors shadow-md">
            Contact Our Team Today
        </a>
    </div>
</section>

<?php
require_once 'footer.php';
?>
