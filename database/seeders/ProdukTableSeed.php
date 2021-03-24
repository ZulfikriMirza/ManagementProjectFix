<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = new \App\Models\Jasa([
            'nama_jasa'=>'Jasa Desain Bangunan',
            'estimasi_harga'=>1500000,
          ]);
          $produk->save();
  
          $produk = new \App\Models\Jasa([
            'nama_jasa'=>'Jasa Desain Produk',
            'estimasi_harga'=>2500000,
          ]);
          $produk->save();
  
          $produk = new \App\Models\Jasa([
            'nama_jasa'=>'Jasa Desain Furniture',
            'estimasi_harga'=>600000,
          ]);
          $produk->save();
    }
}
