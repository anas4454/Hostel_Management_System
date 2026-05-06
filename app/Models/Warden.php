<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warden extends Model
{
    /** @use HasFactory<\Database\Factories\WardenFactory> */
    use HasFactory;

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
