<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){
        
        return view("index");
    }
    
    public function search(){
        $query= urldecode(request("q")) ;
        
        $values=preg_split("/[ 　\t]+?/", $query);
        
        mb_convert_variables('UTF-8' , 'SJIS' , $values );
        //mb_convert_variables("UTF-8","SJIS", $values);
        //var_dump($values);
        
        
        return response()->json($values) ;
    }
}
