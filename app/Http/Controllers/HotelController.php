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
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'tfon' => 'required|string|max:20', 
        ]);

        $hotel = new Hotel();
        $hotel->nombre = $request->nombre;
        $hotel->direccion = $request->direccion;
        $hotel->tfon = $request->tfon;
        $hotel->save();

        return redirect()->route('hotel.index');
    }

    public function edit(){
        //
    }
}
