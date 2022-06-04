<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeReception extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['date','num','fournisseur','numref',
    'titre','qte','prixunitaire','description',
    'taxe','conditiongeneral','remise'];
}
