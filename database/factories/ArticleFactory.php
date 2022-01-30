<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ArticleCategory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Arcticle about '. $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(5),
            'author' => $this->faker->firstName().' '.$this->faker->lastName(),
            'article_category_id' => rand(1,5),
        ];
    }
}


