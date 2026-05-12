<?php

namespace App\Models;

use Database\Factories\ComplaintFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    /** @use HasFactory<ComplaintFactory> */
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
   'student_id' , 
   'subject',
   'status'
];
}
