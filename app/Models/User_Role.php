<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'admin	',
        'employee',
        'client',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
