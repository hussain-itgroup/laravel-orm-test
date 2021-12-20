<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'title' => $this->faker->paragraph(),
            'descrption' => $this->faker->paragraph(),
            'user_id' => \App\Models\User::all()->random()->id,
        ];
    }

}
