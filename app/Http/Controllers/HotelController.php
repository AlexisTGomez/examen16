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
        $hotel = new Hotel();
        $hotel->nombre = $request->nombre;
        $hotel->direccion = $request->direccion;
        $hotel->tfon = $request->tfno;
        $hotel->save();
    
        return redirect()->route('hotel.index');
    }

}
