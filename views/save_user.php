<?php
include("../bd.php");

if(isset($_POST['submit']))
{
    
    $user = htmlspecialchars(trim($_POST['user']));
    $family = htmlspecialchars(trim($_POST['family']));
    $email = htmlspecialchars(trim($_POST['email']));
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    $form = array($user,$family,$email,$login,$password);
    foreach($form as $s => $value){
        if($value == ""){
            echo 'Заполните поле'; 
            exit;
        }
    }

    $db = connect();

    $res = mysql_query("SELECT `login` FROM `users` WHERE `login` = '$login' ");
    $data = mysql_fetch_array($res);
    if(!empty($data['login'])){
        die("Такой логин уже существует!");
    }

    $password = hash('sha1', $password.$login);
    $query = "INSERT INTO `users` (`user`,`family`,`email`,`login`,`pass`) 
    VALUES('$user','$family','$email','$login','$password') ";
    $result = mysql_query($query);

    if($result == true){
        echo "Вы успешно зарегистрированы! <br><a href='../index.php'>Главная страница</a>";
    }else{
        echo "Error! ----> ". mysql_error();
    }
}
?>