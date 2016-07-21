<?php
error_reporting(0);
require "init.php";


$id = $_POST["id"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$email = $_POST["email"];
$user = $_POST["user"];
//$encrypted_pw = md5($password);

$sql = "UPDATE `lalala`.`user_info` SET `name` = '".$name."', `gender` = '".$gender."', `email` = '".$email."', `password` = '".$password."', `user` = '".$user."' WHERE `user_info`.`id` ='".$id."';";

if(!mysqli_query($con, $sql)){
								echo '{"message":"Unable to save the data to the database."}';

}
else{

echo '{"message":"Saved"}';

}
 
?>