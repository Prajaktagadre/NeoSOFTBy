<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Http\Requests\hodRegistrationRequest;
use Hash;

class hodRegistrationtController extends Controller
{
    public function create(Request $request)
    {
        $departments=Department::all();
        return view('hodRegistration',compact('departments'));
    }


    public function save(hodRegistrationRequest $request)
    {
            $user                   = new User();
            $user->name             =$request->name;
            $user->user_name        =$request->user_name;
            $user->email            = $request->email;
            $user->contact_no       = $request->contact_no;
            $user->department_id    = $request->department_id;
            $user->role_id          = 1;
            $user->password         = Hash::make($request->password);
            if($request->image){
            $user->image = time().'.'.$request->image->extension();  
            //dd($user->image);
            $request->image->move(public_path('images'), $user->image);
            }
            $user->save();
           return redirect('/dashboard')->with('success','HOD registered succefully');
       
    }

}
