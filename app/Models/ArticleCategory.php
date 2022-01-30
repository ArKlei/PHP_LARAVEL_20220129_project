<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    public function articleCategoryArticles() {
        return $this->hasMany(Article::class, 'article_category_id', 'id');
    }

}
