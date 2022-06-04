<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BonDeCommande;

class BonDeCommandeController extends Controller
{
    public function getbdc(){

        return response()->json(BonDeCommande::all(),200);
     }

     public function getbdcId($id){
        $bon=BonDeCommande::find($id);
        $bon->prixTotal = $bon->qte * $bon->prixunitaire;
        $prixRemise = $bon->prixTotal -(($bon->prixTotal*10)/100);
        $bon->totalTTC = $prixRemise + (($prixRemise*19)/100);
          if (is_null($bon)){
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json($bon,200);
         }
        }
        public function addbdc(Request $request)
        {
           $BonDeCommande = BonDeCommande::create($request ->all());
           return response($BonDeCommande,201);
        }
        
        public function updatebdc( Request $request  ,$id){
         $BonDeCommande=BonDeCommande::find($id);

         if (is_null($BonDeCommande)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $BonDeCommande->update($request->all());
        return response($BonDeCommande,200);
        }
       }

       public function deletebdc($id){

         $BonDeCommande=BonDeCommande::find($id);
         if (is_null($BonDeCommande)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $BonDeCommande->delete();
         return response()->json(null,204);
         }

        
}


}
