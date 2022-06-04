<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function getdevis(){

        return response()->json(Devis::all(),200);
     }

     public function getdevisId($id){
        $facture=Devis::find($id);

          if (is_null($facture)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(Devis::find($id),200);
         }
        }
        public function adddevis(Request $request)
        {
           $facture = Devis::create($request ->all());
           return response($facture,201);
        }
        
        public function updatedevis( Request $request  ,$id){
         $facture=Devis::find($id);

         if (is_null($facture)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $facture->update($request->all());
        return response($facture,200);
       }
    }

       public function deletedevis($id){

         $facture=Devis::find($id);
         if (is_null($facture)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $facture->delete();
         return response()->json(null,204);
         }

        
}
}
