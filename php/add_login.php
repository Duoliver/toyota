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

        <h4>ADICIONAR LOGIN</h4>
        <form action="crud/cadastrar_login.php" method="POST">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="login" type="text" name="login" class="validate">
                    <label for="login">Login</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">chevron_right</i>
                    <input id="senha" type="password" name="senha" class="validate">
                    <label for="senha">Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" id="datepicker" name="data">
                    <label for="datepicker">Data</label>
                </div>
                <button 
                    class="btn waves-effect waves-light" 
                    name="sub"
                    value="login"
                    type="submit"
                >Cadastrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
        <?php
            if (isset ($_GET['retorno'])) {
                $msg = $_GET['retorno'];
                echo '<h2 class="green-text" style="text-align: center" >'.$msg.'</h2>';
            }
        ?>
        
    </div>
    <footer class="z-depth-1">
        <img src="../img/logo.png">
        <a href="https://www.toyota.com.br">Site principal <i class="material-icons">open_in_new</i></a>
    </footer>

    <script type="text/javascript" src="../lib/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../lib/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="../lib/jquery-ui/jquery-ui.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });

        $(function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'dd/mm/yy'
            });
        } );

    </script>
</body>

</html>