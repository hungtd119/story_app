<?php

namespace Database\Factories;

use App\Models\Pages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Words>
 */
class WordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->numerify("########"),
            'wordIndex'=>$this->faker->numerify("##"),
            'startTime'=>$this->faker->numerify("####"),
            'endTime'=>$this->faker->numerify("####"),
            'page_id'=>Pages::all()->random()->id,
        ];
    }
}
