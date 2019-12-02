<?php
    require_once ('conectar.php');
    $usuario = $_POST['usuario'];

    //montar SQL para atualizar registro
    $sql="delete from toyota.login where usuario='$usuario';";
    mysqli_query($conexao,$sql);
    //voltar para formulario de atualização e Mostrar msg
    $msg= "Login excluído com sucesso";
    header ("location: ../admins.php?retorno=$msg");
?>