<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::where('is_active' , true)
           ->with('tags')
           ->latest()
           ->get();


        return view( view: 'listings.index');
        return view( compact(var_name: 'listings'));
    }
}
