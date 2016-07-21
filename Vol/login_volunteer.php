<?php
error_reporting(0);
require "init.php";
 
$email= $_POST["email"];
$password = $_POST["password"];

 

 
$sql = "SELECT * FROM `user_info` WHERE `email`='".$email."' AND `password`='".$password."';";
 

$check = mysqli_fetch_array(mysqli_query($con,$sql));
 
if(!isset($check)){
 
 echo '0';

//if username/password not exist (okay na to) 

}

else if (isset($check)) {
//if okay


$result = mysqli_query($con, $sql);
$response = array();
 
while($row = mysqli_fetch_array($result)){
    $response = array("id"=>$row[0],"name"=>$row[1],"gender"=>$row[2],"email"=>$row[3], "password"=>$row[4], "user"=>$row[5]);
}
 
echo json_encode(array("user_data"=>$response));


}

else {
// if no connection
  echo '-1';

}



 
?>