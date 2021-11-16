<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comps=Companie::all();
        return view('dashboard.Companie.company',compact('comps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Companie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        $request->validate([


        'companies'=>'required',
        'email'=>'required',
        'logo'=>'required',
        'website'=>'required',
        'phone'=>'required',
         
        ]);

        $store = Companie::create([
            'companies'=>$request->name,
            'email'=>$request->email,
            'logo'=>$request->pic,
            'website'=>$request->website,
            'phone'=>$request->phone,
            
        ]);
        return redirect()->route('Companies')
                        ->with('success','Added Successfully.');
    


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(Companie $companie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data= Companie::findOrFail($id);
        
        return view('dashboard.Companie.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $dt= Companie::find($id);
        
        
        
        $dt->companies = $request->name;
        $dt->email = $request->email;
        $dt->phone = $request->phone;
        $dt->logo = $request->logo;
        $dt->website = $request->website;
        $dt->save();
    
        return redirect()->route('Companies')
                        ->with('success',' Updated Successfully !!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companie $id)
    {
         $id->delete();
    
        return redirect()->route('Companies')
                        ->with('success','Deleted Successfully');
   
    }
}
