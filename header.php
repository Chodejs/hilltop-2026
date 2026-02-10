<?php
// header.php
// Common header for Hilltop Welding and Maintenance LLC website.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// --- Configuration & Dynamic Variables ---
$site_name = "Hilltop Welding and Maintenance LLC";
$current_page = basename($_SERVER['PHP_SELF']);

// Construct the Canonical URL (Important for SEO)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $host . $_SERVER['REQUEST_URI'];

// Define Page Title & Description defaults if not set in the parent page
$page_title_text = isset($page_title) ? $page_title . ' | Hilltop Welding' : 'Hilltop Welding & Maintenance LLC | Steubenville, OH';
$meta_desc_text = isset($meta_description) ? $meta_description : 'Expert plumbing, pipe welding, and maintenance services in Steubenville, Ohio and the Ohio Valley. Master Plumber Brian Lesnansky. Licensed & Insured.';

// Header & Logo Sizing Logic
if ($current_page == 'index.php') {
    $header_height_class = 'h-40';
    $logo_image_src = 'images/logo-dark-mode.png';
    $logo_height_class = 'h-40'; 
} else {
    $header_height_class = 'h-28';
    $logo_image_src = 'images/logo-dark-mode.png'; 
    $logo_height_class = 'h-28'; 
}

// Social Share Image - TIP: Save a 1200x630 version of your hero image as 'social-share.jpg'
$og_image_url = $protocol . "://" . $host . "/images/logo-dark-mode.png"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo htmlspecialchars($page_title_text); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc_text); ?>">
    <link rel="canonical" href="<?php echo $current_url; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title_text); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc_text); ?>">
    <meta property="og:image" content="<?php echo $og_image_url; ?>">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $current_url; ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title_text); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($meta_desc_text); ?>">
    <meta property="twitter:image" content="<?php echo $og_image_url; ?>">
    
    <link rel="stylesheet" href="styles.css"> 
    <link rel="icon" href="images/logo-dark-mode.png" type="image/png">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Plumber",
      "name": "Hilltop Welding and Maintenance LLC",
      "image": "<?php echo $og_image_url; ?>",
      "telephone": "+17403179570",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Steubenville",
        "addressRegion": "OH",
        "addressCountry": "US"
      },
      "url": "<?php echo $protocol . "://" . $host; ?>",
      "priceRange": "$$"
    }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        /* Mobile Menu Animation Styles */
        #mobile-menu-button .hamburger-icon { display: block; }
        #mobile-menu-button .close-icon { display: none; }
        #mobile-menu-button.menu-button-open .hamburger-icon { display: none; }
        #mobile-menu-button.menu-button-open .close-icon { display: block; }

        #mobile-menu {
            width: 100%;
            position: absolute; 
            top: 100%; 
            left: 0;
            right: 0;
            z-index: 45; 
            background-color: #1e293b; /* Matches slate-800 */
            opacity: 0;
            visibility: hidden; 
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.3s ease-in-out, max-height 0.3s ease-in-out;
        }

        #mobile-menu.menu-is-open {
            opacity: 1;
            visibility: visible;
            max-height: 500px; 
            border-top: 1px solid #334155;
        }
    </style>
</head>
<body class="bg-slate-50 text-gray-700 font-sans antialiased flex flex-col min-h-screen">

    <header class="bg-slate-800 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between <?php echo $header_height_class; ?> transition-all duration-300">
                <div class="shrink-0">
                    <a href="index.php" class="block">
                        <img src="<?php echo $logo_image_src; ?>" 
                             alt="Hilltop Welding and Maintenance LLC Logo" 
                             class="<?php echo $logo_height_class; ?> w-auto object-contain transition-all duration-300" 
                             onerror="this.onerror=null;this.src='https://placehold.co/150x60/1E293B/FFFFFF?text=Hilltop+Welding';">
                    </a>
                </div>

                <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
                    <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'index.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Home</a>
                    <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'about.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">About Us</a>
                    <a href="services.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'services.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Services</a>
                    <a href="contact.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'contact.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Contact</a>
                    <a href="tel:+17403179570" class="ml-4 px-4 py-2 rounded-md text-sm font-medium bg-amber-500 text-slate-900 hover:bg-amber-600 transition-colors shadow-sm">
                        (740) 317-9570
                    </a>
                </nav>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="hamburger-icon h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="close-icon h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden"> 
            <div class="px-2 pt-2 pb-6 space-y-1 sm:px-3 bg-slate-800 shadow-xl">
                <a href="index.php" class="block px-3 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'index.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-700 hover:text-amber-400'; ?>">Home</a>
                <a href="about.php" class="block px-3 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'about.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-700 hover:text-amber-400'; ?>">About Us</a>
                <a href="services.php" class="block px-3 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'services.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-700 hover:text-amber-400'; ?>">Services</a>
                <a href="contact.php" class="block px-3 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'contact.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-700 hover:text-amber-400'; ?>">Contact</a>
                 <a href="tel:+17403179570" class="mt-4 block w-full text-center px-4 py-4 rounded-md text-lg font-bold bg-amber-500 text-slate-900 hover:bg-amber-600 transition-colors">
                    Call (740) 317-9570
                </a>
            </div>
        </div>
    </header>

    <main class="grow">
        
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (!menuButton || !mobileMenu) {
                console.error("DEBUG: Menu button or mobile menu element NOT FOUND!");
                return; 
            }
            
            function closeMenu() {
                mobileMenu.classList.remove('menu-is-open');
                menuButton.classList.remove('menu-button-open');
                menuButton.setAttribute('aria-expanded', 'false');
            }

            menuButton.addEventListener('click', function (e) { 
                e.stopPropagation(); // Prevent immediate closing if clicking the button
                const isCurrentlyOpen = mobileMenu.classList.contains('menu-is-open');
                
                if (isCurrentlyOpen) {
                    closeMenu();
                } else {
                    mobileMenu.classList.add('menu-is-open');
                    this.classList.add('menu-button-open'); 
                    this.setAttribute('aria-expanded', 'true'); 
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnButton = menuButton.contains(event.target);
                
                if (mobileMenu.classList.contains('menu-is-open') && !isClickInsideMenu && !isClickOnButton) {
                    closeMenu();
                }
            });
        });
    </script>