<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Add this property to allow mass assignment
    protected $fillable = [
        'name',
        'address',
        'age',
        'salary',
        'email',
        'phone_number',
    ];
}
