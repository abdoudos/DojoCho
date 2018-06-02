<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;

class DisciplineController extends Controller
{
    //
    public function viewDiscipline(Request $request){
        
        
        if($request->isMethod('POST')){
            // echo $request;
            
             $newDiscipline =new Discipline();
             $newDiscipline->nom=$request->input('nom');
             $newDiscipline->id=$request->input('id');
             $newDiscipline->save();
        }
        $discipline=Discipline::all();
        $arr=Array('discipline'=>$discipline);

        return view('discipline.view',$arr);
    }

   /* public function addDiscipline(Request $request){

        if($request->isMethod('POST')){
           // echo $request;

            $newDiscipline =new Discipline();
            $newDiscipline->nom=$request->input('nom');
            $newDiscipline->id=$request->input('id');
            $newDiscipline->save();
        }
        
        return view('discipline.view',$arr);
    }*/
}
