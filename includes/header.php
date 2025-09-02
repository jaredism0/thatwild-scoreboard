<?php
// Ensure page_title is set
if (!isset($page_title)) {
    $page_title = 'ThatWild';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?> - Scoreboard Ref App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-container">
                <h1>ThatWild</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="basketball-scoreboard.php">Scoreboard Ref</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li><a href="privacy.php">Privacy</a></li>
                </ul>
            </div>
        </nav>
    </header>
