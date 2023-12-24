<?php
require "bd.php";
$Login = $_POST["Login"];
$Password = $_POST["Passwor"];
$sql = "INSERT INTO user(Login, Password) VALUES ('$Login', 'Password')";
if($mysqli->query($sql)){
	echo"Данные успешно добавлены";
} else{
echo "Ошибка: " . $mysqli->error; 
}
?>