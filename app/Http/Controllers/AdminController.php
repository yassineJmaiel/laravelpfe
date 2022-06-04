<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{

   //affichage des admins
     public function getAdmin(){

        return response()->json(User::all(),200);
     }
//affichage admmin par id 
     public function getAdminId($id){
        $admin=User::find($id);

          if (is_null($admin)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(User::find($id),200);
         }

        
        }
         //ajout d un admin
        public function addAdmin(Request $request)
        {
           $admin = User::create($request ->all());
           return response($admin,201);
        }

        //modification d'un admin
        public function updateAdmin( Request $request  ,$id){
           $admin=User::find($id);
 
           if (is_null($admin)){
          
             return response()->json(['message'=>'not found'],404);
          } else{
             $admin->update($request->all());
          return response($admin,200);
          }
         }

         public function deleteAdmin($id){

         $admin=User::find($id);
         if (is_null($admin)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $admin->delete();
         return response()->json(null,204);
         }

         }

     }

