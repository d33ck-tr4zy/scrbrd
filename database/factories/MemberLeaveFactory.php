<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::all()->random()->id,
            'from' => $this->faker->dateTimeThisMonth,
            'days' => $this->faker->numberBetween(1, 5),
            'leave_type' => 'N/A',
            'reason' => 'Taking Leave',
        ];
    }
}
