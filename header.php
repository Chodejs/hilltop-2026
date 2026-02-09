<?php
// header.php
// Common header for Hilltop Welding and Maintenance LLC website.
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start session if not already started, useful for messages
}
$current_page = basename($_SERVER['PHP_SELF']); // Get current page for active nav link

// Set variables for logo and header size based on the current page
if ($current_page == 'index.php') {
    $header_height_class = 'h-40'; // Increased homepage header height
    $logo_image_src = 'images/Logo-Large.png'; // Use logo with background for readability
    $logo_height_class = 'h-40'; // Increased homepage logo size
} else {
    $header_height_class = 'h-28'; // Increased other page header height
    $logo_image_src = 'images/Logo-Medium.png'; // Use logo with background for readability
    $logo_height_class = 'h-28'; // Increased other page logo size
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | Hilltop Welding' : 'Hilltop Welding & Maintenance LLC'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? htmlspecialchars($meta_description) : 'Expert welding and maintenance services in Steubenville, Ohio, and the surrounding Ohio Valley region. Quality craftsmanship you can trust. Plumber near me. welder near me. Brian Lenasky.'; ?>">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="styles.css"> 

    <link rel="icon" href="https://placehold.co/32x32/1E293B/F59E0B/png?text=HW" type="image/png">

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* SVG Icon Styling for open/close states on the button */
        #mobile-menu-button .hamburger-icon { display: block; }
        #mobile-menu-button .close-icon { display: none; }
        #mobile-menu-button.menu-button-open .hamburger-icon { display: none; }
        #mobile-menu-button.menu-button-open .close-icon { display: block; }

        /* Mobile Menu Styling */
        #mobile-menu {
            width: 100%;
            position: absolute; 
            top: 100%; 
            left: 0;
            right: 0;
            z-index: 45; 
            background-color: #334155; /* Tailwind's bg-slate-700 */
            opacity: 0;
            visibility: hidden; 
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.3s ease-in-out, max-height 0.3s ease-in-out;
        }

        #mobile-menu.menu-is-open {
            opacity: 1;
            visibility: visible;
            max-height: 500px; /* Adjust as needed */
        }
    </style>
</head>
<body class="bg-slate-50 text-gray-700 font-sans antialiased">

    <header class="bg-slate-800 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between <?php echo $header_height_class; ?>">
                <div class="flex-shrink-0">
                    <a href="index.php" class="block">
                        <img src="<?php echo $logo_image_src; ?>" alt="Hilltop Welding and Maintenance LLC Logo" class="<?php echo $logo_height_class; ?> w-auto" onerror="this.onerror=null;this.src='https://placehold.co/150x60/1E293B/FFFFFF?text=Hilltop+Welding';">
                    </a>
                </div>

                <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
                    <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'index.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Home</a>
                    <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'about.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">About Us</a>
                    <a href="services.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'services.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Services</a>
                    <a href="contact.php" class="px-3 py-2 rounded-md text-sm font-medium <?php echo ($current_page == 'contact.php') ? 'bg-amber-500 text-slate-900' : 'hover:bg-slate-700 hover:text-amber-400 transition-colors'; ?>">Contact</a>
                    <a href="tel:+17403179570" class="ml-4 px-4 py-2 rounded-md text-sm font-medium bg-amber-500 text-slate-900 hover:bg-amber-600 transition-colors">
                        (740) 317-9570
                    </a>
                </nav>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="hamburger-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="close-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden"> 
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($current_page == 'index.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-600 hover:text-amber-400'; ?>">Home</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($current_page == 'about.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-600 hover:text-amber-400'; ?>">About Us</a>
                <a href="services.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($current_page == 'services.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-600 hover:text-amber-400'; ?>">Services</a>
                <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($current_page == 'contact.php') ? 'bg-amber-500 text-slate-900' : 'text-slate-200 hover:bg-slate-600 hover:text-amber-400'; ?>">Contact</a>
                 <a href="tel:+17403179570" class="mt-2 block w-full text-center px-4 py-3 rounded-md text-base font-medium bg-amber-500 text-slate-900 hover:bg-amber-600 transition-colors">
                    Call (740) 317-9570
                </a>
            </div>
        </div>
    </header>

    <main>
        
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

            menuButton.addEventListener('click', function () { 
                const isCurrentlyOpen = mobileMenu.classList.contains('menu-is-open');
                
                if (isCurrentlyOpen) {
                    closeMenu();
                } else {
                    mobileMenu.classList.add('menu-is-open');
                    this.classList.add('menu-button-open'); 
                    this.setAttribute('aria-expanded', 'true'); 
                }
            });

            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (mobileMenu.classList.contains('menu-is-open')) {
                        closeMenu();
                    }
                });
            });
        });
    </script>

