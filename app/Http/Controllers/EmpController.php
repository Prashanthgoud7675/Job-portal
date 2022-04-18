<?php

namespace App\Http\Controllers;

use App\Models\Emp;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Emp::all();
       
        
 
        
        
        return view('emps.index' , ['data' => $data]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Emp $emp)
    {
        $request->validate([

            
            'Employee_Name' => 'required',
            'Position' => 'required',
            'Email' => 'required',
            'Mobile_Num' => 'required',
            'Team' => 'required',
            'Date' => 'required',
            'Status' => 'required',
            'Profile_url' => 'required',
            
        ]);

        $emp->update($request->all());

        return redirect()->route('emps.index')
            ->with('success', ' updated successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(Emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit(Emp $emp)
    {
        return view('emps.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emp $emp)
    {
       
        $request->validate([

            
            'Employee_Name' => 'required',
            'Position' => 'required',
            'Email' => 'required',
            'Mobile_Num' => 'required',
            'Team' => 'required',
            'Date' => 'required',
            'Status' => 'required',
            'Profile_url' => 'required',
            
        ]);

        $emp->update($request->all());

        return redirect()->route('emps.index')
            ->with('success', ' updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emp $emp)
    {
        $emp->delete();

        return redirect()->route('emps.index')
            ->with('success', 'Employee deleted successfully');
    }
}