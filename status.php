<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $workerId = $_POST['workerId'];
    $newStatus = $_POST['newStatus'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "client_record";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $updateSql = "UPDATE clientrecord SET status = '$newStatus' WHERE ID = '$workerId'";
    $updateResult = $conn->query($updateSql);

    if ($updateResult) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
