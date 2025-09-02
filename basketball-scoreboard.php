<?php
// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set page title
$page_title = 'Scoreboard Ref App';

// Include header
require_once 'includes/header.php';
?>

    <main>
        <section class="app-hero">
            <div class="container">
                <h2>Scoreboard Ref</h2>
                <p class="subtitle">A simple, intuitive basketball scoreboard app for coaches, referees, and fans.</p>
                <div class="app-badge">
                    <p>Coming Soon on the App Store</p>
                </div>
            </div>
        </section>

        <section class="app-features">
            <div class="container">
                <h3>Features</h3>
                <div class="features-list">
                    <div class="feature">
                        <h4>Easy Score Tracking</h4>
                        <p>Quick buttons for 1, 2, and 3-point scoring with large, easy-to-tap buttons.</p>
                    </div>
                    <div class="feature">
                        <h4>Period Management</h4>
                        <p>Simple plus/minus controls for period tracking. Perfect for any basketball game format.</p>
                    </div>
                    <div class="feature">
                        <h4>Game Events Log</h4>
                        <p>Detailed log with timestamps showing all scoring and period changes during the game.</p>
                    </div>
                    <div class="feature">
                        <h4>Mistake Correction</h4>
                        <p>Easy -1 button for correcting scoring errors quickly during fast-paced games.</p>
                    </div>
                    <div class="feature">
                        <h4>Team Name Editing</h4>
                        <p>Tap to edit team names anytime during the game.</p>
                    </div>
                    <div class="feature">
                        <h4>Dark Theme</h4>
                        <p>Dark theme optimized for game viewing with excellent contrast and readability.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="app-description">
            <div class="container">
                <h3>Perfect for Any Basketball Game</h3>
                <p>Whether you're coaching a youth league, refereeing a high school game, or just keeping score for a pickup game, this app makes it easy to track scores and game events.</p>
                
                <h3>Simple and Intuitive</h3>
                <p>No complicated setup or confusing menus. Just open the app and start scoring. The interface is designed to be used quickly during fast-paced basketball games.</p>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <h3>Get Ready to Score</h3>
                <p>The Scoreboard Ref app will be available soon on the iOS App Store.</p>
                <a href="support.php" class="cta-button">Support & FAQ</a>
            </div>
        </section>
    </main>

<?php 
// Include footer
require_once 'includes/footer.php'; 
?>
