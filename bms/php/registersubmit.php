<?php if (isset($_POST["password"])) {
                require '../connect2db.php';
                
                $name = $_POST["password"];
                $access_code = $_POST["access_code"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $password=  hash('ripemd160', "$password");
                $sql = "INSERT INTO `users` (`name`, `username`, `email`, `access_code`, `password`) VALUES ( '$name', '$username', '$email', '$access_code', '$password')";
                $query = mysqli_query($con,$sql);
                
                if($query){
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Account Created Succesfully. Login to Proceed!!");'; 
                    echo "window.location.href = 'index.html';";
                    echo '</script>'; 
                }
            }
    ?>