<?php


require('config.php');
//include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    <a href="index.php">Logout</a>
    <h2>Servant Hire List</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Email</strong></th><th><strong>Phone_number</strong></th><th><strong>Address</strong></th><th><strong>Age</strong></th><th><strong>Salary</strong></th></tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sel_query="Select * from admin ORDER BY id desc;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><?php echo $row["phone_number"]; ?></td><td align="center"><?php echo $row["adress"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><?php echo $row["salary"]; ?></td><td align="center"><a href="adminDelete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
            <?php $count++; } ?>
        </tbody>
    </table>


</div>
</body>
</html>
