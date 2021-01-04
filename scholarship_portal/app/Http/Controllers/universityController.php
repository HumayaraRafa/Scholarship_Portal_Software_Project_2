<?php
// return Storage::download('file.jpg');
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class universityController extends Controller
{
    //
    public function index(Request $req)
    {
    	$universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        $name= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityname');
    	$offered= DB::table('scholarships')->where('universityid',$universityid)->orderBy('deadline', 'desc')->get();
    	return view('university.index',['scholarships'=>$offered, 'universityname'=>$name]);
    	// return $offered;
    }
    public function getStudents(Request $req)
    {
        $name= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityname');
    	$students= DB::table('students')
        ->join('applicants', function ($join) use ($req) {
            $join->on('students.studentid', '=', 'applicants.studentid')
                 ->where('applicants.scholarshipid','=', $req->scholarshipid);
        })
        ->get();
        $headline= DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->value('headline');
        return view('university.students',['students'=>$students,'headline'=>$headline,'scholarshipid'=>$req->scholarshipid,'universityname'=>$name]);
    }
    public function studentAction(Request $req)
    {
    	# code...
    	return $req->studentid;
    }
    public function newScholarship(Request $req)
    {
        # code...
        $name= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityname');
    	return view('university.newScholarship',['universityname'=>$name]);
    }
    public function scholarshipedit(Request $req)
    {
        # code...
        $university= DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->first();
        return view('university.editScholarship',['scholarship'=>$university]);
    }
    public function newScholarshipPost(Request $req)
    {
        # code...
        $universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        DB::table('Scholarships')->insert([
                            'universityid'=> $universityid,
                            'headline'=> $req->headline,
                            'degreetype' => $req->degreetype,
                            'costing' => $req->costing,
                            'postingdate' => date('Y-m-d'),
                            'deadline' => $req->deadline,
                            'startingdate' => $req->startingdate,
                            'details' => $req->details,
                            'eligibility' => $req->eligibility,
                            'benefits' => $req->benefits,
                            'web' => $req->web,
                            'image' => 'a',
                            'application' => $req->application,
                            'removed' => 3,'applicationCount'=>0
                        ]);
        return redirect('/university');
    }
    public function scholarshipeditConfirm(Request $req)
    {
        # code...
        $universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        DB::table('Scholarships')->where('scholarshipid',$req->scholarshipid)->update([
                            'headline'=> $req->headline,
                            'degreetype' => $req->degreetype,
                            'costing' => $req->costing,
                            'deadline' => $req->deadline,
                            'startingdate' => $req->startingdate,
                            'details' => $req->details,
                            'eligibility' => $req->eligibility,
                            'benefits' => $req->benefits,
                            'web' => $req->web,
                            'image' => 'a',
                            'application' => $req->application,
                            'removed' => 3
                        ]);
        return redirect('/university');
    }
    
    public function profile(Request $req)
    {
        $university= DB::table('universities')->where('userid',$req->session()->get('userid'))->first();
        $email=DB::table('users')->where('userid',$req->session()->get('userid'))->value('email');
        return view('university.profile',['university'=>$university,'email'=>$email]);
        // return $university;
    }
    public function updateProfile(Request $req)
    {
        $universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        DB::table('universities')->where('universityid',$universityid)->update([
            'universityname' => $req->universityname,
            'country' => $req->country,
            'city' => $req->city,
            'state' => $req->state,
            'zip' => $req->zip,
            'contact' => $req->contact
        ]);
        return redirect('/university');
    }
    public function changePass()
    {
        return view('university.changePass');
    }
    public function postchangePass(Request $req)
    {
        $pass=DB::table('users')->where('userid',$req->session()->get('userid'))->value('password');
        if($pass!=$req->oldpass){
            $req->session()->flash('asdfghjkl', 'Old Password is not Correct');
            return redirect('/university/change-password'); 

        }
        else{
            DB::table('users')->where('userid', $req->session()->get('userid'))->update(['password'=>$req->newpass]);
            return redirect('/university');
        }
    }
    
}
