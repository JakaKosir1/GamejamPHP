<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameJam Homepage</title>
    <style>
        body {
            background-color: #2e1a4a; /* Dark purple background */
            color: #fff; /* White text */
            font-family: 'SansSerif', Verdana;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            padding: 20px;
            background-color: #432980; /* Slightly lighter purple for header */
        }

        h1 {
            margin: 0;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
        }

        .create-team-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5d479c; /* Lighter purple for button */
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .create-team-btn:hover {
            background-color: #7b6aae; /* Darker purple on hover */
        }
        .navbar {
            overflow: hidden;
        }

        .navbar .navadn {
            float: left;
            display: block;
            color: #ccc; /* Grey text */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .navbar .navadn:hover {
            color: #888; /* Dark grey on hover */
        }

        .navbar img {
            float: right;
            padding: 10px;
        }
        .mainPhoto{
            box-shadow: 0 10px 10px 0px rgba(0,0,0,0.2);
        }

        /* New CSS for positioning */
        h2 {
            color: #ff00ff; /* Set h2 color to pink */
            font-size: 45px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        .about-section {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            margin-top: 50px; /* Adjust as needed */
        }

        .about-section-div {
            width: 50%; /* Adjust width as needed */
            padding: 0 20px; /* Add padding to the sides */
        }

        .about-section-title {
        font-size: 27px; /* Set font size to make it as big as h4 */
        text-align: center; /* Align text to the center */
        color: #ff00ff; /* Set text color to pink */
        }

        .landing-page {
            width: 100%; /* Ensure the image takes full width */
        }
        .gaudic {
            max-width: 80%; /* Set maximum width for the image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .sponz:hover {
        transform: scale(1.1); /* Increase size by 10% */
        transition: transform 0.3s ease; /* Smooth transition */
        }
        .povecava:hover {
            transform: scale(1.1); /* Increase size by 10% */
            transition: transform 0.3s ease; /* Smooth transition */
        }
        .countdown {
            font-size: 100px;
            color: white; /* Pink color */
        }
    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="home.php">Home</a>
    <a class="navadn" href="team.php">Create Team</a>
    <a href="http://ers.scv.si" target="_blank">
        <img class="povecava" src="slike/scv.png" alt="Logo" height="40">
    </a>
</header>

<section>
    <img src="Slike/mainPhoto.png" alt="Main Photo" width="100%" class="mainPhoto">
    <br><br><br>
    <h2>O DOGODKU</h2>
    <div class="about-section">
        <div class="about-section-div">
            <p class="about-section-title">Kaj je ERŠ Gamejam?</p>
            <p class="about-section-text">ERŠ Gamejam je dogodek, ki ga organizirajo dijaki Elektro in računalniške šole v Velenju. Dogodek je namenjen vsem, ki jih zanima računalništvo predvsem pa izdelovanje računalniških iger. Na dogodku se bodo odvijale različne aktivnosti, kot so tekmovanja za izdelovanje računalniških iger, VR, PS5 ipd.</p>
            <p class="about-section-title">Kdaj in kje?</p>
            <p class="about-section-text">ERŠ Gamejam se bo odvijal v prostorih restavracije Gaudeamus v Velenju, in sicer 29. In 30. marca 2024. Dogodek se bo začel ob 14:00 in končal naslednji dan ob 15:00.</p>
            <p class="about-section-title">Kaj potrebujem?</p>
            <p class="about-section-text">Za udeležbo na dogodku potrebujete računalnik, monitor, tipkovnico, miško in slušalke, ali pa samo laptop in slušalke. Do neke mere lahko računalnike priskrbi tudi šola, vendar je potrebno to navesti na mail "MAIL EN". Priporočamo tudi, da s seboj prinesete kakšen podaljšek in internetni kabel, saj je električnih vtičnic v šoli malo.</p>
        </div>

        <div class="about-section-div">
            <img class="gaudic" src="Slike/gaudic.png">
        </div>
    </div>
    <br>
    <h2>ČAS DO DOGODKA</h2>
    <br><br>
    <div class="countdown" id="countdown"></div>
    <br><br><br>
    <h2>SPONZORJI</h2>
    <div class="sponz-section-div">
        <a href="https://trickytribe.com" target="_blank">
            <img class="sponz" src="Slike/sponz1.png">
        </a>
    </div>
    <br><br>
</section>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 29, 2024 14:00:00").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {

        // Get the current date and time
        var now = new Date().getTime();

        // Calculate the distance between now and the countdown date
        var distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown in the element with id="countdown"
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>
