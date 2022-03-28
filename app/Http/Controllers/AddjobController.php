<?php

namespace App\Http\Controllers;

use App\Models\Addjob;
use App\Models\job;
use Illuminate\Http\Request;
use App\Models\Contact;

class AddjobController extends Controller
{
    public function create()
    {
        return view('addjob.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        
        Addjob::create($input);
        return redirect('demo.index')->with('flash_message', 'Contact Addedd!');  
    }

    

}
