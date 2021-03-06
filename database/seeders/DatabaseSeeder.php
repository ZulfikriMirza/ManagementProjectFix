<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(9)->create();
        $this->call(ProdukTableSeed::class);
        $this->call(AdminLinksSeeder::class);
        User::factory(1)->create();
    }
}
