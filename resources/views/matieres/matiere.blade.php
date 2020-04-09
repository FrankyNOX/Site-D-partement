@extends('templates/default')
@section('meta-title')
    Mes Unités d'enseignements
@endsection


@section('content')

    <div class="ui grid">
        <div class="ui three wide column"></div>
        <div class="ui ten wide column">
            <h2>Bonjour {{$user->title.' '.$user->firstname.' '.$user->lastname}}.</h2> <br> <h3>Voici vous differentes unites d'enseignements ci dessous.</h3>
            <br>
                <div class="ui four wide special cards">
                    @forelse($subjects as $subject )
                        <div class="card">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button"><a href="{{route('chapitre',[$subject->id])}}"> Voir les cours </a></div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{$subject->picture}}">
                            </div>
                            <div class="content">
                                <a class="header">{{$subject->name}}</a>
                                <div class="meta">
                                    <span class="date">Mis en ligne {{$subject->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <a>
                                    <i class="users icon"></i>
                                    2 Members
                                </a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        <div class="ui two wide column"></div>
    </div>


@endsection


@section('css')

@endsection


@section('js')
<script>
    $('.special.cards .image').dimmer({
        on: 'hover'
    });
</script>
@endsection