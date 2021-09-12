<?php

namespace Database\Factories;

use App\Models\Clothe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClotheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clothe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name'=>$this->faker->word,
            'description'=>$this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'price'=>$this->faker->numberBetween($min = 10, $max = 250),
            'category_id'=>$this->faker->numberBetween($min = 1, $max = 6)
        ];
    }
}
