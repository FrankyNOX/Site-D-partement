@extends('admin.adminlayout')

@section('page-header')
  Chapitre <small>nouveau</small>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::open([
                'action' => ['ChaptersController@store'],
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
          @include('admin.chapters.form')
        </div>

      	<div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">Sauvegarder</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.chapters.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Annuler</a>
      	</div>

        {!! Form::close() !!}
    </div>
  </div>
</div>
@stop

@section('js')
<script>
  CKEDITOR.replace( 'description' );
  </script>
@endsection
