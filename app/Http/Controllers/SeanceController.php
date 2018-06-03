<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seance;
class SeanceController extends Controller
{
    //
    public function addSeance(Request $request){
      if($request->isMethod('POST'))  {
          $newSeance=  new Seance;
          $newSeance->id=$request->input("id");
          $newSeance->date=$request->input("date");
          $newSeance->heureDebut=$request->input("heureDebut") ;
          $newSeance->heureFin=$request->input("heureFin");
          $newSeance->joure=$request->input("joure");
          $newSeance->groupe_id=$request->input("groupe_id");
          $newSeance->save();
      }
      $seance=Seance::all();
      $arrSeance=Array('seance'=>$seance);
        return view("seance/add",$arrSeance);
    }
}
