<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\SubjectModel as SubjectModel;

class SubjectAdminController extends Controller
{
    public function subjectAdmin(){    
        $subjects = DB::table('subject')
        ->paginate(10);
        return view('admin.subject.form',compact('subjects'));
    }

    public function subjectDetail(Request $request){

        if($request->subject_id != 0){
            $subjectForEdit = SubjectModel::where('id',$request->subject_id)->get();
            return view('admin.subject.editSubject', compact('subjectForEdit'));
        }
        else {
            return view('admin.subject.addSubject');
        }
        
    }

    public function subjectEdit(Request $request){
       
        SubjectModel::where('id',$request->subject_id)
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
