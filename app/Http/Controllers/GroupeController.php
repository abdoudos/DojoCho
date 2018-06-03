<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupe;
use App\Discipline;
use App\Categorie;

class GroupeController extends Controller
{
    
     public function viewGroupe(Request $request){
        if($request->isMethod('POST')){
            $newgroupe =new Groupe();
            $newgroupe->nom=$request->input('nomGroupe');
            $newgroupe->id=$request->input('id');
           
            $newgroupe->discipline_id=2;
            $newgroupe->categorie_id=3;
            //$newgroupe->discipline_id=Discipline::where('nom', $request->selec('selectDiscipline').val)->first()->id;
            //$newgroupe->categorie_id=Categorie::where('nom',$request->selec('selectCategorie').val)->first()->id;
            $newgroupe->save();
        }
        $groupe=Groupe::all();
        $categorie=Categorie::all();
        $discipline=Discipline::all();
        $arr=Array( 'groupe'=>$groupe,'discipline'=>$discipline,'categorie'=>$categorie);

        foreach ($groupe as $mygroupe ) {
           $mygroupe->discipline_id=Discipline::find($mygroupe->discipline_id)->nom;
           $mygroupe->categorie_id=Categorie::find($mygroupe->categorie_id)->nom;
        }
        return view('groupe.view',$arr);
    }
    public function addGroupe(Reaquest $request){
        if($request->isMethod('POST')){
            $newgroupe =new Groupe();
            $newgroupe->nom=$request->input('nomGroupe');
            $newgroupe->id=$request->input('id');
            
            $newgroupe->discipline_id=1;
            $newgroupe->categorie_id=2;
            $newgroupe->save();
            return view('groupe.view');
        }
    }
}
