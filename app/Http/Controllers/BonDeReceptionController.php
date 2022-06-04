<?php

namespace App\Http\Controllers;

use App\Models\BonDeReception;
use Illuminate\Http\Request;

class BonDeReceptionController extends Controller
{
    public function getbdr(){

        return response()->json(BonDeReception::all(),200);
     }

     public function getbdrId($id){
        $bon=BonDeReception::find($id);

          if (is_null($bon)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(BonDeReception::find($id),200);
         }
        }
        public function addbdr(Request $request)
        {
           $BonDeReception = BonDeReception::create($request ->all());
           return response($BonDeReception,201);
        }
        
        public function updatebdr( Request $request  ,$id){
         $BonDeReception=BonDeReception::find($id);

         if (is_null($BonDeReception)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $BonDeReception->update($request->all());
        return response($BonDeReception,200);
       }
    }

       public function deletebdr($id){

         $BonDeReception=BonDeReception::find($id);
         if (is_null($BonDeReception)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $BonDeReception->delete();
         return response()->json(null,204);
         }

        
}
}
