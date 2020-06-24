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


      public function store($request){
        $rules = [
            'title' => 'require',
            'excerpt' => 'require',
            'body' => 'require',
        ];
        return $this->validate($request, $rules);


        $article = new Article();

        $article -> title = request('title');
        $article -> excerpt = request('excerpt');
        $article -> body = request('body');
        $article->save();
        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::find($id);

        return view('articles.edit', compact('article'));

    }

    public function update($id){
        $article = Article::find($id);
        $article -> title = request('title');
        $article -> excerpt = request('excerpt');
        $article -> body = request('body');
        $article->save();

        return redirect('/articles/'. $article->id);
    }

    public function destroy(){

    }

}


