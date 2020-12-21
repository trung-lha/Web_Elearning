<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userEditInfo(Request $request){
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);
        }
        return \redirect()->action('HomeController@showInfo');
    }
}
