<?php
    require_once ('conectar.php');
    $codigo = $_POST['codigo'];

    //montar SQL para atualizar registro
    $sql="delete from toyota.cadastro where cod_cli=$codigo;";
    mysqli_query($conexao,$sql);
    //voltar para formulario de atualização e Mostrar msg
    $msg= $sql;
    header ("location: ../cadastros.php?retorno=$msg");
?>