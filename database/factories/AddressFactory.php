<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cusId = \DB::table('customers')->pluck('id');
        return [
            //
            'address_customer'=> $this->faker->address(),
		    'city'=> $this->faker->city(),
		    'street'=> $this->faker->streetName(),
		    'house'=> $this->faker->bothify('?##'),
		    'floor'=> $this->faker->numberBetween(1,10),
		    'flat'=> $this->faker->numberBetween(1,10),
            'customer_id'=>$this->faker->randomElement($cusId),
        ];
    }
}
