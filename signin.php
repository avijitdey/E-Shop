<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="signin.css">


<script>
function validateForm() {
  var x = document.forms["siginForm"]["user"].value;
  var y = document.forms["siginForm"]["password"].value;


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
				<h2 id="header">Signin Form</h2>
				<form name="siginForm" action="registration.php" onsubmit="return validateForm()" method="POST">

					<div >
						<label> Username: </label>
						<input type="text" name="user" >
					</div>
					<br>

					<div >
						<label> Password: </label>
						<input type="password" name="password" >
					</div>
					<br>

					<button type="submit"> Signin </button>
					

				</form>

	</div>

	<div >
        	<button type="button" style="background-color: #f0daef;margin-top: 10px;" onclick="myBack()">Go To Login</button>
                    <script>
                    function myBack() {
                      location.replace("login.php")
                    }
                    </script>
	
        </div>

	</div>

	<div style="float: bottom ; margin-top: 10px;">
  
<footer style="text-align: center;background-color: #999fa8; padding: 3px;display: block;">
  <p>Copyright © 2021 Electronic-Shop Marketing Limited. All rights reserved</p>
</footer> 


</div>

</body>
</html>