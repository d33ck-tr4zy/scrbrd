<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'long_name' => $this->faker->name,
            'name' => $this->faker->firstName,
            'joined' => $this->faker->dateTimeBetween('-2 years', '-6 months'),
            'active' => $this->faker->boolean,
        ];
    }
}
