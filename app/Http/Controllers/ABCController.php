<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ABCController extends Controller
{
// public function __construct(){
//     $this->middleware('terminate');
// }

    public function index(Request $request)
    {
        //push massivova pahum
        //put-y 1 hata avelcnum
        //forgot-y jnjuma yst key-i
        //flash-ov lriv

    //     $request->session()->put('key', 'value');
    //     $request->session()->forget('key');

    //   //  dd($request->session()->get('key'));
    //     dd($request->session()->get('key'));

    $countries = DB::table('countries')->paginate(15);
        return view(
            'countries.index',
            ['countries' => $countries]
        );


    }
}
