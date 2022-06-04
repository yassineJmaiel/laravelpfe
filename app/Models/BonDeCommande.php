<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeCommande extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $casts = [
        "qte"=>"integer",
        'prixunitaire'=>"integer"
    ];
    protected $fillable =['date','categorie','num','fournisseur','numref',
    'titre','qte','prixunitaire','description',
    'taxe','conditiongeneral','remise'];
}
