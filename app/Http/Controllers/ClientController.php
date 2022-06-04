<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\client;

class ClientController extends Controller
{
    
   
     public function getclient(){

        return response()->json(Client::all(),200);
     }

     public function getclientId($id){
        $Client=Client::find($id);

          if (is_null($Client)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(Client::find($id),200);
         }

        
        }
         
        public function addclient(Request $request)
        {
           $admin = Client::create($request ->all());
           return response($admin,201);
        }

       
        public function updateclient( Request $request  ,$id){
           $Client=Client::find($id);
 
           if (is_null($Client)){
          
             return response()->json(['message'=>'not found'],404);
          } else{
             $Client->update($request->all());
          return response($Client,200);
          }
         }

         public function deleteclient($id){

         $Client=Client::find($id);
         if (is_null($Client)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $Client->delete();
         return response()->json(null,204);
         }

         }
}
