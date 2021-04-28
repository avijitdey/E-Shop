<?php

			$q = $_GET['searchlog'];

			if(empty($q)){
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
                                        echo "<div align='center' style='background-color:#f7e6e6; padding: 10px; width: 280px; float: left; margin-right: 10px; margin-top: 30px; margin-left: 20px;'>";
                                            echo "<img src='".$image."' width='".$width."' hight='".$hight."'>";
                                            echo "<br>";
                                            echo "<b> Product ID: </b>" . $row['id'];
                                            echo "<br>";
                                            echo "<b> Product Name: </b>" . $row['Type'];
                                            echo "<br>";
                                            echo "<b>Price (BDT):</b> <span style='color:red'><b> " . $row['Price']. "</b></span>";
                                            echo "<br>";

                                            ?>
                                        <input type="text" name="quantity" value="1">
                    <input type="hidden" name="hidden_Type" value=" <?php echo $row["Type"]; ?>">
                    <input type="hidden" name="hidden_Price" value=" <?php echo $row["Price"]; ?>">
                    <button type="sunmit" name="add_to_cart" onclick="Cart()"><b>Add to Cart</b></button>
                
                    <?php
                                            
                                           
                                        echo "</div>";

                                    }
                                    
                                }
			}

			else{
				$hostname = "localhost";
                $dbusername = "userlogin";
                $dbpassword = "11113566";
                $dbname = "userlogin";

                $conn2 = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
                $stmt2 = $conn2->prepare("select * from upload_data where Type like '%".$q."%'");
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
                                        echo "<div align='center' style='background-color:#f7e6e6; padding: 10px; width: 280px; float: left; margin-right: 10px; margin-top: 30px; margin-left: 20px;'>";
                                            echo "<img src='".$image."' width='".$width."' hight='".$hight."'>";
                                            echo "<br>";
                                            echo "<b> Product ID: </b>" . $row['id'];
                                            echo "<br>";
                                            echo "<b> Product Name: </b>" . $row['Type'];
                                            echo "<br>";
                                            echo "<b>Price (BDT):</b> <span style='color:red'><b> " . $row['Price']. "</b></span>";
                                            echo "<br>";

                                            ?>
                                        <input type="text" name="quantity" value="1">
                    <input type="hidden" name="hidden_Type" value=" <?php echo $row["Type"]; ?>">
                    <input type="hidden" name="hidden_Price" value=" <?php echo $row["Price"]; ?>">
                    <button type="sunmit" name="add_to_cart" onclick="Cart()"><b>Add to Cart</b></button>
                
                    <?php
                                           
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