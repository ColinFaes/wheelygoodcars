<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = $this -> faker -> randomElement([
            'Toyota',
            'Ford',
            'Honda',
            'Hyundai',
            'Nissan',
            'Mazda',
            'Chevrolet',
            'Volkswagen',
            'Lexus'
        ]);

        $model = $this -> faker -> randomElement([
            'Sedan',
            'SUV',
            'Hatchback',
            'Pickup',
            'Convertible',
            'Coupe',
            'Van',
            'Truck'
        ]);

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
            'user_id' => $this -> faker -> numberBetween(1, 150), // 'user_id' => 'factory:App\Models\User
            'license_plate' => $this -> faker -> unique() -> regexify('[A-Z]{2}-[0-9]{2}-[A-Z]{2}'), // 'license_plate' => 'factory:App\Models\Car'
            'make' => $brand,
            'model' => $model,
            'color' => $color,
            'production_year' => $this -> faker -> numberBetween(2000, 2022),
            'price' => $this -> faker -> numberBetween(10000, 100000),
            'mileage' => $this -> faker -> numberBetween(0, 200000),
            'seats' => $this -> faker -> numberBetween(2, 9),
            'doors' => $this -> faker -> numberBetween(2, 5),
            'weight' => $this -> faker -> numberBetween(1000, 5000),

        ];
    }
}
