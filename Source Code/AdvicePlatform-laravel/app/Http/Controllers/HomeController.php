<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Collage;
use App\Models\Specialization;
use App\Models\Review;
use App\Models\Advice;
use App\Models\Report;
use App\Models\ChatRoom;
use App\Models\chatRoomMessage;
use App\Models\chatRoomUser;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Mockery\Matcher\Not;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function Register(){
        $specializations = Specialization::all();
        return view('signup')->with(['specializations'=>$specializations]);
    }
    public function courses($specialization_id){
        $courses = Course::where('specialization_id',$specialization_id )->paginate(9);
        $specialization = Specialization::find($specialization_id);
        return view('courses')->with(['courses'=> $courses,
                                        'collage_id'=> $specialization->getCollageId(),
                                        'specialization_id'=>$specialization_id]);
    }
    public function coursesSearch(Request $request, $specialization_id)
    {
        $courses = Course::where('specialization_id',$specialization_id );
        $specialization = Specialization::find($specialization_id);
        if($request->search){
            $q = $request->search;
            $courses = $courses->where('name','Like','%'.$q.'%');
        }
        $courses = $courses->orderBy('created_at','desc')->paginate(9);
        return view('courses')->with(['courses'=> $courses, 'collage_id'=> $specialization->getCollageId(), 'specialization_id'=>$specialization_id]);
    }
    public function collages(){
        $collages = Collage::paginate(9);
        return view('collages')->with(['collages'=> $collages]);
    }
    public function CollageSearch(Request $request)
    {
        $collages = new Collage();
        if($request->search){
            $q = $request->search;
            $collages = $collages->where('name','Like','%'.$q.'%');
        }
        $collages = $collages->orderBy('created_at','desc')->paginate(9);

        return view('collages')->with(['collages'=> $collages]);
    }
    
    public function specializations($collage_id){
        $specializations = Specialization::where('collage_id',$collage_id )->paginate(9);
        return view('specializations')->with(['specializations'=> $specializations,
                                                'collage_id'=> $collage_id]);
    }
    public function SpecializationSearch(Request $request, $collage_id)
    {
        $specializations = Specialization::where('collage_id',$collage_id );
        if($request->search){
            $q = $request->search;
            $specializations = $specializations->where('name','Like','%'.$q.'%');
        }
        $specializations = $specializations->orderBy('created_at','desc')->paginate(9);

        return view('specializations')->with(['specializations'=> $specializations,
                                             'collage_id'=> $collage_id]);
    }
    public function follow($course_id){
        $follower = new Follower;
        $follower->user_id = auth()->user()->id;
        $follower->course_id = $course_id;
        $follower->save();
        $chatRoom = chatRoom::where('course_id', $course_id)->first();
        $chatRoomUser = new chatRoomUser();
        $chatRoomUser->chat_room_id = $chatRoom->id;
        $chatRoomUser->user_id = $follower->user_id;
        $chatRoomUser->save();
        $is_following = Follower::where('user_id',$follower->user_id)->exists();
        $course = Course::find($course_id);
        $specialization_id= $course->specialization_id;
        $specialization = Specialization::find($specialization_id);
        $courses = Course::where('specialization_id',$specialization_id )->paginate(9);
        return view('courses')->with(['is_following'=> $is_following,
                                    'collage_id'=> $specialization->getCollageId(),
                                    'specialization_id'=>$specialization_id,
                                    'courses'=> $courses,]);
    }
    public function unfollow($course_id){
        $follower = Follower::where('user_id', auth()->user()->id)->delete();
        $chatRoomUser = chatRoomUser::where('user_id', auth()->user()->id)->first();
        $chatRoomUser->active = false;
        $chatRoomUser->save();
        $is_following = Follower::where('user_id',auth()->user()->id)->exists();;
        $course = Course::find($course_id);
        $specialization_id= $course->specialization_id;
        $specialization = Specialization::find($specialization_id);
        $courses = Course::where('specialization_id',$specialization_id )->paginate(9);
        return view('courses')->with(['is_following'=> $is_following,
                                    'collage_id'=> $specialization->getCollageId(),
                                    'specialization_id'=>$specialization_id,
                                    'courses'=> $courses,]);
    }
    public function map(){
        return view('map');
    }
    public function chatrooms(){
        $chatrooms = ChatRoom::paginate(10);
        return view('chatRooms')->with(['chatrooms'=> $chatrooms]);
    }
    public function chatroomsSearch(Request $request)
    {
        $chatrooms = new chatroom();
        if($request->search){
            $q = $request->search;
            $courses_ids = Course::where('name', 'like','%'.$q.'%' )->pluck('id');

            $chatrooms = $chatrooms->whereIn('course_id',$courses_ids);
        }
        $chatrooms = $chatrooms->orderBy('created_at','desc')->paginate(9);

        return view('chatRooms')->with(['chatrooms'=> $chatrooms]);
    }
    public function chatroom_message($chatroom_id){
        $chats = ChatRoomMessage::where('chat_room_id', $chatroom_id)->latest()->paginate(10);
        return view('chatRoomMessages')->with(['chats'=> $chats,
                                                'chatroom_id'=> $chatroom_id]);
    }
    public function chatroomMessagesSearch(Request $request, $chatroom_id)
    {
        $chats = ChatRoomMessage::where('chat_room_id', $chatroom_id);
        if($request->search){
            $q = $request->search;

            $chats = $chats->where('message','Like','%'.$q.'%');
        }
        $chats = $chats->orderBy('created_at','desc')->paginate(10);

        return view('chatRoomMessages')->with(['chats'=> $chats,
                                                'chatroom_id'=> $chatroom_id]);
    }
    public function create_message(Request $request){
        $chatroom_message = new ChatRoomMessage();
        $chatroom_message->chat_room_id = $request->chatroom_id;
        $chatroom_message->user_id = auth()->user()->id;
        $chatroom_message->message = $request->message;
        $chatroom_message->type = $request->type;
        $chatroom_message->save();
        $chats = ChatRoomMessage::where('chat_room_id', $chatroom_message->chatroom_id)->paginate(10);
        return redirect()->route('chatroom_message', $chatroom_message->chat_room_id);
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
        return redirect()->route('report', $report->user_id)->with(['success'=> 'Report send Successfully']);
    }
}