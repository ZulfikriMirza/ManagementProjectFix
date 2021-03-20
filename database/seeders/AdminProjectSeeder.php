<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminProject;

class AdminProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminProject::factory(4)->create();
    }
}
