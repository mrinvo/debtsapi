<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdsController extends Controller
{
    //
    public function index(){
        $data = Ad::all();

        return view('admin.ads.index',compact('data'));
    }

    public function show($id){
        $Ad = Ad::findOrFail($id);
        return view('');



    }

    public function create(){
        return view('admin');
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

        return redirect()->route('admin.ad.index');


    }
}
