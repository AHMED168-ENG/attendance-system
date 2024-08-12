<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'attendance';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'attended_at',
    ];
}
