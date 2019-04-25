<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM admin WHERE id=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: adminview.php");
?>