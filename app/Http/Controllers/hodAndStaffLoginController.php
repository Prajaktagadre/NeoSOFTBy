<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hodAndStaffLoginController extends Controller
{
    public function loginView(Request $request)
    {
        return view('login');
    }


    public function authonticate(Request $request)
    {   
        $input = $request->all();
        $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('user_name' => $input['user_name'], 'password' => $input['password'])))
        {
            if (auth()->user()) {
                
                return redirect('/dashboard')->with('success','Logged in successfully');
            }else{
                return redirect('/dashboard')->with('error','Username And Password Are Wrong.');
            }

        }else{
            return redirect('/dashboard')->with('error','Username And Password Are Wrong.');
        }
    }
}
