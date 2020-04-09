<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
protected $fillable = ['user_id','forum_id','content'];

    /*__________________________________________________________________________________________________________________________
    |
    | Relations avec les autres modeles.
    |__________________________________________________________________________________________________________________________
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }
}
