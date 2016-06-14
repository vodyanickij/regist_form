<!DOCTYPE HTML>
<html>
<head>
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    
    
    <div id = "login">
            <form action="views/login.php" method="post">
            <label>Ваш логин:</label>
            <input type="text" name="login" size="15" maxlength="15" /><br /><br />
            <label>Ваш пароль:</label>
            <input type="password" name="password" size="15" maxlength="15"/><br/><br />
            <input type="submit" value = "Войти" name="submit"/><br />
            <hr/>
            <a href="reg.php">Регистрация</a>
            </form>
    </div>
    
</body>
</html>
