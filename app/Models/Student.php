<?php

namespace App\Models;

use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<StudentFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    protected $fillable = [
    'user_id',
    'parent_id',
    'phone',
    'roll_number',
];
}
