<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address',
        'passport_no',
        'nationality',
        'pob',
        'dob',
        'gender',
        'marital_status',
        'objective',
        'linked_in',
    ];
}
