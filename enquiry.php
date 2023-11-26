<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "client_record";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $cname = $_POST["cname"];
        $cAddress = $_POST["cAddress"];
        $cphoneno = $_POST["cphoneno"];
        $Service = $_POST["Service"];

        $sql = "INSERT INTO clientrecord (name, address, phone_no, service) 
                VALUES ('$cname', '$cAddress', '$cphoneno', '$Service')";

        if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully.');</script>";
        echo "<script>window.location.href ='comform2.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error:');</script>";
    }

        $conn->close();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>enquiry</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0vh;
    margin: 0vh;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 22vh;
    height: 27vh;
    position: absolute;
    transform: translate (-85vh,39vh);
    left: 27vh;
    top: -17vh;
}
.background .shape{
  height: 34vh;
  width: 17vw;
  position: absolute;
  border-radius: 100%;
}
.shape:first-child{
  background: linear-gradient( #1845ad, #23a2f6 );
  left: 130px;
  top: 152px;
}
.shape:last-child{
  background: linear-gradient( to right, #ff512f, #f09819 );
  right: -450px;
  bottom: -253%;
}
.div1 {
  height: 94vh;
  width: 34vw;
  background-color: rgba(255,255,255,0.13);
  position: absolute;
  transform: translate(50px,50px);
  top: -6.5%;
  left: 29%;
  border-radius: 2vh;
  backdrop-filter: blur(8px);
  border: 10px solid rgba(255,255,255,0.1);
  box-shadow: 0 0 10px rgba(8,7,16,0.6);
  padding: 2% 2%;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 1%;
    outline: none;
    border: none;
}
form h3{
    font-size: 53px;
    font-weight: 1vh;
    line-height: 0.1vh;
    text-align: center;
}

label{
    display: block;
    margin-top: 10px;
    font-size: 19px;
    font-weight: 1vw;
}
input{
  display: block;
  height: 7vh;
  width: 29vw;
  background-color: rgb(255 255 255 / 8%);
  border-radius: 50px;
  padding: 0px 32px;
  margin-top: 5px;
  font-size: 21px;
  font-weight: 1vw;
 }
button{
  display: block;
  height: 7vh;
  width: 28vw;
  background-color: rgba(255,255,255,0.07);
  border-radius: 60px;
  padding: 1px;
  margin-top: 21px;
  font-size: 28px;
  font-weight: 1vw;
}
select{
    display: block;
    height: 4vh;
    width: 27vh;
    background-color: rgba(255,255,255,0.07);
    border-radius: 1vh;
    padding: 0 1vh;
    margin-top: 1.2vh;
    font-size: 1vh;
    font-weight: 1vh;
}
::placeholder{
    color: #e5e5e5;
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
<div class="div1">
    <form method="post" action="">
        <pre>
             <h3><b>Welcome</b></h3></pre><br>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="cname" required="">

        <label for="Address">Address</label>
        <input type="text" placeholder="Address" id="name" name="cAddress" required="">

        <label for="number">Phone no.</label>
        <input type="tel" placeholder="Phone no" id="name" name="cphoneno" maxlength="10" minlength="10" required="">

        <label for="Service">Service</label>
        <input type="text" placeholder="Service" id="Service" name="Service" required="">

        <button type="submit" name="submit">Submit</button>
    </form>
    <a style="text-decoration: none" href="home1.html"><button>Cancel</button></a>
</div>
</body>
</html>
