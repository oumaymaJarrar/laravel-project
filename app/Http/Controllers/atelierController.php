<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atelier;
class atelierController extends Controller
{
    public function getAllAtelier(){
        $atelier=Atelier::all();
        return $atelier;
    }


    public function createAtelier(Request $request){
        $atelier= new Atelier;
        $atelier->des_atelier= $request->input('des_atelier');
        $atelier->adr_atelier=$request->input('adr_atelier');
        $atelier->save();
        return response()->json($atelier);
    }
}
