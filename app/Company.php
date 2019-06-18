<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    private $table = 'company';
    private $primaryKey = 'company_id';

    protected $fillable = [
        'name'
    ];
}
