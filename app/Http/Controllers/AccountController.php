<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {

        $rules = [
            'username' => 'required|unique:users,email',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $messages = [
            'password.same' => 'Yo, dwag, password are not cool',
            'first_name.required' => 'Yo dwag, need some name man!'
        ];
        $request->validate($rules, $messages);

        // everything is cool
        $userData = [
            'email' => $request->get('username'),
            'password' => Hash::make ($request->get('password')),
            'name' => $request->get('first_name'),
            'surname' => $request->get('last_name'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success','Yeee, you are registered!');
        return redirect()->back();
    }
    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];         
    }
    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}