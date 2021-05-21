<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $shoe = new Shoe();

        $shoe->marca = 'nike';
        $shoe->modelo = 'Lebron 2020';
        $shoe->talla = 28;
        $shoe->precio = 1700;
        $shoe->categoria = 'Mans';
        $shoe->color = 'White';

        $shoe->save(); */

        shoe::factory(50)->create();
    }
}
