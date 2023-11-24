<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'describtion',
        'service_cost',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function booking()
    {
        return $this->hasMany(Booking::class,);        
    }
}
