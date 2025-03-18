<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanAction>
 */
class PlanActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plan = Plan::factory()->create();
        
        return [
            'plan_id' => $plan->id,
            'date' => fake()->date(),
            'amount' => fake()->randomFloat(),
        ];
    }
}
