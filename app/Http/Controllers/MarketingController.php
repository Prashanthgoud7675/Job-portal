<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Marketing;
use Validator;

class MarketingController extends Controller
{

    function index()
    {
        $data = ['marketing' => Marketing::all()];
        return view('demo', $data);
    }
    function save(Request $request)
    {
        /** Validate name field */
        $request->validate([

            'JobTitle' => 'required',
            'JobRole' => 'required',
            'Description' => 'required',
            'Positions' => 'required',
            'Location' => 'required',
            'AnnualSalary' => 'required',
            'Dept_id' => 'required',
            'Active' => 'required',
            'CreatedDate' => 'required',
            'CreatedBy' => 'required',
            'ApplyLink' => 'required',
            'CloseDate' => 'required',

        ]);



        $JobTitle = $request->JobTitle;
        $JobRole = $request->JobRole;
        $Description = $request->Description;
        $Positions = $request->Positions;
        $Location = $request->Location;
        $AnnualSalary = $request->AnnualSalary;
        $Dept_id = $request->Dept_id;
        $Active = $request->Active;
        $CreatedDate = $request->CreatedDate;
        $CreatedBy = $request->CreatedBy;
        $ApplyLink = $request->ApplyLink;
        $CloseDate = $request->CloseDate;

        $job_id = Helper::IDGenerator(new Marketing(), 'job_id', 2, 'MR22');
        /** Generate id */
        $q = new Marketing;
        $q->job_id = $job_id;
        $q->JobTitle = $JobTitle;
        $q->JobRole = $JobRole;
        $q->Description = $Description;
        $q->Positions = $Positions;
        $q->Location = $Location;
        $q->AnnualSalary = $AnnualSalary;
        $q->Dept_id = $Dept_id;
        $q->Active = $Active;
        $q->CreatedDate = $CreatedDate;
        $q->CreatedBy = $CreatedBy;
        $q->ApplyLink = $ApplyLink;
        $q->CloseDate = $CloseDate;
        $save =  $q->save();

        if ($save) {
            return back()->with('success', 'New Job has been added');
        } else {
            return back()->with('failed', 'Something went wrong');
        }
    }
}
