<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameJam Domača stran</title>
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
            background-color: #432980; /* Purple background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
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

        .mainPhoto {
            box-shadow: 0 10px 10px 0px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #ff00ff; /* Set h2 color to pink */
            font-size: 55px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }

        .about-section {
            display: flex;
            flex-direction: column; /* Align items in a column */
            align-items: center; /* Center the content horizontally */
            margin-top: 50px; /* Adjust as needed */
        }

        .about-section-div {
            width: 100%; /* Adjust width as needed */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            margin-top: 20px; /* Add margin to separate sections */
        }

        .about-content {
            border: 2px solid #ff00ff; /* Pink border */
            padding: 20px; /* Add padding inside the border */
            margin: 20px; /* Add margin outside the border */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
            border-radius: 10px;
        }

        .about-content:hover {
            transform: scale(1.01); /* Increase size by 10% */
            transition: transform 0.3s ease; /* Smooth transition */
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
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .gaudic:hover {
            transform: scale(1.1); /* Increase size by 10% */
        }

        .sponz-section-div {
            display: flex;
            justify-content: center;
        }

        .sponz {
            width: 200px; /* Adjust as needed */
            height: 100px; /* Adjust as needed */
            object-fit: contain; /* Ensure the image fits within the specified dimensions */
            margin: 0 10px; /* Add margin between images */
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .sponz:hover {
            transform: scale(1.1); /* Increase size by 10% */
        }

        .povecava:hover {
            transform: scale(1.1); /* Increase size by 10% */
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .countdown {
    font-size: 3em; /* Larger font size */
    color: #fff; /* White color */
    background-color: #ff00ff; /* Pink background */
    padding: 20px; /* Increase padding */
    border: 2px solid #fff; /* Border */
    border-radius: 10px; /* Rounded corners */
    margin: 0 auto; /* Center the countdown horizontally */
    max-width: 80%; /* Limit maximum width */
    text-align: center; /* Center text */
    display: flex; /* Use flexbox for responsiveness */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

@media screen and (max-width: 768px) {
    .countdown {
        font-size: 2em; /* Adjust font size for smaller screens */
    }
}

@media screen and (max-width: 480px) {
    .countdown {
        font-size: 1.5em; /* Further adjust font size for smaller screens */
        padding: 15px; /* Adjust padding */
    }
}
    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="index.php">Domov</a>
    <a class="navadn" href="team.php">Ustvari ekipo</a>
    <a href="http://ers.scv.si" target="_blank">
        <img class="povecava" src="Slike/scv.png" alt="Logo" height="40">
    </a>
</header>

<section>
    <img src="Slike/mainPhoto.png" alt="Main Photo" width="100%" class="mainPhoto">
    <br><br><br>
    <h2>O DOGODKU</h2>
    <div class="about-section">
        <div class="about-section-div">
            <div class="about-content">
                <h2 class="about-section-title">Kaj je ERŠ Gamejam?</h2>
                <p class="about-section-text">ERŠ Gamejam je dogodek, ki ga organizirajo dijaki Elektro in računalniške šole v Velenju. Namenjen je navdušencem nad računalništvom, še posebej tistim, ki jih zanima ustvarjanje računalniških iger. Dogodek bo vključeval različne dejavnosti, vključno s tekmovanji v razvoju računalniških iger, VR doživetji, igranjem na PS5 in še več.</p>
                <h2 class="about-section-title">Kdaj in Kje?</h2>
                <p class="about-section-text">ERŠ Gamejam bo potekal v spodnjih prostorih Gaudeamusa v Velenju, 19. in 20. aprila 2024. Dogodek se bo začel ob 14:00 in končal naslednji dan ob 15:00.</p>
                <h2 class="about-section-title">Kaj Potrebujem?</h2>
                <p class="about-section-text">Za udeležbo na dogodku potrebujete računalnik, monitor, tipkovnico, miško in slušalke, ali pa samo prenosni računalnik in slušalke. Šola lahko na določeni ravni zagotovi računalnike, vendar prosimo, da to potrebo sporočite preko e-pošte na naslov "andraz.holesek@scv.si". Priporočamo tudi, da prinesete podaljšek in internetni kabel, saj je število električnih vtičnic omejeno.</p>
            </div>
        </div>
    </div>

    <div class="about-section-div">
</div>


    <br>
    <h2>ČAS DO DOGODKA</h2>
    <br><br>
    <div class="countdown" id="countdown"></div>
    <br><br><br>
    <h2>SPONZORJI</h2>
    <div class="sponz-section-div">
        <a href="https://sloveniagames.com" target="_blank">
            <img class="sponz" src="Slike/sponz1.png">
        </a>
        <a href="https://czk.si/skupnost-czk/drustvo-razvijalcev-iger-slovenije/" target="_blank">
            <img class="sponz" src="Slike/igre.png">
        </a>
        <a href="https://www.mc-velenje.si" target="_blank">
            <img class="sponz" src="Slike/MC_Logo.png">
        </a>
    </div>
    <br><br>
</section>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 19, 2024 14:00:00").getTime();

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
