<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['subject_id','name','description','picture'];

    public static function boot() {
        parent::boot();
        static::deleting(function($chapter) {
             $chapter->lessons()->delete();
        });
    }

    /*__________________________________________________________________________________________________________________________
   |
   | Relations avec les autres modeles.
   |__________________________________________________________________________________________________________________________
   */
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }


}
