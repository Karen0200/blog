<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identitycard;

class IdentitycardController extends Controller
{
    // don't forget to use it
public function index()
{
//    $indentity = Identitycard::with(['user'])->get();
//    dd($indentity->toArray());

$indentity = Identitycard::with(['user'])->get();
   foreach($indentity as $val){
     echo '<b>Identity ID</b> : '. $val->identity_number.'<br />';
     echo '<b>Identity ID Name</b> : '. $val->user->name .'<br />';
     echo '--------------------------------------------- <br/>';
}
}
}
