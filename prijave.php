<?php
// Check if password is correct
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
    $password = $_POST["password"];
    if ($password === "peniscookie") {
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

        // Fetch data from the database
        $sql = "SELECT * FROM teams";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Email 3</th>
                <th>Email 4</th>
                </tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["team_id"] . "</td>
                    <td>" . $row["team_name"] . "</td>
                    <td>" . $row["email1"] . "</td>
                    <td>" . $row["email2"] . "</td>
                    <td>" . $row["email3"] . "</td>
                    <td>" . $row["email4"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
        exit; // Exit after displaying data
    } else {
        echo "Invalid password!";
    }
}
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
    <h2>Password:</h2>
    <input type="password" name="password" required>
    <input class="button" type="submit" value="Submit">
</form>
</body>
</html>
