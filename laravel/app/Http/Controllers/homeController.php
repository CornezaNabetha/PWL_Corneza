<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class homeController extends Controller
{
    public function invoke(Request $request){
        //"\app\article == model"
        //get=menampilkan semua data di database,first = 1 data
        $articles = \App\Article::all();
        $value = Cache::rememberForever('articles',function(){
        });
        $page = 'Article';
        return view('layout.article',[
            'articles'=>$articles,
            'halaman' => $page
            //halaman dipanggil di view

            //public function index(){
            //  $hasil = Article::all();
            //  return view('home.parent',['hasil'=>$hasil]);

    
    
        //public function hello(){
        //	return('Selamat Datang Gais');
        ]);
    }
}
