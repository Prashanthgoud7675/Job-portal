<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Applicant extends Model
{
    use HasFactory;

    
    protected $table='applicants';

    protected $fillable = [
        'First_Name', 'Last_Name', 'Profile_url', 'Rating', 'status',
    ];
    

}
