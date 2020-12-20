<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserAdminController extends Controller
{

    public function userDetail(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        if($request->user_id != 0){
            $userForDetail =DB::table('users')
            ->where('users.id',$request->user_id)
            ->get();
            return view('admin.users.editUser', compact('infoAdmin','userForDetail'));
        }
        else {
            return view('admin.users.addUser', compact('infoAdmin'));
        }
        
    }

    public function deleteUser($user_id){
        DB::table('users')->where('users.id', $user_id)->delete();
        return \redirect()->action('AdminController@userAdmin');
    }

    // public function addUser(Request $request){
    //     $infoAdmin = DB::table('users')
    //     ->where('users.id',Auth::user()->id)
    //     ->get();
    //     $newUser = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'status' => $request->status,
    //         'role_id' => $request->role_id,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ];
    //     DB::table('users')->insert($newUser);
    //     return \redirect()->action('AdminController@userAdmin');
    // }
}
