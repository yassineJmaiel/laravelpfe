<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamp = false ;
    protected $fillable =['titre','prixvente','prixachat','type',
    'destin','description','reference','taxe'];
}
