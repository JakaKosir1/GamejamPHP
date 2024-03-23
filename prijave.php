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
        /* Your existing CSS styles here */
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
