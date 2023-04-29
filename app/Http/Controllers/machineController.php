<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
class machineController extends Controller
{
    public function getAllMachine(){
        $machine=Machine::all();
        return $machine;
    }
    public function getMachineById(int $id){
        $machine=Machine::find($id);
        return $machine;
    }

    public function createMachine(Request $request){
        $machine= new Machine;
        $machine->nom_machine= $request->input('nom_machine');
        $machine->MTBF=$request->input('MTBF');
        $machine->MTTR=$request->input('MTTR');
        $machine->prix_achat=$request->input('prix_achat');
        $machine->date_achat=$request->input('date_achat');
        $machine->capacite=$request->input('capacite');
        $machine->description=$request->input('description');
        $machine->save();
        return response()->json($machine);
    }

    public function updateMachine(Request $request, $id)
    {
        $machine=Machine::find($id);
        $machine->update($request->all());

        return $machine;
    }

    function deleteMachine($id){
        return Machine::destroy($id);
    }
}
