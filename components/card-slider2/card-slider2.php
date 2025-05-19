<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rockstar_gaming";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image, title, description FROM game_card_2";
$result = $conn->query($sql);
?>

<!-- Add a specific wrapper with unique ID -->
<div id="gta-slider-component" class="card-slider-wrapper">
    <div class="slider-header">
        <h2 class="slider-title">Videos from Red Dead Online</h2>
        <div class="slider-nav">
            <button class="slider-arrow prev-arrow">&lt;</button>
            <button class="slider-arrow next-arrow">&gt;</button>
        </div>
    </div>
    
    <div class="slider-container">
        <div class="slider-inner">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="game-card">';
                    echo '  <div class="card-image">';
                    echo '    <img src="' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["title"]) . '">';
                    echo '  </div>';
                    echo '  <div class="card-content">';
                    echo '    <h3 class="game-title">' . htmlspecialchars($row["title"]) . '</h3>';
                    echo '    <p class="game-description">' . htmlspecialchars($row["description"]) . '</p>';
                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no-videos">No videos found</p>';
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>

<!-- Load component-specific CSS -->


<!-- Load component-specific JS -->
<script src="components/card-slider2/card-slider2.js"></script>