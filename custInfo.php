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

	header('location:custDetail.php');

}
else
{
	header('location:custDetail.php');
}





?>