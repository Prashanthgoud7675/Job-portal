<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user'));
    }
    public function update_avatar(Request $request){

        $request->validate([
            'profile_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $profile_urlName = $user->id.'_profile_url'.time().'.'.request()->profile_url->getClientOriginalExtension();

        $request->profile_url->storeAs('profile_url',$profile_urlName);

        $user->profile_url = $profile_urlName;
        $user->save();

        return redirect('/')
            ->with('success','You have successfully upload image.');

    }
}
