<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request){
        $Bookings= Booking::get();
        return view('Dashbord.Booking.show',compact('Bookings')) ;
    }
}
