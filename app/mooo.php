<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;



class mooo extends Model
{
   public function getID($id)
    {
        try{
        if(DB::select('SELECT * FROM details WHERE idnumber='. $id) != null)  
        { 
        $users = DB::select('SELECT * FROM details WHERE idnumber='. $id);
        return $users;
        } else{
            //dd("nothing");
        }
        
        }catch(Exception $e) {
            //echo $e->getMessage();
        }
    }
    
    
}
