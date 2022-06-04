<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class ArticleController extends Controller
{
    public function getArticle(){

        return response()->json(Article::all(),200);
     }

     public function getArticleId($id){
        $article=Article::find($id);

          if (is_null($article)){
         
            return response()->json(['message'=>'not found'],404);
         } else{
         return response()->json(Article::find($id),200);
         }
        }

        public function addArticle(Request $request)
        {
           $article = Article::create($request ->all());
           return response($article,201);
        }
        
        public function updateArticle( Request $request  ,$id){
         $article=Article::find($id);

         if (is_null($article)){
        
           return response()->json(['message'=>'not found'],404);
        } else{
           $article->update($request->all());
        return response($article,200);
        }
       }

       public function deleteArticle($id){

         $article=Article::find($id);
         if (is_null($article)){
          
            return response()->json(['message'=>'not found'],404);
         } else{
            $article->delete();
         return response()->json(null,204);
         }

        
}
}
