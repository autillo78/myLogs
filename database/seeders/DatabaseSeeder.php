<?php

namespace Database\Seeders;

use App\Models\Books\BookFormat;
use App\Models\Language;
use CreateBookFormatsTable;
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

        $this->call(LanguagesSeeder::class);
        $this->call(BookTypesSeeder::class);
        $this->call(BookFormartsSeeder::class);
    }
}
