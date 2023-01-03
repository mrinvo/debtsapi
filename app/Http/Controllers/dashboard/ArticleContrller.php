<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleContrller extends Controller
{
    //
    public function index(){
        $data = Article::all();

        return view('admin.articles.index',compact('data'));
    }

    public function show($id){
        $Article = Article::findOrFail($id);
        return view('');



    }

    public function create(){
        return view('Articlemin');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required|max:400',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        $image_path = $request->file('img')->store('api/Articles','public');

        $data = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => asset('storage/'.$image_path),
        ]);

        return redirect()->route('Articlemin.Article.index');


    }
}
