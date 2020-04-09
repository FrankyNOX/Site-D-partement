<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable =['subject_id','name','description','picture'];

    /*__________________________________________________________________________________________________________________________
   |
   | Relations avec les autres modeles.
   |__________________________________________________________________________________________________________________________
   */
    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }


}
