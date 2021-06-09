<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\leave;
use App\Http\Requests\StaffLeaveMangementRequest;
use DataTables;

class StaffLeaveMangementController extends Controller
{
    public function create(Request $request)
    { 
      return view('LeaveMagmentByStaff.create');
        
    }


    public function save(StaffLeaveMangementRequest $request)
    {
        $user = auth()->user();
       
            $leave                      = new leave();
            $leave->user_id             =$user->id;
            $leave->department_id       =$user->department_id;
            $leave->leave_from_date     =$request->leave_from_date;
            $leave->leave_to_date       =$request->leave_to_date;
            $leave->reason              =$request->reason;
           
            $leave->save();
          
           return redirect('staffLeaveMagement')->with('success','Leave registered succefully');
       
    }

    public function index(Request $request)
    { 
        if ($request->ajax()) {
            $user = auth()->user();
           
            $model = leave::where('user_id',$user->id)->get();

            $path='staffLeaveMagement';
            return Datatables::of($model)
                ->addIndexColumn()
                ->addColumn('leave_from_date', '{{$leave_from_date}}')

                ->addColumn('leave_to_date', '{{$leave_to_date}}')
                ->addColumn('reason', '{{$reason}}')
               
                ->addColumn('status', '{{$status == 1 ? "Approved" : ($status == 0 ? "Pending" : "Rejected")}}')
                
                ->addColumn('edit_delete',function($model)use($path){
                    return view('Admin.partial.edit_delete',compact('model','path'));
                })
                ->rawColumns(['edit_delete'])
                ->make(true);   
        }

        return view('LeaveMagmentByStaff.list');
    }

    public function edit($id)
    {   
        $leave =leave::find($id);
        
        return view("LeaveMagmentByStaff.edit",compact('leave'));
    }


}
