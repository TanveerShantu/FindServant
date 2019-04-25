<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('config.php');
//include("auth.php");
?>

       <?php
        if(isset($_GET['id']))
        {
        $id=$_GET['id'];


        $result=mysqli_query($con,"select *from servant_info where id=$id");
            $res=$result->fetch_assoc();




        $name=$res['name'];
        $email=$res['email'];
        $phone_number=$res['phone_number'];
        $adress=$res['adress'];
        $age=$res['age'];
        $salary=$res['salary'];




        $result=mysqli_query($con,"INSERT INTO admin (name,email,phone_number,adress,age,salary) values('$name','$email','$phone_number','$adress',' $age','$salary')");


            $delete=mysqli_query($con,"delete from servant_info where id=$id");

        if($result)
        {
        header("Location: ServantList.php");
        //echo "<script>location='ServantList.php'</script>";
        }


        }
        ?>



