<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'dept_no';
    public $incrementing = false;

    protected $fillable = [
        'dept_name'
    ];

    function employees() {

    return $this->belongsToMany(
    'App\Employee',
    'dept_emp',
    'dept_no',
    'emp_no'

    );
    }

function dept_emp() {

    return $this->hasMany('App\Dept_Emp', 'dept_no');

    }
}
