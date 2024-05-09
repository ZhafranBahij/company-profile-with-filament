<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::create([
            'title' => 'Who Are We?',
            'description' => 'Just a wanderer',
            'created_by_id' => 1,
            'updated_by_id' => 1,
        ]);
    }
}
