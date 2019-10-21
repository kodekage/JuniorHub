<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at', 'asc')->get();
        return view('users.index', compact('users'));
    }

    public function show(User $user){
        // return $user;
        return view('users.profile', compact('user'));
    }

    public function profile(){
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'profile_picture'   => 'image|max:1999',
            'email' => 'required',
            'username' => 'required',
            'fullName' => 'required',
            'githubUsername' => 'required'
        ]);

        if($request->hasFile('profile_picture')){
            // get filename with extension
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
            // get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('profile_picture')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('profile_picture')->storeAs('public/profile_pictures', $fileNameToStore);

        }else{
            $fileNameToStore = 'no_image.jpg';
        }

        $user = User::find($id);
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->full_name = $request->input('fullName');
        $user->github_url = $request->input('githubUsername');
        $user->profile_picture = $fileNameToStore;

        $user->save();
        
        return redirect('/profile/'.$id)->with('success', 'Details updated successfully');
    }
}
