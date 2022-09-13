<?php

namespace Database\Factories;

use App\Models\DelayReason;
use App\Models\MemberDelay;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberDelayReasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_delay_id' => MemberDelay::all()->random()->id,
            'delay_reason_id' => $this->faker->unique(true)->randomElement(DelayReason::all()->pluck('id')->toArray()),
        ];
    }
}
