<?php
$youtube_id = "VQRLujxTm3c"; // Your GTA VI trailer ID
$autoplay = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA VI Official Trailer | Rockstar Games</title>
    <style>
        body {
            background-color: #000;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        
        .trailer-wrapper {
            width: 100%;
            max-width: 800px; /* Reduced from 1200px */
            margin: 20px auto;
            text-align: center;
        }
        
        .rockstar-logo {
            width: 250px; /* Slightly smaller logo */
            margin-bottom: 20px;
        }
        
        .trailer-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            width: 90%; /* Smaller width */
            margin: 0 auto; /* Centered */
            border: 3px solid #fcb637;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(252, 182, 55, 0.3);
        }
        
        .trailer-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        h2 {
            color: #fcb637;
            margin-top: 25px;
            font-size: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .trailer-wrapper {
                max-width: 95%;
            }
            
            .rockstar-logo {
                width: 180px;
            }
            
            .trailer-container {
                width: 100%; /* Full width on mobile */
            }
            
            h2 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="trailer-wrapper">
        <img src="../assets/rockstar2.svg" alt="Rockstar Games" class="rockstar-logo">
        
        <div class="trailer-container">
            <iframe 
                src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?<?php 
                    echo $autoplay ? 'autoplay=1&mute=1&' : '';
                ?>rel=0&controls=1&showinfo=0" 
                title="GTA VI Official Trailer"
                allowfullscreen>
            </iframe>
        </div>
        
        <h2>GRAND THEFT AUTO VI - OFFICIAL TRAILER</h2>
    </div>
</body>
</html>