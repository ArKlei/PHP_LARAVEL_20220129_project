<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\ArticleCategory;

class ArticleImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleImage::factory()->count(20)->create();
    }
}
