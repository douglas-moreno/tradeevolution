<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            'name' => 'Fase 1',
        ]);
        Step::create([
            'name' => 'Fase 2',
        ]);
        Step::create([
            'name' => 'Fase 3',
        ]);
    }
}
