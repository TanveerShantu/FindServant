
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
    $name = stripslashes($_REQUEST['name']); // removes backslashes
    $name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $phone_number = stripslashes($_REQUEST['phone_number']);
    $phone_number = mysqli_real_escape_string($con,$phone_number);
    $adress = stripslashes($_REQUEST['adress']);
    $adress = mysqli_real_escape_string($con,$adress);
    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con,$age);
    $salary = stripslashes($_REQUEST['salary']);
    $salary = mysqli_real_escape_string($con,$salary);

    //$trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into `servant_info` (name,email,phone_number,adress,age,salary) VALUES ('$name','$email','$phone_number','$adress',' $age','$salary')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='ServantLogin.php'>Login</a></div>";
    }
}else{
    ?>
    <div class="form">
        <h1>Registration</h1>
        <form name="Registration" action="" method="post">
            <input type="text" name="name" placeholder="username" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="text" name="phone_number" placeholder="phone_number" required />
            <input type="text" name="adress" placeholder="adress" required />
            <input type="text" name="age" placeholder="age" required />
            <input type="text" name="salary" placeholder="salary" required />
            <input type="submit" name="submit" value="Submit" />
        </form>

    </div>
<?php } ?>
</body>
</html>
