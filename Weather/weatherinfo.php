<?php
    // Start session
    session_start();

    // // Include necessary files
    // include 'config.php'; // Database configuration (if needed)
    // include 'weather_api.php'; // Include weather API handling script

    // Get latitude and longitude from request
    $lat = isset($_GET['lat']) ? $_GET['lat'] : null;
    $lon = isset($_GET['lon']) ? $_GET['lon'] : null;

    // Fetch weather data
    $weatherData = getWeatherData($lat, $lon);
    $temperature = $weatherData['main']['temp'];
    $weatherCondition = strtolower($weatherData['weather'][0]['description']);

    // Determine farming techniques based on weather
    $farmingTechniques = [];
    if (strpos($weatherCondition, 'rain') !== false) {
        $farmingTechniques = [
            "Use rainwater harvesting techniques to store water.",
            "Ensure proper drainage to prevent waterlogging.",
            "Plant water-resistant crops such as rice and maize."
        ];
    } elseif ($temperature > 30) {
        $farmingTechniques = [
            "Implement drip irrigation to conserve water.",
            "Use mulching techniques to retain soil moisture.",
            "Choose heat-resistant crops like sorghum and millet."
        ];
    } else {
        $farmingTechniques = [
            "Adopt organic farming techniques to improve soil fertility.",
            "Rotate crops to prevent soil depletion.",
            "Utilize greenhouse farming for better yield." 
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather-based Farming Techniques</title>
    <link rel="stylesheet" href="assest/css/style.css">
    <script type="module" src="./assest/js/app.js"></script>
    <script type="module" src="./assest/js/route.js"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.php" class="logo">Weatherio</a>
        </div>
    </header>
    
    <main class="container">
        <h2>Farming Techniques for Current Weather</h2>
        <p>Temperature: <?php echo $temperature; ?>°C</p>
        <p>Weather Condition: <?php echo ucfirst($weatherCondition); ?></p>
        <h3>Recommended Techniques:</h3>
        <ul>
            <?php foreach ($farmingTechniques as $technique) {
                echo "<li>$technique</li>";
            } ?>
        </ul>
    </main>
</body>
</html>
