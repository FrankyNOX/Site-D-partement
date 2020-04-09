<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <meta
        name="description"
        content="@yield('meta-description')"
    />
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template" />
    <meta name="author" content="PPType" />
    <meta name="theme-color" content="#ffffff" />
    <title>@yield('meta-title')</title>


    <link
        rel="stylesheet"
        href="{{asset('dist/semantic.min.css')}}"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{asset('dist/css/bootstrap.min.css')}}"
        type="text/css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: grayscale;
        }

        .ui.center.aligned.container {
            margin-top: 4em;
        }

        p.lead {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 1.3em;
            color: #333333;
            line-height: 1.4;
            font-weight: 300;
        }

        .ui.huge.header {
            font-size: 36px;
        }

        .ui.inverted.menu {
            border-radius: 0;
            flex-wrap: wrap;
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
            display: none;
        }

        .ui.inverted.menu .item {
            color: rgb(157, 157, 157);
            font-size: 16px;
        }

        .ui.inverted.menu .active.item {
            background-color: #080808;
        }
        .logo{
            width: 80px;
        }
        .marge{
            margin-top: 53px ;
        }
        .bleu{
            color: skyblue;
        }
        .back{
            background-color: skyblue;
        }
    </style>
    @yield('css')
</head>

<body id="root">

<div>
    <div class="ui tablet computer only padded grid">
        <div class="ui borderless fluid fixed huge inverted  blue  menu">
            <div class="ui container">
                <a class="active item" href="{{route('home')}}">Acceuil</a>
                <a class="item" href="#root">A propos</a>
                <a class="item" href="#root">Nous contacter</a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input type="text" placeholder="Chercher...">
                            <i class="search link icon"></i>

                        </div>
                    </div>
                    @if(auth()->check())
                        <a href="{{url('matiere')}}" class="ui  item">
                            <i class="book icon"></i> Mes Cours
                        </a>
                        <a href="{{url('logout')}}" class="ui  item">
                           <i class="power off icon"></i> Se déconnecter
                        </a>
                    @else
                        <a href="{{url('login')}}" class="ui  item">
                            <i class="user icon"></i> Se connecter
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="ui mobile only padded grid">
        <div class="ui borderless fluid huge inverted menu">
            <a class="header item" href="#root">Project Name</a>
            <div class="right menu">
                <div class="item">
                    <button class="ui icon toggle basic inverted button">
                        <i class="content icon"></i>
                    </button>
                </div>
            </div>
            <div class="ui vertical borderless fluid inverted menu">
                <a class="active item" href="#root">Home</a>
                <a class="item" href="#root">About</a>
                <a class="item" href="#root">Contact</a>
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Chercher...">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <a href="{{url('login')}}" class="ui  item">
                    Se connecter
                </a>
                <a href="{{url('logout')}}" class="ui  item">
                    Se déconnecter
                </a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        </div>
    </div>
    <div class="marge">
        <div class="ui message ">
            <div class="ui grid">
                <div class="two wide column"></div>
                <div class="ten wide column">
                    <div class="ui fluid container">
                        <h3 class="bleu">ECOLE NORMALE D'ENSEIGNEMENT TECHNIQUE</h3>
                        <h4 class="bleu">DEPARTEMENT DE GENIE INFORMATIQUE</h4>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui container">
                        <img class="logo" src="{{asset('images/logos/LogoEnset.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui tablet computer only padded grid">
    <div class="ui borderless fluid huge  blue menu">
        <div class="ui container">
            <div class="ui simple dropdown item">
                <div class="bleu"> PROGRAMMES ET COURS</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Premier Cycle</div>
                    <div class="item">Deuxieme Cycle</div>
                    <div class="item">Formation Continue</div>
                    <div class="item">CPS</div>
                </div>
            </div>
            <div class="ui simple dropdown item">
                <div class="bleu">DEPARTEMENT ET PROFFESSEURS</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Presentation du departement</div>
                    <div class="item">Actualites</div>
                    <div class="item">Calendrier</div>
                    <div class="item">Professeur et personnel</div>
                    <div class="item">Reglement et documents officiels</div>
                </div>
            </div>
            <div class="ui simple dropdown item">
                <div class="bleu"> SERVICE</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Choice 1</div>
                    <div class="item">Choice 2</div>
                    <div class="item">Choice 3</div>
                </div>
            </div>
            <div class="ui simple dropdown item">
                <div class="bleu">VIE ETUDIANTE</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Club informatique</div>
                    <div class="item">Projets d'etudiants</div>
                    <div class="item">Liens utiles</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="ui mobile only padded grid">
    <div class="ui borderless  fluid huge blue inverted menu">
        <div class="ui borderless fluid huge inverted blue menu">
            <div class="ui container">
                <div class="ui  grid">
                    <div class="eight wide column">
                        <div class="ui eight wide column simple dropdown item">
                            PROGRAMMES ET COURS
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">Premier Cycle</div>
                                <div class="item">Deuxieme Cycle</div>
                                <div class="item">Formation Continue</div>
                                <div class="item">CPS</div>
                            </div>
                        </div>
                        <div class="ui eight wide column simple dropdown item">
                            DEPARTEMENT ET PROFFESSEURS
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">Presentation du departement</div>
                                <div class="item">Actualites</div>
                                <div class="item">Calendrier</div>
                                <div class="item">Professeur et personnel</div>
                                <div class="item">Reglement et documents officiels</div>
                            </div>
                        </div>
                    </div>
                    <div class="eight wide column">
                        <div class="ui eight wide column simple dropdown item">
                            SERVICE
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">Choice 1</div>
                                <div class="item">Choice 2</div>
                                <div class="item">Choice 3</div>
                            </div>
                        </div>
                        <div class="ui eight wide column simple dropdown item">
                            VIE ETUDIANTE
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item">Club informatique</div>
                                <div class="item">Projets d'etudiants</div>
                                <div class="item">Liens utiles</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<br>

<footer class="back">
    <br>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
                    <img class="logo-footer logo" src="{{asset('images/logos/LogoEnset.jpg')}}" alt="logo-footer" data-at2x="assets/img/logo.png">
                    <br>
                    <p>
                        Autoroute de la competence et de l'innovation technologique
                    </p>
                </div>
                <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                    <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                    <p><i class="fab fa-skype"></i> Skype: you_online</p>
                </div>
                <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                    <h3>Suivez Nous</h3>
                    <p>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5 footer-copyright">
                    <p>© 2020 by <a href="https://azmind.com">GUREN LAGAN</a></p>
                </div>
                <div class="col-md-7 footer-menu">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link scroll-link" href="#root"><i class="big caret square up  icon"></i>Haut de pagephp</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('dist/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('dist/semantic.min.js')}}"></script>
<script>
    $('.ui.dropdown')
        .dropdown()
    ;
</script>
<script>
    $(document).ready(function() {
        $(".ui.toggle.button").click(function() {
            $(".mobile.only.grid .ui.vertical.menu").toggle(100);
        });
    });
</script>
<script src="{{'dist/js/bootstrap.min.js'}}"></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
            i[r] ||
            function() {
                (i[r].q = i[r].q || []).push(arguments);
            }),
            (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

    ga("create", "UA-87734989-1", "auto");
    ga("send", "pageview");

</script>
@yield('js')
</body>
</html>
