<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'birth_date',
        'first_name',
        'last_name',
        'gender',
        'hire_date',
    ];

    function departments() {
    return $this->belongsToMany(
        'App\Department',
        'dept_emp',
        'emp_no',
        'dept_no'
        );
    }

    function dept_emp() {
    return $this->hasMany('App\Employee', 'emp_no');
    }

    function salaries() {
    return $this->hasMany('App\Salary', 'emp_no');
    }

    function dept_manager() {
    return $this->hasOne('App\Dept_Manager', 'emp_no');
    }
    }
