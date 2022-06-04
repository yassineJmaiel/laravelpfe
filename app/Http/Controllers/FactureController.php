<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function getfacture(){

        return response()->json(Facture::all(),200);
     }

     public function getfactureId($id){
        $facture=facture::find($id);

          if (is_null($facture)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(facture::find($id),200);
         }
        }
        public function addfacture(Request $request)
        {
           $facture= facture::create($request ->all());
           return response($facture,201);
        }
        
        public function updatefacture( Request $request  ,$id){
         $facture=Facture::find($id);

         if (is_null($facture)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $facture->update($request->all());
        return response($facture,200);
       }
    }

       public function deletefacture($id){

         $facture=Facture::find($id);
         if (is_null($facture)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $facture->delete();
         return response()->json(null,204);
         }

        
}
}
