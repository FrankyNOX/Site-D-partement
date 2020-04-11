<?php

$title = isset($item) ? $item->name: "Ajout d''un chapitre";
$img_url = (isset($item) ? $item->picture : "/images/avartar/image10.jpg");

?>
@if (auth()->user()->hasRole('Superadmin|Admin'))
{!! Form::mySelect('subject_id', 'Matieres',  App\Subject::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
@else
    {!! Form::mySelect('subject_id', 'Matieres',  App\Subject::where('user_id',Auth::id())->pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
    @endif
{!! Form::myInput('text', 'name', 'Nom', ['required']) !!}
{!! Form::myTextArea('description', 'Description', ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}
