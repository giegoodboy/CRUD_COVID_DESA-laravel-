<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class file_core extends Model
{
    public static function deleteData($id){
        DB::table('allDB')->where('id', '=', $id)->delete();
      }
    protected $table ='allDB';
}

