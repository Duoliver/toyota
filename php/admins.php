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
        <?php
            if (isset ($_GET['retorno'])) {
                $msg = $_GET['retorno'];
                echo '<h2 class="green-text" style="text-align: center" >'.$msg.'</h2>';
            }
        ?>
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th><i class="material-icons">account_circle</i></th>
                    <th><i class="material-icons">date_range</i></th>
                    <th><i class="material-icons">menu</i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('crud/conectar.php');
                    $sql="select usuario, date_format(data, '%d/%m/%Y'), senha from login order by usuario asc;";
                    $res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());    

                    while ($linha = mysqli_fetch_row($res)) {
                        $usuario = $linha[0];
                        $data    = $linha[1];
                        $senha   = $linha[2];

                        echo "
                            <tr>
                                <td>$usuario</td>
                                <td>$data</td>
                                <td>
                                    <div style='display: flex; justify-content: space-between; align-items: center'>
                                        <a href='edit_login.php?usuario={$usuario}&&data={$data}&&senha={$senha}'>
                                            <i class='material-icons'>create</i>
                                        </a>
                                        <form action='crud/excluir_login.php' method='POST'>
                                            <input type='hidden' name='usuario' value='$usuario'>
                                            <button class='btn-flat'>
                                                <i style='font-size: 24px' class='material-icons'>delete_forever</i>
                                            </button>
                                        </form>
                                    </div>
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