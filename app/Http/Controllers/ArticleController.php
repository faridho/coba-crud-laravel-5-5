<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
    	$article = Article::latest()->paginate(5);
    	return view('article.index', compact('article'))
    	->with('i', (request()->input('page', 1) -1)*5);
    }

    public function create(){
    	return view('article.create');
    }

    public function store(Request $request){
        $data = $this->validate($request,[
            'title' => 'required',
            'body'  => 'required'
        ],
        [
            'title.required'    => 'Title is required',
            'body.required'     => 'Body is required'
        ]);
        $data = $request->all();
        Article::create($data);
        return redirect()->route('article.index')
                         ->with('success', 'Article created successfuly');
    }

    public function show($id){
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id){
        Article::find($id)->update($request->all());
        return redirect()->route('article.index')
                         ->with('success', 'Article updated successfully');
    }

    public function destroy($id){
        Article::find($id)->delete();
        return redirect()->route('article.index')
                         ->with('success', 'Article deleted succesfully');
    }
}	

