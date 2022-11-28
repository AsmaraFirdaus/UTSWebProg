<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id');
        for ($i = 1; $i < 10; $i++) {
            Book::create([
                'publisher_id' => rand(1, 4),
                'title' => strtoupper($faker->words(rand(1, 3), true)),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'synopsis' => $faker->paragraph(10),
                'image' => 'image/book/dummy.jpg'
            ]);
        }
    }
 }

