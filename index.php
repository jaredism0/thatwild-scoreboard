<?php
$page_title = 'Home';
include 'includes/header.php';
?>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Basketball Scoreboard App</h2>
                <p>A simple, intuitive basketball scoreboard app for coaches, referees, and fans.</p>
                <a href="basketball-scoreboard.php" class="cta-button">Learn More</a>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h3>Key Features</h3>
                <div class="feature-grid">
                    <div class="feature">
                        <h4>Easy Score Tracking</h4>
                        <p>Quick buttons for 1, 2, and 3-point scoring</p>
                    </div>
                    <div class="feature">
                        <h4>Period Management</h4>
                        <p>Plus/minus controls for period tracking</p>
                    </div>
                    <div class="feature">
                        <h4>Game Events Log</h4>
                        <p>Detailed log with timestamps</p>
                    </div>
                    <div class="feature">
                        <h4>Mistake Correction</h4>
                        <p>Easy -1 button for scoring errors</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>
