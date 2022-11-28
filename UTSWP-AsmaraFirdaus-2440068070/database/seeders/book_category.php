<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class book_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<10; $i++){
            for($j = 0; $j < 3; $j++) try {
                book_category::create([
                    'book_id' => $i,
                    'category_id' => rand(1,5)
                ]);
            }
            catch (\Throwable $th) {
        }
    }
 }
}
