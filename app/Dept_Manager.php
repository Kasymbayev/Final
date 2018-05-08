<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_Manager extends Model
{
    protected $table = 'dept_manager';
    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'dept_no',
        'from_date',
        'to_date',
    ];
}
