<?php
 $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$prodCode = $_POST["prodCode"];
$description = $_POST["description"];
$price = $_POST["price"];

$databaseName = "item"; // Changed database description to "item"

// Check if the prodCode already exists
$checkQuery = "SELECT prodCode FROM item WHERE prodCode = ?";
$checkStmt = $mysqli->prepare($checkQuery);
$checkStmt->bind_param("s", $prodCode);
$checkStmt->execute();
$checkStmt->store_result();
$existingRecords = $checkStmt->num_rows;

if ($existingRecords > 0) {
    echo "exists"; // Notify JavaScript that prodCode already exists
} else {
    $sql = "INSERT INTO item (prodCode, description, price) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $prodCode, $description, $price);

        if ($stmt->execute()) {
            echo "Data (ProdCode: $prodCode, description: $description, Price: $price) inserted successfully.";
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
