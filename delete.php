<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: ClientDashboard.php");
?>