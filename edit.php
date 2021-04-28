<!DOCTYPE html>
<html>
<head>
	<title>Update info</title>
	<link rel="stylesheet" type="text/css" href="signin.css">


	<script>
function validateForm() {
  var x = document.forms["updateInfo"]["user"].value;
  var y = document.forms["updateInfo"]["password"].value;


  if (x == "" && y == "") {
    alert("Name and Password must be filled out");
    return false;
  }
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

  if (y == "") {
    alert("password must be filled out");
    return false;
  }

  

}
</script>

</head>
<body>

	<div id="wrapper">

		<div id="content">
				<h2 id="header">Update Personal Information </h2>
				<form name="updateInfo" action="personalEditInfo.php" onsubmit="return validateForm()" method="POST">
					<div >
						<label><b> Username: </b></label>
						<input type="text" name="user" >
					</div>
					<br>
					<div >
						<label><b> Password: </b></label>
						<input type="password" name="password" >
					</div>
					<br>
					<button type="submit" style="background-color: #f0daef;"> Update </button>
					
				</form>
			</div>

		</div>

		<br><br>

<div align="center">
		<button  type="button" style="background-color: #f0daef;" onclick="home()">HOMEPAGE</button>
                    <script>
                    function home() {
                      location.replace("homepage.php")
                    }
                    </script>

</div>

<div style="float: bottom ;margin-top: 10px;">
  
<footer style="text-align: center;background-color: #999fa8; padding: 3px;display: block;">
  <p>Copyright © 2021 Electronic-Shop Marketing Limited. All rights reserved</p>
</footer> 


</div>

</body>
</html>