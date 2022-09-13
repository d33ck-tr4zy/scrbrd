<?php

namespace Database\Factories;

use App\Models\ScoreType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreWeightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::create($this->faker->unique()->dateTimeThisYear());
        return [
            'score_type_id' => ScoreType::all()->random()->id,
            'year' => $date->year,
            'month'=> $date->month,
            'weight' => $this->faker->randomElement([30,40,50]),
        ];
    }
}
