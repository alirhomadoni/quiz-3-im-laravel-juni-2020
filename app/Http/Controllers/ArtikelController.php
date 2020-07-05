<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
class ArtikelController extends Controller
{
    public function index(){
        $artikel=ArtikelModel::get_all();
        //dd($url);
        //dd($artikel);
        return view('artikel.tabel',compact('artikel'));
    }
    public function create(){
        return view('artikel.form');
   }
   public function store(Request $request){
    $data=$request->all();
    unset($data["_token"]);
    $data['slug']=str_replace(" ","-",$data['judul']);
    dd($data);
    
    $artikel=ArtikelModel::save($data);
    if ($artikel){
         return redirect('/artikel');
    }
   
}
}
