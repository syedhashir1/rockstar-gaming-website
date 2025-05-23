<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar</title>
      <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">

    <!-- Main CSS first -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Component CSS -->
    <link rel="stylesheet" href="components/newswire/Newswire.css">
    <link rel="stylesheet" href="components/featured-games/Featured.css">
</head>
<body>
    <!-- Include navbar from external file -->
    <?php include 'navbar/navbar.php'; ?>

    <!-- Main content area -->
    <main class="container">

        <!-- Hero Section (Slideshow) -->
        <section class="hero-section">
            <?php include 'components/hero/Hero.php'; ?>  
        </section>

        <!-- Newswire Section -->
        <section class="newswire-section">
            <?php include 'components/newswire/Newswire.php'; ?>
        </section>

        <!-- Featured Games Section -->
        <section class="featured-games-section">
            <?php include 'components/featured-games/Featured.php'; ?>  
        </section>

    </main>

    <!-- Include footer from external file -->
    <?php include 'footer/footer.php'; ?>

    <script src="js/scripts.js"></script>
</body>
</html>