<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id','lesson_id','content'];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->user_id = auth()->id();
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
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');

    }


}
