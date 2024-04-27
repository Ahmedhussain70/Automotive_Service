<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\productmodel::factory(1)->create(['branch' => 'Cairo']);
        \App\Models\productmodel::factory(1)->create(['category' => 'Alex']);
        \App\Models\productmodel::factory(1)->create(['category' => 'Sohag']);
    }
}
