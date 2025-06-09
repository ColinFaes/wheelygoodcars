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
        $color = $this -> faker -> randomElement([
            'Red',
            'Blue',
            'Green',
            'Black',
            'White',
            'Gray',
            'Silver',
            'Yellow',
            'Orange'
        ]);

        return [
            'name' => fake()->name(),
            'color' => $color
        ];
    }
}
