<?php

namespace App\Http\Controllers;

use App\Models\factureFournisseur;
use Illuminate\Http\Request;

class FactureFournisseurController extends Controller
{
    public function getfacturefour(){

        return response()->json(factureFournisseur::all(),200);
     }

     public function getfacturefourId($id){
        $facture=factureFournisseur::find($id);

          if (is_null($facture)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(factureFournisseur::find($id),200);
         }
        }
        public function addfacturefour(Request $request)
        {
           $facture= factureFournisseur::create($request ->all());
           return response($facture,201);
        }
        
        public function updatefacturefour( Request $request  ,$id){
         $facture=factureFournisseur::find($id);

         if (is_null($facture)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $facture->update($request->all());
        return response($facture,200);
       }
    }

       public function deletefacturefour($id){

         $facture=factureFournisseur::find($id);
         if (is_null($facture)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $facture->delete();
         return response()->json(null,204);
         }

        
}
}
