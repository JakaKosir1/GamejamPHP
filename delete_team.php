<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_team"])) {
    // Check if team_id is set
    if(isset($_POST['team_id'])) {
        // Get team_id from the form
        $team_id_to_delete = $_POST['team_id'];

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

        // Prepare a delete statement
        $sql_delete = "DELETE FROM teams WHERE team_id = ?";
        
        // Prepare and bind parameters
        $stmt = $conn->prepare($sql_delete);
        $stmt->bind_param("i", $team_id_to_delete);

        // Execute the delete statement
        if ($stmt->execute()) {
            header("Location: prijave.php");
        } else {
            echo "Error deleting team: " . $conn->error;
        }

        // Close statement
        $stmt->close();
        // Close connection
        $conn->close();
    } else {
        echo "Team ID not provided.";
    }
} else {
    echo "Invalid request.";
}
?>
