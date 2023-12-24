<?php
require "bd.php";
//выбираем с таким же логином, что и введенный
    $sel = "SELECT * FROM users WHERE Login = '$Login'";
    $res = mysql_query($sel); 
    if(!$res)
    {
        //добавляем в бд
        $sql = "INSERT into user (login, email, password) VALUES ('$login', '$email', '$pass')";
        $result = mysql_query($sql);
        if($result)
        {
            echo "Вы зарегистрированы!";
        }
        else 
        {
            echo "Error";
        }
    }
    else
    {
        echo "Пользователь с таким именем существует! ";
    }
    ?>