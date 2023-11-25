<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashbord\Rooms\StoreRoomsRequist;
use App\Http\Requests\Dashbord\Rooms\UpdateRoomsRequist;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create(){
        return view("Dashbord.Rooms.create");
    }
    public function store(StoreRoomsRequist $storerequest)
    {
        Room::create([
            'room_number'=> $storerequest->room_number,
            'room_type'=> $storerequest->room_type,
            'room_cost'=> $storerequest->room_cost,
            'room_availability'=> $storerequest->room_availability,
        ]);
        return redirect()->route('show.room');
}
public function show(Request $request){
    $Rooms= Room::get();
    return view('Dashbord.Rooms.show',compact('Rooms')) ;
}
public function edit($Room_id){
    $Room = Room::find($Room_id);

    return view('Dashbord.Rooms.edit', compact('Room'));
}
public function update($id ,UpdateRoomsRequist $request) 
{
    $Room = Room::where('id',$id)->first();
    $Room->update([
        'room_number'=> $request->room_number,
            'room_type'=> $request->room_type,
            'room_cost'=> $request->room_cost,
            'room_availability'=> $request->room_availability,
    ]);
    session()->flash('done','department deleted');
    return redirect()->route('show.room');
}
public function delete($Room_id)
{
    $room= Room::find($Room_id);
    $room->delete();
    return redirect()->back();
}
}
