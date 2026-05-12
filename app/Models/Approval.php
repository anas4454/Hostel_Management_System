<?php

namespace App\Models;

use Database\Factories\ApprovalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    /** @use HasFactory<ApprovalFactory> */
    use HasFactory;

   public function student()
{
    return $this->belongsTo(User::class, 'student_id');
}

public function room()
{
    return $this->belongsTo(Room::class);
}

public function warden()
{
    return $this->belongsTo(User::class, 'warden_id');
}


protected $fillable = [
   'student_id' ,
   'room_id',
   'status'
];

}
