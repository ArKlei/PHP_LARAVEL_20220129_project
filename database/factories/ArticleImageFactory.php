<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alt' => $this->faker->sentence(),
            'src' => 'localAddress',
            'width' => rand(50,300),
            'height' => rand(50,300),
            'class' => 'Image',
            'article_id' =>rand(1,10),
        ];
    }
}



