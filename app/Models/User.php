<?php

namespace eHOSP\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use \TCG\Voyager\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'email',
        'gender',
        'user_type',
        'age',
        'birth_country',
        'ssn',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
