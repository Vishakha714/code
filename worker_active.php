<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        #profile {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f8f8f8;
            margin-bottom: 20px;
        }

        #profile p {
            margin: 10px 0;
            color: #555;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Profile</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "worker_details";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM worker_details ORDER BY ID DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            echo '<div id="profile">';
            echo '<p>ID: ' . $user['ID'] . '</p>';
            echo '<p>Name: ' . $user['name'] . '</p>';
            echo '<p>Email: ' . $user['email_id'] . '</p>';
            echo '<p>Phone no.: ' . $user['phone_no'] . '</p>';
            echo '</div>';
        }

        $conn->close();
        ?>
        
        <a href="home1.php"><button>back</button></a>
        <button onclick="toggleAllEnquiries()">All Enquiries</button>

        <div id="worker name enquiry List">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "client_record";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM clientrecord ORDER BY ID";
            
            $result = $conn->query($sql);

            if (!$result) {
                die("Query failed: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Name</th>';
                echo '<th>Phone</th>';
                echo '<th>Address</th>';
                echo '<th>Services</th>';
                echo '</tr>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['ID'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row["phone_no"] . '</td>';
                    echo '<td>' . $row["address"] . '</td>';
                    echo '<td>' . $row["service"] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo "No workers found";
            }

            $conn->close();
            ?>
            
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var enquiries = document.querySelectorAll('tr');
            enquiries.forEach(function (enquiry) {
                enquiry.style.display = 'none';
            });
        });

        function toggleAllEnquiries() {
            var enquiries = document.querySelectorAll('tr');
            enquiries.forEach(function (enquiry) {
                enquiry.style.display = (enquiry.style.display === 'none' || enquiry.style.display === '') ? 'table-row' : 'none';
            });
        }
    </script>
</body>

</html>
