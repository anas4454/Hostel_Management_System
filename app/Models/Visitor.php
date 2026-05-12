<?php

namespace App\Models;

use Database\Factories\VisitorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    /** @use HasFactory<VisitorFactory> */
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function warden()
    {
        return $this->belongsTo(User::class, 'warden_id');
    }


    protected $fillable = [
        'student_id',
        'warden_id',
        'visitor_name',
        'relation',
        'phone',
        'visit_date',
    ];
}
