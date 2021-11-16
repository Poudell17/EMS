<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employ=Employee::all();
        return view('dashboard.employee.employees',compact('employ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$request->validate([


        'companies'=>'required',
        'email'=>'required',
        'firstname'=>'required',
        'lastname'=>'required',
        'phone'=>'required',
         
        ]);*/

        $store = Employee::create([
            'companies'=>$request->company,
            'email'=>$request->email,
            'firstname'=>$request->fname,
            'lastname'=>$request->lname,
            'phone'=>$request->phone,
            
        ]);
        return redirect()->route('Employee')
                        ->with('success','Added Successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data= Employee::findOrFail($id);
        
        return view('dashboard.employee.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dt= Employee::find($id);
        
        
        
        $dt->firstname = $request->fname;
        $dt->email = $request->email;
        $dt->phone = $request->phone;
        $dt->lastname = $request->lname;
        $dt->companies = $request->company;
        $dt->save();
    
        return redirect()->route('Employee')
                        ->with('success',' Updated Successfully !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Employee $id)
    {
         
           
          $id->delete();
    
        return redirect()->route('Employee')
                        ->with('success','Deleted Successfully');
   
    }
}
