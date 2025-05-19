<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rockstar_gaming";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT image, title, manufacturing_date, description FROM game_card ORDER BY manufacturing_date DESC";
$result = $conn->query($sql);
?>

<link rel="stylesheet" href="components/newswire/Newswire.css">

<div class="newswire-container">
    <h1 class="newswire-header">Newswire</h1>

    <div class="cards-wrapper">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["title"]) . '" class="card-image">';
                echo '<div class="card-content">';
                echo '<div class="card-title">';
                echo '<h3>' . htmlspecialchars($row["title"]) . '</h3>';
                echo '<span class="card-date">' . date("F j, Y", strtotime($row["manufacturing_date"])) . '</span>';
                echo '</div>';
                echo '<p class="card-description">' . htmlspecialchars($row["description"]) . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p style="color: #fff; width: 100%;">No news items found.</p>';
        }
        $conn->close();
        ?>
    </div>
</div>
