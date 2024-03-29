<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "webtech"; 


function getConnection()
{
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $con = mysqli_connect($servername, $username, $password, $dbname);
    return $con;
}

?>