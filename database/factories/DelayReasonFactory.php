<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DelayReasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reason' => $this->faker->sentence(2),
            'weight' => $this->faker->randomElement([10,20,30,40,50]),
        ];
    }
}
