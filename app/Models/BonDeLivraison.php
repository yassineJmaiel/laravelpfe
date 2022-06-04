<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeLivraison extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['date','num','client','numref',
    'titre','qte','prixunitaire','description',
    'taxe','conditiongeneral','remise'];
}
