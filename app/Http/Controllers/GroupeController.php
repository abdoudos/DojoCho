<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupe;
use App\Discipline;
use App\Categorie;

class GroupeController extends Controller
{
    
     public function viewGroupe(){
        $groupe=Groupe::all();
        $arr=Array('groupe'=>$groupe);
        foreach ($groupe as $mygroupe ) {
           $mygroupe->discipline_id=Discipline::find($mygroupe->discipline_id)->nom;
        }
        foreach ($groupe as $mygroupe ) {
            $mygroupe->categorie_id=Categorie::find($mygroupe->categorie_id)->nom;
         }
        return view('groupe.view',$arr);
    }
}
