<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';
    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'salary',
        'form_date',
        'to_date',
    ];
}
