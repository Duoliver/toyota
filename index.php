<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Toyota - Hilux de Natal 2019</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="lib/jquery-ui/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="lib/materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><img src="img/logo.png" alt="TOYOTA"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="php/cadastro.php">PARTICIPE</a></li>
                    <li><a href="php/login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="php/cadastro.php">PARTICIPE</a></li>
        <li><a href="php/login.php">LOGIN</a></li>
    </ul>

    <div class="container">

        <div class="carousel carousel-slider z-depth-2">
            <a class="carousel-item" href="#"><img src="img/slide1.jpg"></a>
            <a class="carousel-item" href="#"><img src="img/slide2.jpg"></a>
            <a class="carousel-item" href="#"><img src="img/slide3.jpg"></a>
            <a class="carousel-item" href="#"><img src="img/slide4.jpg"></a>
        </div>

        <h1>PROMOÇÃO HILUX DE NATAL 2019</h1>
        <br>

        <h4>QUEM SOMOS?</h4>
        <p>A história da Toyota já tem a inovação, qualidade e satisfação dos consumidores na sua origem. Com o objetivo de facilitar a vida de sua mãe e milhares de trabalhadores, em 1892 o jovem Sakichi Toyoda apresentou, com apenas 24 anos, o primeiro tear automático do Japão. Sempre em busca de novas tecnologias e maneiras de desenvolver a indústria japonesa, Sakichi conheceu nos Estados Unidos a invenção que iria colocar o seu nome na história: o automóvel. Investindo o lucro de suas invenções em seu sonho e indo contra as críticas de todos, Sakichi incumbiu seu filho Kichiro de construir o primeiro veículo motorizado do Japão. Foi assim que em 1935, Kichiro apresentou ao mundo o protótipo A1 e, em 1937, inaugurou a Toyota Motor Company. Foi o início de uma história que iria atravessar décadas e apresentar ao mundo uma nova forma de fabricar produtos, com uma filosofia de melhoria contínua para oferecer mais satisfação aos consumidores. Hoje a Toyota é a maior montadora do planeta, com atuação em 160 países e conhecida pela sua qualidade, inovação e respeito às pessoas e ao meio ambiente.</p>
        <br>

        <h4>A PROMOÇÃO</h4>
        <p>Para lhe presentear neste natal, desejamos sortear uma de nossas TOYOTA Hilux para vocês!</p>
        <br>

        <div class="call-to-action z-depth-3">
            <h3>CONCORRA A UMA TOYOTA HILUX CABINE DUPLA</h3>
            <a class="waves-effect waves-light btn-large" href="php/cadastro.php">VAMOS LÁ!</a>
        </div>
        <br>

        
    </div>
    <footer class="z-depth-1">
        <img src="img/logo.png">
        <a href="https://www.toyota.com.br">Site principal <i class="material-icons">open_in_new</i></a>
    </footer>

    <script type="text/javascript" src="lib/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="lib/materialize/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        autoplay()

        function autoplay() {
            $('.carousel.carousel-slider').carousel('next');
            setTimeout(autoplay, 4000);
        }

    </script>
</body>

</html>