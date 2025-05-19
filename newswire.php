<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    
     <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <!-- Include navbar from external file -->
    <?php include 'navbar/navbar.php'; ?>

    
    <div>
    <!-- The hero section Slideshow ! -->
    <?php include 'components/hero/Hero.php'; ?>  </div>
    
   


    
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar Gaming - Newswire</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #000;
            padding: 20px;
        }
        
        .newswire-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .newswire-header {
            font-size: 28px;
            font-weight: bold;
            margin: 40px 0;
            color: #fff;
        }
        
        .cards-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
        }
        
        .card {
            background-color: #000;
            height: 420px; /* optional fixed height for consistency */
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease;
            width: calc(30% - 17px); /* 3 cards per row accounting for gap */
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-image {
            width: 90%;
            height: 250px;
            object-fit: cover;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .card-title h3 {
            font-size: 18px;
            color: #fff;
            font-weight: 600;
        }
        
        .card-date {
            font-size: 14px;
            color: #aaa;
        }
        
        .card-description {
            font-size: 14px;
            color: #fff;
            line-height: 1.5;
            opacity: 0.9;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .card {
                width: calc(50% - 13px); /* 2 cards per row */
            }
        }

        @media (max-width: 768px) {
            .card {
                width: 100%; /* 1 card per row */
            }
            
            .newswire-header {
                font-size: 24px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="newswire-container">
        <h1 class="newswire-header">Newswire</h1>
        
        <div class="cards-wrapper">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
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
</body>
</html>
    
    




    <!-- Include footer from external file -->
    <?php include 'footer/footer.php'; ?>

    
    <script src="js/scripts.js"></script>
</body>
</html>