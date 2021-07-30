<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public function index()
    {
        // echo "Hello";
        return view('articles/index');
        //return view('article.index');
    }

    public function create()
    {
        //相對參考到的根目錄在 resources/views 下
        return view('articles.create');
    }
}