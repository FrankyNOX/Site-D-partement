<?php
$title = isset($item) ? $item->name: "Ajout d''un chapitre";
$img_url = (isset($item) ? $item->picture : url('/') . config('variables.avatar.public') . 'avatar0.png');
?>

{!! Form::mySelect('subject_id', 'Matieres',  App\Subject::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::myInput('text', 'name', 'Nom', ['required']) !!}
{!! Form::myInput('text', 'description', 'Description', ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}
