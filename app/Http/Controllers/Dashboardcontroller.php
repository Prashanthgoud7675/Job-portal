<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        $data = Event::all();
        
        return view('dashboard', ['data' => $data]);
    }
}
