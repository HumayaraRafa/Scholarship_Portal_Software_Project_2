<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    //
    public function index()
    {
    	# code...
        $scholarships=DB::table('scholarships')
                ->where('removed',0)
		    	->get();
    	
    	// return $scholarships;
    	return view('student.index' ,['scholarships' => $scholarships]);
    	// return view('university.index');
    }
    public function getScholarship(Request $req)
    {
        if(count((array)DB::table('scholarships')->where('scholarshipid',$req->id)->first())>0)
        {
            $studentid=DB::table('students')->where('userid',$req->session()->get('userid'))->value('studentid');
            $count=count((array)DB::table('applicants')->where('scholarshipid',$req->id)->where('studentid',$studentid)->first());
            $prefferedDegree=DB::table('students')->where('userid',$req->session()->get('userid'))->value('prefferedDegree');
            $scholarship= DB::table('scholarships')->where('scholarshipid',$req->id)->first();
            return view('student.scholarship',['scholarship'=>$scholarship,'prefferedDegree'=>$prefferedDegree,'counter'=>$count]);
            // return $prefferedDegree;
        }
        else
            return "False Scholarship No ";
    }
    public function aboutus()
    {
        $scholarships=DB::table('scholarships')
                ->get();
        
        // return $scholarships;
        return view('student.aboutus' ,['scholarships' => $scholarships]);
    }
    public function applyScholarship(Request $req)
    {
        $studentid=DB::table('students')->where('userid',$req->session()->get('userid'))->value('studentid');
        DB::table('applicants')->insert([
                            'scholarshipid'=> $req->scholarshipid,
                            'studentid'=> $studentid,
                            'applyingdate' => date('Y-m-d')
                        ]);
        $appliedcount=DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->value('applicationcount');
        $appliedcount=$appliedcount+1;
        DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->update(['applicationcount'=>$appliedcount]);
        return redirect('/student/scholarships/'.$req->scholarshipid);
    }
    public function getProfile(Request $req)
    {
        $student= DB::table('students')->where('userid',$req->session()->get('userid'))->first();
        $email=DB::table('users')->where('userid',$req->session()->get('userid'))->value('email');
        return view('student.profile',['student'=>$student,'email'=>$email]);
    }
    public function updateProfile(Request $req)
    {
        // return $req;
        
        
        DB::table('students')->where('userid', $req->session()->get('userid'))->update(['fullname' => $req->fullname,'country'=>$req->country,'city'=>$req->city,'state'=>$req->state,'zip'=>$req->zip,'prefferedDegree'=>$req->prefferedDegree]);
        if ($req->has('updateCv')) {
            $username=DB::table('students')->where('userid',$req->session()->get('userid'))->value('fullname');
            $filename='CV_'.$username.'_'.time().'.pdf';
            $req->file('cv')->storeAs('cv',$filename);
            DB::table('students')->where('userid', $req->session()->get('userid'))->update(['cv'=>$filename]);
        }

        return redirect('/student');

    }
    public function myApplies(Request $req)
    {
        $studentid=DB::table('students')->where('userid',$req->session()->get('userid'))->value('studentid');
        $scholarships= DB::table('scholarships')
        ->join('applicants', function ($join) use ($req,$studentid) {
            $join->on('scholarships.scholarshipid', '=', 'applicants.scholarshipid')
                 ->where('applicants.studentid','=', $studentid);
        })
        ->get();
        return view('student.myApplies',['scholarships'=>$scholarships]);
    }
    public function getSearchedScholarship(Request $req)
    {
        # code...
        if($req->degreeType != 1){
           $scholarships=DB::table('scholarships')
                    ->where('degreeType',$req->degreeType)
                    ->get();
            $degree=$req->degreeType;            
            return view('student.search' ,['scholarships' => $scholarships,'degree'=>$degree]); 
        }
        else{
            return "Nothing";
        }
    }
    public function changePass()
    {
        return view('student.changePass');
    }
    public function postchangePass(Request $req)
    {
        // $details=DB::table('users')->where('userid',$req->session()->get('userid'))->first();
        $pass=DB::table('users')->where('userid',$req->session()->get('userid'))->value('password');
        if($pass!=$req->oldpass){
            $req->session()->flash('asdfghjkl', 'Old Password is not Correct');
            return redirect('/student/change-password'); 

        }
        else{
            DB::table('users')->where('userid', $req->session()->get('userid'))->update(['password'=>$req->newpass]);
            return redirect('/student');
        }
    }
}
