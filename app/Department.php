<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    private $table = 'department';
    private $primaryKey = 'department_id';

    protected $fillable = [
        'dept_name',
    ];
}
