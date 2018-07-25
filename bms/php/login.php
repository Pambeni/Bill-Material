<?php
require '../connect2db.php';

 session_start();
if(isset($_POST['username'])&&isset($_POST['password'])) 
	{
		$username = htmlentities($_POST['username']);
		
		$userentrypassword = htmlentities($_POST['password']);
        $userentrypassword=  hash('ripemd160', "$userentrypassword");
        
				$query = "SELECT * FROM users WHERE username ='$username'" ;
					$result = mysqli_query($con,$query);
					$query_num_rows =  mysqli_num_rows($result);
					if ($query_num_rows==1) 
						{      $row = mysqli_fetch_assoc($result);
							   extract($row);
							   if ($userentrypassword == $row['password'])
									{		
										$_SESSION['username']= $username;
										$_SESSION['name']= $name;
									     header('Location:../dashboard.php');	
											
									} 
								else
                                echo '<script type="text/javascript">'; 
                                echo 'alert("Invalid Password.. Please Try Again");'; 
                                echo "window.location.href = '../index.html';";
                                echo '</script>'; 
					    }
					else
						{   
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Username does not exist. Enter Valid Username");'; 
                            echo "window.location.href = '../index.html';";
                            echo '</script>'; 
                        }	
	}
					 ?>