<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringController extends Controller
{
    public function __construct()
    {
        $this->middleware('string');
    }

    public function index()
    {
        echo "you can continue";

    }
}
