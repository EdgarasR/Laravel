<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserTypesSeeder::class,
            UserAccountsSeeder::class,
            CategoriesSeeder::class,
            DeliveriesSeeder::class,
            TransactionSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            PaymentSeeder::class,
            ProductsSeeder::class,
        ]);
    }
}
