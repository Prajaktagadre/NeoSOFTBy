<?php

namespace App\Http\Controllers;
use App\Models\leave;
use Illuminate\Http\Request;
use DataTables;

class hodLeaveMangementController extends Controller
{
    public function index(Request $request)
    { 
        if ($request->ajax()) {
           
            $user = auth()->user();
           
            $model = leave::where('department_id',$user->department_id)->get();
            $path='hodLeaveMagement';
            return Datatables::of($model)
                ->addIndexColumn()
                ->addColumn('name', function(leave $leave){
                    return $leave->belongsToUser->name;
            })
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

        return view('LeaveMagmentByHOD.list');
    }


    public function edit($id)
    {   
        $leave =leave::find($id);
        
        return view("LeaveMagmentByHOD.edit",compact('leave'));
    }


    public function Update(Request $request, $id)
    {
        
        $obj =leave::find($id);

       

       
        if ($request->status != '')
            $obj->status = $request->status;
           
        $is_saved = $obj->save();
       
        if ($is_saved) {
            session()->flash("success_message", "Record updated succesfully");
            return redirect('hodLeaveMagement')->with('success','Leave updated successfully');
        }
    }

}
