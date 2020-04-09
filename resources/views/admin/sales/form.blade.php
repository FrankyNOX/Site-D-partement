<?php
  $title = isset($item) ? $item->name: "creation d'une classe";
  $img_url = (isset($item) ? $item->picture : "/images/avartar/image10.jpg");?>
{!! Form::myInput('text', 'name', 'Nom', ['required']) !!}
{!! Form::myInput('text', 'students', "Nombre d'etudiants", ['required']) !!}
{!! Form::myInput('text', 'subjects', "Nombre de matieres", ['required']) !!}
{!! Form::myFileImage('picture', 'Image', $img_url) !!}
