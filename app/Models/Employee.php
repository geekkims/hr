<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'employee_id',
        'company',
        'holidays',
        'leaves',
        'clients',
        'projects',
        'tasks',
        'assets',
        'timing_sheets',
    ];
}