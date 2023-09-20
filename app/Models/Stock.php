<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = [
        'student_name',
        'student_degree',
        'student_email',
        'phone_number',
        'student_details',
        'date_of_birth',
        'present_address',
        'permanent_address',
        'emergency_number'
    ];
}
