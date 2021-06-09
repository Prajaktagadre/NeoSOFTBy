<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Http\Requests\staffRegistrationRequest;
use Hash;

class staffRegistrationtController extends Controller
{
    public function create(Request $request)
    {
        $departments=Department::all();
        return view('staffRegistration',compact('departments'));
    }


    public function save(staffRegistrationRequest $request)
    {
            $user                   = new User();
            $user->name             =$request->name;
            $user->user_name        =$request->user_name;
            $user->email            = $request->email;
            $user->contact_no       = $request->contact_no;
            $user->department_id    = $request->department_id;
            $user->role_id          = 2;
            $user->password         = Hash::make($request->password);
            $user->image = time().'.'.$request->image->extension();  
            //dd($user->image);
            $request->image->move(public_path('images'), $user->image);
   
            $user->save();
           return redirect('/login')->with('success','Staff registered succefully');
       
    }
}
