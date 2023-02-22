<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['name','office_head','building'];


    function employees(){{
        return $this->belongsTo('App\Models\Employee', 'office_head', 'id');
    }}
}
