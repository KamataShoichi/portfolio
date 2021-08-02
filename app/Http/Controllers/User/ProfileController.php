<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    //
     public function add () {
        return view ('user.profile.create');
    }
    
    public function create (Request $request) {
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect ('user/profile/create');
    }
    
    public function edit () {
        return view ('user.profile.edit');
    }
    
    public function update () {
        return redirect ('user/profile/edit');
    }
    
    
}
