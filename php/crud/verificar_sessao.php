<?php
    error_reporting(E_ALL);

    session_start();
    if (!isset($_SESSION['login']) || $_SESSION['login'] != 'ok') {
        $msg = urlencode('Voce precisa logar primeiro!');
        header("location: http://".$_SERVER['HTTP_HOST']."/toyota/php/login.php?retorno=$msg");
        exit;
    }
?>

