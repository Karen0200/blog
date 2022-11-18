<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        echo $user?->name;

}



    public function show($id)
    {
        echo "This is User with ID $id";
    }



}


