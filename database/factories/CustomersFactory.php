<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->firstname(),          
	        'surname'=> $this->faker->lastname(),
	        'email'=> $this->faker->email(),
	        'phone'=> $this->faker->phoneNumber(),
	        'block'=> (bool)random_int(0,1),
        ];
    }
    
}
