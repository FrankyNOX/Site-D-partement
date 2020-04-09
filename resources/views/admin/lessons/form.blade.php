<?php
 $title = isset($item) ? $item->name: "ajouter une lesson";
 $img_url = (isset($item) ? $item->picture : "/images/avartar/image10.jpg");
  $subjects = App\Subject::with('user','sale')->where('user_id',Auth::id())->pluck('id')->toArray();

?>
@if (auth()->user()->hasRole('Superadmin|Admin'))
{!! Form::mySelect('chapter_id', 'Chapitre', App\Chapter::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
@else
    {!! Form::mySelect('chapter_id', 'Chapitre', App\Chapter::whereIn('subject_id',$subjects)->pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
    @endif
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{!! Form::myInput('text', 'description', 'Description', ['required']) !!}
{!! Form::myInput('text', 'content', 'Contenue', ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}

