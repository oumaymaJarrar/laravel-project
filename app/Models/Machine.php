<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom_machine',
        'MTBF',
        'MTTR',
        'prix_achat',
        'date_achat',
        'capacite',
        'description' ];
        function produit(){
            return $this->belongsToMany(ProduitConstruisable::class,'id_machine','id_produit') ;          }
}
