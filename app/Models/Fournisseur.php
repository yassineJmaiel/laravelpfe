<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['titre','prenom','nom','entreprise','email','telephone','site','type','numfiscale','condition','activite','devise','adressefact','etatfact','cpfact','paysfact',
'adresseliv','etatliv','cpliv','paysliv','remarques'];
}
