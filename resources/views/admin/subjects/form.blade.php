<?php
$title = isset($item) ? $item->name: "Ajouter une matiere";
$img_url = (isset($item) ? $item->picture : "/images/avartar/image10.jpg");
?>
{!! Form::mySelect('sale_id', 'Classe', App\Sale::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::mySelect('user_id', 'Enseignant', App\User::where('role','1' )->pluck('firstname', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::myInput('text', 'name', 'Nom', ['required']) !!}
{!! Form::myInput('text', 'description', 'Description', ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}

