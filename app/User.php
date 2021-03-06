<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',	'email',	'phone',	'password',	'provider',	'provider_id',	'role_id',	'address',	'status',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roleName()
    {
        return $this->belongsTo('\App\UserRole', 'role_id', 'role_id');
    }
    public function addNew($input)
    {
        $check = static::where('google_id', $input['google_id'])->first();



        if (is_null($check)) {
            return static::create($input);
        }



        return $check;
    }
}
