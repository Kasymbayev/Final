<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_Emp extends Model
{
    protected $table = 'dept_emp';
    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'dept_no',
        'from_date',
        'to_date',
    ];

    function dept_salary() {
    return $this->belongsToMany(
        'App\Salary',
        'App\Employee',
        'emp_no',
        'emp_no',
        'emp_no');
    }

    function salary() {
    return $this->hasMany(
        'App\Salary',
        'emp_no',
        'emp_no');
    }
    }
