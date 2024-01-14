<?php
 $hostname = "sql212.infinityfree.com";
                                $username = "if0_35772382";
                                $password = "sT3yQomameGwU";
                                $database = "if0_35772382_users";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$empid = $_POST["empid"];
$cname = $_POST["cname"];
$address = $_POST["address"];

$databaseName = "cashier"; // Changed database cname to "cashier"

// Check if the empid already exists
$checkQuery = "SELECT empid FROM cashier WHERE empid = ?";
$checkStmt = $mysqli->prepare($checkQuery);
$checkStmt->bind_param("s", $empid);
$checkStmt->execute();
$checkStmt->store_result();
$existingRecords = $checkStmt->num_rows;

if ($existingRecords > 0) {
    echo "exists"; // Notify JavaScript that empid already exists
} else {
    $sql = "INSERT INTO cashier (empid, cname, address) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $empid, $cname, $address);

        if ($stmt->execute()) {
            echo "Data (EmpID: $empid, Name: $cname, Adress: $address) inserted successfully.";
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
