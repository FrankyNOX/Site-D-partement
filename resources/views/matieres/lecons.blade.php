@extends('templates/default')
@section('meta-title')
    {{$chapitre->name}}
@endsection

@section('content')
    <div class="ui grid">
        <div class="ui three wide column"></div>
        <div class="ui ten wide column">
            <div class="ui two wide cards">
                @forelse($lecons as $lecon)
                        <div class="card">
                            <div class="content">
                                <img class="right floated mini ui image" src="{{$lecon->picture}}">
                                <div class="header">
                                            {{$lecon->name}}
                                        </div>
                                <div class="meta">
                                    Mis en ligne {{$lecon->created_at->diffForHumans()}}
                                        </div>
                                <div class="description">
                                           {{$lecon->description}}
                                        </div>
                            </div>
                            <div class="extra content">
                                <div class="ui grid">
                                    <div class="ui nine wide column"></div>
                                    <div class="ui seven wide column">
                                      <a href="{{ route('lecon',[$lecon->id]) }}"> <div class="ui basic  green button">Suivre cette leçon</div> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                @empty
                @endforelse
            </div>
            </div>
        </div>
        <div class="ui two wide column"></div>



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