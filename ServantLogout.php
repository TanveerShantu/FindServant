<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: ServantLogin.php"); // Redirecting To Home Page
}
?>