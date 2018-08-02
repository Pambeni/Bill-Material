<?php if (isset($_POST["debt"])) {
                require '../connect2db.php';
                
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $debt = $_POST["debt"];

                $sql = "INSERT INTO `clients` (`name`, `address`, `email`, `phone`, `debt`) VALUES ( '$name', '$address', '$email', '$phone', '$debt')";
                $query = mysqli_query($con,$sql);
                $id = mysqli_insert_id($con);
                if($query){
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Client Created Succesfully!!");'; 
                    echo "window.location.href = '../registration.php?id=$id&x=1 ';";
                    echo '</script>'; 
                }
            }
?>