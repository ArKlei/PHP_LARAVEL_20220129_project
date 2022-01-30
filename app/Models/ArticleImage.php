<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;

    public function articleImageArticle () {
        return $this->belongsTo(Article::class, 'article_id','id');
    }

}
