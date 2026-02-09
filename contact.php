<?php
// contact.php - DEBUGGING VERSION

// --- PHP ERROR REPORTING FOR LOCAL DEBUGGING ---
// This code will force any PHP errors to be displayed on the screen.
// This is a diagnostic tool and should be removed before going live.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --- END OF DEBUGGING CODE ---


// Start session if not already started to handle messages
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$page_title = 'Contact Hilltop Welding & Maintenance - Plumbing & Welding';
$meta_description = 'Get in touch with Hilltop Welding and Maintenance LLC for a free quote on plumbing, hot water tank installation, sewer repair, gas line work, pipe welding, and fabrication services in Steubenville, OH and WV. Contact our team today!';

// --- FORM PROCESSING LOGIC ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once 'db_connect.php'; 

    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    $service = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    if (empty($name) || empty($email) || empty($message) || $email === false) {
        $_SESSION['form_error'] = "Please fill out all required fields with valid information.";
    } else {
        $sql = "INSERT INTO contacts (name, email, phone, service_interest, message) VALUES (?, ?, ?, ?, ?)";
        
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);
            
            if ($stmt->execute()) {
                $_SESSION['form_success'] = "Thank you, {$name}! Your message has been sent. We will get back to you shortly.";
            } else {
                $_SESSION['form_error'] = "Sorry, there was an error sending your message. Please try again later.";
                error_log("Contact Form DB Execute Error: " . $stmt->error);
            }
            $stmt->close();
        } else {
            $_SESSION['form_error'] = "Sorry, a database error occurred. Please contact us directly by phone.";
            error_log("Contact Form DB Prepare Error: " . $db->error);
        }
        $db->close();
    }
    
    header("Location: " . $_SERVER['PHP_SELF'] . "#contact-form-section");
    exit();
}

require_once 'header.php';
?>

<section class="bg-slate-700 text-white py-12 md:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold">Contact Us</h1>
        <p class="text-lg text-slate-300 mt-2">Your Plumbing & Welding Experts for Services in Ohio & West Virginia</p>
    </div>
</section>

<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-800 mb-6">Get in Touch Directly</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Contact the Hilltop team, your certified, licensed, and insured experts for professional plumbing and welding services in Ohio and West Virginia. We're happy to provide a free quote for your project.
                </p>
                <div class="space-y-6">
                    <!-- Contact Info Items -->
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-amber-500 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.308 1.154a11.034 11.034 0 005.37 5.37l1.153-2.308a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-700">Phone</h3>
                            <a href="tel:+17403179570" class="text-lg text-amber-600 hover:text-amber-700 transition-colors">(740) 317-9570</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-amber-500 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-700">Email</h3>
                            <a href="mailto:hilltopweldingandmaintenance@gmail.com" class="text-lg text-amber-600 hover:text-amber-700 transition-colors">hilltopweldingandmaintenance@gmail.com</a>
                        </div>
                    </div>
                     <div class="flex items-start">
                        <svg class="w-8 h-8 text-amber-500 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-700">Service Area</h3>
                            <p class="text-lg text-gray-600">Proudly Serving Steubenville, Weirton, Toronto, and the surrounding Ohio Valley region in Ohio & West Virginia.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-amber-500 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-700">Business Hours</h3>
                            <p class="text-lg text-gray-600">Monday - Friday: 7:00 AM - 5:00 PM</p>
                            <p class="text-lg text-gray-600">Saturday: By Appointment</p>
                            <p class="text-lg text-gray-600">Sunday: Closed</p>
                            <p class="text-md text-gray-500">24/7 Emergency services available.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact-form-section" class="bg-slate-50 p-8 rounded-lg shadow-xl scroll-mt-24">
                <h2 id="get-a-quote" class="text-2xl sm:text-3xl font-bold text-slate-800 mb-6">Send Us a Message</h2>
                <p class="text-gray-600 mb-6">Fill out the form below for inquiries about our plumbing, welding, or fabrication services. For urgent requests, please call us.</p>
                
                <?php
                if (isset($_SESSION['form_success'])) {
                    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">' . htmlspecialchars($_SESSION['form_success']) . '</div>';
                    unset($_SESSION['form_success']);
                }
                if (isset($_SESSION['form_error'])) {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">' . htmlspecialchars($_SESSION['form_error']) . '</div>';
                    unset($_SESSION['form_error']);
                }
                ?>

                <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#contact-form-section" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500">
                    </div>
                     <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number (Optional)</label>
                        <input type="tel" name="phone" id="phone" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500">
                    </div>
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700">Service of Interest</label>
                        <select id="service" name="service" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500">
                            <option>General Inquiry</option>
                            <option>Full Plumbing Services</option>
                            <option>Sewer Location & Repair</option>
                            <option>Pipe Welding & Fabrication</option>
                            <option>Hot Water Tanks</option>
                            <option>Gas Lines</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-amber-500 focus:border-amber-500"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-slate-900 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>
