<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>
<br>
<br>

<h1 align="center" style="color: #3a055c"> <u> Personal Information </u></h1>


<h3> ID: <?php echo $_SESSION['id'] ?> </h3>
<h3> NAME: <?php echo $_SESSION['username'] ?> </h3>
<h3> PASSWORD: <?php echo $_SESSION['password'] ?> </h3>


<button type="button" style="background-color: #f0daef" onclick="update()">Update Personal Information</button>
                    <script>
                    function update() {
                      location.replace("edit.php")
                    }
                    </script>


<button style="background-color: #f0daef; text-align: center;"  ><a href="homepage.php"> CLEAR </a></button>



</body>
</html>