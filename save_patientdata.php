<?php
    $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$idno = $_POST["idno"];
$name = $_POST["name"];
$status = $_POST["status"];

// Check if the idno already exists
$checkQuery = "SELECT idno FROM patient WHERE idno = ?";
$checkStmt = $mysqli->prepare($checkQuery);
$checkStmt->bind_param("s", $idno);
$checkStmt->execute();
$checkStmt->store_result();
$existingRecords = $checkStmt->num_rows;

if ($existingRecords > 0) {
    echo "exists"; // Notify JavaScript that idno already exists
} else {
    $sql = "INSERT INTO patient (idno, name, status) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $idno, $name, $status);

        if ($stmt->execute()) {
            echo "Data (IDNO: $idno, Name: $name, Status: $status) inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
}

$checkStmt->close();
$mysqli->close();
?>