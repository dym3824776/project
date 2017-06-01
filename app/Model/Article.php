<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'ym_article';

    public $timestamps = false;

    protected $fillable = ['title'];
}
