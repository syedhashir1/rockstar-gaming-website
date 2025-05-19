<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Rockstar Clone</title>
  <link rel="stylesheet" href="components/hero/Hero.css">
 
</head>
<body>
  <?php
    $slides = [
      [
        "image" => "assets/gta6-2.png",
        "title" => "Grand Theft Auto VI",
        "text" => "Watch Trailer 2 Now"
      ],
      [
        "image" => "assets/slides2.png",
        "title" => "Grand Theft Auto V ",
        "text" => "Experience the Best Version of GTAV and GTA Online on PC with GTAV Enhanced"
      ],
      [
        "image" => "assets/slides3.png",
        "title" => "Red Dead Redemption",
        "text" => "Now on PC"
      ]
    ];
  ?>

  <div class="slideshow">
    <div class="slide-container">
      <img id="slide-image" src="<?php echo $slides[0]['image']; ?>" alt="Slide Image">
      <div class="slide-text">
        <h1 id="slide-title"><?php echo $slides[0]['title']; ?></h1>
        <p id="slide-description"><?php echo $slides[0]['text']; ?></p>
        <button class="learn-more" onclick="location.href='trailer/gtaVI.php'">LEARN MORE</button>
        <div class="dots">
          <?php foreach ($slides as $index => $slide): ?>
            <span class="dot" onclick="changeSlide(<?php echo $index; ?>)"></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    const slides = <?php echo json_encode($slides); ?>;
    function changeSlide(index) {
      document.getElementById("slide-image").src = slides[index].image;
      document.getElementById("slide-title").innerText = slides[index].title;
      document.getElementById("slide-description").innerText = slides[index].text;

      document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
      document.querySelectorAll('.dot')[index].classList.add('active');
    }
    // Activate the first dot by default  
    document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll('.dot')[0].classList.add('active');
    });
  </script>
</body>
</html>
