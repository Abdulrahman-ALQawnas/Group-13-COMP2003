<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Collage;
use App\Models\Specialization;
use App\Models\Review;
use App\Models\Advice;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Mockery\Matcher\Not;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function Register(){
        return view('signup');
    }
    public function courses($specialization_id){
        $courses = Course::where('specialization_id',$specialization_id )->paginate(9);
        $specialization = Specialization::find($specialization_id);
        return view('courses')->with(['courses'=> $courses,
                                        'collage_id'=> $specialization->getCollageId()]);
    }
    public function collages(){
        $collages = Collage::paginate(9);
        return view('collages')->with(['collages'=> $collages]);
    }
    public function specializations($collage_id){
        $specializations = Specialization::where('collage_id',$collage_id )->paginate(9);
        return view('specializations')->with(['specializations'=> $specializations]);
    }
    public function map(){
        return view('map');
    }
    public function chat(){
        return view('chat');
    }
    public function single_course($course_id){
        $course = Course::find($course_id);
        $specialization_id = $course->specialization_id;
        $specialization = Specialization::find($specialization_id);
        $collage_id = $specialization->getCollageId();
        $reviews = Review::where('course_id',$course_id)->get();
        return view('single_course')->with(['reviews'=> $reviews,
                                            'specialization_id'=>$specialization_id,
                                            'collage_id'=>$collage_id,
                                            'course_id'=>$course_id]);
    }
    public function advices($course_id){
        $course = Course::find($course_id);
        $specialization_id = $course->specialization_id;
        $specialization = Specialization::find($specialization_id);
        $collage_id = $specialization->getCollageId();
        $advices = Advice::where('course_id',$course_id)->get();
        return view('advices')->with(['advices'=> $advices,
                                            'specialization_id'=>$specialization_id,
                                            'collage_id'=>$collage_id,
                                            'course_id'=>$course_id]);
    }
    public function my_profile(){
        $specializations = Specialization::all();
        return view('my_profile')->with(['specializations'=> $specializations]);
    }
    public function profile($user_id){
        $user = User::find($user_id);
        return view('profile')->with(['user'=>$user]);
    }
    public function update_profile(Request $request)
    {
        if (Auth::check()){
            $user = auth()->user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->bio = $request->bio;
            $user->type = $request->type;
            $user->system_mode = $request->system_mode;
            $user->spectialization_id = $request->spectialization_id;
            $user->save();
            if($request->hasFile('image')){
                $user->setImage($request->file('image'));
            }
            if ( $request->password != '' ) {
                $request->validate([
                    'password' => ['string', 'min:6'],
                ]);
                $user->password= Hash::make($request->password);
            }
            $user->refresh();
            $user->save();
        }
        return redirect()->route('my_profile');
    }
    public function report($user_id){
        return view('report')->with(['user_id'=>$user_id]);
    }
    public function send_report(Request $request){
        $report = new Report();
        $report->user_id = $request->user_id;
        $report->type = $request->type;
        $report->reason = $request->reason;
        $report->reported_at = Carbon::now();
        $report->save();
        return view('report')->with(['success'=> 'Report send Successfully']);
    }
}