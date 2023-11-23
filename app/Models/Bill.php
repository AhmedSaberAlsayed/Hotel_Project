<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'date_from',
        'date_to',
        'payment_method',
        'user_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);        
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class,'book_id');        
    }

}
