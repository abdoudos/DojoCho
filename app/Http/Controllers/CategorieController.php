<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

use App\Http\Requests;
class CategorieController extends Controller
{
    //
    public function viewCategorie(Request $request ){
        if($request->isMethod('POST')){
            $newcategorie =new Categorie();
            $newcategorie->nom=$request->input('nom');
            $newcategorie->id=$request->input('id');
            $newcategorie->save();
        }
        $categorie=Categorie::all();
        $arr=Array('categorie'=>$categorie);

        return view('categorie.view',$arr); 
    }
    public function viewCategorieByID($id){
        $categorie=Categorie::find($id);
        $arr=Array('categorie'=>$categorie);
        return view('categorie.view{id}',$arr); 
    }

}
