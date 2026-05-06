<?php

namespace App\Models;

use Database\Factories\LeaveFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    /** @use HasFactory<LeaveFactory> */
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function warden()
    {
        return $this->belongsTo(Warden::class);
    }

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
    ];
}
