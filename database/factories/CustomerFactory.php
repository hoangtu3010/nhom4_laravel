<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = Lead::all("id");

        return [
            "name"=>$this->faker->name(),
            "birthday"=>$this->faker->dateTimeBetween("-50 years", "-20 years"),
            "phone"=>$this->faker->phoneNumber,
            "email"=>$this->faker->email,
            "address"=>$this->faker->address,
            "lead_id"=>$array->random()
        ];
    }
}
