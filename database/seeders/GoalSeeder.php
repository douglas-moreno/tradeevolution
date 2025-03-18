<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goal::create([
            'step_id' => 1,
            'contract' => 2,
            'daily_target' => 250,
            'weekly_target' => 500,
            'monthly_target' => 1500,
            'daily_stop' => 250,
            'weekly_stop' => 400,
            'monthly_stop' => 1200
        ]);

        Goal::create([
            'step_id' => 1,
            'contract' => 4,
            'daily_target' => 400,
            'weekly_target' => 1000,
            'monthly_target' => 3000,
            'daily_stop' => 400,
            'weekly_stop' => 800,
            'monthly_stop' => 1600
        ]);

        Goal::create([
            'step_id' => 2,
            'contract' => 6,
            'daily_target' => 600,
            'weekly_target' => 1200,
            'monthly_target' => 3600,
            'daily_stop' => 600,
            'weekly_stop' => 1200,
            'monthly_stop' => 2400
        ]);

        Goal::create([
            'step_id' => 2,
            'contract' => 8,
            'daily_target' => 800,
            'weekly_target' => 1600,
            'monthly_target' => 4800,
            'daily_stop' => 800,
            'weekly_stop' => 1600,
            'monthly_stop' => 3200
        ]);

        Goal::create([
            'step_id' => 3,
            'contract' => 10,
            'daily_target' => 1000,
            'weekly_target' => 2000,
            'monthly_target' => 6000,
            'daily_stop' => 1000,
            'weekly_stop' => 2000,
            'monthly_stop' => 4000
        ]);

        Goal::create([
            'step_id' => 3,
            'contract' => 12,
            'daily_target' => 1200,
            'weekly_target' => 2500,
            'monthly_target' => 7500,
            'daily_stop' => 1200,
            'weekly_stop' => 2500,
            'monthly_stop' => 5000
        ]);
    }
}
