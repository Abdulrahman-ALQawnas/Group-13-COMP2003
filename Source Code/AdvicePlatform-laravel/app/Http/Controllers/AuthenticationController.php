<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Constant;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class AuthenticationController extends Controller
{
    // use AuthenticatesUsers;

    // protected $redirectTo = '/';

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['login','register', 'index']);
    // }

    public function signin(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6|max:8',
        ]);
        if(auth()->attempt(array('email'=> $data['email'], 'password' => $data['password'])))
        {
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->with('error', 'Credentials error');
        }
    }
    public function signup(Request $request)
    {

        $user = new User();
        $user->setName($request->name);
        $user->setMobile($request->mobile);
        $user->setEmail($request->email);
        $user->setType($request->type);
        $user->setSpectializationId($request->spectialization_id);
        $user->setPassword($request->password);
        $user->save();
        return redirect()->route('login');

        // $check = $this->create($data);
        // if ($check){
        //     return redirect()->route('login');
        // }else{
        //     return redirect()->route('register');
        // }
    }
    public function logout()
    {
            Auth::guard('web')->logout();
            return redirect()->route('index');
    }
}