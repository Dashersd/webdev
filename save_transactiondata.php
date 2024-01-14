<?php
 $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$prodcode = $_POST["prodcode"];
$dsc = $_POST["dsc"];
$prc = $_POST["prc"];
$qty = $_POST["qty"];
$total = $_POST["total"];

$databaseName = "transaction"; // Changed database description to "transaction"

// Check if the prodCode already exists
$checkQuery = "SELECT prodcode FROM transaction  WHERE prodcode = ?";
$checkStmt = $mysqli->prepare($checkQuery);
$checkStmt->bind_param("s", $prodcode);
$checkStmt->execute();
$checkStmt->store_result();
$existingRecords = $checkStmt->num_rows;

if ($existingRecords > 0) {
    echo "exists"; // Notify JavaScript that prodCode already exists
} else {
    $sql = "INSERT INTO transaction (prodcode, dsc, prc, qty, total) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $prodcode, $dsc, $prc, $qty, $total,);

        if ($stmt->execute()) {
            echo "Data (ProdCode: $prodcode, Description: $dsc, Price: $prc, Quantity: $qty, Total: $total,) inserted successfully.";
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
