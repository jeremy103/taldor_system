<?php

namespace App\Http\Controllers;


use App\mooo;

use Illuminate\Http\Request;


class DaddyController extends Controller
{
    public function getInfo(Request $request)
    {
        
        $mooo = new mooo();
        
         
        $result = $mooo -> getID($request -> get('id'));

        //dd($result);

        $reponse = response()->json($result);
        //dd($reponse);

        return  response()->json($result);
    }  
    
    
}

