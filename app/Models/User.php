<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Emadadly\LaravelUuid\Uuids;

class User extends Authenticatable
{
    use Notifiable;

    use Uuids;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'surname',
        'username',
        'phone_number',
        'location',
        'gender',
        'occupation',
        'skills',
        'gender',
        'gender',
        'gender',
        'google_id',
        'avatar_url'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function rules(){
        return [
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
            're_password' => 'required|same:password'
        ];
    }

    //adding mutator to ensure hashed password
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
