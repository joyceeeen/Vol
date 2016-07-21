<?php
error_reporting(0);
require "init.php";

$name = $_POST["name"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$email = $_POST["email"];
$user = $_POST["user"];
//$encrypted_pw = md5($password);

$result = "SELECT * FROM `user_info` WHERE `email`= '".$email."';";

$check = mysqli_fetch_array(mysqli_query($con,$result));

if(isset($check)){

 echo '0';

}

else {
$sql = "INSERT INTO `user_info` (`id`,`name`,`gender`,`email`,`password`, `user`) VALUES (NULL, '".$name."', '".$gender."', '".$email."','".$password."', '".$user."');";
	if (!mysqli_query($con, $sql)){
      	echo '{"message":"Unable to save the data to the database."}';
      }
      $sql2 = "SELECT * FROM user_info WHERE email = '".$email."';";
      $result2 = mysqli_query($con, $sql2);
      $response = array();
      while ($row = mysqli_fetch_array($result2)) {
        $response = array("id"=>$row[0],"name"=>$row[1],"gender"=>$row[2],"email"=>$row[3], "password"=>$row[4], "user"=>$row[5]);
        echo json_encode(array("user_data"=>$response));
  }
}
mysqli_close($con);
?>
