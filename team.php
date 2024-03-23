<?php
// Assuming you have a database connection
$servername = "jakakosir.eu";
$username = "jakakosir_gamejam";
$password = "=2d0?f+;?PO$";
$dbname = "jakakosir_gamejam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamName = $_POST["teamName"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email3 = $_POST["email3"];
    $email4 = $_POST["email4"];

    // Validate emails
    $validEmails = validateEmails([$email1, $email2, $email3, $email4]);

    // Check for duplicate emails
    $duplicateEmails = checkDuplicateEmails([$email1, $email2, $email3, $email4]);

    if ($validEmails && empty($duplicateEmails)) {
        // Check for existing team name
        $existingTeam = checkExistingTeam($teamName);

        if (!$existingTeam) {
            // Save to the database
            $sql = "INSERT INTO teams (team_name, email1, email2, email3, email4) 
                    VALUES ('$teamName', '$email1', '$email2', '$email3', '$email4')";

            if ($conn->query($sql) === TRUE) {
                echo "Shranjeno.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Ime '$teamName' že obstaja.";
        }
    } else {
        $errorMsg = '';

        if (!$validEmails) {
            $errorMsg .= "Uporabi šolski email. ";
        }

        if (!empty($duplicateEmails)) {
            $errorMsg .= "Ne uporabi isti email večkrat. ";
        }

        echo "Error: " . $errorMsg;
    }
}

// Function to validate emails
function validateEmails($emails)
{
    foreach ($emails as $email) {
        if (!empty($email) && (!filter_var($email, FILTER_VALIDATE_EMAIL) || !endsWith($email, '@scv.si'))) {
            return false;
        }
    }
    return true;
}

// Function to check for duplicate emails
function checkDuplicateEmails($emails)
{
    $nonEmptyEmails = array_filter($emails, function($email) {
        return !empty($email);
    });

    $uniqueEmails = array_unique($nonEmptyEmails);

    return count($nonEmptyEmails) != count($uniqueEmails);
}

// Function to check if a string ends with a specific suffix
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
}

// Function to check for existing team name in the database
function checkExistingTeam($teamName)
{
    global $conn;

    $result = $conn->query("SELECT team_id FROM teams WHERE team_name = '$teamName'");

    return $result->num_rows > 0;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustvari ekipo</title>
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
        form {
            display: inline-block;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 2px solid #5d479c;
            border-radius: 5px;
            background-color: #3f2a6d;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #5d479c;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }


        input[type="submit"]:hover {
            background-color: #7b6aae;
        }
        a {
            text-decoration: none; /* Remove underline */
            color: white; /* Match the background color */
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
        h2 {
            font-size: 25px;
            text-align: center;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        }
        .mail{
            text-align: center;
        }
        .povecava:hover {
            transform: scale(1.1); /* Increase size by 10% */
            transition: transform 0.3s ease; /* Smooth transition */
        }
        .button{
            margin-top: 25px;
            font-size: 20px;
        }
    </style>
</head>
<body>
<header class="navbar">
    <a class="navadn" href="home.php">Domov</a>
    <a class="navadn" href="team.php">Ustvari ekipo</a>
    <a href="http://ers.scv.si" target="_blank">
        <img class="povecava" src="Slike/scv.png" alt="Logo" height="40">
    </a>
</header>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <br><br>
    <h2><label for="teamName">Ime ekipe:</label></h2>
    <input type="text" name="teamName" required>

    <label class="mail" for="email1">Email 1:</label>
    <input type="email" name="email1" required>

    <label class="mail" for="email2">Email 2:</label>
    <input type="email" name="email2">

    <label class="mail" for="email3">Email 3:</label>
    <input type="email" name="email3">

    <label class="mail" for="email4">Email 4:</label>
    <input type="email" name="email4">
    <input class="button" type="submit" value="Ustvari">
</form>
</body>
</html>
