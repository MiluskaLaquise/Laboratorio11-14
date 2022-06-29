<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class articuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=> $this->faker->text,
            'estado'=>1,
            'categoria'=>$this->faker->text,
            'categoria_id'=> '62ab999b1245000032006862'
        ];
    }
}
