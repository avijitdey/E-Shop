

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Action</title>
</head>
<body>

	


	

</body>
</html>


<?php

session_start();


header('location:displayProduct.php');


$hostname = "localhost";
$username = "userlogin";
$password = "11113566";


$conn = mysqli_connect($hostname, $username, $password);



mysqli_select_db($conn, $username);

        $tmp_name = $_FILES['fileupload']['tmp_name'];
		$file_name = $_FILES['fileupload']['name'];
		$file_size = $_FILES['fileupload']['size'];
		$file_type = $_FILES['fileupload']['type'];

		move_uploaded_file($tmp_name, "image/" . $file_name);

		$Type = $_POST['Type'];
		$Price = $_POST['Price'];


$q = "select * from upload_data where FILE_NAME = '$file_name'  ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo " duplicate data";
}
else
{
	$qy = "insert into upload_data(FILE_NAME,Type,Price) values ('$file_name','$Type','$Price')" ;
	mysqli_query($conn , $qy);

 

}





?>


