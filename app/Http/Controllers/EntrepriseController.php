<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class EntrepriseController extends Controller
{
    //affichage des admins
    public function getentreprise(){

        return response()->json(User::all(),200);
     }
//affichage admmin par id 
     public function getentrepriseid($id){
        $ent=User::find($id);

          if (is_null($ent)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(User::find($id),200);
         }

        
        }
         //ajout d un admin
        public function register(Request $req)
        {
         $req->validate([
            
            'email' => 'sometimes|required|email',
           
              
           ]);
       

           $ent = User::where('email', $req['email'])->first() ;
          
           if($ent){
            $response['status']=0;
            $response['code']=409;
            $response['message']='user existe deja';

           }
           else {
              $user=User::create([
               'name'=> $req->name,
               'login'=> $req->login,
               'email'=> $req->email,
               'tel'=> $req->tel,
               'site'=> $req->site,
               'matriculefiscale'=> $req->matriculefiscale,
               'activite'=> $req->activite,
               'adresse'=> $req->adresse,
               'password'=> bcrypt($req->password)


              ]);
              $response['status']=1;
              $response['code']=200;
              $response['message']='user inscrit avec succés';


        }
        }



        //modification d'un admin
        public function updateentreprise( Request $request  ,$id){
           $ent=User::find($id);
 
           if (is_null($ent)){
          
             return response()->json(['message'=>'not found'],404);
          } else{
             $ent->update($request->all());
          return response($ent,200);
          }
         }

         public function deleteentreprise($id){

         $ent=User::find($id);
         if (is_null($ent)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $ent->delete();
         return response()->json(null,204);
         }

         }

         public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    try {
        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'error login'], 401);
        }
    } catch ( JWTException  $e) {
        return response()->json(['error' => 'could_not_create_token'], 500);
    }
    $user = auth()->user();

    //return response()->json(compact('token', $user));

    //$response['data'] = $data;
        $response['status'] = 1;
        $response['code'] = 200;
        $response['token'] = response()->json(compact('token'));
        $response['message'] = 'Login mrigla';
        return response()->json($response);

}
      

     }

