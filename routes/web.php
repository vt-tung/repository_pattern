<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('user', \App\Http\Controllers\UserController::class);

Route::get('user/{id?}', function ($id = 'name') {
    return "User id: $id";
});

Route::get('lkc-p', function () {
    $users = App\Models\User::all();
    foreach ($users as $user){
        echo $user->email;
        echo '</br>';
        // dd($user->Posts) ;
    }
});

Route::get('lkn-n', function () {
    $products = App\Models\Product::query()->with('attr')->get();
    foreach ($products as $pro){
        echo $pro->name;        echo '</br>';

        foreach ($pro->attr as $attr){
            echo $attr->name . ',';
        }
        echo '</br>';

        echo '<hr>';
    }
});