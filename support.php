<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar</title>

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

      <!-- Newswire Section -->
        <section class="newswire-section">
            <?php include 'components/support/support.php'; ?>
        </section>

        


    </main>

    <!-- Include footer from external file -->
    <?php include 'footer/footer.php'; ?>

    <script src="js/scripts.js"></script>
</body>
</html>