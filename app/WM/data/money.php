<?php

namespace App\WM\data;

use Illuminate\Database\Eloquent\Model;

class money extends Model implements \App\Common\ICreateTable
{
    public $table="country";
    
    
    public static function CreateTable(\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
    }

    public static function InitTable(\Illuminate\Database\Query\Builder $table) {
        
    }

}
