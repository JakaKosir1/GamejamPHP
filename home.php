<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameJam Domača stran</title>
        <style>
            body {
    background-color: #2e1a4a;
    color: #fff;
    font-family: 'SansSerif', Verdana;
    margin: 0;
    padding: 0;
    text-align: center;
}

header {
    padding: 20px;
    background-color: #432980;
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
    background-color: #5d479c;
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    margin-top: 20px;
    border-radius: 5px;
}

.create-team-btn:hover {
    background-color: #7b6aae;
}

.navbar {
    overflow: hidden;
    background-color: #432980;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navadn {
    float: left;
    color: #ccc;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.navadn:hover {
    color: #fff;
    background-color: #5d479c;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.navbar img {
    float: right;
    padding: 10px;
    transition: transform 0.3s ease;
}

.navbar img:hover {
    transform: scale(1.1);
}

.mainPhoto {
    box-shadow: 0 10px 10px 0px rgba(0, 0, 0, 0.2);
}

h2 {
    color: #ff00ff;
    font-size: 55px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
}

.about-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
}

.about-section-div {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.about-content {
    border: 2px solid #ff00ff;
    padding: 20px;
    margin: 20px;
    box-sizing: border-box;
    border-radius: 10px;
}

.about-content:hover {
    transform: scale(1.01);
    transition: transform 0.3s ease;
}

.about-section-title {
    font-size: 27px;
    text-align: center;
    color: #ff00ff;
}

.landing-page {
    width: 100%;
}

.gaudic {
    max-width: 80%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.gaudic:hover {
    transform: scale(1.1);
}

.sponz-section-div {
    display: flex;
    justify-content: center;
}

        .sponz {
            width: 200px;
            height: 100px;
            object-fit: contain;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .sponz:hover {
            transform: scale(1.1);
        }

        .povecava:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .countdown {
    font-size: 3em;
    color: #fff;
    background-color: #ff00ff;
    padding: 20px;
    border: 2px solid #fff;
    border-radius: 10px;
    margin: 0 auto;
    max-width: 80%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

@media screen and (max-width: 768px) {
    .countdown {
        font-size: 2em;
    }
}

@media screen and (max-width: 480px) {
    .countdown {
        font-size: 1.5em;
        padding: 15px;
    }
}


    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="home.php">Domov</a>
    <a class="navadn" href="team.php">Ustvari ekipo</a>
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
            <div class="about-content">
                <h2 class="about-section-title">Kaj je ERŠ Gamejam?</h2>
                <p class="about-section-text">ERŠ Gamejam je dogodek, ki ga organizirajo dijaki Elektro in računalniške šole v Velenju. Namenjen je navdušencem nad računalništvom, še posebej tistim, ki jih zanima ustvarjanje računalniških iger. Dogodek bo vključeval različne dejavnosti, vključno s tekmovanji v razvoju računalniških iger, VR doživetji, igranjem na PS5 in še več.</p>
                <h2 class="about-section-title">Kdaj in Kje?</h2>
                <p class="about-section-text">ERŠ Gamejam bo potekal v prostorih restavracije Gaudeamus v Velenju, 29. in 30. marca 2024. Dogodek se bo začel ob 14:00 in končal naslednji dan ob 15:00.</p>
                <h2 class="about-section-title">Kaj Potrebujem?</h2>
                <p class="about-section-text">Za udeležbo na dogodku potrebujete računalnik, monitor, tipkovnico, miško in slušalke, ali pa samo prenosni računalnik in slušalke. Šola lahko na določeni ravni zagotovi računalnike, vendar prosimo, da to potrebo sporočite preko e-pošte na naslov "andraz.holesek@scv.si". Priporočamo tudi, da prinesete podaljšek in internetni kabel, saj je število električnih vtičnic omejeno.</p>
            </div>
        </div>
    </div>

    <div class="about-section-div">
    <a href="https://www.strabag.si/databases/internet/_public/content.nsf/web/SI-STRABAG.SIN-PROJEKTE-Visoke%20in%20inženirske%20gradnje-JAVNE%20ZGRADBE-OBJEKT%20»GAUDEAMUS«,%20VELENJE" target="_blank">
        <img class="gaudic" src="Slike/gaudic2.jpeg" alt="Restavracija Gaudeamus">
    </a>
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
        <a href="https://czk.si/skupnost-czk/drustvo-razvijalcev-iger-slovenije/" target="_blank">
            <img class="sponz" src="Slike/igre.png">
        </a>
    </div>
    <br><br>
</section>

<script>
    
    var countDownDate = new Date("Mar 29, 2024 14:00:00").getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>
