<?php

use App\Events\MessagePosted;
use App\Events\Notify;

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

Route::get('/chat', function () {
    return view('chat');
})->middleware('auth');

Route::get('/messages', function() {
    return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function() {
    // Store the new message
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);

    // Announce that a new mesage has been posted
    broadcast(new MessagePosted($message, $user))->toOthers();

    return ['status' => 'OK'];
})->middleware('auth');

Route::get('/notifications', function() {
    return App\Notification::with('user')->get();
})->middleware('auth');

Route::post('/notifications', function() {
    // Store the new message
    $user = Auth::user();

    $message = $user->notifications()->create([
        'message' => request()->get('message')
    ]);

    // Announce that a new mesage has been posted
    //event(new Notify($message, $user));

    return ['status' => 'OK'];
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
