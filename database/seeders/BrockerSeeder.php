<?php

namespace Database\Seeders;

use App\Models\Brocker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrockerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brocker::factory(8)->create();

    }
}
