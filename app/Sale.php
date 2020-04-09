<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['name','students','subjects','picture'];

    /*__________________________________________________________________________________________________________________________
   |
   | Relations avec les autres modeles.
   |__________________________________________________________________________________________________________________________
   */
    public function subject()
    {
        return $this->hasMany('App\Subject');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
