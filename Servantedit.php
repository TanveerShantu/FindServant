<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('config.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from servant_info where id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    <p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
    <h1>Update Information</h1>
    <?php
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
        $id=$_REQUEST['id'];
        //$trn_date = date("Y-m-d H:i:s");
        $name =$_REQUEST['name'];
        $phone_number =$_REQUEST['phone_number'];
        $email =$_REQUEST['email'];
        $adress =$_REQUEST['adress'];
        $age =$_REQUEST['age'];
        $salary =$_REQUEST['salary'];
        //$submittedby = $_SESSION["username"];
        $update="update servant_info set  name='".$name."',phone_number='".$phone_number."',email='".$email."',adress='".$adress."',  age='".$age."' ,salary='".$salary."' where id='".$id."'";
        mysqli_query($con, $update);
        $status = "Record Updated Successfully. </br></br><a href='ServantDashboard.php'>View Updated Information</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
    <div>
        <form name="form" method="post" action="">
            <input type="hidden" name="new" value="1" />

            <p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
            <p><input type="text" name="phone_number" placeholder="Enter phone_number" required value="<?php echo $row['phone_number'];?>" /></p>
            <p><input type="email" name="email" placeholder="Enter Email" required value="<?php echo $row['email'];?>" /></p>
            <p><input type="text" name="adress" placeholder="Enter Address" required value="<?php echo $row['adress'];?>" /></p>
            <p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>
            <p><input type="text" name="salary" placeholder="Enter Salary" required value="<?php echo $row['salary'];?>" /></p>
            <p><input name="submit" type="submit" value="Update" /></p>
        </form>
        <?php } ?>


    </div>
</div>
</body>
</html>
