<?php

session_start();


$hostname = "localhost";
$username = "userlogin";
$password = "11113566";


$conn = mysqli_connect($hostname, $username, $password);



mysqli_select_db($conn, $username);


{

//$img_dir= 'uploads/';

	echo "<br>";

		$sql = "select * from upload_data where Type='Washing Machine'";
		$res1 = $conn->query($sql);

		 {
			while($row = $res1->fetch_assoc()) {
				$image = "image/".$row['FILE_NAME'];
                                        $width = "250px";
                                        $hight = "800px";
                                        echo "<div align='center' style='background-color:#f7e6e6; padding: 10px; width: 280px; float: left; margin-right: 10px; margin-top: 30px; margin-left: 20px;'>";
                                            echo "<img src='".$image."' width='".$width."' hight='".$hight."'>";
                                            echo "<br>";
                                            echo "<b> Product ID: </b>" . $row['id'];
                                            echo "<br>";
                                            echo "<b> Product Name: </b>" . $row['Type'];
                                            echo "<br>";
                                            echo "<b>Price (BDT):</b> <span style='color:red'><b> " . $row['Price']. "</b></span>";
                                            echo "<br>";

                                            echo "<br>";
                                            echo "<br>";
                                            echo "</div>";
			}
		}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div align="center" style="background-color:black; margin-top: 500px; margin-bottom: 30px; padding: 10px">

                    <button style="background-color: #f0daef" onclick="home1()" ><a href="homepage.php"> CLEAR </a></button>
            </div>



</body>
</html>


