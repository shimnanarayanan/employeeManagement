<?php

namespace App;

use App\Employee;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    protected $fillable = [
        'Name',
        'MobileNo',
        'Email',
        'Address',
     ];

}
