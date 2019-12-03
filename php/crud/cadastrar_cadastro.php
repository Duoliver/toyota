<?php
    require_once('conectar.php');
    require_once('verificar_sessao.php');

    $nome_cli = $_POST['nome_cli'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $ender = $_POST['ender'];
    $carro = $_POST['carro'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    if ($carro == 'true') {
        $sql= "insert into toyota.cadastro (nome_cli, telefone, email, ender, carro, marca, modelo, ano) values ('$nome_cli', '$telefone', '$email', '$ender', $carro, '$marca', '$modelo', $ano);";
    } else {
        $sql= "insert into toyota.cadastro (nome_cli, telefone, email, ender, carro) values ('$nome_cli', '$telefone', '$email', '$ender', $carro);";
    }

    echo "insert into toyota.cadastro (nome_cli, telefone, email, ender, carro, marca, modelo, ano) values ('$nome_cli', '$telefone', '$email', '$ender', $carro, '$marca', '$modelo', $ano);";
    //montar o comando SQL que vai gravar os dados na tabela cadastro

    //executar/gravar os dados na tabela
    mysqli_query($conexao,$sql) or die(mysqli_connect_error());

    $ultimocod=mysqli_insert_id($conexao);

    $msg= urlencode('Seu cadastro foi realizado!');
    header("location: ../cadastro.php?retorno=$msg&erro=false");
?>   