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

        <h4>CADASTRO</h4>
        <form action="crud/cadastrar_cadastro.php" method="POST">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nome_cli" type="text" name="nome_cli" class="validate">
                    <label for="nome_cli">Seu nome</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">phone</i>
                    <input id="telefone" type="text" name="telefone" class="validate">
                    <label for="telefone">Telefone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email" name="email" class="validate">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">location_on</i>
                    <input type="text" id="ender" name="ender" class="validate">
                    <label for="ender">Endereço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m6 radio">
                    <div class="radio-title-wrapper">
                        <i class="material-icons" style="font-size: 28px">question_answer</i>
                        <label class="radio-title">Você tem carro?</label>
                    </div>
                    <p>
                        <label>
                            <input class="with-gap" name="carro" value="false" type="radio" checked/>
                            <span class="radio-button">Não</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input class="with-gap" name="carro" value="true" type="radio"/>
                            <span class="radio-button">Sim</span>
                        </label>
                    </p>
                </div>
                <div class="col m6">
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">directions_car</i>
                            <input type="text" id="marca" name="marca" class="validate">
                            <label for="marca">Marca</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix"></i>
                            <input type="number" id="ano" name="ano" class="validate">
                            <label for="marca">Ano</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix"></i>
                            <input type="text" id="modelo" name="modelo" class="validate">
                            <label for="modelo">Modelo</label>
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light">Enviar
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
    <script type="text/javascript" src="../lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../lib/materialize/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });

    </script>
</body>

</html>