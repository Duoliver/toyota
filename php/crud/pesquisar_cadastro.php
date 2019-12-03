<?php
    require_once('conectar.php');
    require_once('verificar_sessao.php');
    
    $filtro = $_POST['filtro'];
    $telefone = $_POST['telefone'];

    if($filtro == "por_telefone") {
        $retorno = "4";
        header ("location: ../cadastros.php?filtro={$retorno}&&telefone={$telefone}");
    } else {
        switch ($filtro) {
            case "todos":
                $retorno = "1";
                break;
            case "sem_carro":
                $retorno = "2";
                break;
            case "possui_toyota":
                $retorno = "3";
                break;
        }
        header ("location: ../cadastros.php?filtro=$retorno");
    }
?>