<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','title','sale_id','email', 'password', 'role', 'active', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'email'    => "required|email|unique:users,email,$id",
            'password' => 'nullable|confirmed',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
      * Get user role name
      *
      * $return string
      */
    public function rolename()
    {
        return config('variables.role')[$this->attributes['role']];
    }

    public function titlename()
    {
        return config('variables.title')[$this->attributes['title']];
    }

    /**
      * Find out if user has a specific role
      *
      * $return boolean
      */
     public function hasRole($roles)
     {
        return in_array($this->rolename(), explode("|", $roles));
     }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function setPasswordAttribute($value='')
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAvatarAttribute($value)
    {
        if (!$value) {
            //return 'http://placehold.it/160x160';
            return url('/') . config('variables.avatar.public') . 'avatar0.png';
        }

        return url('/') . config('variables.avatar.public') . $value;
    }


    /*
    |------------------------------------------------------------------------------------
    | Boot
    |------------------------------------------------------------------------------------
    */
    public static function boot()
    {
        parent::boot();
        static::updating(function($user)
        {
            $original = $user->getOriginal();

            if (\Hash::check('', $user->password)) {
                $user->attributes['password'] = $original['password'];
            }
        });
    }
    /*__________________________________________________________________________________________________________________________
     |
     | Relations avec les autres modeles, le modeles users ne posedentque des realtion de un a plusieurs avec les autres modeles.
     |__________________________________________________________________________________________________________________________
     */

    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function subject()
    {
        return $this->hasMany('App\Subject');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
