<?php $title = isset($item) ? $item->name: "ajouter  un message" ?>

{!! Form::mySelect('forum_id', 'Forum', App\Forum::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::mySelect('user_id', 'Utilisateur',  App\User::pluck('firstname', 'id')->toArray(), null, ['class'=>'chosen']) !!}
{!! Form::myInput('text', 'content', 'Commentaire', ['required']) !!}
