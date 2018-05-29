<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

use App\Http\Requests;
class CategorieController extends Controller
{
    //
    public function viewCategorie( ){
        $categorie=Categorie::all();
        $arr=Array('categorie'=>$categorie);
        return view('categorie.view',$arr); 
    }
    public function viewCategorieByID($id){
        $categorie=Categorie::find($id);
        $arr=Array('categorie'=>$categorie);
        return view('categorie.view{id}',$arr); 
    }
    public function addCategorie(Request $request){

        if($request->isMethod('POST')){
            echo $request;
            $newcategorie =new Categorie();
            $newcategorie->nom=$request->input('nom');
            $newcategorie->id=$request->input('id');
            $newcategorie->save();
        }
        
        return view('categorie.add');
    }
}
