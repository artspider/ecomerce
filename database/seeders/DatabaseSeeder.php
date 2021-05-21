<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shoe;

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
            ShoeSeeder::class,
        ]);
        /* Shoe::create([
            'marca' => 'Nike',
            'modelo' => 'Lebron 2020',
            'talla' => 28,
            'precio' => 1800,
            'categoria' => 'Mens',
            'color' => 'White',
        ]); */
    }
}
