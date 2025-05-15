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
      <i class="fas fa-bars mobile-menu-icon"></i>
      <img src="assets/logo_Rockstar.png"  width="100" alt="Rockstar Logo" class="logo">
      <img src="assets/user-icon.svg" alt="Profile" class="mobile-profile-icon">
    </div>

    <div class="navbar-desktop">
      <div class="nav-underline" id="navUnderline"></div>

      <div class="navbar-left">
        <img src="./logo_Rockstar.png" alt="Rockstar Logo" class="logo">
      </div>

      <ul class="navbar-center">
        <li class="nav-item dropdown">
          Games <i class="hgi hgi-stroke hgi-arrow-down-01 caret"></i>
        </li>
        <li class="nav-item">Newswire</li>
        <li class="nav-item">Videos</li>
        <li class="nav-item">Downloads</li>
        <li class="nav-item">Store <i class="fa-solid fa-arrow-up-right-from-square icon-right"></i></li>
        <li class="nav-item">Support <i class="fa-solid fa-arrow-up-right-from-square icon-right"></i></li>
      </ul>

      <div class="navbar-right">
        <button class="launcher-button">GET LAUNCHER</button>
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        <img src="./a29e26aa160e7be7e845708c335b3c39.svg" alt="" class="profile-icon">
      </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
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

    <!-- Dropdown -->
    <div class="games-dropdown" id="gamesDropdown">
      <div class="dropdown-content">
        <h2>Featured Games</h2>
        <div class="games-list">
          <div class="game-card"><img src="assets/gta6.jpg" alt="GTA VI"></div>
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