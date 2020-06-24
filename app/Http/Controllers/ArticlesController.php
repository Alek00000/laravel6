<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index(){
        $articles= Article::all();
        return view('articles.index', compact('articles'));
    }


    public function show($id){

        $article = Article::find($id);

        return view('articles.show', compact('article'));
      }

      public function create(){

        return view('articles.create');
      }


      public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}


