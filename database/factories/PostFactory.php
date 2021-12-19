<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->randomElement([[$this->faker->imageUrl(), $this->faker->imageUrl()]]),
            'desc' => $this->faker->text(),
            'tanggal' => $this->faker->dateTime()
        ];
    }
}
