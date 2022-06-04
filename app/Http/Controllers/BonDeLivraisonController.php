<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BonDeLivraison;

class BonDeLivraisonController extends Controller
{
    public function getbdl(){

        return response()->json(BonDeLivraison::all(),200);
     }

     public function getbdlId($id){
        $bon=BonDeLivraison::find($id);

          if (is_null($bon)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(BonDeLivraison::find($id),200);
         }
        }
        public function addbdl(Request $request)
        {
           $BonDeLivraison = BonDeLivraison::create($request ->all());
           return response($BonDeLivraison,201);
        }
        
        public function updatebdl( Request $request  ,$id){
         $BonDeLivraison=BonDeLivraison::find($id);

         if (is_null($BonDeLivraison)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $BonDeLivraison->update($request->all());
        return response($BonDeLivraison,200);
        }
       }

       public function deletebdl($id){

         $BonDeLivraison=BonDeLivraison::find($id);
         if (is_null($BonDeLivraison)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $BonDeLivraison->delete();
         return response()->json(null,204);
         }

        
}
}
