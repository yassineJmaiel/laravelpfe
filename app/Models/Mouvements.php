<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvements extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['date','article','qte','type'];
}
