<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Adventure',
            'Crime',
            'Comedy',
            'Fantasy',
            'Horror',
        ];
        foreach ($categories as $c) {
            category::create(['name' => $c]);
        }
    }
    
}
