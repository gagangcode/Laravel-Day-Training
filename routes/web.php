<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
echo "This is About Page";
})-> name('gagan');
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
Route::get('/user/{no1}/{no2}', function ($no1, $no2) {
echo "Sum of $no1 and $no2 is: ", $no1 + $no2;
});
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
    });

require __DIR__ . "/assignment1.php";