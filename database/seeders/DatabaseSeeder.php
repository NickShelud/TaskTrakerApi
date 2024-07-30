<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Task;
use App\Models\Card;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Desk::factory()
            ->count(5)
            ->create();

        DeskList::factory()
            ->count(5)
            ->create();

        Task::factory()
            ->count(5)
            ->create();

        Card::factory()
            ->count(5)
            ->create();
    }
}
