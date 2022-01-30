<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ArticleImage;
use App\Models\Article;
use App\Models\ArticleCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleCategorySeeder::class,
            ArticleSeeder::class,
            ArticleImageSeeder::class
        ]);
    }
}
