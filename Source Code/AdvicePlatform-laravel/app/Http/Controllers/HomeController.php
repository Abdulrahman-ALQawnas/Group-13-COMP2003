<?php

namespace App\Http\Controllers;


use App\Models\Advertisement;
use App\Models\Book;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Slider;
use App\Models\User;
use App\Models\VerifyAccounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
    public function courses(){
        return view('courses');
    }
    public function map(){
        return view('map');
    }
    public function chat(){
        return view('chat');
    }
    public function single_course(){
        return view('single_course');
    }
    public function advices(){
        return view('advices');
    }
    public function profile(){
        return view('profile');
    }
}
