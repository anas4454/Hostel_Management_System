<?php

namespace App\Models;

use Database\Factories\FeeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    /** @use HasFactory<FeeFactory> */
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    protected $fillable = [
        'student_id',
        'room_id',
        'amount',
        'month',
        'year',
        'status',
    ];
}
