<?php

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
    return view('pages/index')->with(['page' => 'index']);
});

Route::get('/articles', function () {
    return view('pages/articles')->with(['page' => 'articles']);
});

Route::get('/article_1', function () {
    return view('pages/article_1')->with(['page' => 'articles']);
});

Route::get('/register', function () {
    return view('pages/register')->with(['page' => 'register']);
});

Route::get('/chat', function () {
    return view('pages/chat')->with(['page' => 'chat']);
});

Route::get('/about_us', function () {
    return view('pages/about_us')->with(['page' => 'about_us']);
});

Route::post('/register', 'AccountController@storeUser');
// Route::post('/register', function(Request $request){
//     dd($request);
//     $rules = [
//         'username' => 'required',
//         'first_name' => 'required',
//         'password' => 'required|min:8|same:password2'
//     ];
//     $validation = $request->validate($rules);
//     dd($validation);

// });

Route::post('/chat/save-message', 'AccountController@saveChatMessage');
Route::get('/chat/get-messages', 'AccountController@getChatMessages');