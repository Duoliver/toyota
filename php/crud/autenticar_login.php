<?php
    //conexao com o banco de dados
    require_once('conectar.php');
    if (isset($_POST['sub']) && !empty($_POST['sub'])) {
        //pegar os dados do formulario (via post)
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $data_old  = $_POST['data'];

        $data_old = explode("/", $data_old);
        $ano = $data_old[2];
        $mes = $data_old[1];
        $dia = $data_old[0];
        $data = $ano."-".$mes."-".$dia;


        //testar com o banco de dados
        $sql = "select * from toyota.login where usuario='$login' and senha='$senha' and data='$data';";
        $res = mysqli_query($conexao,$sql) or (mysqli_connect_error('ERRO'));
        $num = mysqli_num_rows($res);

        if ($num > 0) {
            session_start();
            $_SESSION['login'] = 'ok';
            header("location: ../cadastros.php");
        } else {
            $msg = urlencode('Dados invalidos!');
            header("location: ../login.php?retorno=$msg");
        }
    } else {
        //o cara chegou aqui sem passar pelo form de login
        $msg = 'Acesso negado - Efetue o login';
        header("location: ../login.php?retorno=$msg");
    }
?>