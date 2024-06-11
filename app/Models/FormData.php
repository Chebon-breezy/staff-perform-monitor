<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'id',
        'address',
        'email',
        'phone',
        'dd',
        'mm',
        'yyyy',
        'location',
        'task',
        'ip',
        'country',
        'city',
        'latitude',
        'longitude',
    ];
}
