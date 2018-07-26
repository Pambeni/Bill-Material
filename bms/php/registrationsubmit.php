<?php if (isset($_POST["name"])) {
                require '../connect2db.php';
                
                $billboard_id = $_POST["id"];
                $additional = $_POST["additional"];
                $province = $_POST["province"];
                $city = $_POST["city"];
                $town = $_POST["town"];
               
                $village = $_POST["village"];
               
                $olddebt = $_POST["current"];
                $newdebt = $_POST["debt"];
                // $debt = $olddebt + $currentdebt;
                

                $sql = "INSERT INTO `registration` (`client_id`, `village`,`province`, `city`, `additional`, `town`,  `debt`) VALUES ( '$billboard_id','$village', '$province', '$city', '$additional', '$town', '$newdebt')";
                $query = mysqli_query($con,$sql);
                $id = mysqli_insert_id($con);
               
                if($query){
                    echo '<script type="text/javascript">'; 
                    echo "alert('One Part of registration is complete select billboard to proceed on the next page');"; 
                    echo "window.location.href = '../select.php?newid=$id';";
                    echo '</script>'; 
                }
            }
    ?>