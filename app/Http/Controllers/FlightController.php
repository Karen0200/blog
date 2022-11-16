<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights =$flight = Flight::where('number', 'QM-168')->first();
        $flight->number = 'FR 456';
       // $flight->refresh();
        echo $flight->number;
        $flight->save();
        }
    }

