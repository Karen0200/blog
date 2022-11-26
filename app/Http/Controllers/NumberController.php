<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{

    public function index()
    {
        echo "number greater than" . "  " . pi();

    }

}
