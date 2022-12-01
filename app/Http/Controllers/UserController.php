<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
//        $user = Auth::user();
//        echo $user?->name;

        //$params = $request->all();
        // dd($request->path());
        // dd($request->url());
        // dd($request->fullUrl());
        //dd($request->method());
//        $name = $request->input('name', 'Vardan Mamikonyan');
//        dd($name);
//dd($users->toArray());exit;


        $users = User::with(['identity'])->get();
        foreach ($users as $user) {
            echo '<b>User name - </b> : ' . $user->name . '<br />';
            echo '<b>Identity ID  - </b> : ' . $user->identity?->identity_number . '<br />';
            echo '--------------------------------------------- <br/>';
        }

    }

    public function withCompany()
    {
        $users = User::with('companies')->get();
        foreach($users as $user){
            echo 'User Name:'. $user->name . '<br />';
            echo 'Company       :'. $user->companies?->title.'<br />';
            echo '---------------------------------------------'.'<br />';
        }
   }

   public function show(Request $request, $id)
   {
       $user = User::query()->where('id', '=', $id)->with('companies')->first();
       //dd($user->companies->title);

       echo $user->name."<br>";
       echo $user->email."<br>";
       echo $user->companies->title;
   }
}


