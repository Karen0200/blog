<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FlightController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('user/{id}', function (int $id) {
    return 'User '.$id;
});
Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        //
    }
);

Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

Route::get("countries", [CountryController::class,"index"]);

Route::get("users", [
    UserController::class,
    'index'
]);
Route::get("flights",[
    FlightController::class,
    "index"
]);








// Route::get('/', function () {
//     return view('greeting', ['name' =>'Jamse']);
// });
// Route::get('blade',function(){
//         return view('child');
//     });

