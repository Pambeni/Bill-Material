<?php if (isset($_POST["width"])) {
                require '../connect2db.php';
                
                $type = $_POST["type"];
                $signage = $_POST["signage"];
                $status = $_POST["status"];
                $length = $_POST["length"];
                $width = $_POST["width"];
                $height = $_POST["height"];
                $width = $_POST["width"];
                $scheme = $_POST["scheme"];
                $number = $_POST["number"];
                $street = $_POST["street"];
                $area = $_POST["area"];
                $town = $_POST["town"];
                $address="$number $street $area $town";

                $sql = "INSERT INTO `billboards` (`type`, `scheme`,`address`,`status`, `length`, `signage`, `width`, `height`) VALUES ( '$type','$scheme', '$address','$status', '$length', '$signage', '$width', '$height')";
                $query = mysqli_query($con,$sql);
                $id = mysqli_insert_id($con);
                $id = "BMS2018-$id" ;
                if($query){
                    echo '<script type="text/javascript">'; 
                    echo "alert('Billboard Importation Succesful Temporary Billboard ID is: $id');"; 
                    echo "window.location.href = '../billboards.php?scheme=$scheme';";
                    echo '</script>'; 
                }
            }
    ?>