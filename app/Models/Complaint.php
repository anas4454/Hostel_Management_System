<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    /** @use HasFactory<\Database\Factories\ComplaintFactory> */
    use HasFactory;

  public function student()
{
    return $this->belongsTo(User::class, 'student_id');
}
    public function warden()
    {
        return $this->belongsTo(Warden::class);
    }
}
