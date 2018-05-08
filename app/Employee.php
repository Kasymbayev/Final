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
}
