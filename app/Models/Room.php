<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'room_number',
        'room_type',
        'room_cost',
        'room_availability',
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
