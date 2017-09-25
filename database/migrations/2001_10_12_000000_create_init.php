<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInit extends Migration
{
    
    private function data_files(){
        
        return \File::files(app_path("WM/data"));
    }
     
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        echo "CREATE_INIT";
        
        
        foreach ($this->data_files() as $data){
            //var_dump(\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class);
            $base_name=basename($data,'.php');
            
            $class_name="\\App\\WM\\data\\$base_name";
            $table=new $class_name(); 
            $table_name=$table->table;
            var_dump($table_name."作成");
            Schema::dropIfExists($table_name);
            Schema::create($table_name, function(Blueprint $b)
                    use($class_name,$table_name) {
//                    echo "テーブル：{$table_name} 作成 \n";
                    $class_name::CreateTable($b);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       foreach ($this->data_files() as $data){
            //var_dump(\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class);
            $base_name=basename($data,'.php');            
            $class_name="\\App\\WM\\data\\$base_name";
            $table=new $class_name(); 
            $table_name=$table->table;
            var_dump($table_name."作成");
            Schema::dropIfExists($table_name);
        }
    }
}
