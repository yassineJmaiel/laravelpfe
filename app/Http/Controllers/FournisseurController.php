<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function getfournisseur(){

        return response()->json(Fournisseur::all(),200);
     }

     public function getfournisseurId($id){
        $fournisseur=Fournisseur::find($id);

          if (is_null($fournisseur)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(Fournisseur::find($id),200);
         }
        }
        public function addfournisseur(Request $request)
        {
           $fournisseur= Fournisseur::create($request ->all());
           return response($fournisseur,201);
        }
        
        public function updatefournisseur( Request $request  ,$id){
         $fournisseur=Fournisseur::find($id);

         if (is_null($fournisseur)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $fournisseur->update($request->all());
        return response($fournisseur,200);
       }
    }

       public function deletefournisseur($id){

         $fournisseur=Fournisseur::find($id);
         if (is_null($fournisseur)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $fournisseur->delete();
         return response()->json(null,204);
         }

        
}
}
