<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija</title>
    <style>
        body {
            font-family: 'SansSerif', Verdana;
            background-color: #2e1a4a;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
            padding: 0;
        }
        .galerija-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 87vh;
            position: relative; /* Add relative positioning */
        }
        .galerija-img {
            max-width: 85%;
            max-height: 85%;
            transition: transform 0.5s ease;
            cursor: pointer;
        }
        .galerija-img:hover {
            transform: scale(1.05);
        }
        .navbar {
            overflow: hidden;
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
        }
        header {
            padding: 20px;
            background-color: #432980; /* Slightly lighter purple for header */
            box-shadow: 0 5px 5px 0px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="home.php">Domov</a>
    <a class="navadn" href="team.php">Ustvari ekipo</a>
    <a class="navadn" href="galerija.php">Galerija</a>
    <a class="navadn" href="stream.php">Stream</a>
    <a href="http://ers.scv.si" target="_blank">
        <img class="povecava" src="Slike/scv.png" alt="Logo" height="40">
    </a>
</header>
<div class="galerija-container">
    <?php
    $imageCount = 15;
    $currentImage = isset($_GET['img']) ? intval($_GET['img']) : 1;

    // Display the current image without href
    echo "<img id='galerija-img' class='galerija-img' src='Slike/Photo ($currentImage).jpg' alt='Photo $currentImage'>";

    ?>
</div>
<script>
    // Function to navigate to the next image
    function nextImage() {
        var currentImage = <?php echo $currentImage; ?>;
        var imageCount = <?php echo $imageCount; ?>;
        var nextImage = (currentImage % imageCount) + 1;
        window.location.href = "galerija.php?img=" + nextImage;
    }

    // Add event listeners for left and right sides of the image container
    document.getElementById('galerija-img').addEventListener('click', function(event) {
        // Calculate the click position relative to the image container
        var rect = event.currentTarget.getBoundingClientRect();
        var x = event.clientX - rect.left;

        nextImage();
    });

    setInterval(function() {
        nextImage();
    }, 7000);
</script>
</body>
</html>