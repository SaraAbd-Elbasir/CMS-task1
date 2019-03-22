<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
	  public function __construct()
    {
        
         $this->middleware('auth');
    }
    
    public function index(){

    	return view('auth.passwords.change');
    }

    public function changePassword(Request $request){
    	
    	$request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedpassword=Auth::user()->password;

        if(Hash::check($request->oldpassword,$hashedpassword)){

        	$user=User::find(Auth::id());
        	$user->password=Hash::make($request->password);
        	$user->save();
        	Auth::logout();
        	return redirect()->route('login')->with('success','password was change succesfuly');
        }else{
        	return redirect()->back()->with('error','Current password is invalid');
        }
    }
}
