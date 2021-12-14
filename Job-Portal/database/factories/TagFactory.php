<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nom =  ucwords($this->faker->word);

        return [
             'nom' => $nom,
             'slug' => Str::slug($nom)
        ];
    }
}
