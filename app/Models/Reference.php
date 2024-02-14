<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_name',
        'ref_no',
        'ref_email',
        'address',
        'ref_profession',
    ];
}
