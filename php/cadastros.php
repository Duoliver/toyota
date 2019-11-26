<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Toyota - Dashboard</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../lib/jquery-ui/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="../lib/materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <?php
        require('navbar_dashboard.php');
    ?>

    <div class="container">

        <h1>DASHBOARD</h1>
        <br>

        <h4>CADASTROS</h4>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th><i class="material-icons">backup</i></th>
                    <th><i class="material-icons">account_circle</i></th>
                    <th><i class="material-icons">phone</i></th>
                    <th><i class="material-icons">email</i></th>
                    <th><i class="material-icons">location_on</i></th>
                    <th><i class="material-icons">directions_car</i></th>
                    <th><i class="material-icons">menu</i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('crud/conectar.php');
                    $sql="select * from cadastro order by cod_cli desc";
                    $res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());    

                    while ($linha = mysqli_fetch_row($res)) {
                        $cod =      $linha[0];
                        $telefone = $linha[1];
                        $nome =     $linha[2];
                        $email =    $linha[3];
                        $ender =    $linha[4];
                        $carro =    $linha[5];
                        $marca =    $linha[6];
                        $modelo =   $linha[7];
                        $ano =      $linha[8];

                        if($carro == 1) {
                            $carro = $ano.' '.$marca.' '.$modelo;
                        } else {
                            $carro = 'Não possui';
                        }

                        echo "
                            <tr>
                                <td>$cod</td>
                                <td>$nome</td>
                                <td>$telefone</td>
                                <td>$email</td>
                                <td>$ender</td>
                                <td>$carro</td>
                                <td>
                                    <form action='crud/excluir_cadastro.php' method='POST'>
                                        <input type='hidden' name='codigo' value=$cod>
                                        <button class='btn-flat'><i class='material-icons'>delete_forever</i></button>
                                    </form>
                                </td>
                            </tr>
                        ";
                    }
                ?> 
            </tbody>
        </table>
        
    </div>
    <footer class="z-depth-1">
        <img src="../img/logo.png">
        <a href="https://www.toyota.com.br">Site principal <i class="material-icons">open_in_new</i></a>
    </footer>

    <script type="text/javascript" src="../lib/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../lib/materialize/js/materialize.min.js"></script>
    <script>
        $(function() {
            $('.sidenav').sidenav();
        });
</script>
</body>

</html>