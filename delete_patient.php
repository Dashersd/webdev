<?php
 $host = "sql212.infinityfree.com";
    $db_username = "if0_35772382";
    $db_password = "sT3yQomameGwU";
    $db_name = "if0_35772382_users";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $idToDelete = $_POST["id"];
    $mysqli = new mysqli($hostname, $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare a DELETE statement
    $stmt = $mysqli->prepare("DELETE FROM patient WHERE idno = ?");
    $stmt->bind_param("s", $idToDelete);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
    $mysqli->close();
}
?>