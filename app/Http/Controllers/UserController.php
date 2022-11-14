<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')
        ->leftjoin('companies', 'users.company_id', '=', 'companies.id')
        ->select(['name', 'title as company_title'])
        ->get();

foreach ($users as $user) {
    echo $user->name . " " . $user->company_title . "<br>";
}

    }


    public function show($id)
    {
        echo "This is User with ID $id";
    }



}


