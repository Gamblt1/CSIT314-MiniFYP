<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald - Connect Fundraisers & Donees</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>McDonald Fundraising Event</h1>
        <p>Connecting Fundraisers to Donees & Donors</p>
    </header>
    
    <nav>
        <div class="nav-container">
            <div class="nav-buttons">
                <button onclick="window.location.href='index.php?action=home'">Home</button>
                <button onclick="window.location.href='index.php?action=fundraisers'">Fundraisers</button>
                <button onclick="window.location.href='index.php?action=donees'">Donees</button>
                <button id="createBtn">Start a Fundraiser</button>
            </div>
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <div class="user-info">
                    <span class="username">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    
    <div class="container">