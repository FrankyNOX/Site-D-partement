@extends('templates/default')
@section('meta-title')
    Bienvenue au ginfo
@endsection
@section('content')

    <div class="container py-5 px-4">

        <div class="row rounded-lg overflow-hidden shadow">
            <!-- Users box-->
            <div class="col-12 px-0">
                <div class="bg-white">

                    <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">Discusions</p>
                    </div>
                    <div class="messages-box">
                        <div class="list-group rounded-0">
                            <a href="{{route('forum',[$forumclasse->id])}}" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="{{ $forumclasse->picture }}" alt="user" width="100">
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">{{$forumclasse->name }}</h6><small class="small font-weight-bold">{{$forumclasse->created_at->diffForHumans()}}</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">{!! $forumclasse->description  !!}</p>
                                    </div>
                                </div>
                            </a>
                            @foreach($forummatieres as $forummatiere)
                            <a href="{{route('forum',[$forummatiere->id])}}" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                                <div class="media"><img src="{{ $forummatiere->picture }}" alt="user" width="100" >
                                    <div class="media-body ml-4">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <h6 class="mb-0">{{$forummatiere->name }}</h6><small class="small font-weight-bold">{{$forummatiere->created_at->diffForHumans()}}</small>
                                        </div>
                                        <p class="font-italic text-muted mb-0 text-small">{!! $forummatiere->description  !!}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('css')

    <style>
        /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            width: 5px;
            background: #f5f5f5;
        }

        ::-webkit-scrollbar-thumb {
            width: 1em;
            background-color: #ddd;
            outline: 1px solid slategrey;
            border-radius: 1rem;
        }

        .text-small {
            font-size: 0.9rem;
        }

        .messages-box,
        .chat-box {
            height: 510px;
            overflow-y: scroll;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        input::placeholder {
            font-size: 0.9rem;
            color: #999;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection
