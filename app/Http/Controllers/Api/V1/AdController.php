<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    //
    public function index(){
        $all = Ad::all();

        $response = [
            'status' => true,
            'StatusCode' => 201,
            'message' => 'All Ads fetched successfuly',
            'data' => $all,


        ];

        return response($response,201);
    }

    public function show($id){
    $Ad = Ad::findOrFail($id);


    if($Ad){
        $response = [
           'message' => 'Ad retuned  successfuly',
            'data' => $Ad,


        ];
        $stat = 201;
    }else{
        $response = [
            'message' => ' Ad not found',
            'data' => $Ad,

        ];
        $stat = 404;
        }

        return response($response,$stat);



    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required|max:400',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        $image_path = $request->file('img')->store('api/Ads','public');

        $data = Ad::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => asset('storage/'.$image_path),
        ]);

        return response($data,201);

    }
}

