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
            height: calc(100vh - 80px); /* Adjusted height to account for navbar */
            margin-top: 80px; /* Added margin to move the content below the navbar */
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
        .navbar {
            overflow: hidden;
            background-color: #432980; /* Purple background */
            position: fixed; /* Fixed position to keep it at the top */
            width: 100%; /* Full width */
            top: 0; /* Stick to the top */
            z-index: 999; /* Ensure it appears above other content */
        }

        .navadn {
            float: left;
            color: #ccc; /* Grey text */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px; /* Adjust font size */
            font-weight: bold; /* Make text bold */
            letter-spacing: 1px; /* Add letter spacing for clarity */
            text-transform: uppercase; /* Convert text to uppercase */
            transition: color 0.3s ease, background-color 0.3s ease; /* Smooth transition */
        }

        .navadn:hover {
            color: #fff; /* White text on hover */
            background-color: #5d479c; /* Lighter purple background on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow on hover */
            transform: translateY(-2px); /* Move text slightly up on hover */
        }

        .navbar img {
            float: right;
            padding: 10px;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .navbar img:hover {
            transform: scale(1.1); /* Increase size on hover */
        }
        header {
            padding: 20px;
            background-color: #432980; /* Slightly lighter purple for header */
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
