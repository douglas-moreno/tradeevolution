<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
			StepSeeder::class,
            GoalSeeder::class,
        ]);

        User::create([
            'name' => 'Douglas Moreno',
            'email' => 'douglas_moreno@yahoo.com.br',
            'password' => bcrypt('dogaom08'),
        ]);
    }
}
