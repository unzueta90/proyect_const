<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'usr';

    public function roles()
    {
        return $this->belongsToMany(Rol::class);
        //una via pertenece a un solo grupo
    }
    public function rols()
    {
        return $this->belongsToMany(Rol::class, 'usr_rol', 'id_usr', 'id_rol');
        //una via pertenece a un solo grupo
    }
}