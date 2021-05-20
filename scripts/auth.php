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
    $pass = htmlspecialchars($_POST["password"]); //'rasmuslerdorf' ;
    echo 'Пароль: '.$pass.'<br>';
    if (password_verify( $pass, $pass_sec)) {
    echo 'Пароль правильный! '.password_verify( $pass, $pass_sec);
    header("Location: /scripts/calc.php");
    exit();    
} else {
    echo 'Пароль неправильный. '.password_verify( $pass, $pass_sec);
    header("Location: /index.php");
    exit();    
}
?>

