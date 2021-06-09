<?php

namespace App\Http\Controllers;
use App\Models\leave;
use Illuminate\Http\Request;

class staffDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $total_leaves =leave::where('user_id',$user->id)->count();
        $total_approved=leave::where('user_id',$user->id)->where('status',1)->count();
        $total_rejected=leave::where('user_id',$user->id)->where('status',2)->count();
        return view('staffdashboard',compact('total_leaves','total_approved','total_rejected'));

    }
}
