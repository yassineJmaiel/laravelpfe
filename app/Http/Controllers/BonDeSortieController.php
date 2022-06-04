<?php

namespace App\Http\Controllers;

use App\Models\BonDeSortie;
use Illuminate\Http\Request;

class BonDeSortieController extends Controller
{
    public function getbds(){

        return response()->json(BonDeSortie::all(),200);
     }

     public function getbdsId($id){
        $bon=BonDeSortie::find($id);

          if (is_null($bon)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(BonDeSortie::find($id),200);
         }
        }
        public function addbds(Request $request)
        {
           $BonDeSortie = BonDeSortie::create($request ->all());
           return response($BonDeSortie,201);
        }
        
        public function updatebds( Request $request  ,$id){
         $BonDeSortie=BonDeSortie::find($id);

         if (is_null($BonDeSortie)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $BonDeSortie->update($request->all());
        return response($BonDeSortie,200);
       }
    }

       public function deletebds($id){

         $BonDeSortie=BonDeSortie::find($id);
         if (is_null($BonDeSortie)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $BonDeSortie->delete();
         return response()->json(null,204);
         }

        
}
}
