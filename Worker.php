<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "worker_details";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $WName = $_POST["wname"];
        $WAddress = $_POST["address"];
        $Wemail_id = $_POST["wemail"];
        $WPhone_no = $_POST["wphone"];
        $WAge = $_POST["age"];
        $WQualification = $_POST["Qualification"];
        $WSSC = $_POST["SSC"];
        $WHSC = $_POST["HSC"];
        $WOther = $_POST["Other"];
        $WExperence = $_POST["Experince"];
        $Status = $_POST["status"];
        

        $sql = "INSERT INTO worker_details (name, address, email_id, phone_no, age, qualification, ssc, hsc, other, experence, status) 
                VALUES ('$WName', '$WAddress', '$Wemail_id', '$WPhone_no','$WAge', '$WQualification','$WSSC', '$WHSC','$WOther', '$WExperence', '$Status')";

        if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully.');</script>";
        echo "<script>window.location.href ='Worker.php'</script>";
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
<title>Worker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
#regForm {
  background-color: #ffffff;
  margin: 6% auto;
  padding: 50px;
  width: 32vw;
  height: 100vh;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #04AA6D;
}
body {
  font-family: Verdana,sans-serif;
  font-size: 15px;
  line-height: 1.5;
  background-color: gray;
}

</style>
</head>
<body>
    <form id="regForm" method="post" action="">
    <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>  
        </div><br>

        <div class="tab">
        <div>
            <div style="height: 80px;">
              <a href="Wlogin.html"><button type="button" id="login"style="height: 80%; width: 90%;">login</button></a>
              <br><br>
              <input type="button" id="nextBtn" onclick="nextPrev(1)" style="height: 80%; width: 90%;" value="Register"/>
              <!-- <button type="button" id="nextBtn" onclick="nextprev(1)" style="height: 60%; width: 30%;"></button> -->
            </div>
          </div>
        </div>

        
        
        <!-- One "tab" for each step in the form: -->
        
        <div class="tab"><p>Fill all details to apply</p>
        <h1>Register:</h1>
        Name:
          <p><input name="wname" type="text" placeholder="Full name..." oninput="this.className = ''" required=""></p>
          <p><input name="address" type="text" placeholder="Address" oninput="this.className = ''" required=""></p>
          <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="height: 100%; width: 48%;">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)" style="height: 50%; width: 49%;">Next</button>
        </div>
        
        <div class="tab"><p>Fill all details to apply</p>
        <h1>Register:</h1>
        Contact Info:
          <p><input name="wemail" type="email" placeholder="E-mail..." oninput="this.className = ''" required=""></p>
          <p><input name="wphone" type="tel" placeholder="Phone..." oninput="this.className = ''" required=""></p>
          <p><input name="age" type="number" placeholder="age" oninput="this.className = ''" required=""></p>
          <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="height: 70%; width: 48%;">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)" style="height: 50%; width: 49%;">Next</button>
        </div>
        
        <div class="tab"><p>Fill all details to apply</p>
            <h1>Register:</h1>
            Qualification:
            <p><input name="Qualification" placeholder="Qualification" oninput="this.className = ''"></p>
          <p><input name="SSC" type="number" placeholder="SSC Percentage" oninput="this.className = ''" required=""></p>
          <p><input name="HSC" type="number" placeholder="HSC Percentage" oninput="this.className = ''" required=""></p>
          <p><input name="Other" type="text" placeholder="other Percentage" oninput="this.className = ''"></p>
          <p><input name="Experince" type="text" placeholder="Experence" oninput="this.className = ''"></p>
         <!-- <p> <select name="status" id="status" onchange="this.className = ''">
                <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Active</option>
                <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Inactive</option>
                </select></p> -->
          <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="height: 70%; width: 48%;">Previous</button>
          <button type="submit" id="nextBtn" onclick="nextPrev(-3)" style="height: 50%; width: 49%;">Submit</button>
        </div>
        
        <!-- <div class="tab">
            Login Info:
          <p>
            <h1>company given username and password should enter</h1>
            <input placeholder="Username..." oninput="this.className = ''" required=""></p>
          <p><input placeholder="Password..." oninput="this.className = ''" required=""></p>
          <button type="button" id="prevBtn" onclick="nextPrev(-4)" style="height: 100%; width: 48%;">Previous</button>
            <button type="submit" id="nextBtn" onclick="nextPrev(1)" style="height: 50%; width: 49%;">Submit</button>
        </div> -->
        
        <!-- <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div> -->
        
       
        
        </form>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

</body>
</html>