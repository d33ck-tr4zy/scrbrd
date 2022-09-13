<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::create($this->faker->dateTimeThisYear);
        return [
            'year' =>$date->year,
            'month' => $date->month,
            'week' => $date->weekOfMonth,
            'days' => $this->faker->numberBetween(1,3),
            'name' => $this->faker->sentence(3, ),
        ];
    }
}
