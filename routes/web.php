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

    $video_list = config('video.video');
    $subscribe_list = config('subscribes.subscribe');

    return view('youtube',
      [
        'video_list' => $video_list
      ],
      [
        'subscribe_list' => $subscribe_list
      ]
    );
})->name('youtube');