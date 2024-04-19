<!DOCTYPE html>
<html>
<head>
    <title>Gamejam Stream</title>
    <style>
        body {
            background-image: url("Slike/mainPhoto.png");
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Disable scrolling */
        }

        /* Center the iframe */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Make the container fill the viewport height */
        }

        /* Optional: Style the embedded Twitch player */
        .iframe-container {
            width: 80%;
            height: 80vh;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="index.php">Domov</a>
    <a class="navadn" href="team.php">Ustvari ekipo</a>
    <a class="navadn" href="stream.php">Stream</a>
    <a href="http://ers.scv.si" target="_blank">
        <img class="povecava" src="Slike/scv.png" alt="Logo" height="40">
    </a>
</header>
    <div class="center-container">
        <!-- Paste the Twitch embed code here -->
        <div class="iframe-container">
            <iframe src="https://player.twitch.tv/?channel=gamejam2024&parent=gamejam.scv.si" frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
        </div>
    </div>
</body>
</html>
