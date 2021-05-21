<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Shoe;

class ShoeTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();

        $attributes = [
        'marca' => 'nike',
        'modelo' => 'Lebron 2020',
        'talla' => 28,
        'precio' => 1700,
        'categoria' => 'Mans',
        'color' => 'White',
        ];

        $response = $this->post('/shoes',$attributes);

        $response->assertOk();

        $this->assertCount(1,Shoe::all());
    }
}
