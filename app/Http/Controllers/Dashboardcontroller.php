<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Dept;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        $data = Event::all();
        $dept = Dept::all();
        
        return view('index', ['data' => $data, 'dept'=>$dept]);
    }
}
