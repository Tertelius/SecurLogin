<? ob_start();?>
<?php session_start(); ?>
<?php
    /**
     * Мы просто хотим захешировать свой пароль используя настройки по умолчанию.
     * Значит будет использован BCRYPT и результат будет 60 символов длиной.
     *
     * Помните, что алгоритм по умолчанию может измениться в будущем, так что
     * имеет смысл заранее позаботиться о том, чтобы система хранения хешей
     * смогла хранить более 60 символов (255 в самый раз)
     */
    $pass_sec = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
    echo $pass_sec.'<br>';
if(isset($_POST['password']))
{
    $pass = htmlspecialchars($_POST["password"]); //'rasmuslerdorf' ;
    unset($_POST);
    echo 'Пароль: '.$pass.'<br>';
    if (password_verify( $pass, $pass_sec)) {
    echo 'Пароль правильный! '.password_verify( $pass, $pass_sec);
    $host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'scripts/auth.php';
header("Location: http://$host$uri/$extra");
   // header("Location: scripts/auth.php");
    exit();
} else {
    echo 'Пароль неправильный. '.password_verify( $pass, $pass_sec);
//    header('Location: /');
//    exit();
}    
}
    
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link rel="stylesheet" href="public/css/main.css">
    </head>
    <body>
        <!--форма авторизации-->
        
        <!--<form action="scripts/auth.php" method="post">-->
        <form action="index.php" method="post">
<!--            <label>Логин: </label>
            <input type="text" placeholder="Введите логин">-->
            <label>Пароль: </label>
            <input type="password" placeholder="Введите пароль" name="password">
            <button>Войти</button>      
        </form>
            <ol>
            <li>раз </li>
                <ol>
                    <li>раз дыва</li>
                    <li>раз три</li>
                    <li>раз читыри.</li>
                </ol>
            <li>раз </li>
                <ol>
                    <li>раз дыва</li>
                    <li>раз три</li>
                    <li>раз читыри.</li>
                </ol>
            <li>раз </li>
                <ol>
                    <li>раз дыва</li>
                    <li>раз три</li>
                    <li>раз читыри.</li>
                </ol>
            </ol>

        <a href="http://https://html5book.ru/html-lists/" target="_blank">Смотри ссылк</a><br>

    </body>
</html>

<?php

?>


