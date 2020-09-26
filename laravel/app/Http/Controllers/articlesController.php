<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class articlesController extends Controller
{
    public function article($id){
        $hasil = Article::find($id);
        return view('indexHome',['hasil'=>$hasil]);
    //public function article($page){
    //	return view('article', compact('page'));
    }
}
