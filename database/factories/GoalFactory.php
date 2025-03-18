<?php

namespace Database\Factories;

use App\Models\Step;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $step = Step::factory()->create();
        return [
            'step_id' => $step->id,
            'contract' => fake()->randomNumber(),
            'daily' => fake()->randomFloat(),
            'weekly' => fake()->randomFloat(),
            'monthly' => fake()->randomFloat(),
            'daily_stop' => fake()->randomFloat(),
            'weekly_stop' => fake()->randomFloat(),
            'monthly_stop' => fake()->randomFloat(),
        ];
    }
}
