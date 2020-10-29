<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Redirect;
use Validator;


class PostsController extends Controller
{
    public function home() {
    	$articles = Article::all();
    	return view("list", compact("articles"));
    }

    public function list() {
    	$articles = Article::where("is_published", 1)->get();
    	return view("list", compact("articles"));
    }


    public function edit($id) {
    	$article = Article::find($id);
    	return view("edit", compact("article"));
    }


    public function updateRecord($id, Request $request) {


    	$validatedData = $request->validate([
	        'title' => 'required',
	        'body' => 'required',
	    ]);

		$article = Article::find($id);
		$article->title = $request->get("title");
		$article->body = $request->get("body");
		$article->is_published = $request->get("is_published");
		$article->save();
		return Redirect::back();
	}

}
