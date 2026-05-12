<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

   public function students()
{
    return $this->hasMany(Student::class);
}

public function approvals()
{
    return $this->hasMany(Approval::class);
}

public function fees()
{
    return $this->hasMany(Fee::class);
}
}
