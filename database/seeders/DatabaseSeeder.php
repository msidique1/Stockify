<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $this->call([
                CategoriesSeeder::class,
                UserSeeder::class,
                SupplierSeeder::class,
                ProductsSeeder::class,
                ProductAttributeSeeder::class
            ]);
        });
    }
}
