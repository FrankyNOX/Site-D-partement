<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable =['sale_id','user_id','name','description','picture'];


    public static function boot() {
        parent::boot();
        static::deleting(function($subject) {
             $subject->chapters()->delete();
             $subject->forum()->delete();
        });
    }


    /*__________________________________________________________________________________________________________________________
   |
   | Relations avec les autres modeles.
   |__________________________________________________________________________________________________________________________
   */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
    public function chapters()
    {
        return $this->hasMany('App\Chapter');
    }
    public function forum()
    {
        return $this->hasOne('App\Forum');
    }
}
