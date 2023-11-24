<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashbord\Services\StoreServicesRequist;
use App\Http\Requests\Dashbord\Services\UpdateServicesRequist;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create(){
        return view("Dashbord.services.create");
    }
    public function store(StoreServicesRequist $storerequest)
    {
        services::create([
            'name'=> $storerequest->name,
            'describtion'=> $storerequest->describtion,
            'service_cost'=> $storerequest->service_cost,
            
        ]);

        return redirect()->route('show.services');
}
public function show(Request $request){
    $services= services::get();
    return view('Dashbord.services.show',compact('services')) ;
}
public function edit($Room_id){
    $services = services::find($Room_id);

    return view('Dashbord.services.edit', compact('services'));
}
public function update($id ,UpdateServicesRequist $request) 
{
    $services = services::where('id',$id)->first();
    $services->update([
        'name'=> $request->name,
            'describtion'=> $request->describtion,
            'service_cost'=> $request->service_cost,
    ]);
    return redirect()->route('show.services');
}
public function delete($services_id)
{
    $room= services::find($services_id);
    $room->delete();
    return redirect()->back();
}
}
