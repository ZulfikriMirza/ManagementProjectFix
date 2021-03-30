<?php

namespace Database\Seeders;

use App\Models\adminLinks;
use Illuminate\Database\Seeder;

class AdminLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'facebook',
                'link' => 'https://www.facebook.com/mahesa.a.negara',
                'class' => 'fab fa-facebook'
            ],
            [
                'name' => 'linkedin',
                'link' => 'https://www.facebook.com/mahesa.a.negara',
                'class' => 'fab fa-linkedin'
            ],
            [
                'name' => 'instagram',
                'link' => 'https://www.instagram.com/mahesanegara/',
                'class' => 'fab fa-instagram'
            ],
            [
                'name' => 'twitter',
                'link' => 'https://twitter.com/AJMBSF',
                'class' => 'fab fa-twitter'
            ],
        ];

        foreach ($categories as $cat) {
            adminLinks::create($cat);
        }
    }
}
