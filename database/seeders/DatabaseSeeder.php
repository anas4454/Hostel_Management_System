<?php

namespace Database\Seeders;

use App\Models\Approval;
use App\Models\Complaint;
use App\Models\Fee;
use App\Models\Leave;
use App\Models\Room;
use App\Models\Student;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        User::factory(5)->create([
            'role' => 'warden',
        ]);

        User::factory(10)->create([
            'role' => 'parent',
        ]);

        User::factory(30)->create([
            'role' => 'student',
        ]);

        Room::factory(20)->create();
        Student::factory(30)->create();
        Approval::factory(20)->create();
        Fee::factory(30)->create();
        Complaint::factory(15)->create();
        Leave::factory(10)->create();
        Visitor::factory(10)->create();

    }
}
