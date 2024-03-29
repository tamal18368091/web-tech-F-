<?php 
    require_once('dbModel.php');

    function singin($useremail, $userpassword){
        $con = dbConnection();
        $sql = "select * from users where email='{$useremail}' and password='{$userpassword}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }