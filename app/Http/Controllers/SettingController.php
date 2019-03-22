<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    
	public function setting() {
		$setting=Setting::orderBy('id', 'desc')->first();
		return view('settings',compact('setting'));
	}


	public function save(Request $request) {

		$data = request()->except(['_token', '_method']);
		Setting::orderBy('id', 'desc')->update($data);
		return redirect('/settings')->with('success','settings updated Successfully');

	}
}
