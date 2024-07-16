<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        $hoteles = Hotel::all();
        return view('indexHotel', compact('hoteles'));
    }

    public function create(){
        
        return view('createHotel');
    }

    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->nombre = $request->nombre;
        $hotel->direccion = $request->direccion;
        $hotel->tfon = $request->tfno;
        $hotel->save();
    
        return redirect()->route('hotel.index');
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('showHotel', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('editHotel', compact('hotel'));
    }

    public function update(Request $request, $id){

        $hotel = Hotel::findOrFail($id);
        $hotel->nombre = $request->nombre;
        $hotel->direccion = $request->direccion;
        $hotel->tfon = $request->tfno;
        $hotel->save();

        return redirect()->route('hotel.index');
    }

    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return redirect()->route('hotel.index')->with('success', 'Hotel eliminado correctamente');
    }


}
