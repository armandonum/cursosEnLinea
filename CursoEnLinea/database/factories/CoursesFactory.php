<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $faker->name();
        $status->$faker->randomElement([\App\Models\Courses::PUBLISHED, \App\Models\Courses::PENDING, \App\Models\Courses::REJECTED]);
        return [
            'teacher_id' => \App\Models\Teachers::all()->random()->id,
            'category_id' => \App\Models\Categories::all()->random()->id,
            'level_id' => \App\Models\Levels::all()->random()->id,
            'name' => $name,
            'description' => $faker->sentence(),
            'slug' => \Str::slug($name, '-'),
            'picture' => \Faker\Provider\Image::image(storage_path() . '/app/public/courses', 600, 350, 'business', false),
        'previous_approved' => $status !== \App\Models\Courses::PUBLISHED ? false : true,
        'previous_rejected' => $status === \App\Models\Courses::REJECTED ? true : false,
            
        ];
    }
}
