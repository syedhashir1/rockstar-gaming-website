<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar/navbar.php'; ?>
    
    <main>
        <!-- Your main content goes here -->
        <h1>Welcome to my website</h1>
        <p>This is the home page content.</p>
    </main>
    
    <?php include 'footer/footer.php'; ?>
    
    <script src="js/script.js"></script>
</body>
</html>


<?php
// Database connection settings
$host = "localhost";
$user = "root";
$password = "";
$database = "rockstar_gaming"; // <-- Replace with your actual DB name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch game cards
$sql = "SELECT * FROM game_card";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Cards</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .card { background: white; border-radius: 8px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); max-width: 600px; }
        .card img { max-width: 100%; height: auto; border-radius: 6px; }
        .card h2 { margin-top: 10px; }
        .card small { color: #888; }
    </style>
</head>
<body>

<h1>Game Cards</h1>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='" . $row["image"] . "' alt='Game Image'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<small>Manufactured on: " . $row["manufacturing_date"] . "</small>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No game cards found.</p>";
}
$conn->close();
?>

</body>
</html>
