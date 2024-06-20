<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
class UsersRegister extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    use AuthenticatableTrait;
    protected $primaryKey = 'id'; // Set the custom primary key
    public $incrementing = false; // Allow Eloquent to increment the primary key
    protected $fillable = [
    'user_id',
    'first_name',
    'last_name',
    'email',
    'phone',
    'address',
    'image',
    'password',
    'gender',
    'user_type'
  ];


}
