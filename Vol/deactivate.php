<?php

error_reporting(0);
require "init.php";
 
$id = $_POST["id"];
//$email = $_POST["email"];


$sql = "DELETE FROM `volunteam`.`user_info` WHERE `user_info`.`id` = '".$id."';";

if (mysqli_query($con, $sql)){
    echo '{"query_result":"1"}';
}



?> 