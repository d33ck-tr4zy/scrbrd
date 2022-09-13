<?php

namespace Database\Factories;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberManpowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::create($this->faker->dateTimeInInterval('-2 months','+7 days'));
        return [
            'member_id' => Member::all()->random()->id,
            'year' => $date->year,
            'month' => $date->month,
            'week' => $date->weekOfMonth,
            'value' => $this->faker->numberBetween(20, 40),
        ];
    }
}
