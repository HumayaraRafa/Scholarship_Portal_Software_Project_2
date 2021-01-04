<?php
///Carbon::parse($date);
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(Request $req){
        //Student COunt
        $students=count(DB::table('students')->get());
        //University Count
        $University=count(DB::table('universities')->get());
        //Get this month offered Scholarships
        $monthStarting="1-".Carbon::now()->month."-".Carbon::now()->year;
        $monthEnding="30-".Carbon::now()->month."-".Carbon::now()->year;
        $offered=count(DB::table('scholarships')->whereBetween('postingdate', [Carbon::parse($monthStarting), Carbon::parse($monthEnding)])->get());
        // getapplications this month
        $applicants=count(DB::table('applicants')->whereBetween('applyingdate', [Carbon::parse($monthStarting), Carbon::parse($monthEnding)])->get());
        //Feedback Doughnut
        $totalFeedback=count(DB::table('feedback')->get());
        $angryFeedback=round(count(DB::table('feedback')->where('value','Angry')->get())*100/$totalFeedback,2);
        $badFeedback=round(count(DB::table('feedback')->where('value','Bad')->get())*100/$totalFeedback,2);
        $avgFeedback=round(count(DB::table('feedback')->where('value','Average')->get())*100/$totalFeedback,2);
        $goodFeedback=round(count(DB::table('feedback')->where('value','Good')->get())*100/$totalFeedback,2);
        $awesomeFeedback=round(count(DB::table('feedback')->where('value','Awesome')->get())*100/$totalFeedback,2);
        //Piechart offered degree
        $bachelor=count(DB::table('scholarships')->where('degreetype','Bachelor')->get());
        $masters=count(DB::table('scholarships')->where('degreetype','Masters')->get());
        $phd=count(DB::table('scholarships')->where('degreetype','Ph.D')->get());
        $others=count(DB::table('scholarships')->where('degreetype','Others')->get());
        //table
        $table=DB::select("SELECT  universities.universityname,
            COUNT(*) AS countScholarship
            FROM    universities AS universities
            INNER JOIN scholarships AS scholarships
            ON universities.universityid = scholarships.universityid
            GROUP   BY universities.universityname
            ORDER BY COUNT(*) DESC");

    	return view('admin.index',[
            'totalFeedback'=>$totalFeedback,
            'angryFeedback'=>$angryFeedback,
            'badFeedback'=>$badFeedback,
            'avgFeedback'=>$avgFeedback,
            'goodFeedback'=>$goodFeedback,
            'awesomeFeedback'=>$awesomeFeedback,
            'b'=>$bachelor,
            'm'=>$masters,
            'p'=>$phd,
            'o'=>$others,
            's'=>$students,
            'u'=>$University,
            'off'=>$offered,
            'app'=>$applicants,
            'uni'=>$table,
            'st'=>$req->session()->get('status'),
        ]);
        
    }
    public function addEmployee(Request $req)
    {
    	# code...
        if($req->session()->get('status')==99){
           return view('admin.addEmployee',['st'=>$req->session()->get('status')]); 
        }
        else{
            return redirect('/admin');
        }
    	
    }
    public function InsertEmployee(Request $req)
    {
        // return $req;
        if($req->session()->get('status')==99){
           DB::table('users')->insert([
                'email'=>$req->username,
                'password'=>$req->password,
                'username'=>$req->abcd,
                'status'=>5
            ]);
            $userid= DB::table('users')->where('email',$req->username)->where('password',$req->password)->value('userid');
            DB::table('admins')->insert([
                'userid'=>$userid,
                'fullname'=>$req->fullname,
                'username'=>$req->abcd,
                'contactno'=>$req->contactno,
                'address'=>$req->address,
                'city'=>$req->city,
                'postalcode'=>$req->postalcode,
                'country'=>$req->country,
                'email'=>$req->username,
                'active'=>0
            ]);
            return redirect('/admin/add-employee');
        }
        else{
            return redirect('/admin');
        }
        
    }
    public function addStudent()
    {
    	# code...
    	return view('admin.addStudent');
    }
    public function addUniversity()
    {
    	# code...
    	return view('admin.addUniversity');
    }
    public function getEmpList(Request $req)
    {
    	# code...
        if($req->session()->get('status')==99){
           // return view('admin.addEmployee',['st'=>$req->session()->get('status')]); 
            $admins= DB::table('admins')->where('active',0)->get();
            return view('admin.getEmpList',['admins'=>$admins,'st'=>$req->session()->get('status')]);
        }
        else{
            return redirect('/admin');
        }
        
    }
    public function adminDelete(Request $req)
    {
        # code...
        
        if($req->session()->get('status')==99){
           DB::table('admins')->where('adminid',$req->adminid)->update([
                'active'=>1
            ]);
            $userid=DB::table('admins')->where('adminid',$req->adminid)->value('userid');
            DB::table('users')->where('userid',$userid)->update(['status'=>10]);
            return redirect("/admin/employee-list");
        }
        else{
            return redirect('/admin');
        }
    }
    public function adminEdit(Request $req)
    {
        # code...
        
        if($req->session()->get('status')==99){
            $admin=DB::table('admins')->where('adminid',$req->adminid)->first();
            return view('admin.editEmployee',['admin'=>$admin,'st'=>$req->session()->get('status')]);
        }
        else{
            return redirect('/admin');
        }
    }
    public function adminUpdate(Request $req)
    {
        # code...
        
        if($req->session()->get('status')==99){
            DB::table('admins')->where('adminid',$req->adminid)->update([
                'fullname'=>$req->fullname,
                'contactno'=>$req->contactno,
                'address'=>$req->address,
                'city'=>$req->city,
                'postalcode'=>$req->postalcode,
                'country'=>$req->country
            ]);
            
            return redirect('/admin/employee-list');
        }
        else{
            return redirect('/admin');
        }
        // return $req->session()->get('userid');
    }
    public function changeotp(Request $req)
    {
        # code...
        if($req->session()->get('status')==5){
            return view('admin.otpchange');
        }
        else{
            return redirect('/admin');
        }
    }
    public function updateotp(Request $req)
    {
        # code...
        if($req->session()->get('status')==5){
            DB::table('users')->where('userid',$req->session()->get('userid'))->update([
                'password'=>$req->newpass,
                'status'=>98
            ]);
            $req->session()->put('status',98);
            return redirect('/admin');
        }
        else{
            return redirect('/admin');
        }
    }
    public function scholarshipReq(Request $req)
    {
        # code...'st'=>$req->session()->get('status')
        $scholarships=DB::table('scholarships')->where('removed',3)->get();
        return view('admin.scholarshipReq',['scholarship'=>$scholarships,'st'=>$req->session()->get('status')]);
        // return $scholarships;
    }
    public function viewScholarship(Request $req)
    {
        # code...'st'=>$req->session()->get('status')
        $scholarships=DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->first();
        return view('admin.viewScholarship',['scholarship'=>$scholarships,'st'=>$req->session()->get('status')]);
        // return $scholarships;
    }
    public function confirmScholarship(Request $req)
    {
        # code...'st'=>$req->session()->get('status')
        $scholarships=DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->first();
       
        DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->update([
            'removed'=>0
        ]);
         return redirect('/admin/scholarship-requests');
        // return $scholarships;
    }
    public function recheckScholarship(Request $req)
    {
        # code...'st'=>$req->session()->get('status')
        $scholarships=DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->first();
       
        DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->update([
            'removed'=>4
        ]);
         return redirect('/admin/scholarship-requests');
        // return $scholarships;
    }
    public function rejectScholarship(Request $req)
    {
        # code...'st'=>$req->session()->get('status')
        $scholarships=DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->first();
       
        DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->update([
            'removed'=>5
        ]);
         return redirect('/admin/scholarship-requests');
        // return $scholarships;
    }
    
    
}
