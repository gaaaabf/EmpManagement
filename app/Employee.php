<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    private $table = 'employee';
    private $primaryKey = 'employee_id';

    protected $fillable = [
        'fk_user_id', 'fk_company_id', 'address'
    ];
}
