<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function visitors()
    {
        return $this->hasMany(Visitor::class);
    }
}
