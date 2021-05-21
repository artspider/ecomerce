<?php

namespace Database\Factories;

use App\Models\Shoe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ShoeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shoe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Nike','Adidas','Reebok','Puma','Under Armor']),
            'modelo' => $this->faker->word,
            'talla' => $this->faker->numberBetween($min = 21, $max = 31),
            'precio' => $this->faker->randomNumber(4),
            'categoria' => $this->faker->word,
            'color' => $this->faker->colorName,
        ];
    }
}
