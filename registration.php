<?php

session_start();



$hostname = "localhost";
$username = "userlogin";
$password = "11113566";


$conn = mysqli_connect($hostname, $username, $password);


mysqli_select_db($conn, $username);









		$name= $password = "";
		$name = ""; 
		$pass= ""; 
	

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['user'])) {
				echo "Please fill up the user name properly";
				echo "<br>";
			}
			else {
				$name = $_POST['user'];
			}

			if(empty($_POST['password'])) {
				echo "Please fill up the password properly";

				echo "<br>";
			}
			else {
				$pass= $_POST['password'];
			}

			if (!empty($_POST['user']) && !empty($_POST['password']))
			{
				
				header('location:login.php');




			}


			
	}	



$q = "select * from userlogin where name = '$name' && password='$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo " Duplication of data";
}
else
{
	$qy = "insert into userlogin(name , password) values ('$name' , '$pass')" ;
	mysqli_query($conn , $qy);
}





?>




