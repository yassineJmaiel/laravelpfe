<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['date','echeance','condition','num',
    'client','numref','titre','qte',
    'prixunitaire','description','taxe','conditiongeneral','remise'];
}
