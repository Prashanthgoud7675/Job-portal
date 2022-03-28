<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        

       $data = Applicant::all();
       $count = Applicant::count();

       
      
       
       
       
       return view('applicant' , ['data' => $data , 'count' => $count]);
      
       
    }
}
