<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Http\Requests\staffRegistrationRequest;
use Hash;
use DataTables;

class StaffController extends Controller
{

    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $model = User::where('role_id',2)->get();
           
            $path='staff';
            return Datatables::of($model)
                ->addIndexColumn()
                ->addColumn('name', '{{$name}}')

                ->addColumn('user_name', '{{$user_name}}')
                ->addColumn('email', '{{$email}}')
                ->addColumn('contact_no', '{{$contact_no}}')
               
                
                ->addColumn('edit_delete',function($model)use($path){
                    return view('Admin.partial.edit_delete',compact('model','path'));
                })
                ->rawColumns(['edit_delete'])
                ->make(true);   
        }

        return view('Staff.list');
    }

    public function edit($id)
    {  
        $user =User::find($id);
        $departments=Department::all();
        return view("Staff.edit",compact('user','departments'));
    }

   
    public function create(Request $request)
    { 
        $departments=Department::all();
        return view('Staff.create',compact('departments'));
        
    }

    public function save(staffRegistrationRequest $request)
    {//dd($request->all());
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
           return redirect('/staffMangement')->with('success','Staff registered succefully');
       
    }

     public function destroy($id)
    {
        $user = User::find($id);

        $response = $user->delete();

        if ($response == true) {
            //deleted successfully
            return redirect('staffMangement')->with('success','Record deleted successfully');            
        }else {
            // not able to delete
        }


    }
}
