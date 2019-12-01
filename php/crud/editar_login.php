<?php
    require_once ('conectar.php');
    // require_once('./verificar_sessao.php');
    //pegar os dados que vieram do formulario
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $data_old  = $_POST['data'];

    $data_old = explode("/", $data_old);
    $ano = $data_old[2];
    $mes = $data_old[1];
    $dia = $data_old[0];
    $data = $ano."-".$mes."-".$dia;
    //montar SQL para atualizar registro

    
    $sql="update toyota.login set data='$data', senha='$senha' where usuario='$usuario';";
    mysqli_query($conexao,$sql);
    //voltar para formulario de atualização e Mostrar msg
    $msg= urlencode("Atualização realizada com sucesso!");
    header ("location: ../admins.php?retorno='$msg'");
?>