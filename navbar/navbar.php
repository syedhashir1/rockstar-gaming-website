<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rockstar Navbar Clone</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="navbar/navbar.css">
  
</head>
<body>
  <nav class="navbar">
    <div class="navbar-mobile">
      <i class="fas fa-bars mobile-menu-icon"></i> <!-- Hamburger icon -->
      <img src="assets/logo_Rockstar.png" alt="Rockstar Logo" class="logo">
      <img src="assets/user-icon.svg" alt="Profile" class="mobile-profile-icon">
    </div>

    <div class="navbar-desktop">
      <div class="nav-underline" id="navUnderline"></div>

      <div class="navbar-left">
        <a href="index.php">
        <img src="assets/logo_Rockstar.png" alt="Rockstar Logo" class="logo"> </a>
      </div>

      <ul class="navbar-center">
  <li class="nav-item dropdown">
    Games <i class="hgi hgi-stroke hgi-arrow-down-01 caret"></i> <!--  custom icon classes -->
  </li>
  <li class="nav-item"><a href="newswire.php" style="color: white !important; text-decoration: none !important;">Newswire</a></li>
  <li class="nav-item"><a href="videos.php" style="color: white !important; text-decoration: none !important;">Videos</a></li>
  <li class="nav-item"><a href="downloads.php" style="color: white !important; text-decoration: none !important;">Downloads</a></li>
  <li class="nav-item"><a href="https://store.rockstargames.com/?_gl=1*1waud1n*_gcl_au*MTQ3Njg2ODY2Ni4xNzQ3NTg5Mzg4*_ga*MTU3NDcwNjkxNy4xNzQ2NzMyMTMw*_ga_PJQ2JYZDQC*czE3NDc2MDY2MjckbzMyJGcxJHQxNzQ3NjA3NzY5JGowJGwwJGgw" style="color: white !important; text-decoration: none !important;">Store <i class="fa-solid fa-arrow-up-right-from-square icon-right"></i></a></li>
  <li class="nav-item"><a href="support.php" style="color: white !important; text-decoration: none !important;">Support <i class="fa-solid fa-arrow-up-right-from-square icon-right"></i></a></li>
</ul>




      <div class="navbar-right">
        <button class="launcher-button">GET LAUNCHER</button>
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        <a href="signin.php"><img src="assets/user-icon.svg" alt="Profile" class="profile-icon"></a>

      </div>
    </div>

    <div class="mobile-menu" id="mobileMenu">
      <ul>
        <li>Games</li>
        <li>Newswire</li>
        <li>Videos</li>
        <li>Downloads</li>
        <li>Store</li>
        <li>Support</li>
      </ul>
    </div>

    <div class="games-dropdown" id="gamesDropdown"> <!--  for Desktop view -->
      <div class="dropdown-content">
        <h2>Featured Games</h2>
        <div class="games-list">
          <a href="./trailer/gtaVI.php">
          <div class="game-card"><img src="assets/gta6.jpg" alt="GTA VI"> </a> </div>
          <div class="game-card"><img src="assets/gta5.jpg" alt="GTA V"></div>
          <div class="game-card"><img src="assets/gtaonline.jpg" alt="GTA Online"></div>
          <div class="game-card"><img src="assets/reddead2.jpg" alt="Red Dead Redemption 2"></div>
          <div class="game-card"><img src="assets/reddead.jpg" alt="Red Dead Redemption"></div>
        </div>
      </div>
    </div>
  </nav>

    

  <script src="navbar/navbar.js"></script>
</body>
</html>
