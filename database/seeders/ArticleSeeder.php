<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\ArticleCategory;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(20)->create();
    }
}
