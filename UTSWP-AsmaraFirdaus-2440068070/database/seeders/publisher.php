<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class publisher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id');
        for ($i = 1; $i < 5; $i++) {
            publisher::create([
                'name' => 'Publisher ' . $i,
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->safeEmail(),
                'image' => 'image/publisher/dummy.png'
            ]);
        }
    }
}
