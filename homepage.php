<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Electronic Shop</title>

	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>


	<nav style="text-align: right">

                    


                     
                      
	                <button type="button" style="background-color: #f0daef" onclick="reg()"><b> REGISTRATION </b></button>
                    <script>
                    function reg() {
                      location.replace("signin.php")
                    }
                    </script>


                    <button type="button" style="background-color: #f0daef" onclick="Back()"><b> LOGOUT </b></button>
                    <script>
                    function Back() {
                      location.replace("logout.php")
                    }
                    </script>

                    <button type="button" style="background-color: #f0daef" onclick="custInfo()"><b> Show Personal Information </b></button>
                    
                  


                    <script>
                    function custInfo() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("personalInfo").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "custInfo.php", true);
      xhttp.send();
                    }
                    </script>




                    <button type="button" style="background-color: #f0daef" onclick="update()"><b>Update Personal Information </b></button>
                    <script>
                    function update() {
                      location.replace("edit.php")
                    }
                    </script>

                    <button type="button" style="background-color: #f0daef" onclick="contact()"><b> Contact Us </b></button>
                    <script>
                    function contact() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("personalInfo").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "contact.php", true);
      xhttp.send();
                    }
                    </script>
  
 

  <button id="search" style="background-color: #f0daef " onclick="searchAll()"> <b> SEARCH PRODUCT </b> </button>

  

  </nav>

  

  <div style="float: left; width: 25%; height: 125px" >
	
  <a href="homepage.php"> <img   src="logo.jpg" align="center" width="200" height="100" > </a>
</div>

<div style="float: middle; width: 74%; height: 125px">
  
  <h1 align="center" style="color: #cc1414"><u> CUSTOMER PAGE </u> </h1>

   <h2 align="center" style="color: #4d1b05" ><b> Welcome <?php echo $_SESSION['username'] ?> </b></h2> 

  
</div>

<p style="background-color: #d4c7a5;text-align: center;" id="personalInfo"  > </p>
<p id="p2" style="background-color: #d4c7a5;text-align: center;"></p>





<script>
                    function searchAll() {
                      location.replace("displayProduct.php")
                    }
                    </script>








  






<nav>
  <button type="button" align="center" onclick="showAll()"><b> ALL PRODUCT </b></button>
                    







      <button name="Television" type="button" align="center" onclick="television()"><b> TELEVISION </b></button>



    


      <button name="AirConditioner" type="button" align="center" onclick="AirConditioner()"><b> AIR CONDITIONER </b></button>




      <button name="Refrigerator" type="button" align="center" onclick="Refrigerator()"><b> REFRIGERATOR </b></button>





<button name="WashingMachine" type="button" align="center" onclick="WashingMachine()"><b> WASHING MACHINE </b></button>







<button name="Oven" type="button" align="center" onclick="Oven()"><b> OVEN </b></button>





      <button name="HomeAppliances" type="button" align="center" onclick="HomeAppliances()"><b> HOME  APLLIANCES </b></button>



 



<button name="Commercial" type="button" align="center" onclick="Commercial()"><b> COMMERCIALS </b></button>






<button name="Others" type="button" align="center" onclick="Others()"><b> Others </b></button>





<button name="notice" type="button" align="center" onclick="notice()"><b> NOTICE </b></a></button>

</nav>

<div>
  <p style="background-color: #fafafa" id="display"></p>

</div>




<script type="text/javascript"  >


  function showAll() {

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "showProduct.php", true);
      xhttp.send();
    }

</script>


     

                    <script>
                    function television() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "Television.php", true);
      xhttp.send();
                    }
                    </script>


                    

                    <script>
                    function AirConditioner() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "AirConditioner.php", true);
      xhttp.send();
                    }
                    </script>
                    

                    <script>
                    function Refrigerator() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "Refrigerator.php", true);
      xhttp.send();
                    }
                    </script>
                    

                    <script>
                    function WashingMachine() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "WashingMachine.php", true);
      xhttp.send();
                    }
                    </script>
                    

                    <script>
                    function Oven() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "Oven.php", true);
      xhttp.send();
                    }
                    </script>
                    

                    <script>
                    function HomeAppliances() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "HomeAppliances.php", true);
      xhttp.send();
                    }
                    </script>
                    

                    <script>
                    function Commercial() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "Commercial.php", true);
      xhttp.send();
                    }
                    </script>

                     

                    <script>
                    function Others() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;
        }
      }

      xhttp.open("GET", "Others.php", true);
      xhttp.send();
                    }
                    </script>



  

                    <script>
                    function notice() {
                      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("display").innerHTML = xhttp.responseText;


        }
      }

      xhttp.open("GET", "notice.txt", true);
      xhttp.send();


                    }
                    </script>









<div>
  
  <img src="48in-oled-slider-banner-_desktop__1600-x-706pix.jpg" width="1660" height="710">
  <img src="lg-ionizer-rac-slider-banner-_desktop__1600-x-706pix.jpg"  width="1660" height="710">
</div>










<div style="float: bottom ">
  
<footer style="text-align: center;background-color: #999fa8; padding: 3px;display: block;">
  <p>Copyright © 2021 Electronic-Shop Marketing Limited. All rights reserved</p>
</footer> 


</div>
 
</body>
</html>