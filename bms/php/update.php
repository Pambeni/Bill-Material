<?php
 require '../connect2db.php';

$id = $_GET['id'];
$billboard_id = $_GET['billid'];


$sql = "UPDATE `registration` SET `billboard_id` = $billboard_id WHERE `registration`.`id` = $id;";
$query = mysqli_query($con,$sql);


if($query){
    echo '<script type="text/javascript">'; 
    echo "alert('Billboard Registration is complete ');"; 
    echo "window.location.href = '../dashboard.php';";
    echo '</script>'; 
}
?>