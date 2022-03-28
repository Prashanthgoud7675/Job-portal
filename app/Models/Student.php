<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table='jobs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        
        'job_id',
        'JobTitle',
        'JobRole',
        'Description',
        'Positions',
        'Location',
        'AnnualSalary',
        'Dept_id',
        'Active',
        'CreatedDate',
        'CreatedBy',
        'ApplyLink',
        'CloseDate',
    ];
    
}
