@extends('templates/default')
@section('meta-title')
    {{$subject->name}}
@endsection

@section('content')
    <div class="ui grid">
    <div class="ui three wide column"></div>
    <div class="ui ten wide column">
        <div class="ui four wide divided items">
        @forelse($chapitres as $chapitre)
                <div class="item">
                    <div class="image">
                        <img src="{{$chapitre->picture}}">
                    </div>
                    <div class="content">
                        <a class="header">{{$chapitre->name}}</a>
                        <div class="meta">
                            <span class="cinema">Mis en ligne {{$chapitre->created_at->diffForHumans()}}</span>
                        </div>
                        <div class="description">
                            <p>
                                {{$chapitre->description}}
                            </p>
                        </div>
                        <div class="extra">
                            <div class="ui right floated primary button">
                                    <a class="a"  href="{{ route('lecons',[$chapitre->id]) }}"> Suivre ce chapitre
                                        <i class="right chevron icon"></i>
                                    </a>
                            </div>
                        </div>
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
    <style>
        .a,.a:hover{
            color: white;
        }
    </style>
@endsection
@section('js')
@endsection