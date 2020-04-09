@extends('templates/default')
@section('meta-title')
    {{$lecon->name}}
@endsection

@section('content')
    <div class="ui grid">
        <div class="ui two wide column"></div>
        <div class="ui twelve wide column">

            <div class="ui items">
                <div class="item">
                    <a class="ui small image">
                        <img src="{{$lecon->picture}}">
                    </a>
                    <div class="content">
                        <a class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$lecon->name}}</font></font></a>
                        <div class="description">
                            <p>{!! $lecon->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <a class="header">Cute Dog</a>
                        <div class="description">
                            <p>{!! $lecon->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui threaded comments">
                <h3 class="ui dividing header">commentaires</h3>
                @foreach($comments as $comment)

                    <div class="comment">
                        <a class="avatar">
                            <img src="{{$comment->user->avatar}}">
                        </a>
                        <div class="content">
                            <a class="author">{{$comment->user->title.''.$comment->user->firstname.''.$comment->user->lastname}}</a>
                            <div class="metadata">
                                <span class="date"> {{$comment->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="text">
                                {{$comment->content}}
                            </div>
                            <div class="actions">
                                <a class="reply"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Réponse</font></font></a>
                            </div>
                        </div>
                    </div>

                @endforeach

                <form class="ui reply form" action="{{route('admin.comments.store')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="lesson_id" value="{{$lecon->id}}">
                    <div class="field">
                        <textarea name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info" style="width:100px;"><i class="icon edit"></i>Envoyer</button>
                </form>
            </div>

        </div>
    </div>



@endsection

@section('css')
@endsection
@section('js')
@endsection