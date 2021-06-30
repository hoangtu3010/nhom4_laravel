<?php

namespace Database\Factories;

use App\Models\Departments;
use App\Models\Lead;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = Departments::all("id");

        return [
            "name"=>$this->faker->name(),
            "birthday"=>$this->faker->dateTimeBetween("-50 years", "-20 years"),
            "phone"=>$this->faker->phoneNumber,
            "email"=>$this->faker->email,
            "address"=>$this->faker->address,
            "department_id"=>$array->random()
        ];
    }
}
