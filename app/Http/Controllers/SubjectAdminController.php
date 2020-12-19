<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class SubjectAdminController extends Controller
{
    public function subjectAdmin(){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $subjects = DB::table('subject')
        ->paginate(10);
        // dd($subjects);
        return view('admin.subject.form',compact('infoAdmin','subjects'));
    }

    public function subjectDetail(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        if($request->subject_id != 0){
            $subjectForEdit =DB::table('subject')
            ->where('subject.id',$request->subject_id)
            ->get();
            return view('admin.subject.editSubject', compact('infoAdmin','subjectForEdit'));
        }
        else {
            return view('admin.subject.addSubject', compact('infoAdmin'));
        }
        
    }

    public function subjectEdit(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $dataUpdate = DB::table('subject')
        ->where('subject.id',$request->subject_id)
        ->update(['name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => now()]);
        return redirect()->action('SubjectAdminController@subjectAdmin');
    }

    public function subjectDelete($subject_id){
        DB::table('subject')->where('subject.id', $subject_id)->delete();
        return \redirect()->action('SubjectAdminController@subjectAdmin');
    }
    
    public function subjectAdd(Request $request){
        $infoAdmin = DB::table('users')
        ->where('users.id',Auth::user()->id)
        ->get();
        $newSubject = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('subject')->insert($newSubject);
        return \redirect()->action('SubjectAdminController@subjectAdmin');
    }
}
