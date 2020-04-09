@extends('admin.adminlayout')

@section('page-header')
    Dashboard <small>Home</small>
@stop

@section('content')

    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default"  >
                <div class="panel-body" >
                    Bienvenue {{ Auth::user()->title." ".Auth::user()->firstname." ".Auth::user()->lastname }}
                </div>
            </div>
        </div>
    </div>
@stop
