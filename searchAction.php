<?php 


if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT * FROM upload_data WHERE id = " . $searchKey;

	if(empty($searchKey)) {
		echo "Enter a valid product id.";
	}
	
	$conn = new mysqli("localhost", "userlogin", "11113566", "userlogin");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		    if(empty($searchKey))
			{ 
			}

			else
			{
				if($result -> num_rows > 0) {

			echo "<ol>";

			echo "<b> <u>  PRODUCT ID | </u> </b>";
			echo "<b> <u> PRODUCT NAME | </u> </b>";
			echo "<b> <u> PRODUCT TYPE </u> </b>";
			echo "<br>";

			while($row = $result -> fetch_assoc()) {

				//echo "<li>";
				echo $row["id"] . " | " . $row["FILE_NAME"] . " | " . $row["Type"] ;
				
				echo "<br>";
			}

			echo "</ol>";
		} 
		        else {
			        echo "No record found!";

		        }


			}

		

	}
		




	$conn -> close();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button style="background-color: #fcba03" onclick="home1()" ><a href="homepage.php"> CLEAR </a></button>


<script type="text/javascript"  >


  function home1() {
      //var searchKey = document.getElementById("searchKey").value;

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("allProduct").innerHTML = xhttp.responseText;
        }
      }

      document.getElementById("p2").innerHTML = xhttp.responseText;
      xhttp.send();
    }

</script>


</body>
</html>