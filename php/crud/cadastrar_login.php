<?php
    require_once('conectar.php');

    $usuario = $_POST['login'];
    $senha = $_POST['senha'];
    $data_old  = $_POST['data'];

    $data_old = explode("/", $data_old);
    $ano = $data_old[2];
    $mes = $data_old[1];
    $dia = $data_old[0];
    $data = $ano."-".$mes."-".$dia;

    $sql= "insert into toyota.login (usuario, senha, data) values ('$usuario', '$senha', '$data');";

    echo $sql;
    //montar o comando SQL que vai gravar os dados na tabela cadastro

    //executar/gravar os dados na tabela
    mysqli_query($conexao,$sql) or die(mysqli_connect_error());

    $ultimocod=mysqli_insert_id($conexao);

    $msg= urlencode('Admin cadastrado com sucesso');
    header("location: ../add_login.php?retorno=$msg&erro=false");
?>   