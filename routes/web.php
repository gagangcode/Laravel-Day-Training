<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
echo "This is About Page";
})-> name('gagan');;
Route::get('/contact', function () {
echo "This is contact Page";
});
Route::get('/home', function () {
return view('day3');
});
Route::get('/service', function () {
echo "This is service Page";
});
Route::get('/search/{name}', function ($name) {
echo $name;
});

//sum/24/25
Route::get('/sum/{no1}/{no2}', function ($no1, $no2){
echo "Sum of $no1 and $no2 is: ", $no1 + $no2;
});