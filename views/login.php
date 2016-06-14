<?php

include("../bd.php");
session_start();

if(isset($_POST['submit']))
{
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($login) or empty($password)){
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    connect();
    
    $password = hash('sha1', $password.$login);
    $query = mysql_query("SELECT * FROM  `users` WHERE login = '$login'");
    while($logpass = mysql_fetch_array($query)){
        if( $logpass['pass'] == $password){
$_SESSION['login']=$logpass["login"]; 
    $_SESSION['id']=$logpass["id"];
            echo "Вы успешно вошли на сайт! <br><a href='../index.php'>Главная страница</a>";
        }else{
            echo "Извините, введённый вами логин или пароль неверный.";
        }
    }
}
?>