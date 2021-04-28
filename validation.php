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


			
		}






//$name = $_POST['user'];
//$pass = $_POST['password'];

$q = "select * from userlogin where name = '$name' && password='$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $name;

	header('location:homepage.php');

}
else
{
	echo("Go Back.  <br> <br> ");

	echo ("Enter the correct Username & Password.");


}





?>






<?php

session_start();



$hostname = "localhost";
$username = "userlogin";
$password = "11113566";


$conn = mysqli_connect($hostname, $username, $password);

if($conn)
{
	echo " Connection successful. ";
}
else
{
	echo " Connection failed! " ;
}

mysqli_select_db($conn, $username);


$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from userlogin where name = '$name' && password='$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);








if($num == 1)
{
	$sql = "select id from userlogin where name = '$name' ";
		$res1 = $conn->query($sql);

		if($res1->num_rows > 0) {
			while($row = $res1->fetch_assoc()) {
				$_SESSION['id']  =  $row['id'];
				
			}
		}



	$_SESSION['username'] = $name;
	$_SESSION['password'] = $pass;

	header('location:homepage.php');

}
else
{
	header('location:login.php');
}





?>