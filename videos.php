<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar</title>
    <!-- Load all CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="components/hero/hero.css">
    <link rel="stylesheet" href="components/videos/video.css">
    <!-- Only need to include card-slider.css once since both use same styling -->
    <link rel="stylesheet" href="components/card-slider1/card-slider.css">
    
</head>
<body>
    <?php include 'navbar/navbar.php'; ?>

    <main class="container">
        <?php include 'components/hero/Hero.php'; ?>
        <?php include 'components/videos/Videos.php'; ?>
        
        <!-- First Card Slider -->
        <?php include 'components/card-slider1/card-slider.php'; ?>
        
        <!-- Second Card Slider -->
        <?php include 'components/card-slider2/card-slider2.php'; ?>

         <!-- Third Card Slider -->
        <?php include 'components/card-slider3/card-slider3.php'; ?>
    </main>

    <?php include 'footer/footer.php'; ?>
    
    <!-- Scripts -->
    <script src="components/card-slider1/card-slider.js"></script>
     <script src="components/card-slider2/card-slider2.js"></script>
    <!-- No need for separate JS file since we included it inline in card-slider2.php -->
    <script src="js/scripts.js"></script>
</body>
</html>