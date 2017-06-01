<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleContent extends Model
{
    protected $table = 'ym_article_content';

    public $timestamps = false;

    protected $fillable = ['article_id','content'];
}
