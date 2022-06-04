<?php

namespace App\Http\Controllers;

use App\Models\Mouvements;
use Illuminate\Http\Request;

class MouvementsController extends Controller
{
    public function getmvt(){

        return response()->json(Mouvements::all(),200);
     }

     public function getmvtId($id){
        $Client=Mouvements::find($id);

          if (is_null($Client)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(Mouvements::find($id),200);
         }

        
        }
         
        public function addmouvement(Request $request)
        {
           $mvt = Mouvements::create($request ->all());
           return response($mvt ,201);
        }

       
        public function updatemouvement( Request $request  ,$id){
           $mvt =Mouvements::find($id);
 
           if (is_null($mvt )){
          
             return response()->json(['message'=>'not found'],404);
          } else{
             $mvt ->update($request->all());
          return response($mvt ,200);
          }
         }

         public function deletemouvement($id){

         $mvt =Mouvements::find($id);
         if (is_null($mvt )){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $mvt ->delete();
         return response()->json(null,204);
         }

         }
}
