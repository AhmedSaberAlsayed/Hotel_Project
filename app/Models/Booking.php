<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'room_id',
        'services_id',
        'date_from',
        'date_to',
        'member_number',
        'total_amount',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

        public function user()
        {
            return $this->belongsTo(User::class);        
        }
        public function room()
        {
            return $this->belongsTo(Room::class);        
        }
        public function service()
        {
            return $this->belongsTo(services::class);        
        }
        public function bill()
        {
            return $this->hasMany(Bill::class,'book_id');        
        }
}
