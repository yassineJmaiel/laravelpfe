<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\entreprise;
use App\Http\controllers\ClientController;
use App\Http\controllers\ArticleController;
use App\Http\controllers\BonDeCommandeController;
use App\Http\controllers\BonDeLivraisonController;
use App\Http\controllers\BonDeSortieController;
use App\Http\controllers\BonDeReceptionController;
use App\Http\controllers\DevisController;
use App\Http\Controllers\EntrepriseController;
use App\Http\controllers\FactureController;
use App\Http\controllers\FactureFournisseurController;
use App\Http\controllers\MouvementsController;
use App\Http\controllers\FournisseurController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();   
});
//admin routes
Route::get('admin', [AdminController::class,'getAdmin']);
Route::get('admin/{id}', [AdminController::class,'getAdminId']);
Route::post('addadmin', [AdminController::class,'addAdmin']);
Route::put('updateadmin/{id}', [AdminController::class,'updateAdmin']);
Route::delete('deleteadmin/{id}', [AdminController::class,'deleteAdmin']);

Route::get('entreprise', [EntrepriseController::class,'getentreprise']);
Route::get('entreprise/{id}', [EntrepriseController::class,'getentrepriseid']);
Route::post('register', [EntrepriseController::class,'register']);
Route::post('login', [EntrepriseController::class,'login']);
Route::put('updateentreprise/{id}', [EntrepriseController::class,'updateentreprise']);
Route::delete('delelteentreprise/{id}', [EntrepriseController::class,'deleteentreprise']);




//article routes
Route::get('article', [ArticleController::class,'getArticle']);
Route::get('article/{id}', [ArticleController::class,'getArticleId']);
Route::post('addarticle', [ArticleController::class,'addArticle']);
Route::put('updatearticle/{id}', [ArticleController::class,'updateArticle']);
Route::delete('deletearticle/{id}', [ArticleController::class,'deleteArticle']);

//bon de commande routes
Route::get('bdc', [BonDeCommandeController::class,'getbdc']);
Route::get('bdc/{id}', [BonDeCommandeController::class,'getbdcId']);
Route::post('addbdc', [BonDeCommandeController::class,'addbdc']);
Route::put('updatebdc/{id}', [BonDeCommandeController::class,'updatebdc']);
Route::delete('deletebdc/{id}', [BonDeCommandeController::class,'deletbdc']);

//bon de livraison routes
Route::get('bdl', [BonDeLivraisonController::class,'getbdl']);
Route::get('bdl/{id}', [BonDeLivraisonController::class,'getbdlId']);
Route::post('addbdl', [BonDeLivraisonController::class,'addbdl']);
Route::put('updatebdl/{id}', [BonDeLivraisonController::class,'updatebdl']);
Route::delete('deletebdl/{id}', [BonDeLivraisonController::class,'deletbdl']);
// bon de reception  routes 

Route::get('bdr', [BonDeReceptionController::class,'getbdr']);
Route::get('bdr/{id}', [BonDeReceptionController::class,'getbddrId']);
Route::post('addbdr', [BonDeReceptionController::class,'addbdr']);
Route::put('updatebdr/{id}', [BonDeReceptionController::class,'updatebdr']);
Route::delete('deletebdr/{id}', [BonDeReceptionController::class,'deletbdr']);

//bon de sortie toutes
Route::get('bds', [BonDeSortieController::class,'getbds']);
Route::get('bds/{id}', [BonDeSortieController::class,'getbdsId']);
Route::post('addbds', [BonDeSortieController::class,'addbds']);
Route::put('updatebds/{id}', [BonDeSortieController::class,'updatebds']);
Route::delete('deletebds/{id}', [BonDeSortieController::class,'deletbds']);

// client routes 
Route::get('client', [ClientController::class,'getclient']);
Route::get('Client/{id}', [ClientController::class,'getclientId']);
Route::post('addclient', [ClientController::class,'addclient']);
Route::put('updateclient/{id}', [ClientController::class,'updateclient']);
Route::delete('deleteclient/{id}', [ClientController::class,'deleteclient']);

//devis routes 
Route::get('Devis', [DevisController::class,'getdevis']);
Route::get('Devis/{id}', [DevisController::class,'getdevisId']);
Route::post('adddevis', [DevisController::class,'adddevis']);
Route::put('updatedevis/{id}', [DevisController::class,'updatedevis']);
Route::delete('deletedevis/{id}', [DevisController::class,'deletdevis']);

//facture routes 
Route::get('Facture', [FactureController::class,'getfacture']);
Route::get('Facture/{id}', [FactureController::class,'getfactureId']);
Route::post('addfacture', [FactureController::class,'addfacture']);
Route::put('updatefacture/{id}', [FactureController::class,'updatefacture']);
Route::delete('deletefacture/{id}', [FactureController::class,'deletefacture']);


// fournisseur routes  

Route::get('Fournisseur', [FournisseurController::class,'getfournisseur']);
Route::get('Fournisseur/{id}', [FournisseurController::class,'getfournisseurId']);
Route::post('addFournisseur', [FournisseurController::class,'addfournisseur']);
Route::put('updatefournisseur/{id}', [FournisseurController::class,'updatefournisseur']);
Route::delete('deleteFournisseur/{id}', [FournisseurController::class,'deletefournisseur']);

//facturefournisseur routes 
Route::get('facturefour', [FactureFournisseurController::class,'getfacturefour']);
Route::get('facturefour/{id}', [FactureFournisseurController::class,'getfacturefourID']);
Route::post('addfacturefour', [FactureFournisseurController::class,'addfacturefour']);
Route::put('updatefacturefour/{id}', [FactureFournisseurController::class,'updatefacturefour']);
Route::delete('deletefacturefour/{id}', [FactureFournisseurController::class,'deletefacturefour']);

//mouvements routes 
Route::get('Mouvement', [MouvementsController::class,'getmvt']);
Route::get('Mouvement/{id}', [MouvementsController::class,'getmvtId']);
Route::post('addmouvement', [MouvementsController::class,'addmouvement']);
Route::put('updatemouvement/{id}', [MouvementsController::class,'updatemouvement']);
Route::delete('deletemouvement/{id}', [MouvementsController::class,'deletmouvement']);


