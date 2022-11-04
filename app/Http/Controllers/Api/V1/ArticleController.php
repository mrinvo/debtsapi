<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $all = Article::all();
        $response = [
            'status' => true,
            'StatusCode' => 201,
            'message' => 'All articles fetched successfuly',
            'data' => $all,

        ];

        return response($response,201);
    }

    public function show($id){
    $article = Article::findOrFail($id);

    if($article){
        $response = [
           'message' => 'article retuned  successfuly',
            'data' => $article,
            'img_url'=> asset('api/articles/'.$article->img),

        ];
        $stat = 201;
    }else{
        $response = [
            'message' => ' article not found',
            'data' => $article,

        ];
        $stat = 404;
        }

        return response($response,$stat);



    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required|max:400',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path = $request->file('image')->store('api/articles');

        $data = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => asset($image_path),
        ]);

        return response($data,201);

    }
}
