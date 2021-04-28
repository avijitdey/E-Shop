<!DOCTYPE html>
<html>
<head>
	<title>All Product</title>
</head>
<body>
	<div align="center" style="background-color:black; padding-top: 1px; padding-bottom: 20px">
		<h3 style="background-color:black; color: white;">PRODUCTS</h3>
                
	</div>

	<span id="s1">
	<?php
				$hostname = "localhost";
                $dbusername = "userlogin";
                $dbpassword = "11113566";
                $dbname = "userlogin";

                $conn2 = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
                $stmt2 = $conn2->prepare("select * from upload_data");
                            //$stmt2->bind_param("s",$p2);
                            //$p2 = $var;
                            $stmt2->execute();
                            $res2 = $stmt2->get_result();
                            // $user2 = $res2->fetch_assoc();

                            // echo "Username: " . $user2['pid'];

                            // $pid = $user['pid'];
                            // $productName = $user['p_name'];
                            // $price = $user['price'];
                            
                                if ($res2->num_rows > 0){

                                	
                                    while($row = $res2->fetch_assoc()){

                                    	$image = "image/".$row['FILE_NAME'];
                                    	$width = "250px";
                                    	$hight = "800px";
                                    	echo "<div align='center' style='background-color: #f7e6e6; padding: 10px; width: 280px; float: left; margin-right: 10px; margin-top: 30px; margin-left: 20px;'>";
	    									echo "<img src='".$image."' width='".$width."' hight='".$hight."'>";
	                                    	echo "<br>";
	                                        echo "<b> Product ID: </b>" . $row['id'];
	                                        echo "<br>";
	                                        echo "<b> Product Name: </b>" . $row['Type'];
	                                        echo "<br>";

                                            
	                                        echo "<b>Price (BDT):</b> <span style='color:red'><b> " . $row['Price']. "</b></span>";
	                                        echo "<br>";
	                                       
	                                    echo "</div>";

                                    }
                                    
                                }

	?>
	</span>






    		<div align="center" style="background-color:black; margin-top: 1220px; margin-bottom: 30px; padding: 10px">

                    <button style="background-color: #f0daef" onclick="home1()" ><a href="homepage.php"> CLEAR </a></button>
            </div>

            

</body>
</html>