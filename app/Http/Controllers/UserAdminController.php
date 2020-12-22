<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserAdminController extends Controller
{

    public function userDetail(Request $request){
        
        if($request->user_id != 0){
            $userForDetail =DB::table('users')
            ->where('users.id',$request->user_id)
            ->get();
            return view('admin.users.editUser', compact('userForDetail'));
        }
        else {
            return view('admin.users.addUser');
        }
        
    }

    public function deleteUser($user_id){
        DB::table('users')->where('users.id', $user_id)->delete();
        return \redirect()->action('AdminController@userAdmin');
    }

}
