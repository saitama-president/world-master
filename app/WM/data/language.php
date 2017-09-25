<?php

namespace App\WM\data;

use Illuminate\Database\Eloquent\Model;

class language extends Model implements \App\Common\ICreateTable
{
    public $table="language";
    
    
    public static function CreateTable(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->string('code',64);            
            $table->unique(["code"]);
            $table->timestamps();

    }

    public static function InitTable(\Illuminate\Database\Query\Builder $table) {
        
    }

}
