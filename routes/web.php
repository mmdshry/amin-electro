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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', '\Aimeos\Shop\Controller\CatalogController@homeAction')->name('aimeos_home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test',function (){
    $array = [11,1,8,15,2,7];

    $target = 9;

/*
     * First Challenge
    foreach ($array as $index => $value) {
        array_shift($array);
        foreach ($array as $index2 => $value2){
            if($value + $value2 === $target){
                echo "Indexes are Array[$index] => $value and Array[$index2] => ".$value2."<br>";
            }
        }
    }*/

    $number = 9999999999999;


    if(strrev($number) <= (2 ** 31)){
        echo strrev($number);
    }else{
        echo 0;
    }




});
