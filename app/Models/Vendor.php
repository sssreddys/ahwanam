<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
class Vendor extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $primaryKey = 'id'; // Set the custom primary key
    public $incrementing = false; // Allow Eloquent to increment the primary key
    protected $fillable = [
    'vendor_id',
    'first_name',
    'last_name',
    'email',
    'phone',
    'address',
    'image',
    'password',
    'gender',
    'vendor_type'
  ];





}
