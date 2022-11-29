<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function __construct()
    {
        $this->middleware('equality');
    }

    public function index()
    {
        echo "number greater than" . "  " . pi();

    }

    public function equality()
    {
        echo 'number is not equal to 10'.'<br>';
        return $this->index();
    }

}
