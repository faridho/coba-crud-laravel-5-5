<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
    	$articles = Article::latest()->paginate(5);
    	return view('article.index', compact('articles'))
    	->with('i', (request()->input('page', 1) -1)*5);
    }

    public function create(){
    	return view('article.create');
    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}	

