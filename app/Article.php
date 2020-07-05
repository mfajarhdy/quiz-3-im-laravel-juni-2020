<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    
    public static function get_all()
    {
        $data = DB::table('pertanyaans')->get();
        return $data;
    }
}
