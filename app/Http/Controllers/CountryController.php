<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{


    public function index()
    {
        $country = DB::table("countries")
            ->where("name", "=", "Armenia")->first();
        $artshakh = $country;

        unset($artshakh->id);
        $artshakh->name = 'Artsakh';

        try{
            DB::table("countries")->updateOrInsert((array)$artshakh);
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
