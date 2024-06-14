<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayubo - Terms and Conditions</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/terms-and-conditions-styles.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/footer.css">
    </head>

    <body>
        <header>
            <div class="header">
                <img src="http://localhost/iwt/src/images/logo.png" class="logo">
                <?php

                // Check if the user is logged in
                if (isset($_SESSION['UserID'])) {
                    // Display the user profile code
                    echo '
                        <div class="user-profile">
                            <img src="http://localhost/iwt/src/images/profile.png" alt="User Profile Picture" class="profile-picture">
                            <h1 class="username">
                                <a href="http://localhost/iwt/src/user-profile.php?userID='.$_SESSION['UserID'].'">
                                '.$_SESSION['Fname'].' '.$_SESSION['Lname'].
                                '</a>
                            </h1>
                        </div>';
                } else {
                    // Display the login and sign up buttons
                    echo '
                        <div class="button-container">
                            <button class="login-button">
                            <a href="http://localhost/iwt/src/login.php">Login</a>
                            </button>
                            <button class="signup-button">
                            <a href="http://localhost/iwt/src/signup.php">Sign Up</a>
                            </button>
                        </div>';
                }
?>

            </div>
                <ul class="navbar">                
                    <li><a href="http://localhost/iwt/src/home.php">Home</a></li>
                    <li><a href="http://localhost/iwt/src/diet-plan-page.php">Diet Plans</a></li>
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>

        <h1 class="topic1">Terms and Conditions</h1>

        <div class="container">
            <p>Welcome to Ayubo, a diet planning with health check-up website. Before using our services, please read these Terms and Conditions carefully. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions:</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing and using the Ayubo website, you acknowledge that you have read, understood, and accepted these Terms and Conditions. If you do not agree to these terms, please refrain from using our services.</p>

            <h2>2. User Responsibilities</h2>
            <p>As a user of Ayubo, you are solely responsible for your actions and the content you upload or share on our platform. You agree to use our services in compliance with applicable laws and regulations.</p>

            <h2>3. Privacy Policy</h2>
            <p>Our Privacy Policy governs the collection, use, and disclosure of personal information provided by users. By using Ayubo, you consent to the collection and processing of your personal information as outlined in our Privacy Policy.</p>

            <h2>4. User Accounts</h2>
            <p>To access certain features of Ayubo, you may be required to create a user account. You are responsible for maintaining the confidentiality of your account information and for any activities that occur under your account.</p>

            <h2>5. Health Disclaimer</h2>
            <p>Ayubo provides general information related to diet planning and health check-ups. However, we do not provide medical advice or diagnose any health conditions. It is important to consult with a healthcare professional before making any dietary or lifestyle changes.</p>

            <h2>6. Intellectual Property</h2>
            <p>All content and materials on Ayubo, including text, graphics, logos, images, and software, are protected by intellectual property laws and are the property of Ayubo or its licensors. You may not use, modify, reproduce, or distribute any content from our website without prior written permission.</p>

            <h2>7. Limitation of Liability</h2>
            <p>Ayubo shall not be held liable for any damages, losses, or injuries arising from the use of our services. We strive to provide accurate and reliable information, but we do not guarantee the completeness or accuracy of the content on our website.</p>

            <h2>8. Modifications</h2>
            <p>Ayubo reserves the right to modify, suspend, or discontinue any aspect of our services at any time without prior notice. We may also update these Terms and Conditions periodically, and it is your responsibility to review them regularly.</p>

            <h2>9. Governing Law</h2>
            <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of Sri Lanka, without regard to its conflict of law principles.</p>

            <h2>10. Contact Us</h2>
            <p>If you have any questions or concerns regarding these Terms and Conditions, please contact us at <a href="mailto:contact@ayubo.com">contact@ayubo.com</a> or through our website's contact form.</p>

            
            <p>By using Ayubo, you agree to abide by these Terms and Conditions. If you do not agree with any of these terms, please refrain from using our website and services. Thank you for choosing Ayubo, and we hope you have a positive and healthy experience with us.</p>
        </div>

        <h1 class="topic2">Privacy Policy</h1>

        <div class="container">
            <p>At Ayubo, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, and disclose the information you provide to us when using our diet planning with health check-up website. By accessing or using our services, you consent to the collection, use, and disclosure of your personal information as outlined in this Privacy Policy.</p>

            <h2>1. Information We Collect</h2>
            <p>We may collect personal information from you when you create an account, use our services, complete forms, or interact with our website. This may include your name, email address, contact information, health-related data, and any other information you voluntarily provide.</p>

            <h2>2. Use of Information</h2>
            <p>We use the information we collect to provide and improve our services, personalize your experience, communicate with you, process payments, and deliver relevant content and recommendations based on your health goals and preferences.</p>

            <h2>3. Data Security</h2>
            <p>We take appropriate measures to protect your personal information from unauthorized access, loss, misuse, or alteration. We use industry-standard security protocols to ensure the security of your data, but we cannot guarantee absolute security.</p>

            <h2>4. Third-Party Services</h2>
            <p>We may use third-party services, such as analytics tools and payment processors, to enhance our website and services. These third parties may collect and process your personal information in accordance with their own privacy policies.</p>

            <h2>5. Cookies and Tracking Technologies</h2>
            <p>We use cookies and similar tracking technologies to enhance your browsing experience and collect information about how you interact with our website. You can control the use of cookies through your browser settings.</p>

            <h2>6. Contact Us</h2>
            <p>If you have any questions or concerns about our Privacy Policy or the way we handle your personal information, please contact us at <a href="mailto:contact@ayubo.com">contact@ayubo.com</a> or through our website's contact form.</p>

            
            <p>By using Ayubo, you consent to the collection, use, and disclosure of your personal information as described in this Privacy Policy. If you do not agree with any of the terms outlined in this policy, please refrain from using our website and services. Thank you for trusting Ayubo with your personal information, and we are committed to protecting your privacy.</p>
        </div>

        <footer class="Footer">
            <div class="foot1">
                    <div class="f1">
                            <div >
                                <img src="http://localhost/iwt/src/images/logo.png" alt="The Logo" class="fimg">
                            </div>
                            <div>

                            </div>
                    </div>
                    <div class="f2">
                        <p>Quick Links</p>
                        <ul>
                            <li><a href="http://localhost/iwt/src/diet-plan-page.php">&gt;&gt;Generate Diet Plans</a></li>
                            <li><a href="http://localhost/iwt/src/packages.php">&gt;&gt;Schedule Health Checkups</a></li>
                            <li><a href="http://localhost/iwt/src/contact-us.php">&gt;&gt;Help & Support</a></li>
                            <li><a href="http://localhost/iwt/src/terms-and-conditions.php">&gt;&gt;Terms & Conditions</a></li>
                        
                    </div>
                <div class="f3">
                    <h3>Contact Info<h3>
                        <ul>
                            <li>Phone : 011 2255 255</li>
                            <li>E-Mail : ayubodphc@gmail.com</li>
                            <li>Facebook : AYUBO</li>
                            <li>Instagram : _ayubo_</li>
                        </ul>
                </div>
            </div>
                <div class="foot2">
                    <p>&copy;2023 MLB_11.1_03 All Rights Recieved.</p>
                </div>
        
    
        </footer>
    </body>
</html>