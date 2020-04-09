<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Comment;
use App\Lesson;
use App\Sale;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatieresController extends Controller
{
    public function matieres()
    {
       $subjects = Subject::where('sale_id',Sale::where('id',User::where('id',Auth::id())->pluck('sale_id')->toArray())->pluck('id')->toArray())->get();
       $user = User::findOrFail(Auth::id());
       return view('matieres.matiere',compact('subjects','user'));
    }

    public function chapitres($id)
    {
        $chapitres = Chapter::where('subject_id',$id)->get();
        $subject = Subject::findOrFail($id);
        return view('matieres.chapitre',compact('chapitres','subject'));
    }
    public function lecons($id)
    {
        $lecons = Lesson::where('chapter_id',$id)->get();
        $chapitre = Chapter::findOrFail($id);
        return view('matieres.lecons',compact('lecons','chapitre'));
    }
    public function lecon($id)
    {
        $lecon = Lesson::findOrFail($id);
        $comments = Comment::with('user')->where('lesson_id',$lecon->id)->latest()->get();
        return view('matieres.lecon',compact('lecon','comments'));
    }

}
