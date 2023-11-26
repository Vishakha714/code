<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "company_ratings";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $Name = $_POST["Name"];
        $Contact_no = $_POST["Contact_no"];
        $Comments = $_POST["Comments"];
        $Ratings = $_POST["rate"];

        $sql = "INSERT INTO company_ratings (Name, Contact_no, Comments, Ratings) 
                VALUES ('$Name', '$Contact_no', '$Comments', '$Ratings')";

        if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thanks for rating.');</script>";
        echo "<script>window.location.href ='home1.php'</script>";
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
<title>home 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>
.body {
  font-family: Verdana,sans-serif;
  font-size: 15px;
  line-height: 1.5;
}
.mySlides {display: none}
.h1{color: black;}
.h3{color: navy;}
*{ margin: 0; padding: 0;}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before { content: '★ ';}
.rate > input:checked ~ label { color: #ffc700; }
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label { color: #deb217; }
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label { color: #c59b08; }
</style>
</head>
<body>
  <!-- navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" style="height: 64px;">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
    <i class="fa fa-bars"></i></a>
    <a href="home2.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="enquiry.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ENQUIRY</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <a href="Worker.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">JOB APPLY</a>
    <a href="Admin.html" class="w3-padding-large w3-button w3-hide-small w3-right">Admin</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">DISH</a>
        <a href="#" class="w3-bar-item w3-button">CCTV</a>
        <a href="#" class="w3-bar-item w3-button">REPAIRE</a>
        <a href="#" class="w3-bar-item w3-button">Software</a>
      </div>
    </div>
    <!-- <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a> -->
  </div>
</div>

<!-- navbar on small screes (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#enquiry" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ENQUIRY</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>


<!-- automatic slideshow images -->
<br><br><br>
<div class="myslides w3-display-container w3-center">
<img src="2.jpeg" style="width:60%">
<!-- <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small" >
  <p style="color:black;"><b>Technical</b></p>
</div> -->
</div>
<div class="myslides w3-display-container w3-center">
  <img src="4.jpeg" style="width: 60%;">
  <!-- <div class="w3-display-bottommiddle w3-contanier w3-text-white w3-padding-32 w3-hide-small">
  <p><b>Services</b></p>
</div> -->
</div>
<div class="myslides w3-display-container w3-center">
  <img src="9.jpeg" style="width: 60%;">
  <!-- <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <p style="color:black;"><b>and Repaire</b></p>
  </div> -->
</div>

<!-- the band section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
<h2 class="w3-wide">KKtechnical</h2>
<p class="w3-opacity"><i>Services</i></p><br>
<p class="w3-justify">KK Technical Services is a full-service and logistics company specialising in Hardware, Software and technical installations. Our mission is to make you look great Entertenment. Our core values guide us in this mission every day.
<br>
Through our dedicated staff, experienced technicians and hard workin delivery teams. We have been providing some of the most successful OEM's and Channel Partners in Pune and soon in other places also, with the resources they require to drive their business forward. Because of this our customers can have peace of mind that their client will receive the best possible service and attention, on time, every time.  
<br>
Electrical fittings should only be handled under expert supervision. This is why you need to hire a contractor for electrical home fittings for a home or a building. These constractors also assist in electrical repairing, installation of gadgets and much more. As electrical appliances need proper care and handling, make sure you hire a certified professional to get quality work.
<br>
Some contractors in Pune provide services for repairing, installing, and maintaining electrical systems.
<br>
KK Technical is amoung the top Electrical Contractors in Ghorpadi Gaon, Hadapsar,etc Pune you can hire for any electrical assistance.</p>
  <div class="w3-row w3-padding-32">

      <div class="w3-third">
        <p>1</p>
        <img src="1.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%; height: 60%;">
      </div>
      <div class="w3-third">
        <p>2</p>
        <img src="3.jpeg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>3</p>
        <img src="8.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>4</p>
        <img src="5.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>5</p>
        <img src="7.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>6</p>
        <img src="6.jpeg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>7</p>
        <img src="11.jpeg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>8</p>
        <img src="10.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>9</p>
        <img src="13.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
       <div class="w3-third">
        <p>10</p>
        <img src="14.jpeg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>11</p>
        <img src="12.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>12</p>
        <img src="9.jpeg" class="w3-round w3-margin-bottom" alt="Random Name" style="width: 60%;">
      </div>
  </div>
</div>

<!-- contact section -->

<div class="w3-black" id="Services">
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Customer ? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Maharashtra Pune India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 79723 33219<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: KKtechnical@gmail.com<br>
      </div>

      <div class="w3-col m6">
        <form method="POST" action="" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="tel" placeholder="phone_no" required name="Contact_no">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message / Comment" required name="Comments">
          <button class="w3-button w3-black w3-section w3-right" type="submit"><a href="home1.php">SEND</a></button>
           <!-- ratings -->
           <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- end page content -->
</div>

<!-- Image of location/map
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%"> -->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <i class="fa fa-whatsapp w3-hover-opacity"></i>
  <p class="w3-medium"><a href="">by Vishu.S.K</a>& kajal</p>
</footer>

<script>

// Automatic Slideshow - change image every 4 seconds

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("myslides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>

</body>
</html>
</html>