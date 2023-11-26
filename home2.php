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
<title>Home2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif ;}
.mySlides {display: none}
.h1{color: black;}
.box1{
      width: 30000px;
      height: 300px;
      background-color: black;
      color: white;
      font-size: 90px;
      font-family: 'Rubik Iso', cursive;
    }
.box0{
    color: white;
    width: 2px;
    height: 2px;
    }
*{  padding: 0; }
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
.rate:not(:checked) > label:before { content: '★ '; }
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
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
    <i class="fa fa-bars"></i></a>
    <a href="home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
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
      </div>
    </div>
    <!-- <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a> -->
  </div>
</div>

<!-- navbar on small screes (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ENQUIRY</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  
</div>


  
<!-- Automatic Slideshow Images -->
  <!-- <div class="mySlides w3-display-container w3-center">   
  </div> -->


  <!-- The Band Section -->

<div class="box1" style=" text-align:left ; display: inline-block ;"><big><b><pre> KKTechnical</b></big></div> 
  <div class=" w3-content w3-center w3-container" style="max-width:800px" id="band">
    <p class="w3-opacity"><i>All technical Services and repaires</i></p>
    <p class="w3-justify">Electrical fittings should only be handled under expert supervision. This is why you need to hire a contractor for electrical home fittings for a home or a building. These constractors also assist in electrical repairing, installation of gadgets and much more. As electrical appliances need proper care and handling, make sure you hire a certified professional to get quality work.
    <br>
    Some contractors in Pune provide services for repairing, installing, and maintaining electrical systems.
    <br>
    KK Technical is amoung the top Electrical Contractors in Ghorpadi Gaon, Hadapsar,etc Pune you can hire for any electrical assistance.</p>
   
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/eD2DCflFYpc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/HTqskZhGsJA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/NDLx-dz0r1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/U-B_TKR7eBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/cfAJXq2nix4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/8iN1q4v1l40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="w3-third">
        <p>name</p>
        <iframe width="250" height="215" src="https://www.youtube.com/embed/uZ5EGVECanc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div><br>
    </div>
  </div>  

<!-- concat section -->

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
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="tel" placeholder="phone_no" required name="Contact_no">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message / Comment" required name="Comments">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
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

    
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
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
    var x = document.getElementsByClassName("mySlides");
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
  
  // When the user clicks anywhere outside of the modal, close it
  // var modal = document.getElementById('ticketModal');
  // window.onclick = function(event) {
  //   if (event.target == modal) {
  //     modal.style.display = "none";
  //   }
  // }
</script>

</body>
</html>