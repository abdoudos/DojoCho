<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerssoneController extends Controller
{
    //
    function viewPerssone(){
        $perssone=Perssone::all();
        $arr=Array('perssone=>$perssone');
        return view('perssone.view');
    }
}
