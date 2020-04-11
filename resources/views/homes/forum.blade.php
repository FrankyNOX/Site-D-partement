@extends('templates/default')
@section('meta-title')
    Bienvenue au ginfo
@endsection
@section('content')

    <div class="container py-5 px-4">

        <div class="row rounded-lg overflow-hidden shadow">

            <!-- Chat Box-->
            <div class="col-12 px-0">

                <div class="px-4 py-5 chat-box bg-white">
                    @foreach($messages as $message)
                        @if($message->user_id == \Illuminate\Support\Facades\Auth::id())
                            <!-- Reciever Message-->
                                <div class="media w-50 ml-auto mb-3">
                                    <div class="media-body">
                                        <div class="bg-primary rounded py-2 px-3 mb-2">
                                            <p class="text-small mb-0 text-white">{{$message->content }}</p>
                                        </div>
                                        <p class="small text-muted"> {{$message->created_at->diffForHumans()}} </p>
                                    </div>
                                </div>
                        @else
                            <!-- Sender Message-->
                                <div class="media w-50 mb-3"><img src="{{$message->user->avatar}}" alt="user" width="50" class="rounded-circle">
                                    <div class="media-body ml-3">
                                        <div class="bg-light rounded py-2 px-3 mb-2">
                                            <p class="text-small mb-0 text-muted">{{$message->content }}</p>
                                        </div>
                                        <p class="small text-muted">{{$message->created_at->diffForHumans()}} | {{$message->user->titlename().' '.$message->user->firstname.' '.$message->user->lastname }}</p>
                                    </div>
                                </div>
                        @endif
                        @endforeach

                </div>

                <!-- Typing area -->
                <form  action="{{route('admin.messages.store')}}" method="post" class="bg-light">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="hidden" name="forum_id" value="{{$forum->id}}">
                        <input type="text" name="content" placeholder="Taper a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                        <div class="input-group-append">
                            <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>

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
