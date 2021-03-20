<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminListJasa;

class AdminListJasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminListJasa::factory(3)->create();
    }
}
