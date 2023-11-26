<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 100%;
        }

        h2 {
            margin-bottom:40px;
            color: #333;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td span {
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
            color: #000;
        }

        td span.active {
            background-color: #5cb85c;
        }

        td span.inactive {
            background-color: #d9534f; 
        }

        button {
            padding: 5px 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Worker List</h2>

        <div id="workerList">
            
            <a href="enquirylist.php"><button>Submit</button></a>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "worker_details";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM worker_details ORDER BY ID";

$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Phone</th>';
    echo '<th>Address</th>';
    echo '<th>Email</th>';
    echo '<th>Age</th>';
    echo '<th>Qualification</th>';
    echo '<th>Status</th>';
    echo '<th>Action</th>'; 
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row["phone_no"] . '</td>';
        echo '<td>' . $row["address"] . '</td>';
        echo '<td>' . $row["email_id"] . '</td>';
        echo '<td>' . $row["age"] . '</td>';
        echo '<td>' . $row["qualification"] . '</td>';
        echo '<td>' . (isset($row['status']) ? ($row['status'] == 1 ? '<span>Active</span>' : '<span>Inactive</span>') : '') . '</td>';
        echo '<td>';
        echo '<button onclick="toggleStatus(' . $row['ID'] . ', ' . $row['status'] . ')"></button>';
        echo '</td>';

        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "No workers found";
}

$conn->close();
?>

        </div>
        <a href="home1.php"><button>Done back to home
        </button></a>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
function toggleStatus(workerId, currentStatus) {
    var newStatus = (currentStatus == 1) ? 0 : 1;
    $.ajax({
        url: "update_status.php", 
        method: "POST",
        data: {workerId: workerId, newStatus: newStatus},
        success: function(response) {
            console.log(response);

            location.reload();
        },
        error: function(error) {
            console.error("Error updating status:", error);
        }
    });
}
</script>
</html>
