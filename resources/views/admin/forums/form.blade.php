<?php
$title = isset($item) ? $item->name: "Ajout d''un forum";
$img_url = (isset($item) ? $item->picture : url('/') . '/files/avatar/' . 'avatar0.png');
?>

{!! Form::mySelect('subject_id', 'Matieres',  [0 => 'root'] +  App\Subject::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::mySelect('sale_id', 'Classes',  [0 => 'root'] +  App\Sale::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::myInput('text', 'name', 'Nom', ['required']) !!}
{!! Form::myTextArea('description', 'Description', ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}
