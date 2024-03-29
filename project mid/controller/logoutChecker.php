<?php 

session_start();

$_SESSION['Username'] = "";
session_destroy();
if(isset($_COOKIE["UserEmail"]) && isset( $_COOKIE["UserPass"]))
{
    setcookie('UserEmail',"", time()-1);
    setcookie('UserPass', "", time()-1);
    header("location: ../view/sing in.php" );
}
elseif(!isset($_COOKIE["UserEmail"]) && !isset( $_COOKIE["UserPass"]))
{
    header("location: ../view/sing in.php" );
}


?>