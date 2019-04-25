
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div>
    <p><a href="index.php">Home</a></p>
</div>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['name'])){

    $name = stripslashes($_REQUEST['name']); // removes backslashes
    $name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);

    //Checking is user existing in the database or not
    $query = "SELECT * FROM `servant_info` WHERE name='$name' and email='$email'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['name'] = $name;
        header("Location: ServantDashboard.php");
    }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='ServantLogin.php'>Login</a></div>";
    }
}





else{
    ?>
    <div class="form">
        <h1>Log In As a Servant</h1>
        <form action="ServantLogin.php" method="post" name="Login">
            <input type="text" name="name" placeholder="username" required />
            <input type="email" name="email" placeholder="email" required />
            <input name="submit" type="submit" value="Login" />
        </form>
        <p>Not registered yet? <a href='ServantRegistration.php'>Register Here</a></p>

    </div>
<?php } ?>


</body>
</html>

