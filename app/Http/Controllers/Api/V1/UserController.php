<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function Register(UserRequest $request){

        $user = User::create($request->all());

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [

            'Message' => 'registerd successfuly',
            'data'=> $user,
            'token' => $token,


        ];


        return response($response,201);


    }




}
