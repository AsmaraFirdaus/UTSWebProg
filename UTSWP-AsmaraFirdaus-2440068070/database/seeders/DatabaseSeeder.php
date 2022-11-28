<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(category::class);
        $this->call(publisher::class);
        $this->call(book::class);
        $this->call(book_category::class);
    }
    }
}
