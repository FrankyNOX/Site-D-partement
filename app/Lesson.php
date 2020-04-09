<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['chapter_id','name','description','content','picture'];

    /*__________________________________________________________________________________________________________________________
   |
   | Relations avec les autres modeles.
   |__________________________________________________________________________________________________________________________
   */
    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
