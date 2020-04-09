<?php $title = isset($item) ? $item->name: "ajouter  un commentaire" ?>

{!! Form::mySelect('lesson_id', 'Lecon', App\Lesson::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::mySelect('user_id', 'Utilisateur',  App\User::pluck('firstname', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::myInput('text', 'content', 'Commentaire', ['required']) !!}
