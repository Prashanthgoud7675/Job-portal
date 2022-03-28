<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class TagController extends Controller
{
    public function index(){

        $data = Department::all();
       
       $count = Department::count();

  
  
  return view('demo' , ['data' => $data, 'count' => $count]);
    }
}
