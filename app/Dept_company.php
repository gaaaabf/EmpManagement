<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_company extends Model
{
    public $timestamps = false;
    private $table = 'dept_company';
    private $primaryKey = 'dept_company_id';

    protected $fillable = [
        'fk_department_id', 'fk_company_id'
    ];

    public function companies() {
    	return $this->belongsToMany('App\Company', 'fk_company_id', 'dept_company_id');
    }

    public function departments() {
    	return $this->belongsToMany('App\Department', 'fk_department_id', 'dept_company_id');
    }
}
