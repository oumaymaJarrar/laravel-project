<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitConstr extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom_produit_const',
        'code_barre',
        'lot_optimal',
        'type_produit',
        'id_machine'
    ];

    public function Machines()
    {
        return $this->belongsToMany(Machine::class,'id_produit_const','id_machine');
    }
}
