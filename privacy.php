<?php
// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set page title
$page_title = 'Privacy Policy';

// Include header
require_once 'includes/header.php';
?>

    <main>
        <section class="privacy-content">
            <div class="container">
                <h2>Privacy Policy</h2>
                <p class="last-updated">Last updated: <?php echo date('F j, Y'); ?></p>
                
                <div class="privacy-section">
                    <h3>Information We Collect</h3>
                    <p>ThatWild Scoreboard Ref App does not collect any personal information from users. The app operates entirely on your device and does not transmit any data to external servers.</p>
                </div>

                <div class="privacy-section">
                    <h3>Local Data Storage</h3>
                    <p>All game data, including scores, team names, and game events, are stored locally on your device. This information is not shared with ThatWild or any third parties.</p>
                </div>

                <div class="privacy-section">
                    <h3>No Analytics or Tracking</h3>
                    <p>We do not use analytics tools, cookies, or any tracking mechanisms to monitor your usage of the app. Your privacy is our priority.</p>
                </div>

                <div class="privacy-section">
                    <h3>Third-Party Services</h3>
                    <p>The app does not integrate with any third-party services that would collect your personal information.</p>
                </div>

                <div class="privacy-section">
                    <h3>Children's Privacy</h3>
                    <p>Our app is designed to be safe for users of all ages. We do not knowingly collect personal information from children under 13.</p>
                </div>

                <div class="privacy-section">
                    <h3>Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy, please contact us at: <a href="mailto:privacy@thatwild.com">privacy@thatwild.com</a></p>
                </div>

                <div class="privacy-section">
                    <h3>Changes to This Policy</h3>
                    <p>We may update this Privacy Policy from time to time. We will notify users of any material changes by posting the new Privacy Policy on this page.</p>
                </div>
            </div>
        </section>
    </main>

<?php 
// Include footer
require_once 'includes/footer.php'; 
?>
