@extends('templates/default')
@section('meta-title')
    Bienvenue au ginfo
@endsection
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/carrousel/03.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/carrousel/02.jpg')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/carrousel/04.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/carrousel/06.webp')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  <br> <br>
    <div class="ui grid">
        <div class="two wide column"></div>
        <div class="twelve wide column">
            <h1>Département de Genie Informatique</h1>
            <p class="ui justified container">
                Les programmes du Département d'informatique et de génie logiciel ont été conçus en fonction des besoins du marché du travail. On peut y étudier à son rythme, souvent à distance, et profiter de stages en industrie rémunérés.
                Internet et applications web, systèmes d'information organisationnels, génie logiciel, multimédia et jeux vidéo, systèmes intelligents, affaires électroniques, sécurité informatique; autant de domaines de pointe qui promettent des défis captivants. De plus, participez à des compétitions enlevantes grâce au récent laboratoire en sécurité informatique!
            </p>
            <br>
            <h2>Actualites</h2>
            <br>
            <div class="ui grid">
            <div class="eight wide column">
                <div class="ui items">
                    <div class="item">
                        <div class="ui small image">
                            <img src="{{asset('images/avartar/image0.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrowhead Valley Camp</font></font></div>
                            <div class="meta">
                                <span class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1200 $ </font></font></span>
                                <span class="stay"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 mois</font></font></span>
                            </div>
                            <div class="description">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="{{asset('images/avartar/image4.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buck's Homebrew Stayaway</font></font></div>
                            <div class="meta">
                                <span class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000 $ </font></font></span>
                                <span class="stay"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 semaines</font></font></span>
                            </div>
                            <div class="description">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <div class="ui items">
                    <div class="item">
                        <div class="ui small image">
                            <img src="{{asset('images/avartar/image6.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrowhead Valley Camp</font></font></div>
                            <div class="meta">
                                <span class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1200 $ </font></font></span>
                                <span class="stay"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 mois</font></font></span>
                            </div>
                            <div class="description">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="{{asset('images/avartar/image10.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buck's Homebrew Stayaway</font></font></div>
                            <div class="meta">
                                <span class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000 $ </font></font></span>
                                <span class="stay"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 semaines</font></font></span>
                            </div>
                            <div class="description">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="two wide column"></div>
    </div>

@endsection
@section('css')
@endsection
@section('js')

<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>
    @endsection
