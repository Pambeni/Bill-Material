<?php
require 'connect2db.php';

 session_start();
if(isset($_POST['username'])&&isset($_POST['password'])&&(!empty($_POST['username']))&&(!empty($_POST['password']))) 
	{
		$username = htmlentities($_POST['username']);
		
		$userentrypassword = htmlentities($_POST['password']);
							
				$query = "SELECT * FROM users WHERE username ='$username'" ;
					$result = mysqli_query($cxn,$query);
					$query_num_rows =  mysqli_num_rows($result);
					if ($query_num_rows==1) 
						{      $row = mysqli_fetch_assoc($result);
							   extract($row);
							   if ($userentrypassword == $row['password'])
									{		
										$_SESSION['username']= $username;
										$_SESSION['name']= $name;
									     header('Location:../HomePage.php');	
											
									} 
								else
								    {  $_SESSION['error'] ="watadza";
                                        header("location:../login.php?x=3");}
					    }
					else
						{   

                         $_SESSION['error'] ="watadza";
                         header("location:../login.php?x=3");
						}	
				
	}
	
		
					 ?>