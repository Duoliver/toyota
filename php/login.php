<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Toyota - Hilux de Natal 2019</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../lib/jquery-ui/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="../lib/materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><img src="../img/logo.png" alt="TOYOTA"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="cadastro.php">PARTICIPE</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="cadastro.php">PARTICIPE</a></li>
        <li><a href="login.php">LOGIN</a></li>
    </ul>

    <div class="container">

        <h1>PROMOÇÃO HILUX DE NATAL 2019</h1>
        <br>

        <h4>LOGIN</h4>
        <form action="crud/autenticar_login.php" method="POST">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="login" type="text" name="login" class="validate">
                    <label for="login">Login</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">vpn_key</i>
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
                >Enviar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
        <?php
        if (isset ($_GET['retorno'])) {
            $msg = $_GET['retorno'];
            echo '<h2 class="red-text" style="text-align: center" >'.$msg.'</h2>';
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