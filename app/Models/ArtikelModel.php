<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class ArtikelModel{
    public static function get_all(){
        $artikel=DB::table('artikel')->get();
        return $artikel;
    }
    public static function save($data){
        //Assign created_at
        $now= date_create()->format('Y-m-d H:i:s');
        $data['created_at']=$now;

        //Assign slug
        $data['slug'] = str_replace(" ","-", $data['judul']);

        $new_artikel=DB::table('artikel')->insert($data);
        return $new_artikel;
    }
}