<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(){
        
        return view("index");
    }
    
    public function search(){
        $query= request("q");
        
        
        
        
    }
}
