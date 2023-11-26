<!DOCTYPE html>
<html lang="en">
<head>
    <title>comform2</title>
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -43px;
    top: 24px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -20px;
    bottom: 27px;
}
form{
    height: 558px;
    width: 374px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 14px;
    backdrop-filter: blur(10px);
    border: 10px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 70px 27px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #000000;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
select{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 25px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3><b>Welcome</b></h3>
        <br>
        <h4><b style="color:white;">Enquiry Details</b></h4>
        <br>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "client_record";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM clientrecord ORDER BY ID DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<li style="color:white;">' . $row["name"] . '</li>';
                echo '<li style="color:white;">' . $row["address"] . '</li>';
                echo '<li style="color:white;">' . $row["phone_no"] . '</li>';
                echo '<li style="color:white;">' . $row["service"] . '</li>';
            }
        }

        $conn->close();
        ?>


        <br>
        <br>
        <h4><b style="color:white;">Worker Details</b></h4>
        <br>
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
            $row = $result->fetch_assoc();
            echo '<li style="color:white;">' . $row["name"] . '</li>';
            echo '<li style="color:white;">' . $row["address"] . '</li>';
            echo '<li style="color:white;">' . $row["phone_no"] . '</li>';
        }

        $conn->close();
        ?>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "client_record";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM rating";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<li style="color:white;">Rating : ' . $row["rate"] . '</li>';
            }
        }
        $conn->close();
        ?>

        <button type="submit"><a style="text-decoration: none" href="rating2.php">Submit</a></button>
        <button><a style="text-decoration: none" href="home1.php">Cancel</a></button>
    </form>

</body>
</html>

