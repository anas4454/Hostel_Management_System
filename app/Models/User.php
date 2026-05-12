<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function studentProfile()
    {
        return $this->hasOne(Student::class);
    }

    public function approvals()
    {
        return $this->hasMany(Approval::class, 'student_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'student_id');
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class, 'student_id');
    }

    public function fees()
    {
        return $this->hasMany(Fee::class, 'student_id');
    }

    public function visitors()
    {
        return $this->hasMany(Visitor::class, 'student_id');
    }
    public function wardenVisitors()
    {
        return $this->hasMany(Visitor::class, 'warden_id');
    }

    public function children()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }


    protected $fillable = [
    'name',
    'email',
    'password',
    'role',
];
}
