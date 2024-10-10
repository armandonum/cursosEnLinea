<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Models\Role::class , 1)->create(['name' => 'Beginner']);
        factory(\App\Models\Role::class , 1)->create(['name' => 'Intermediate']);
        factory(\App\Models\Role::class , 1)->create(['name' => 'Advanced']);

        factory(\App\Models\User::class , 1)->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('curso'),
            'role_id' => \App\Models\Role::ADMIN
        ])
        ->each(function(\App\Models\User $user){
            factory(\App\Models\Student::class , 1)->create(['user_id' => $user->id]);
        });

        factory(\App\Models\User::class , 50)->create()
        ->each(function(\App\Models\Student $student){
            factory(\App\Models\Student::class , 1)->create(['user_id' => $student->id]);
        });
        factory(\App\Models\User::class , 10)->create()
        ->each(function(\App\Models\Student $student){
            factory(\App\Models\Student::class , 1)->create(['user_id' => $student->id]);  factory(\App\Models\User::class , 50)->create()
        ->each(function(\App\Models\Student $student){
            factory(\App\Models\Student::class , 1)->create(['user_id' => $student->id]);
            factory(\App\Models\Teacher::class , 1)->create(['user_id' => $student->id]);
        });
        });
        
    }
}
