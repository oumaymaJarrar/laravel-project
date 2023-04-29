<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\ProduitAchtb;
use App\Models\ProduitConstr;
use Illuminate\Http\Request;

class produitController extends Controller
{

    public function getAllProduitConst(){
        $produit_construisable=ProduitConstr::all();
        return $produit_construisable;
    }


    public function createProduitConstructible(Request $request){
        $Produit_const= new ProduitConstr;
        $Produit_const->nom_produit_const= $request->input('nom_produit_const');
        $Produit_const->code_barre=$request->input('code_barre');
        $Produit_const->lot_optimal=$request->input('lot_optimal');
        $Produit_const->type_produit=$request->input('type_produit');
        $Produit_const->id_machine=$request->input('id_machine');
        $Produit_const->save();
        return response()->json($Produit_const);
    }
  
    public function getProduitConstById(int $id){
        $prodconst=ProduitConstr::find($id);
        return $prodconst;
    }

    public function updateProduitConstructible(Request $request, $id)
    {
        $prodConst=ProduitConstr::find($id);
        $prodConst->update($request->all());

        return $prodConst;
    }

    function deleteProduitConstr($id){
        return ProduitConstr::destroy($id);
    }
    // **********************************************************
    //les apis des produits achetables 
    public function getAllProduitAchet(){
        $produit_achet=ProduitAchtb::all();
        return $produit_achet;
    }

    public function createProduitAchetable(Request $request){
        $Produit_acht= new ProduitAchtb;
        $Produit_acht->nom_produit= $request->input('nom_produit');
        $Produit_acht->save();
        return response()->json($Produit_acht);
    }
    public function getProduitAchtById(int $id){
        $prodacht= ProduitAchtb::all()->where('id',$id);
        return $prodacht;
    }
    
    public function updateProduitAchetable(Request $request, $id)
    {
        $prodacht=ProduitAchtb::find($id);
        $nom_produit=$request->input('nom_produit');
        // $prodconst->update([
        //     'nom_produit_const'=>$nom_produit,
        //     'code_barre'=>$code_barre,
        //     'lot_optimal'=>$lot_optimal,
        //     'type_produit'=>$type
        // ]);
        $prodacht->update($request->all());

        return $prodacht;
    }

    function deleteProduitAchtable( $id){
        return ProduitAchtb::destroy($id);
    }

    function getMachineFromProduit($id_pro){
        $machine=DB::table('machines')
        ->join('produit_constrs','machines.id','=','produit_constrs.id_machine')
        ->select('machines.nom_machine','machines.description')
        ->where('produit_constrs.id','=',$id_pro)
        ->first();
        return response()->json($machine);
    }

}
