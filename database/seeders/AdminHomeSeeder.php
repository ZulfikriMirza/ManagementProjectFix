<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminHome;

class AdminHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminHome::factory(3)->create();
    }
}
