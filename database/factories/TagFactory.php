<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Frontend', 'Backend', 'Laravel', 'Vue.js', 'Api', 'JavaScript', 'Php', 'Tailwindcss', 'Bootstrap',  'React', 'Saas', 'Git & GitHub', 'Nuxt', 'Livewire', 'Alpine.js', 'Docker'])
        ];
    }
}
