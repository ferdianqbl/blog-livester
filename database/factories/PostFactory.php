<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 6),
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'summary' => $this->faker->sentence(mt_rand(10, 30)),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($item) => "<p>$item</p>")->implode(""),
        ];
    }
}
