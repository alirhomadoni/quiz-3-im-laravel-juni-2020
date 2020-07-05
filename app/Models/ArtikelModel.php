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
        //$data['slug'] = str_replace(" ","-", $data['judul']);

        $new_artikel=DB::table('artikel')->insert($data);
        return $new_artikel;
    }
    public static function find_by_id($id){
        $artikel=DB::table('artikel')->where('id', $id)->first();
        return $artikel;
    }
    public static function destroy($id){
        $deletedjawaban= DB::table('artikel')
                        ->where('id',$id)
                        ->delete();
            
        return $deletedjawaban;
    }
    public static function update($id, $request){
        $now= date_create()->format('Y-m-d H:i:s');
        $pertanyaan=DB::table('artikel')
                    ->where('id',$id)
                    ->update([
                        'judul'=> $request['judul'],
                        'isi' => $request['isi'],
                        'tag' =>$request['tag'],
                        'user_id'=> $request['user_id'],
                        'updated_at'=>$now
                    ]);
}
}