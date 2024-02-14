<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place_of_work extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_type',
        'job_description',
        'company_name',
        'company_email',
        'company_address',
        'company_phone_no',
    ];
}
