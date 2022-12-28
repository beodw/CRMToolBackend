<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "firstname" => fake()->name(), 
            "lastname" => fake()->name(), 
            "email" => fake()->unique()->safeEmail(), 
            "address" => fake()->name(), 
            "phonenumber" => fake()->phoneNumber(), 
            // "possibleFutureBusinesss" => "active" ,
        ];
    }
}
