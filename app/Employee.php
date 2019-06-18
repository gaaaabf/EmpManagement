<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'fk_user_id', 'fk_company_id', 'address'
    ];

    public function user() {
    	return $this->belongsTo('App\User', 'fk_user_id');
    }
}
