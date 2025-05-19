<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Downloads</title>

    <!-- Main CSS first -->
    <link rel="stylesheet" href="css/styles.css">
    
    
    
    
</head>
<body>
    <!-- Include navbar from external file -->
    <?php include 'navbar/navbar.php'; ?>

    <!-- Main content area -->
    <main class="container">

        <!-- Red  Dead Section -->
        <section class="hero-section">
            <?php include 'components/red-dead/red-dead.php'; ?>  
        </section>


        <!-- Featured downloads Section -->
        <section class="hero-section">
            <?php include 'components/featured-downloads/featured-downloads.php'; ?>  
        </section>


        <!-- Featured downloads Section -->
        <section class="hero-section">
            <?php include 'components/pc-games/pc-games.php'; ?>  
        </section>


         <!-- Featured downloads Section -->
        <section class="hero-section">
            <?php include 'components/mobile-games/mobile-games.php'; ?>  
        </section>
       
        

    </main>

    <!-- Include footer from external file -->
    <?php include 'footer/footer.php'; ?>

    <script src="js/scripts.js"></script>
</body>
</html>