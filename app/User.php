<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pai()
    {
        return $this->belongsTo(self::class, 'pai_id');
    }

    public function filhos(){
        return $this->hasMany(self::class, 'pai_id')->where('id', '!=', $this->id)->orderBy('name');
    }

}
