<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $user = auth()->user();
         
            $total_staff = User::where('department_id',$user->department_id)->where('role_id',2)->count();

       // $total_staff = User::where('role_id',2)->count();

        return view('dashboard',compact('total_staff'));

    }
}
