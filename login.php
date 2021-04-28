<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="login.css">

	<script>
function validateForm() {
  var x = document.forms["loginForm"]["user"].value;
  var y = document.forms["loginForm"]["password"].value;


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

	<div id="wrapper" >
		
		<div id="content" >
			
				<h2 id="header">Login Form</h2>
				<form name="loginForm" 	action="validation.php" onsubmit="return validateForm()" method="POST">

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

					<button type="submit"> Login </button>
					

				</form>
	    </div>


			
        



		  <button type="button" style="background-color: #f0daef ;margin-top: 10px;" onclick="reg()">Go to signin</button>
                    <script>
                    function reg() {
                      location.replace("signin.php")
                    }
                    </script>	
			
		
	</div>

	<div style="float: bottom;margin-top: 10px; ">
  
<footer style="text-align: center;background-color: #999fa8; padding: 3px;display: block;">
  <p>Copyright © 2021 Electronic-Shop Marketing Limited. All rights reserved</p>
</footer> 


</div>

</body>
</html>