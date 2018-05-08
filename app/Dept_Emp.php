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
}
