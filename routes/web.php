<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

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
    $fileUrl = Storage::url('public/tracks/song.mp3');
    $fileUrl2 = Storage::url('public/tracks/silence.mp3');

    //dd($fileUrl);
    return view('welcome')->with('fileUrl', $fileUrl)->with('fileUrl2', $fileUrl2);
});

Route::get('setup', function () {
    $storage = Artisan::call('storage:link');
    dd($storage);
});
