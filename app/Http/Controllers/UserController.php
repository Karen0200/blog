<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index( Request $request){
//        $user = Auth::user();
//        echo $user?->name;

        $params = $request->all();
        // dd($request->path());
        // dd($request->url());
       // dd($request->fullUrl());
        //dd($request->method());
//        $name = $request->input('name', 'Vardan Mamikonyan');
//        dd($name);



}



    public function show($id)
    {
        echo "This is User with ID $id";
    }



}


